<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Nette\Utils\Random;

/**
 * Class Order
 *
 * @property $pk_order
 * @property $fk_doctor
 * @property $fk_patient
 * @property $fk_user
 * @property $code
 * @property $is_active
 * @property $created_at
 * @property $updated_at
 *
 * @property Doctor $doctor
 * @property OrderDetail[] $orderDetails
 * @property Patient $patient
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{
    
    static $rules = [
		// 'pk_order' => 'required',
		'fk_doctor' => 'required',
		'fk_patient' => 'required',
		'fk_user' => 'required',
		// 'code' => 'required',
		'is_active' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $primaryKey = 'pk_order';
  
    protected $fillable = ['fk_doctor','fk_patient','fk_user','code','is_active'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor', 'pk_doctor', 'fk_doctor');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderDetails()
    {
        return $this->hasMany('App\Models\OrderDetail', 'fk_order', 'pk_order');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient()
    {
        return $this->hasOne('App\Models\Patient', 'pk_patient', 'fk_patient');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'fk_user');
    }
    

}
