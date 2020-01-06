<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller as BaseController;
use AddSQL\AddSQL;

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
        "pref"      => "About | " ,
        "site_name" => "Vasyl Yovdiy" ,
        "site_url"  => "yovdiyvasyl.xyz" ,
      );

      return view('about', $keys );
    }

    public function contact(){


      $keys = array(
        "pref" => "Contact | ",
        "site_name" => "Vasyl Yovdiy",
        "site_url" => "yovdiyvasyl.xyz",
      );

      return view('contact', $keys );
    }

    public function cv(){


      return "cv";
    }

    public function send(Request $req){
      $name = $_POST['name'];
      $mail = $_POST['mail'];
      $msg  = $_POST['msg'];

      try {

        Mail::send('mail.base', [
          'name' => $name,
          'mail' => $mail,
          'msg'  => $msg,

          ] , function ($m) use ($name, $mail) {
            $m->from( $mail , $name );
            $m->to("yovdiyvasyl@gmail.com", 'Vasyl')->subject($name . ' says to you!');
          });

      } catch (\Exception $e) {
          return redirect('/contact?alert=Something went wrong'.urlencode($e->getMessage()).', please try again!&acol=danger');
      }

      return redirect('/?alert=Your message has ben sent, thank you!&acol=success');
    }

    public function asql(){

      $v = new AddSQL('','null');
      $v->query("SELECT
        r.id_product,
        COLLECTION@(
            'id' => r.id,
            'id_costumer' => r.id_customer,
            'id_cartitem' => r.id_cartitem,
            'title' => r.title,
            'text' => r.text,
            'date' => r.date,
            'rating_valueformoney' => r.rating_valueformoney,
            'rating_convenience' => r.rating_convenience,
            'rating_accessibility' => r.rating_accessibility,
            'rating_overall' => r.rating_overall,
            'type_travel' =>  r.type_travel,
            'display_name' => r.display_name,
            'dotravel_rate' => r.dotravel_rate,
            'status' => r.status
          ) as col
      from reviews r
      where TRUE
      {{ AND r.id_product = <:id_product> }}
      {{ AND r.id_product in (<array:products>) }}
      group by r.id_product",[],"debug");

    }
}
