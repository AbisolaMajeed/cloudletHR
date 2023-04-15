<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingFormRequest;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminSettingController extends Controller
{
    public function viewSetting()
    {
        $settings = Setting::paginate(10);
        return view('pages.admin.setting.view', compact('settings'));
    }

    public function addSetting()
    {
        return view('pages.admin.setting.add-edit');
    }

    public function storeSetting(SettingFormRequest $request)
    {
        $company_logo = Cloudinary::upload($request->file('company_logo')->getRealPath())->getSecurePath();
        
        $setting = array(
            'name' => $request->name,
            'email' => $request->email,            
            'phone_number' => $request->phone_number,
            'company_logo' => $company_logo,
            'company_address' => $request->company_address,
            'about_company' => $request->about_company
        );
        Setting::create($setting);
        return redirect('dashboard/setting/view')->with('success', 'Company Information Added successfully');
    }

    public function editSetting($id)
    {
        $setting = Setting::find($id);
        return view('pages.admin.setting.add-edit')->with('setting', $setting);
    }

    public function updateSetting(SettingFormRequest $request)
    { 
        $setting = Setting::find($request->id);
        $setting->name = $request->name;
        $setting->email = $request->email;
        $setting->phone_number = $request->phone_number;
        $setting->company_address = $request->company_address;
        $setting->about_company = $request->about_company;

        if($request->hasFile('company_logo')) {
           
            $company_logo = Cloudinary::upload($request->file('company_logo')->getRealPath())->getSecurePath();
            $setting->company_logo = $company_logo;
        }

        if($setting->save()){
            return redirect('dashboard/setting/view')->with('success', 'Company Information Updated successfully');
        }else{
            return redirect('dashboard/setting/view')->with('danger', 'Image upload failed!');
        }
    } 

}
