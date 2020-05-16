<?php

namespace App\Http\Controllers;

use App\Mail\CustomerMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use PDF;
use Illuminate\Http\Request;

class DealController extends Controller
{
    public function submit(Request $request){
        $data = $request;
        $compact = compact('data');
        $pdf = PDF::loadView('pdfTemplate', $compact);
        Mail::to($request->email)->send(new CustomerMail($pdf->output(), $request->prenomcontact.'.pdf'));
        Storage::put($request->prenomcontact.'.pdf', $pdf->output());
        return "Mail sent";
    }
}
