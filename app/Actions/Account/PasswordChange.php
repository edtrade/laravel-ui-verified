<?php

namespace App\Actions\Account;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Mail\Account\PasswordChangedMail;
use Illuminate\Support\Facades\Mail;

class PasswordChange
{
	public function __construct(Authenticatable $user, $password)
	{
		//
		$user->update(['password' => bcrypt($password)]);
        //
        Mail::to($user)->send(new PasswordChangedMail());
	}
}