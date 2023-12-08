<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
class MessageController extends Controller
{
  public function create()
  {
    return view("src.admin.messages", [
      "messages" => Contact::orderBy("id", "desc")->get(),
    ]);
  }

}
