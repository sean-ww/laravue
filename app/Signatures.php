<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signatures extends Model
{
    /**
     * @var array $fillable Fields to be mass-assigned.
     */
    protected $fillable = ['name', 'email', 'body', 'flagged_at'];
}
