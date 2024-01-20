<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AboutUs;
use App\Models\Admin\ContactUs;
use App\Models\Admin\AboutUsDescription;
use App\Models\Admin\TermsAndCondition;
use App\Models\Admin\TermsAndConditionTitle;
use App\Models\Admin\TermsAndConditionDescription;
use App\Models\Admin\PrivacyPolicy;
use App\Models\Admin\PrivacyPolicyTitle;
use App\Models\Admin\PrivacyPolicyDescription;
use App\Models\Admin\JeepSafari;
use App\Models\Admin\JeepSafariTitle;
use App\Models\Admin\JeepSafariDescription;
use App\Models\Admin\PayNow;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AdminSaveDataController extends Controller
{
    public function saveAboutUs(Request $request)
    {
        $request->validate([
            'main_heading' => 'required|string',
            'main_content' => 'required|string',
            'main_image' => $request->about_id ? 'nullable' : 'required|image|mimes:jpg,png,jpeg',
            'sub_heading_tag' => 'required|string',
            'sub_heading' => 'required|string',
            'sub_content' => 'required|string',
            'heading1' => 'required|string',
            'content1' => 'required|string',
            'heading2' => 'nullable|string',
            'content2' => 'nullable|string',
            'banner_image' => $request->about_id ? 'nullable' : 'required|image|mimes:jpg,png,jpeg',
        ]);

        $about = $request->about_id ? AboutUs::find($request->about_id) : new AboutUs;

        $about->main_heading = $request->main_heading;
        $about->main_content = $request->main_content;
        $about->sub_heading_tag = $request->sub_heading_tag;
        $about->sub_heading = $request->sub_heading;
        $about->sub_content = $request->sub_content;
        $about->heading1 = $request->heading1;
        $about->heading2 = $request->heading2;
        $about->content1 = $request->content1;
        $about->content2 = $request->content2;

        if ($request->hasFile('main_image')) {
            $file_name = $this->uploadImage($request->file('main_image'), 'uploads/admin/about');
            $about->main_image = $file_name;
        }

        if ($request->hasFile('banner_image')) {
            $file_name = $this->uploadImage($request->file('banner_image'), 'uploads/admin/about');
            $about->banner_image = $file_name;
        }

        $about->save();

        if ($about->id && $request->ext_content) {
            foreach ($request->ext_content as $key => $description) {
                $desc = $request->description_id[$key] ? AboutUsDescription::find($request->description_id[$key]) : new AboutUsDescription;
                $desc->description = $description;
                if (!$desc->about_us_id) {
                    $desc->about_us_id = $about->id;
                }
                $desc->save();
            }
        }

        session()->flash('message', 'About Us Has Been Saved Successfully.');
        return redirect('/admin/about-us');
    }

    public function removeContent($id)
    {
        if ($id > 0) {
            $content = AboutUsDescription::find($id);
            if ($content) {
                $content->delete();
                return response()->json(['message' => 'Content removed successfully']);
            } else {
                return response()->json(['error' => 'Content not found'], 404);
            }
        } else {
            // You can handle non-AJAX removals here if needed
            return response()->json(['error' => 'Invalid operation'], 400);
        }
    }

    // About Us Section Ends


    // Contact Us Section Starts

    public function saveContactUs(Request $request)
    {
        $request->validate([
            'main_heading' => 'required|string|max:255',
            'main_content' => 'required|string',
            'address_title' => 'required|string',
            'address_content' => 'required|string',
            'call_title' => 'required|string',
            'call_number' => 'required|string',
            'email_title' => 'required|string',
            'email_address' => 'required|string',
            'banner_image' => $request->contact_id ? 'nullable' : 'required|image|mimes:jpg,png,jpeg',
        ]);

        $contact = $request->contact_id ? ContactUs::find($request->contact_id) : new ContactUs;
        $contact->main_heading = $request->main_heading;
        $contact->main_content = $request->main_content;
        $contact->address = $request->address_title;
        $contact->address_content = $request->address_content;
        $contact->call_title = $request->call_title;
        $contact->call_number = $request->call_number;
        $contact->email_title = $request->email_title;
        $contact->email_address = $request->email_address;
        if ($request->hasFile('banner_image')) {
            $file_name = $this->uploadImage($request->file('banner_image'), 'uploads/admin/contact');
            $contact->banner_image = $file_name;
        }
        $contact->save();
        session()->flash('message', 'Contact Us Has Been Saved Successfully.');
        return redirect('/admin/contact-us');
    }


    // Contact Us Section Ends


    // Pay Now Section Starts
    public function savePayNow(Request $request)
    {
        $validatedData = $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_no' => 'required|string|max:255',
            'ifsc_code' => 'required|string|max:255',
            'bank_branch' => 'required|string|max:255',
            'gstin' => 'required|string|max:255',
            'pan' => 'required|string|max:255',
            'banner_image' => $request->hasFile('banner_image')?'required|image|mimes:jpg,png,jpeg':'nullable',
        ]);

        $existingPayNow = PayNow::first();
        if ($existingPayNow) {
            $payNow = $existingPayNow;
        } else {
            $payNow = new PayNow;
        }
        if ($request->hasFile('banner_image')) {
            $file_name = $this->uploadImage($validatedData['banner_image'], 'uploads/admin/pay');
            $payNow->banner_image = $file_name;
        }elseif ($existingPayNow && $existingPayNow->banner_image) {
            $payNow->banner_image = $existingPayNow->banner_image;
        }
        $payNow->fill($validatedData); // Fill the model with validated data
        $payNow->save();
        session()->flash('message', 'Pay Now Has Been Saved Successfully.');
        return redirect('/admin/pay-now');
    }
    
    // Pay Now Section Ends



    // Terms & Condions Section Starts
    public function saveTermsAndConditions(Request $request)
    {
        $request->validate([
            'banner_image' => $request->hasFile('banner_image') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
            'terms_title.*' => 'required|string|max:255',
            'terms_description.*.*' => 'required|string',
        ]);

        $existingTerms = TermsAndCondition::firstOrCreate([]);

        if ($request->hasFile('banner_image')) {
            $file_name = $this->uploadImage($request->file('banner_image'), 'uploads/admin/terms');
            $existingTerms->banner_image = $file_name;
        }

        $existingTerms->save();

        if ($request->terms_title) {
            foreach ($request->terms_title as $key => $title) {
                $termsTitle = $existingTerms->titles()->firstOrNew(['terms_title' => $title]);

                // Update or create the title
                $termsTitle->terms_title = $title;
                $termsTitle->save();

                // Sync descriptions for the title
                $termsTitle->descriptions()->delete(); // Remove existing descriptions
                if (isset($request->terms_description[$key])) {
                    foreach ($request->terms_description[$key] as $desc) {
                        $termsDesc = new TermsAndConditionDescription(['terms_description' => $desc]);
                        $termsTitle->descriptions()->save($termsDesc);
                    }
                }
            }
        }

        session()->flash('message', 'Terms and Conditions have been saved successfully.');
        return redirect('/admin/terms-and-condition');
    }


    public function deleteTermsAndConditionTitle(Request $request)
    {
        if($request->terms_id)
        {
            $termsTitle = TermsAndConditionTitle::find($request->terms_id);
            $termsTitle->delete();
            return response()->json(['message'=> 'Title Delete Successfully', 'status' => true]);
        }
    }

    public function deleteTermsAndConditionDesc(Request $request)
    {
        if($request->desc_id)
        {
            $termsDesc = TermsAndConditionDescription::find($request->desc_id);
            $termsDesc->delete();
            return response()->json(['message'=> 'Description Delete Successfully', 'status' => true]);
        }
    }



    // Terms & Condions Section Ends



    // Privacy Policy Section Starts
    public function savePrivacyPolicy(Request $request)
    {
        $request->validate([
            'banner_image' => $request->hasFile('banner_image') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
            'policy_title.*' => 'required|string|max:255',
            'policy_description.*.*' => 'required|string',
        ]);

        $existingPolicy = PrivacyPolicy::firstOrCreate([]);

        if ($request->hasFile('banner_image')) {
            $file_name = $this->uploadImage($request->file('banner_image'), 'uploads/admin/policy');
            $existingPolicy->banner_image = $file_name;
        }

        $existingPolicy->save();

        if ($request->privacy_title) {
            foreach ($request->privacy_title as $key => $title) {
                $privacyTitle = $existingPolicy->titles()->firstOrNew(['privacy_title' => $title]);

                // Update or create the title
                $privacyTitle->privacy_title = $title;
                $privacyTitle->save();

                // Sync descriptions for the title
                $privacyTitle->descriptions()->delete(); // Remove existing descriptions
                if (isset($request->privacy_description[$key])) {
                    foreach ($request->privacy_description[$key] as $desc) {
                        $privacyDesc = new PrivacyPolicyDescription(['privacy_description' => $desc]);
                        $privacyTitle->descriptions()->save($privacyDesc);
                    }
                }
            }
        }

        session()->flash('message', 'Privacy Policy have been saved successfully.');
        return redirect('/admin/privacy-policy');
    }


    public function deletePrivacyPolicyTitle(Request $request)
    {
        if($request->privacy_id)
        {
            $termsTitle = PrivacyPolicyTitle::find($request->privacy_id);
            $termsTitle->delete();
            return response()->json(['message'=> 'Title Delete Successfully', 'status' => true]);
        }
    }

    public function deletePrivacyPolicyDesc(Request $request)
    {
        if($request->desc_id)
        {
            $termsDesc = PrivacyPolicyDescription::find($request->desc_id);
            $termsDesc->delete();
            return response()->json(['message'=> 'Description Delete Successfully', 'status' => true]);
        }
    }



    // Privacy Policy Section Ends



// Jeep Safari Section Starts
public function saveJeepSafari(Request $request)
{
    $request->validate([
        'banner_image' => $request->hasFile('banner_image') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
        'jeep_image_1' => $request->hasFile('jeep_image_1') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
        'jeep_image_2' => $request->hasFile('jeep_image_2') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
        'jeep_title.*' => 'required|string|max:255',
        'jeep_button_text_1' => 'required|string|max:255',
        'jeep_button_text_2' => 'required|string|max:255',
        'jeep_button_link_1' => 'required|string|max:255',
        'jeep_button_link_2' => 'required|string|max:255',
        'jeep_description.*.*' => 'required|string',
    ]);

    $existingJeep = JeepSafari::firstOrCreate([]);

    if ($request->hasFile('banner_image')) {
        $file_name = $this->uploadImage($request->file('banner_image'), 'uploads/admin/jeep');
        $existingJeep->banner_image = $file_name;
    }
    if ($request->hasFile('jeep_image_1')) {
        $file_name = $this->uploadImage($request->file('jeep_image_1'), 'uploads/admin/jeep');
        $existingJeep->jeep_image_1 = $file_name;
    }
    if ($request->hasFile('jeep_image_2')) {
        $file_name = $this->uploadImage($request->file('jeep_image_2'), 'uploads/admin/jeep');
        $existingJeep->jeep_image_2 = $file_name;
    }
    $existingJeep->jeep_button_text_1 = $request->jeep_button_text_1;
    $existingJeep->jeep_button_text_2 = $request->jeep_button_text_2;
    $existingJeep->jeep_button_link_1 = $request->jeep_button_link_1;
    $existingJeep->jeep_button_link_2 = $request->jeep_button_link_2;
    $existingJeep->save();

    if ($request->jeep_title) {
        foreach ($request->jeep_title as $key => $title) {
            $jeepTitle = $existingJeep->titles()->firstOrNew(['jeep_title' => $title]);

            // Update or create the title
            $jeepTitle->jeep_title = $title;
            $jeepTitle->save();

            // Sync descriptions for the title
            $jeepTitle->descriptions()->delete(); // Remove existing descriptions
            if (isset($request->jeep_description[$key])) {
                foreach ($request->jeep_description[$key] as $desc) {
                    $jeepDesc = new JeepSafariDescription(['jeep_description' => $desc]);
                    $jeepTitle->descriptions()->save($jeepDesc);
                }
            }
        }
    }

    session()->flash('message', 'Jeep Safari have been saved successfully.');
    return redirect('/admin/jeep-safari');
}


public function deleteJeepSafariTitle(Request $request)
{
    if($request->privacy_id)
    {
        $termsTitle = JeepSafariTitle::find($request->privacy_id);
        $termsTitle->delete();
        return response()->json(['message'=> 'Title Delete Successfully', 'status' => true]);
    }
}

public function deleteJeepSafariDesc(Request $request)
{
    if($request->desc_id)
    {
        $termsDesc = JeepSafariDescription::find($request->desc_id);
        $termsDesc->delete();
        return response()->json(['message'=> 'Description Delete Successfully', 'status' => true]);
    }
}



// Jeep Safari Section Ends





    // Private Functions
    private function uploadImage($image, $path)
    {
        $ext = $image->getClientOriginalExtension();
        $file_name = time() . '_' . Str::uuid() . '.' . $ext;
        $image->storeAs($path, $file_name, 'public');
        return $file_name;
    }


}
