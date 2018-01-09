<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'user_id'];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
