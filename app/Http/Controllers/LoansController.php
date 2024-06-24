<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Fund;
use App\Models\Loan;

class LoansController extends Controller
{
    public function create()
    {
        $users = Users::all();
        $funds = Fund::all();
        return view('loanApplication', compact('users', 'funds'));
    }

    public function store(Request $request)
    {
#        $request->validate([
#            'userID' => 'required|exists:users,ID',
#            'fundID' => 'required|exists:fund,ID',
#            'loanAmount' => 'required|integer',
#            'paymentAmount' => 'required|integer',
#            'interest' => 'required|integer',
#            'installment' => 'required|integer',
#            'installmentCount' => 'required|integer',
#            'startDate' => 'required|date',
#            'info' => 'required|string|max:255',
#        ]);

        #Loan::create($request->all());
        $loan = new Loan();
        $loan->userID = $request->input('userID');
        $loan->fundID = $request->input('fundID');
        $loan->loan_amount = $request->input('loan_amount');
        $loan->installment_count = $request->input('installment_count');
        $loan->info = $request->input('info');

        $loan->payment_amount = 0;
        $loan->interest = 5;
        $loan->installment = 0;
        $loan->start_date = now();

        $loan->save();

        return redirect()->route('landing.page')->with('success', 'loan application submitted');
    }
}
