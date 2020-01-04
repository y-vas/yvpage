<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Main extends Controller {

  public function index(){

    $keys = array(
      "site_name" => "Vasyl Yovdiy",
      "site_url" => "yovdiyvasyl.xyz",
      "presentation" => "
        Let's be honest and cut through the marketing fluff.
        You need a website or a software project that looks amazing and actually works.
        Bottom line, that's what I do.
        And if you want to learn more about working with me, pick up the phone and give me a call (or email).
      "
    );

    return view('welcome', $keys );
  }


    public function about(){

      $keys = array(
        "site_name" => "Vasyl Yovdiy",
        "site_url" => "yovdiyvasyl.xyz",
      );

      return view('about', $keys );
    }



}
