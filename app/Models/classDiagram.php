<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\project;
use App\Http\Controllers\Apicontroller;
class classDiagram extends Model
{
    
    protected $table="data1";
    protected $filltable=['StudFname','StudMname','StudLname','Email','CGPA','EduStartYear','EduFinishYear','StuProfObj'];
}
