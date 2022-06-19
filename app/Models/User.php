<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',

        'nid',
        'join_date',
        'mobile',

'dob',
'class',
'group',
'session',
'status',
'blood_group',
'gender',
'student_id',
        'f_name',
        'f_mobile_num',
'f_profession',
'f_income',
'm_name',
'm_mobile_num',
'm_profession',
'g_nid',
'religion',
'birth_reg_num',
'present_address',
'present_district',
'present_thana',
'present_poffice',
'present_pcode',
'permanent_address',
'permanent_district',
'permanent_thana',
'permanent_poffice',
'permanent_pcode',
        'email',
        'password',
       

        'image',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
