<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    //
    use SoftDeletes;
    protected $table = 'employees';
    protected $primaryKey = 'employees_id';
    protected $fillable = ['companies_id','employees_name','employees_email'];
    protected $dates = ['deleted_at'];
}
