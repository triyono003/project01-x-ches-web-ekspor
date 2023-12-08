<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
  public function create()
  {
    return view("src.contact");
  }

  public function saveMessage(Request $request)
  {
    $request->validate([
      "name" => ["required", "string", "min:7"],
      "email" => ["required", "email"],
      "subject" => ["required", "string"],
      "message" => ["required", "string", "max:500"],
    ]);
    Contact::create([
      "name" => $request->name,
      "email" => $request->email,
      "subject" => $request->subject,
      "message" => $request->message,
    ]);
    return back()->with("success", "Pesan Anda Berhasil Dikirim");
  }
  
  public function destroy($id)
  {
    Contact::find($id)->delete();
    return back();
  }
}
