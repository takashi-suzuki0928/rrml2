<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_interview extends Model
{
    use HasFactory;
    protected $table = 't_interview';
    protected $guarded = ['id', 'created_at','updated_at'];











}
