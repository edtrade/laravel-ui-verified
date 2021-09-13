<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Account\PasswordStoreRequest;
use App\Actions\Account\PasswordChange;

class PasswordController extends Controller
{
    //
    public function index()
    {
        return view('account.password.index');
    }

    public function store(PasswordStoreRequest $request)
    {
        //@params Authenticatable $user, string $password
        new PasswordChange($request->user(), $request->password);
        
        return redirect()->route('account.index')->with('success',__('You password was succesfuly changed.'));
    }
}
