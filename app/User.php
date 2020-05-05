<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Role;
class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";
    //This set the id rol default user in case of change in database but laravel/php doesn't allows it
    //  Role::select("id")->where('Rol', "user")->first()->id
    protected $attributes = [
        'rol_id' =>"2"
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','rol_id' //En un principio no iba dejar poner el rol id  pero como solol dejamos que lo ponga un admin no hay problema
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];

    public function property(){
        return $this->hasMany("App\Property");
    }
    public function rol(){
        return $this->belongsTo("App\Role");
    }

    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Non authorized action.');
    }
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
    public function hasRole($role)
    {
        if ($this->rol()->where('rol', $role)->first()) {
            return true;
        }
        return false;
    }

}
