<?php

namespace App\Http\Controllers;

use App\Mail\EventMail;
use App\Models\Invitee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function SaveEmail(Request $request) {
      $user = $request->validate([
        "name" => "Required",
        "email" => "Required",
        "phone" => "Required"
      ]);

     $existing = Invitee::where('email', $user['email'])
                        ->first();

    if ($existing) {
        return response()->json([
            'You have already submitted your RSVP.'
        ], 409); // 409 = Conflict
    }

      $data = Invitee::create($user);

      
    return response()->json([
        'message' => 'Thank you! Your RSVP has been successfully submitted.',
        'data' => $data
    ]);

    

    }

    public function Invitees() {
        $invitees = Invitee::get();
        return response()->json($invitees);
    }

    public function UpdateInvitee(Request $request) {
        $data = Invitee::find($request->id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        $data->save();

         return response()->json([
          "Message" => "Data Updated Successfully"
          ]);

    } 

    public function DeleteInvitee(Request $request) {
        $data = Invitee::find($request->id);
        $data->delete();
        
        return response()->json([
          "Message" => "Data Deleted Successfully"
          ]);

    }


    public function SendUpdate() {
        $invitees = Invitee::get();
        
        foreach($invitees As $invite) {
            Mail::to($invite['email'])->send(new EventMail('Wedding Update 🎉', "Hello $invite->name We are excited to announce that our wedding will take place on February 14, 2026. Please mark your calendar and stay tuned—you will be receiving more updates from us!"));
        }

        return response()->json([
        "Message" => "Email Successfully"
          ]);
       

    }
}
