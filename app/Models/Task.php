<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'project_id', 'developer_id'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'task_tag');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
}
