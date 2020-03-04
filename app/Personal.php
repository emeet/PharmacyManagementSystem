<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Personal extends Model
{
    protected $table = 'employee';
    // protected $primaryKey = 'id';
    // protected $foreignKey = 'user_id';
    // protected $fillable=['address','phone_number', 'gender', 'position'];
    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function medicine()
    {
        return $this->hasOne('App\Medicine');
    }
}
