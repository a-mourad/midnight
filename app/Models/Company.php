<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'team_size',
        'description',
        'logo',
        'creation_date',
        'country_id',
        'city_id',

    ];
    public $timestamps = ['updated_at', 'created_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function city(){
       return  $this->belongsTo(City::class);
    }

    public function services(){
        return $this->hasMany(Service::class);
    }
    
    public function country(){
        return $this->belongsTo(Country::class);
    }


}
