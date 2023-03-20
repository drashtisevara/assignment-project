<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::all();

    

        return view('home', ['accounts'=>$accounts]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    public function create(Request $req)
    {
        $accounts = new Account;
        // dd(auth()->user()->id);
       
       $accounts->account_name=$req->account_name;
        $accounts->account_number=$req->account_number;
        $accounts->total_balance=$req->total_balance;
        $accounts->total_transaction=$req->total_transaction;
        $accounts->total_deduct=$req->total_deduct;
       
 
        $accounts->users_id=auth()->user()->id;
        $accounts->account_models_id=auth()->user()->id;
       
        $accounts->save();

        return redirect('home');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        $data = Account::find($id);
        return view('editform',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req)
{
     $accounts = Account::find($req->$id);
        $accounts->account_name=$req->account_name;
        $accounts->account_number=$req->account_number;
        $accounts->total_balance=$req->total_balance;
        $accounts->total_transaction=$req->total_transaction;
        $accounts->total_deduct=$req->total_deduct;


        $accounts->save();
        // return redirect(route('index'))->with('status', 'Student Updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
        
            $accounts = Account::find($id);
             $accounts->delete();
             return redirect('home');
        
    
    }
    
}
?>