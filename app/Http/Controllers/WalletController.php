<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wallet;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{
    public function getWallets(){
        $wallets = Wallet::all();

        return $wallets;
    }


    public function getWallet($id){
    $wallet = DB::table('Wallets')
    ->join('Users', 'Wallets.user_id', '=', 'Users.id')
    ->select('Users.first_name', 'Users.last_name', 'Wallets.type', 'Wallets.balance')
    ->where('Wallets.id', '=', $id)
    ->get();

    return $wallet;
    }

    public function updateWallet($senderid, $receiverid, $amount){
        $balance = DB::table('Wallets')
        ->select('balance')
        ->where('id', '=', $senderid)
        ->get();

        $balance = $balance[0]->balance;

        if($balance >= $amount){
            DB::table('Wallets')
            ->where('id', '=', $senderid)
            ->decrement('balance', $amount);

            DB::table('Wallets')
            ->where('id', '=', $receiverid)
            ->increment('balance', $amount);
            
            $receiver = DB::table('Wallets')
            ->join('Users', 'Wallets.user_id', '=', 'Users.id')
            ->select('Users.first_name', 'Users.last_name')
            ->where('Wallets.id', '=', $receiverid)
            ->get();

            return  $amount." Naira sent to ".$receiver[0]->first_name." ".$receiver[0]->last_name." successfully!!. Your Account Balance is now ".$balance." Naira"; 

        }else{
            return "Transaction failed due to insufficient Balance!!";
        }
        
}
}
