<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'date_of_birth',
        'email',
        'telephone',
        'in_therapy',
        'diagnosis',
        'comments',
        'therapists_id',
    ];



    use HasFactory;

    public function user(){

        return $this->belongsTo('App\User');

    }
}
