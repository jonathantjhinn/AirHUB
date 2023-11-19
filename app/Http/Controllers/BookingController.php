<?php

namespace App\Http\Controllers;

use App\Models\airlist;
use App\Models\purchasedlist;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function viewbooking() {
        $data = airlist::orderBy('datedepart', 'asc')->get();
        // return $data;
        return view("/booking")->with('data', $data);
    }

    function findbookingdetail($listid) {
        $data = airlist::where('listid', $listid)->get();
        return view('booking-detail')->with('data', $data);
    }

    function addtransaction(Request $request, $listid) {
        $listair = airlist::select('depart', 'arrival', 'planecode', 'datedepart', 'datearrival', 'gate')->where('listid', $listid)->get();

        $listvalue= [];
        foreach ($listair as $jsonString) {
            $decodedData = json_decode($jsonString, true);
            $listvalue[] = [
                'depart' => $decodedData['depart'],
                'arrival' => $decodedData['arrival'],
                'planecode' => $decodedData['planecode'],
                'datedepart' => $decodedData['datedepart'],
                'datearrival' => $decodedData['datearrival'],
                'gate' => $decodedData['gate'],
            ];
        }

        foreach ($listvalue as $data) {
            $depart= $data['depart'];
            $arrival = $data['arrival'];
            $planecode = $data['planecode'];
            $datedepart = $data['datedepart'];
            $datearrival = $data['datearrival'];
            $gate = $data['gate'];
        }


        $ret_email = $request->cookie('cookie_email');
        $data = [
            'listid' => $listid,
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email' => $ret_email,
            'depart' => $depart,
            'arrival' => $arrival,
            'planecode' => $planecode,
            'datedepart' => $datedepart,
            'datearrival' => $datearrival,
            'gate' => $gate,
            'cardnumber' => $request->cardnumber,
            'cardname' => $request->cardname,
            'optionalfood' => $request->optionalfood,
        ];
        purchasedlist::create($data);
        return redirect('booking');
    }

    function viewdashboard($email) {
        $data = purchasedlist::where('email', $email)->get();
        return view("dashboard")->with('data', $data);
    }

}
