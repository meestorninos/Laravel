<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    //

    public $timestamp = false;
    protected $table= 'tbl_employee';
    protected $fillable= ['name', 'number', 'address'];
                        
}
