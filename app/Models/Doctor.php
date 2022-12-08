<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 *
 * @property $pk_doctor
 * @property $fk_medical_center
 * @property $first_name
 * @property $last_name
 * @property $code
 * @property $created_at
 * @property $updated_at
 *
 * @property Order[] $orders
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Doctor extends Model
{
    
    static $rules = [
		// 'pk_doctor' => 'required',
		'fk_medical_center' => 'required',
		'first_name' => 'required',
		'last_name' => 'required',
		'code' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $primaryKey = 'pk_doctor';
    protected $fillable = ['fk_medical_center','first_name','last_name','code'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'fk_doctor', 'pk_doctor');
    }
    

}
