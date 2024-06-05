<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'function', 'isManager'];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'developer_id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'developer_id');
    }
}
