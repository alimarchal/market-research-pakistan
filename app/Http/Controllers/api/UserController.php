<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Mail\forgotPassword;
use App\Mail\NewUserRegistered;
use App\Mail\OTPSend;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validator = null;
        /* 0 => Individual */
        if ($request->type == 0){
            $validator = Validator::make($request->all(), [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'country' => ['required'],
                'type' => ['required'],
                'terms' => ['required'],
            ]);
        }
        /* 1 => Company */
        elseif($request->type == 1){
            $validator = Validator::make($request->all(), [
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'country' => ['required'],
                'contact_name' => ['required'],
                'type' => ['required'],
                'terms' => ['required'],
            ]);
        }

        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $otp = mt_rand(1000, 9999);

        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
//            'gender' => $request['gender'],
            'country' => $request['country'],
            'type' => $request['type'],
            'company_name' => $request['company_name'],
            'contact_name' => $request['contact_name'],
            'password' => Hash::make('market1234'),
            'otp' => $otp,
            /* For keeping a record whether user Registered from Mobile or Web. 1 => mobile & 0 (default) => Web */
            'mobile_user' => 1,
        ]);

        Mail::to($user->email)->send(new OTPSend($user));
        Mail::to('support@marketresearchpakistan.com')->send(new NewUserRegistered($user));

        return response([
            'token' => $user->createToken($request->email)->plainTextToken,
            'user' => $user,
        ], 200);


    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password) || $user->status == 0) {

            if (!$user || !Hash::check($request->password, $user->password))
            {
                return response([
                    'error' => ['The provided credentials are incorrect.'],
                ], 404);
            }
        }

        return response([
            'token' => $user->createToken($request->email)->plainTextToken,
            'user' => $user,
        ], 200);

    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response(['message' => 'Logged out'], 200);
    }

    public function verify_otp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'otp' => ['required', 'string', 'max:255'],
        ],[
            'otp.required' => 'OTP is required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()],422);
        }

        $user = User::findOrFail(auth()->user()->id);

        if ($user->otp != $request->otp)
        {
            return response([
                'error' => ['Incorrect OTP entered.'],
            ], 200);
        }
        $user->email_verified_at = Carbon::now()->toDateTimeString();
        $user->save();

        return response([
            'user' => 'verified'
        ], 200);
    }

    public function resend_otp(): JsonResponse
    {
        $otp = mt_rand(1000, 9999);
        $user = User::firstWhere('id', auth()->id());
        if (!$user)
        {
            return response()->json(['error' => 'Record Not Found'],404);
        }
        $user->update(['otp' => $otp]);
        Mail::to($user->email)->send(new OTPSend($user));

        return response()->json(['success' => 'OTP resent to your registered email.']);
    }

    public function forgot_password(Request $request): JsonResponse
    {
        $user = User::firstWhere('email', $request->email);
        if (!$user)
        {
            return response()->json(['error' => 'Record Not Found'],404);
        }
        $password = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 9);
        $user->update(['password' => Hash::make($password)]);
        Mail::to($user->email)->send(new forgotPassword($password));

        return response()->json(['success' => 'New password is sent to your registered email.']);
    }

    public function index()
    {
        $user = User::where('id', auth()->id())->first(['email']);

        if (!isset($user)){
            return response()->json(['Error' => 'Not Found'], 404);
        }

        return response()->json(['User' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (empty($user)) {
            return response()->json(['message' => 'Not Found!'], 404);
        }

        $validator = Validator::make($request->all(),[
            'password' => ['required_with:current_password', 'confirmed',],
            'current_password' => ['required_with:password',],
        ],[
            'password.required_with' => 'New password field is required when current password field is entered',
            'current_password.required_with' => 'Current password field is required when new password field is entered',
        ]);

        if ($validator->fails())
        {
            return response()->json(['Error' => $validator->errors()]);
        }

        if ($request->password != ''){
            $validator = Validator::make($request->all(),[
                'password' => ['min:8'],
            ]);
            if ($validator->fails())
            {
                return response()->json(['Error' => $validator->errors()]);
            }
        }
        if ($request->current_password != ''){
            if (!(Hash::check($request->get('current_password'), Auth::user()->getAuthPassword())))
            {
                return response()->json(['Error' => 'Current password not matched']);
            }
        }
        if ($request->password != ''){
            if (strcmp($request->get('current_password'),$request->get('password'))==0)
            {
                return response()->json(['Error' => 'Your current password cannot be same to new password']);
            }
        }

        if ($request->password != ''){
            User::where('id', auth()->id())->update(['password' => Hash::make($request->password)]);
            return response()->json(['Success' => 'Password updated successfully']);
        }
    }
}
