<?php

namespace Modules\Auth\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class VerifyToken extends Model // Change class name to VerifyToken
{
    protected $table = 'verifytokens'; // Corrected table name

    protected $fillable = ['token', 'email', 'is_activated'];
}