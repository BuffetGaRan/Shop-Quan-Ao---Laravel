<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = ['email', 'password'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
];

    public static function getListUser($keyword = null, $paginate = 10){
        $list = User::select('id', 'fullname', 'username');
        if(!empty($keyword)){
            $list->where('username', 'like', '%'.$keyword.'%');
        }
        $list = $list->paginate($paginate);
        return $list;
    }

}
