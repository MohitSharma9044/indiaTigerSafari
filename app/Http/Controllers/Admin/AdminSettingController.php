<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Admin\Settings\General;

class AdminSettingController extends Controller
{
    public function general()
    {
        return view('admin.settings.general');
    }

    public function saveGeneralSettings(Request $request)
    {
        $request->validate([
            'website_logo' => 'required|image|mimes:jpeg,png,jpg',
        ]);
        $general = General::firstOrCreate([]);

        if($request->hasFile('website_logo'))
        {
            $file_name = $this->uploadImage($request->file('website_logo'), 'uploads/admin/settings/general');
            $general->website_logo = $file_name;
        }
        $general->save();
        session()->flash('message', 'General Settings have been saved successfully.');
        return redirect('/admin/settings/general');
    }



    private function uploadImage($image, $path)
    {
        $ext = $image->getClientOriginalExtension();
        $file_name = time() . '_' . Str::uuid() . '.' . $ext;
        $image->storeAs($path, $file_name, 'public');
        return $file_name;
    }
}
