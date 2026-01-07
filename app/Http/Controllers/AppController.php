<?php

namespace App\Http\Controllers;

use App\Mail\EventMail;
use App\Models\Invitee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function SaveEmail(Request $request)
{
    $user = $request->validate([
        "name" => "required",
        "email" => "required|email",
        "phone" => "required"
    ]);

    // Trim inputs
    $user = array_map('trim', $user);

    // Case-insensitive email check
    $existing = Invitee::whereRaw('LOWER(email) = ?', [strtolower($user['email'])])
                        ->first();

    if ($existing) {
        return response()->json([
            'message' => 'You have already submitted your RSVP.'
        ], 409);
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


    public function SendUpdate(Request $request) {
        $invitees = Invitee::get();
        // "Hello $invite->name We are excited to announce that our wedding will take place on February 14, 2026. 
        // Please mark your calendar and stay tuned—you will be receiving more updates from us!"
        foreach($invitees As $invite) {
            Mail::to($invite['email'])->send(new EventMail("{$request->subject} 🎉","Hello {$invite->name}. {$request->message}"));
        }

        return response()->json([
        "Message" => "Email Successfully"
          ]);
       

    }

    public function Dashboard() {
        $guests = Invitee::paginate(10);
        //$countguests = Invitee::count();
        return view('dashboard',compact('guests'));
    }
}
