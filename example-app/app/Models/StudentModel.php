<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    protected $table = 'students';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = true;
}
