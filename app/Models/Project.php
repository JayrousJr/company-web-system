<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    protected $casts = [
        'projectImage' => 'array',
    ];
    protected $fillable = ['category', 'clientName', 'projectClass', 'projectDate', 'projectImage', 'projectURL', 'projectStatus', 'projectDetails', 'projectImage', 'approved', 'requestID', 'clientID'];
}
