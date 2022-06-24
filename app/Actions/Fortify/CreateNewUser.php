<?php

namespace App\Actions\Fortify;

use App\Mail\NewUserRegistered;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Auth\Notifications\VerifyEmail;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        /* 0 => Individual */
        if ($input['type'] == 0){
            Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                // 'phone' => ['required', 'string', 'max:255'],
                'country' => ['required'],
                'type' => ['required'],
                'terms' => ['required'],
                // 'password' => $this->passwordRules(),
            ])->validate();
        }
        /* 1 => Company */
        elseif($input['type'] == 1){
            Validator::make($input, [
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
            ])->validate();
        }

        // $password = mt_rand(1000, 1000);


        /* 0 => Individual */
//        if ($input['type'] == 0){
//            $validator = Validator::make($input, [
//                'first_name' => ['required', 'string', 'max:255'],
//                'last_name' => ['required', 'string', 'max:255'],
//                'email' => [
//                    'required',
//                    'string',
//                    'email',
//                    'max:255',
//                    Rule::unique(User::class),
//                ],
//                // 'phone' => ['required', 'string', 'max:255'],
//                'country' => ['required'],
//                'type' => ['required'],
//                'terms' => ['required'],
//                // 'password' => $this->passwordRules(),
//            ]);
//
//            if ($validator->fails()){
//                return redirect()->back()->withErrors();
//            }
//        }

        $user = User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
//            'gender' => $input['gender'],
            'country' => $input['country'],
            'type' => $input['type'],
            'company_name' => $input['company_name'],
            'contact_name' => $input['contact_name'],
            'password' => Hash::make('market1234'),
        ]);
        Mail::to('support@marketresearchpakistan.com')->send(new NewUserRegistered($user));

        return $user;
    }
}
