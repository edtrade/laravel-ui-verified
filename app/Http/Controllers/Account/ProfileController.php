<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Account\ProfileStoreRequest;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('account.profile.index');
    }

    //
    public function store(ProfileStoreRequest $request)
    {
        $request->user()->update($request->only('name','email'));

        return back()->with('success',__('Your profile was succesfuly updated.'));
    }
}
