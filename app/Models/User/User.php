<?php

namespace App\Models\User;

use App\Traits\Admin\Permissions\HasPermissionsTrait;
use App\Traits\Token\HasConfirmationTokensTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasConfirmationTokensTrait,
        HasPermissionsTrait,
        Notifiable,
        SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'phone',
        'active',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hasActivated()
    {
        return $this->active;
    }

    public function hasNotActivated()
    {
        return !$this->hasActivated();
    }
}

