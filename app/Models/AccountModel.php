<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    use HasFactory;
    public $timestamps=false;
    
    // public function bankAccounts(){
    //     return $this->belongsToMany(Account::class, 'account_models' ,'user_id' ,'accounts_id')->withTimestamps();
    // }

    public function account(){
        return $this->belongsTo(Account::class);
    }
    
}