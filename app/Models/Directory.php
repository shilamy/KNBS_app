<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Directory extends Model
{
    use HasFactory;
    protected $table = 'directories';

    protected $fillable = [

        'name',
        'department',
        'extension',
        'floor',
        'status',


    ];

    public function department()
    {

        return $this->hasMany(Department::class, 'directory_id','id');

    }
}
