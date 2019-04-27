<?php

namespace App\Http\Controllers;

use App\Mail\DeliveryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function requestDelivery(Request $request)
    {
        $to = [
            [
                'email' => 'mailbox@jetexpress.com',
                'name' => 'JetExpress Mailbox',
            ]
        ];
        Mail::to($to)->send(new DeliveryRequest($request));

        return redirect('request')->with('status', 'Request sent successfully!');
    }
}
