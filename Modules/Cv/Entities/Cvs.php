<?php

namespace Modules\Cv\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Cv\Entities\Keyword;
use Modules\Cv\Entities\Jobs;

class Cvs extends Model
{
    protected $table = 'cvs';
    protected $fillable = [
        'name',
        'sex',
        'phone',
        'email',
        'date',
        'address',
        'education',
        'school',
        'language',
        'certificate',
        'location',
        'career',
        'skills',
        'currentsalary',
        'desiredsalary',
        'image',
        'feight',
        'weight',
        'maritalstatus',
        'hometown',
        'checkock',
    ];

    public function job()
    {
        return $this->belongsTo(Jobs::class);
    }

    public function setCheckockAttribute($value)
    {
        $this->attributes['checkock'] = json_encode($value);
    }

    public function getCheckockAttribute($value)
    {
        return json_decode($value);
    }

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'cv_keywords');
    }
}
