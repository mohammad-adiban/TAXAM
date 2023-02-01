<?php

namespace App\Http\Controllers\Admin;


use App\Models\WebUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Kavenegar\KavenegarApi;


class WebUsersController extends Controller
{

    public function store(Request $Request)
    {
        $user_data = [
            'full_name' => $Request->input('full_name'),
            'phone_number' => $Request->input('phone_number'),
            'email' => $Request->input('email'),
            'senf' => $Request->input('senf'),
            'sms_code' => rand(10000, 99999),
        ];

        $phone_number = $Request->input('phone_number');
        $entered_sms_code = $Request->input('entered_sms_code');
        $entered_request_type = $Request->input('entered_request_type');

        $exist_user_object = WebUser::where('phone_number', $phone_number)->first();
        $user_sms_code = $exist_user_object['sms_code'];


        if ($entered_request_type == 'simple_user') {
            if (isset($exist_user_object)) { //user exists
                if ($exist_user_object['validation'] == 1) { //user validation is 1
                    return response()->json(['success' => 'این کاربر قبلا ثبت شده است']);
                } else { //user validation is zero
                    if ($user_sms_code == $entered_sms_code) {
                        $exist_user_object->update(['validation' => 1]);
                        return response()->json(['success' => 'کاربر جدید با موفقیت ثبت شد']);
                    } elseif (!empty($entered_sms_code)) {
                        return response()->json(['success' => 'کد وارد شده صحیح نمی باشد']);
                    } elseif (empty($entered_sms_code)) {
                        $exist_user_object->update(['full_name' => $user_data['full_name']]);
                        $exist_user_object->update(['email' => $user_data['email']]);
                        $exist_user_object->update(['senf' => $user_data['senf']]);
                        $exist_user_object->update(['sms_code' => rand(10000, 99999)]);
                        //----------------------------------------------------------------------------------------------------------
                        //  $user_number = (string)($phone_number);
                        // $user_phone = $user_number;
                        // $api = new KavenegarApi("636A714A364864486861484A3670714441642B6B67774E377573687857614B6A");
                        // $result = $api->send("100065995",$user_phone ,"کد اعتبارسنجی شما: ".$exist_user_object['sms_code']."\nتکسام ");
                        //----------------------------------------------------------------------------------------------------------
                        return response()->json(['success' => 'کاربر موقت ثبت شده است']);
                    }
                }
            } else { //user not exist totally
                WebUser::create($user_data);
                //----------------------------------------------------------------------------------------------------------
                //   require("KavenegarApi.php");
                //   $user_number = (string)($phone_number);
                //   $user_phone = $user_number;
                //   $api = new KavenegarApi("59776C595174557545326479567A6D514365463671513D3D");
                //   $result = $api->send("100065995",$user_phone ,"کد اعتبارسنجی شما: ".$user_data['sms_code']."\nتکسام ");
                //----------------------------------------------------------------------------------------------------------
                return response()->json(['success' => 'کاربر موقت ثبت شده است']);
            }
        }



        elseif($entered_request_type == 'package_user'){
            if (isset($exist_user_object )) { //user exists
                if (empty($entered_sms_code)){
                    return response()->json(['success' => 'کاربر متقاضی سرویس است']);
                }elseif(!empty($entered_sms_code)){
                    if($entered_sms_code != $user_sms_code){
                        return response()->json(['success' => 'کد وارد شده صحیح نمی باشد']);
                    }
                    elseif($entered_sms_code == $user_sms_code) {
                        return response()->json(['success' => 'درخواست سرویس با موفقیت ثبت شد']);
                    }
                }
            }
            else { //user not exist totally
                WebUser::create($user_data);
                //----------------------------------------------------------------------------------------------------------
                //   require("KavenegarApi.php");
                //   $user_number = (string)($phone_number);
                //   $user_phone = $user_number;
                //   $api = new KavenegarApi("59776C595174557545326479567A6D514365463671513D3D");
                //   $result = $api->send("100065995",$user_phone ,"کد اعتبارسنجی شما: ".$user_data['sms_code']."\nتکسام ");
                //----------------------------------------------------------------------------------------------------------
                return response()->json(['success' => 'کاربر متقاضی سرویس است']);
            }

        }


    }
}