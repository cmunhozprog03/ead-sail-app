<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = ['name'];


    // One =< Many
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    // One => Many reverse
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
