<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Routing\Controller as BaseController;
use App\Model\Setting;
use Illuminate\Http\Request;

class SettingController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $settings = Setting::all();
        return view('_setting/settings', ['settings' => $settings]);
    }
}
