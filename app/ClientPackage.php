<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientPackage extends Model
{
    use SoftDeletes;
    protected $table = 'client_package';

    protected $fillable = ['start_date','end_date'];
}
