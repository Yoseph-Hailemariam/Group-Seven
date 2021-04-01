<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\classDiagram2;
use App\Http\Controllers\Apicontroller2;
class classDiagram2 extends Model
{
    use HasFactory;
    protected $table = "data2";
    protected $filltable = ['StuProfileID','Email','EmailStatus'];
}
