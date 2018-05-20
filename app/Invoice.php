<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 5/20/18
 * Time: 1:13 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['description', 'denomination', 'file_path', 'status', ];
}