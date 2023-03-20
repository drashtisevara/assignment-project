<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountModel;

class Account_User extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id = null)
    {
        $accounts = AccountModel::find(1);
        
        // $accounts = $account->accounts;

        $accounts = AccountModel::whereHas('account_models', function ($query) use ($accounts){
            $query->where('id',$accounts->id);
        })->get();
         
       
        // $accounts = AccountModel::all();
       
        return view('users', ['accounts'=> $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $accounts = new AccountModel;
  
        $accounts->user_name=$req->user_name;
        $accounts->user_email=$req->user_email;
        $accounts->user_phone=$req->user_phone;
        $accounts->user_id=auth()->user()->id;
        $accounts->accounts_id=auth()->user()->id;

        

        $accounts->save();
        return redirect('users');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        // $accounts = AccountModel::find($id);
        // $accounts->user_name=$req->user_name;
        // $accounts->user_email=$req->user_email;
        // $accounts->user_phone=$req->user_phone;
     


        // $accounts->save();
        // return view('users',['accounts'=>$accounts]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}