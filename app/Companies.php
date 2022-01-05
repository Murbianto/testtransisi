<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Companies extends Model
{
    //
    use SoftDeletes;
    protected $primaryKey = 'companies_id';
   
 
    	//protected $table = "guru";
   	protected $dates = ['deleted_at'];
}
