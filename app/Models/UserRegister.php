<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;


class UserRegister extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $table ="user_register";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'surname',
        'sa_id',
        'mobile',
        'email',
        'birth_date',
        'languages',
        'interests',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
