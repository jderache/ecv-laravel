<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'developer_id', 'client_id'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
}
