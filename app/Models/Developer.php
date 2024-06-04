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
        return $this->belongsToMany(Task::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
