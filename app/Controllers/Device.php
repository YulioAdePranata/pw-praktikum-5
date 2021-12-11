<?php

namespace App\Controllers;

use App\Models\deviceModel;

class Device extends BaseController
{
    protected $deviceModel;
    public function __construct()
    {
        $this->deviceModel = new DeviceModel();
    }
    public function index()
    {
        $device = $this->deviceModel->findAll();
        $data = [
            'title' => 'Device List | IoT Monitoring Web',
            'device' => $device
        ];

      // $deviceModel = new \App\Models\deviceModel();
     // $deviceModel = new DeviceModel();
     

          return view('device/index', $data);
    }
}