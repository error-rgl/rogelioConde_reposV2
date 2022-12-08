<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
 *
 * @property $pk_patient
 * @property $first_name
 * @property $last_name
 * @property $birth_date
 * @property $phone_number
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Order[] $orders
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Patient extends Model
{
    
    static $rules = [
		// 'pk_patient' => 'required',
		'first_name' => 'required',
		'last_name' => 'required',
		'birth_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $primaryKey = 'pk_patient';
    protected $fillable = ['first_name','last_name','birth_date','phone_number','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'fk_patient', 'pk_patient');
    }
    

}
