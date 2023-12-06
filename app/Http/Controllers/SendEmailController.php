<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendingEmail;

class SendEmailController extends Controller
{
  public function index()
  {
    Mail::to("chooper@gmail.com")->send(new SendingEmail());
  }
}
