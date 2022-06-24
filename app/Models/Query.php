<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Query extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'provinces', 'cities', 'industry', 'type', 'details', 'mobile_query', 'status'];

    protected function provinces(): Attribute
    {
        return new Attribute(
            get: fn($value) => Province::whereIn('id', explode(',', $value))->get(['name']),
        );
    }

    protected function cities(): Attribute
    {
        return new Attribute(
            get: fn($value) => City::whereIn('id', explode(',', $value))->get(['name']),
        );
    }

    protected function mobileQuery(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value == 0 ? 'Web' : 'Mobile',
        );
    }

//    protected function status(): Attribute
//    {
//        return new Attribute(
////            get: fn($value) => $value == 0 ? 'Pending' : 'Closed',
//            get: fn($value) => DB::table('statuses')->where('id', $value)->first(),
//        );
//    }

    /*public function getStatusAttribute($value): string
    {
        if ($value == 0)
        {
            return ucfirst('Pending');
        }
        if ($value == 1)
        {
            return ucfirst('In Review');
        }
        if ($value == 2)
        {
            return ucfirst('Quoted');
        }
        if ($value == 3)
        {
            return ucfirst('Completed');
        }
        if ($value == 4)
        {
            return ucfirst('Closed');
        }

        return ucfirst('Closed');
    }*/
}
