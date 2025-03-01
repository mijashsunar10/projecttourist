<?php

namespace App\Http\Controllers;

use App\Models\BankDetail;
use App\Models\Note;
use App\Models\Payimage;
use Illuminate\Http\Request;



class BankDetailController extends Controller
{
    public function index()
    {
        
        $images = Payimage::latest()->limit(4)->get();
        $notes = Note::latest()->get();
        $bankDetails = BankDetail::all();
        return view('frontend.company.payment.index', compact('bankDetails', 'notes', 'images'));
    }

    public function create()
    {
        return view('frontend.company.payment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bank_name' => 'required',
            'account_holder_name' => 'required',
            'account_number' => 'required',
            'swift_code' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'zip_code' => 'required',
            'email' => 'required|email',
            
        ]);

        BankDetail::create($request->all());

        return redirect()->route('payment')->with('success', 'Bank details created successfully.');
    }

    public function edit( $id )
    {
        $bankDetail = BankDetail::findOrFail($id);
        return view('frontend.company.payment.edit', compact('bankDetail'));
    }

    public function update(Request $request,  $id)
    {
        $bankDetail = BankDetail::findOrFail($id);
        $request->validate([
            'bank_name' => 'required',
            'account_holder_name' => 'required',
            'account_number' => 'required',
            'swift_code' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'zip_code' => 'required',
            'email' => 'required|email',
            
        ]);

        $bankDetail->update($request->all());

        return redirect()->route('payment')->with('success', 'Bank details updated successfully.');
    }

    public function destroy($id)
    {
        $bankDetail = BankDetail::findOrFail($id);
        $bankDetail->delete();

        return redirect()->route('payment')->with('success', 'Bank details deleted successfully.');
    }
}