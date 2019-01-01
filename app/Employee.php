<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        'company_id', 'first_name', 'last_name', 'email', 'telephone'
    ];

    public function company(){
        return $this->belongsTo('App\Company');
    }
}
