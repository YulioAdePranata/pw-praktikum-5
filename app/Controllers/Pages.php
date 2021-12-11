<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home | IoT Monitoring Web'
        ];
        return view('pages/home', $data);
    }
}
