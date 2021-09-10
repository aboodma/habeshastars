<?php

use App\InputTransaction;
use Illuminate\Support\Str;

if (!function_exists('_ti')) {
    function _ti($sting)
    {
       return InputTransaction::translate_input($sting);
    }
}

if (!function_exists('send_notify')) {
    function send_notify($token , $title , $body , $image = null)
    {
        $SERVER_API_KEY = 'AAAAR82IgZ8:APA91bFgCLeZ8UnOOSesm56MzwyYArieTTuQ_q5BiuNL_a6gozabJnmBfUfn9D3xcL1v1aAwK14dIzMcDFtTkouL05jYB8SdIZqtQY0jvt7mT1yAK8pCTFHdEEzcTF3P7XhG01KKSnWF';

    $data = [

        "registration_ids" => [
           $token
        ],

        "notification" => [

            "title" => $title,

            "body" => $body,

            'image' => $image,

            "sound" => true

        ],

        "data" => [
            'click_action'=> 'FLUTTER_NOTIFICATION_CLICK',
        ]

    ];

    $dataString = json_encode($data);

    $headers = [

        'Authorization: key=' . $SERVER_API_KEY,

        'Content-Type: application/json',

    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

    curl_exec($ch);
    }
}

if (!function_exists('slugify')) {
    function slugify($text, string $divider = '-')
    {
      $slug=   Str::slug($text, $separator = '-', $language = 'ar');
      return $slug;
    }
}
if(!function_exists('website_settings')){
    function website_settings ($varname){
       $settings =  App\WebsiteSetting::first();
        $locale = App()->getLocale();
       return $settings[$varname."_".$locale];
    }
}
