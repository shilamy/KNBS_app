<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'department';
    protected $fillable = [
    'directory_id',
    'name',
    'extension',
    'status',
    ];

    public function directory(){
        return $this->belongsTo(Directory::class,'directory_id','id');

    }




}
