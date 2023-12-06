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
    try {
      $request->validate([
        "name" => ["required", "string"],
        "email" => ["required", "email"],
        "subject" => ["required", "string"],
        "message" => ["required", "string"],
      ]);
      Contact::create([
        "name" => $request->name,
        "email" => $request->email,
        "subject" => $request->subject,
        "message" => $request->message,
      ]);
      return redirect("/src/contact")->with(
        "success",
        "Pesan Anda Berhasil Dikirim"
      );
    } catch (\Exception $e) {
      return redirect()
        ->back()
        ->withErrors("error", "Email Berhasil Dikirim");
    }
  }
}
