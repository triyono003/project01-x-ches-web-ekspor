<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Quality;
use App\Models\Visitor;

class HomeController extends Controller
{
  public function index()
  {
    //device = Agent::device();
    $phone = Agent::isPhone();
    $desktop = Agent::isDesktop();
    $browser = Agent::browser();
    $version = Agent::version(Agent::browser());
    $platform = Agent::platform();
    $vplatform = Agent::version(Agent::platform());

    $clientIP = \Request::ip();

    if ($desktop == true) {
      $desktop = "yes";
    } else {
      $desktop = "---";
    }
    if ($phone == true) {
      $phone = "yes";
    } else {
      $phone = "---";
    }
    //    $user = User::orderBy("id", "desc")->get();
    //     if (Auth::check()) {
    //       $userId = Auth::user()->username;
    //     } error ketika page index

    Visitor::create([
      "desktop" => $desktop,
      "phone" => $phone,
      "browser" => $browser,
      "version" => $version,
      "platform" => $platform,
      "vplatform" => $vplatform,
      "clientip" => $clientIP,
    ]);

    return view("index", [
      "data" => Product::orderBy("id", "desc")->limit(6)->get(),
    ]);
  }
}
