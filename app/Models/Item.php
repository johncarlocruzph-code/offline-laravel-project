<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public const VALID_STATUSES = ['lost', 'found', 'claimed'];

    protected $fillable = ['name', 'description', 'location', 'status'];
}