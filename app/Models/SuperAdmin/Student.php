<?php

namespace App\Models\SuperAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name','dob','class','admission_class','group','addmission_year','session','f_name','f_mobile_num',
    'f_profession','f_income','m_name','m_mobile_num','m_profession','g_nid','gender','religion','birth_reg_num','blood_group',
    'present_address','present_district','present_thana','present_poffice','present_pcode','permanent_address','permanent_district','permanent_thana','permanent_poffice','permanent_pcode','status',];

}
