<?php

namespace redosociolla;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
	protected $table = 'user';

	protected $fillable = ['username', 'password', 'level'];
}
