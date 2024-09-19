<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use App\Models\Payment;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //

    public function orgPayments($id){
        $organisation= Organisation::find($id);
        if($organisation){
            return response()->json(['message'=>"organsation not found"],401);
        }
        $orgPayment=Payment::where('organisation_id',$id);
        return response()->json([
            'organisation'=>$organisation,
            'payments'=>$orgPayment,
        ]);

    }
}
