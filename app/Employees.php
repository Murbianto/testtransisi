<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    //
    use SoftDeletes;
    protected $primaryKey = 'employees_id';

    protected $dates = ['deleted_at'];
}
