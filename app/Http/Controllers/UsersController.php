<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Fund;
use App\Models\User_Fund ;

class UsersController extends Controller
{
    public function create()
    {
        $funds = Fund::all();
        return view('createUser', compact('funds'));
    }

    public function createUserInFund($id)
    {
        $fund = Fund::find($id);
        return view('createUser', compact('fund'));
    }



    public function store(Request $request)
    {
#        $request->validate([
#            'name' => 'required|string|max:255',
#            'nationID' => 'required|integer',
#            'phone_number' => 'required|integer',
#            'email' => 'required|string|email|max:255',
#            'address' => 'required|string|max:255',
#            'fund_id' => 'required|exists:fund,id',
#        ]);


        $user = Users::create($request->only(['name', 'nationID', 'phone_number', 'email', 'address']));
        $user->funds()->attach($request->fund_id, [
            'join_date' => now(),
            'Balance' => 0
        ]);


        return redirect()->route('landing.page')->with('success', 'User created and added to the fund successfully!');
    }
}
