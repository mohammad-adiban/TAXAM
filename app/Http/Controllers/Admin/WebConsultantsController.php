<?php

namespace App\Http\Controllers\Admin;


use App\Models\WebConsultant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Kavenegar\KavenegarApi;


class WebConsultantsController extends Controller
{

    public function store(Request $Request)
    {
        $consultant_data = [
            'full_name' => $Request->input('full_name'),
            'phone_number' => $Request->input('phone_number'),
            'email' => $Request->input('email'),
            'resume_type' => $Request->input('resume_type'),
            'sms_code' => rand(10000, 99999),
        ];


        $phone_number = $Request->input('phone_number');
        $entered_sms_code = $Request->input('entered_sms_code');

        $exist_consultant_object = WebConsultant::where('phone_number', $phone_number)->first();
        $consultant_sms_code = $exist_consultant_object['sms_code'];

        if (isset($exist_consultant_object)) {
            if ($exist_consultant_object['validation'] == 1) {
                return response()->json(['success' => 'این مشاور قبلا ثبت شده است']);
            }
            else{
                if ($consultant_sms_code == $entered_sms_code){
                    //$update_consultant_item = WebConsultant::find($exist_consultant_object['consultant_id']);
                    $exist_consultant_object->update(['validation' => 1]);
                    return response()->json(['success' => 'مشاور جدید با موفقیت ثبت شد']);
                }
                elseif(!empty($entered_sms_code)){
                    return response()->json(['success' => 'کد وارد شده صحیح نمی باشد']);
                }elseif (empty($entered_sms_code)){
                    $exist_consultant_object->update(['full_name' => $consultant_data['full_name']]);
                    $exist_consultant_object->update(['email' => $consultant_data['email']]);
                    $exist_consultant_object->update(['resume_type' => $consultant_data['resume_type']]);
                    $exist_consultant_object->update(['sms_code' => rand(10000, 99999)]);
                    //----------------------------------------------------------------------------------------------------------
                    require("KavenegarApi.php");
                    $consultant_number = (string)($phone_number);
                    $consultant_phone = $consultant_number;
                    $api = new KavenegarApi("636A714A364864486861484A3670714441642B6B67774E377573687857614B6A");
                    $result = $api->send("100065995",$consultant_phone ,"کد اعتبارسنجی شما: ".$exist_consultant_object['sms_code']."\nتکسام ");
                    //----------------------------------------------------------------------------------------------------------
                    return response()->json(['success' => 'مشاور موقت ثبت شده است']);
                }
            }
        }
        else {
            WebConsultant::create($consultant_data);
            //----------------------------------------------------------------------------------------------------------
            require("KavenegarApi.php");
            $consultant_number = (string)($phone_number);
            $consultant_phone = $consultant_number;
            $api = new KavenegarApi("59776C595174557545326479567A6D514365463671513D3D");
            $result = $api->send("100065995",$consultant_phone ,"کد اعتبارسنجی شما: ".$consultant_data['sms_code']."\nتکسام ");
            //----------------------------------------------------------------------------------------------------------
            return response()->json(['success' => 'مشاور موقت ثبت شده است']);

        }
   }

    public function store_resume(Request $Request){
        $phone_number = $Request->input('consultant_number');
        $exist_consultant_object = WebConsultant::where('phone_number', $phone_number)->first();
        $new_file_name = str_random(15).$exist_consultant_object['resume_type'];
        $Request->file('upload_cont')->move(public_path('resumes'),$new_file_name);
        $exist_consultant_object->update(['resume_name' => $new_file_name]);
        return redirect()->route('taxam');

    }

}