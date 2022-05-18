<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Haircut;
use Mail;

class GetHaircutController extends Controller {

      public function index() {

       return view('pages.get-haircut.index');
      }

     public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'haircut_date' => 'required'
        ]);

        $haircut = new Haircut;

        $haircut->name = $request->name;
        $haircut->email = $request->email;
        $haircut->phone_number = $request->phone_number;
        $haircut->message = $request->message;
        $haircut->haircut_date = $request->haircut_date;
        $haircut->save();

        \Mail::send('emails.contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'phone_number' => $request->get('phone_number'),
                 'user_message' => $request->get('message'),
                 'haircut_date' => $request->get('haircut_date')
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('solakmirnes@gmail.com');
               });

          return back()->with('success', 'Thank you for contacting us! You will get a reply soon.');

    }
}
