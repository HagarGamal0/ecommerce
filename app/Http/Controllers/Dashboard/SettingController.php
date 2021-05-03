<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;

class SettingController extends Controller
{
    public function editShippingMethods($type)
    {

     if ($type==='free') {

         $shippingMethod = Setting::where('key', 'free shipping')->first();

     } elseif($type==='inner') {

        $shippingMethod = Setting::where('key', 'local shipping')->first();

     } elseif($type==='outer'){

        $shippingMethod = Setting::where('key', 'outer shipping')->first();


     }else {
        $shippingMethod = Setting::where('key', 'free shipping')->first();
     }



        return view('dashboard.settings.shippings.edit' , compact('shippingMethod'));
    }






    public function updateShippingMethods( )
    {
        # code...
    }





}
