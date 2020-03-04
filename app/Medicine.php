<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\App\Personal;
use\App\User;

class Medicine extends Model
{
    protected $table= 'medicine';

    public function employee()
    {
        return $this->belongsTo('App\Personal','employee_id');
    }
}
