<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Admin\Tour;
use App\Models\Admin\TourOverviewDescription;
use App\Models\Admin\TourOverviewDescription2;
use App\Models\Admin\TourSlider;
use App\Models\Admin\TourTabs;
use App\Models\Admin\TourTabsDescription;

class AdminManageTourController extends Controller
{
    public function create()
    {
        return view('admin.manage_tours.tours');
    }

    public function saveTours(Request $request)
    {
        $request->validate([
            'tour_name' => 'required|string|unique:tours,tour_name|max:255',
            'tour_online_title' => 'required|string|max:255',
            'tour_online_short_desc' => 'required|string|max:255',
            'tour_package_title' => 'required|string|max:255',
            'tour_package_short_desc' => 'required|string|max:255',
            'tour_service_title' => 'required|string|max:255',
            'tour_service_short_desc' => 'required|string|max:255',
            'tour_overview_title1' => 'required|string|max:255',
            'tour_overview_title2' => 'required|string|max:255',
            // 'tour_overview_description1.*' => 'required|string',
            // 'tour_overview_description2.*' => 'required|string',
            // 'tour_tabs_title.*' => 'required|string|max:255',
            // 'tour_tabs_desc.*' => 'required|string',
            'tour_slider_tag.*' => 'required|string|max:255',
            'tour_slider_title.*' => 'required|string|max:255',
            'tour_slider_short_desc.*' => 'required|string|max:255',
            'tour_slider_image.*' => 'required|image|mimes:png,jpg,jpeg',
            'tour_online_icon_image' => 'required|image|mimes:png,jpg,jpeg',
            'tour_package_icon_image' => 'required|image|mimes:png,jpg,jpeg',
            'tour_service_icon_image' => 'required|image|mimes:png,jpg,jpeg',
            'tour_overview_image1' => 'required|image|mimes:png,jpg,jpeg',
            'tour_overview_image2' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $tour = new Tour;
        $tour->tour_name = $request->tour_name;
        $tour->tour_slug  = $slug = Str::slug($request->tour_slug);
        $tour->tour_online_title = $request->tour_online_title;
        $tour->tour_online_short_desc = $request->tour_online_short_desc;
        $tour->tour_package_title = $request->tour_package_title;
        $tour->tour_package_short_desc = $request->tour_package_short_desc;
        $tour->tour_service_title = $request->tour_service_title;
        $tour->tour_service_short_desc = $request->tour_service_short_desc;
        $tour->tour_overview_title1 = $request->tour_overview_title1;
        $tour->tour_overview_title2 = $request->tour_overview_title2;
        if($request->hasFile('tour_online_icon_image'))
        {
            $file_name = $this->uploadImage($request->file('tour_online_icon_image'), 'uploads/admin/tour');
            $tour->tour_online_icon_image = $file_name;
        }
        if($request->hasFile('tour_package_icon_image'))
        {
            $file_name = $this->uploadImage($request->file('tour_package_icon_image'), 'uploads/admin/tour');
            $tour->tour_package_icon_image = $file_name;
        }
        if($request->hasFile('tour_service_icon_image'))
        {
            $file_name = $this->uploadImage($request->file('tour_service_icon_image'), 'uploads/admin/tour');
            $tour->tour_service_icon_image = $file_name;
        }
        if($request->hasFile('tour_overview_image1'))
        {
            $file_name = $this->uploadImage($request->file('tour_overview_image1'), 'uploads/admin/tour');
            $tour->tour_overview_image1 = $file_name;
        }
        if($request->hasFile('tour_overview_image2'))
        {
            $file_name = $this->uploadImage($request->file('tour_overview_image2'), 'uploads/admin/tour');
            $tour->tour_overview_image2 = $file_name;
        }

        $tour->save();
        if($tour->id)
        {
            
           
            

            if($request->tour_overview_description1)
            {
                foreach($request->tour_overview_description1 as $key => $desc1)
                {
                    $tour_overview_desc = new TourOverviewDescription;
                    $tour_overview_desc->tour_id = $tour->id;
                    $tour_overview_desc->tour_overview_description1 = $desc1;
                    $tour_overview_desc->save();
                }
            }

            if($request->tour_overview_description2)
            {
                foreach($request->tour_overview_description2 as $key => $desc2)
                {
                    $tour_overview_desc2 = new TourOverviewDescription2;
                    $tour_overview_desc2->tour_id = $tour->id;
                    $tour_overview_desc2->tour_overview_description2 = $desc2;
                    $tour_overview_desc2->save();
                }
            }

            if($request->tour_tabs_title)
            {
                foreach($request->tour_tabs_title as $key => $title)
                {
                    $tour_tabs = new TourTabs;
                    $tour_tabs->tour_id = $tour->id;
                    $tour_tabs->tour_tabs_title = $title;
                    $tour_tabs->save();
                    if($tour_tabs->id)
                    {
                        foreach($request->tour_tabs_desc[$key] as $key2 => $desc)
                        {
                            $tour_tabs_desc = new TourTabsDescription;
                            $tour_tabs_desc->tour_tab_id = $tour_tabs->id;
                            $tour_tabs_desc->tour_tabs_desc = $request->tour_tabs_desc[$key][$key2];
                            $tour_tabs_desc->save();
                        }
                    }
                }
            }

            if ($request->tour_slider_tag && $request->tour_slider_title) {
                foreach ($request->tour_slider_tag as $key => $slider) {
                    $tour_slider = new TourSlider;
                    $tour_slider->tour_id = $tour->id;
                    $tour_slider->tour_slider_tag = $request->tour_slider_tag[$key];
                    $tour_slider->tour_slider_title = $request->tour_slider_title[$key];
                    $tour_slider->tour_slider_short_desc = $request->tour_slider_short_desc[$key];
        
                    if ($request->hasFile("tour_slider_image.$key")) {
                        $file_name = $this->uploadImage($request->file("tour_slider_image.$key"), 'uploads/admin/tour');
                        $tour_slider->tour_slider_image = $file_name;
                    }
        
                    $tour_slider->save();
                }
            }
        }

        session()->flash('message', 'Tour have been saved successfully.');
    return redirect('/admin/tours/create');

    }


    // Private Functions
    private function uploadImage($image, $path)
    {
        $ext = $image->getClientOriginalExtension();
        $file_name = time() . '_' . Str::uuid() . '.' . $ext;
        $image->storeAs($path, $file_name, 'public');
        return $file_name;
    }
}
