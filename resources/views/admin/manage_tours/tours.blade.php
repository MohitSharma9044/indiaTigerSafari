@extends('admin.layouts.app')
@section('title', 'Manage Tours')

@section('content')

<div class="row py-4">
    <h4 class="mb-3">Manage Tours</h4>
    @if(session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
        <form action="{{ route('admin.save-pay-now') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="tour_name" class="form-label">Tour Name</label>
                <input type="text" class="form-control @error('tour_name')is-invalid @enderror" id="tour_name" placeholder="Tour Name" name="tour_name">
                @error('tour_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <h4>Sliders Section</h4>
            <div class="slidersSectionBox">
                <div class="row" id="sliderItem_0">
                    <div class="col-md-2">
                        <label for="tour_slider_image" class="form-label">Slider Image</label>
                        <input type="file" class="form-control @error('tour_slider_image')is-invalid @enderror" id="tour_slider_image" name="tour_slider_image[]">
                        @error('tour_slider_image') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="tour_slider_tag" class="form-label">Slider Tag</label>
                        <input type="text" class="form-control @error('tour_slider_tag')is-invalid @enderror" id="tour_slider_tag" placeholder="Slider Tag" name="tour_slider_tag[]">
                        @error('tour_slider_tag') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="tour_slider_title" class="form-label">Slider Title</label>
                        <input type="text" class="form-control @error('tour_slider_title')is-invalid @enderror" id="tour_slider_title" placeholder="Slider Title" name="tour_slider_title[]">
                        @error('tour_slider_title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="tour_slider_short_desc" class="form-label">Slider Short Description</label>
                        <input type="text" class="form-control @error('tour_slider_short_desc')is-invalid @enderror" id="tour_slider_short_desc" placeholder="Slider Short Description" name="tour_slider_short_desc[]">
                        @error('tour_slider_short_desc') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-1">
                        <label for="tour_slider_short_desc" class="form-label d-block">Action</label>
                        <button type="button" class="btn btn-info btn-sm" onclick="addMoreSliders();">Add</button>
                    </div>
                </div>
            </div>

            <h4>Booking Section</h4>
            <div class="overviewSectionBox">
                <div class="row">
                    <div class="col-md-4">
                        <label for="tour_online_icon_image" class="form-label">Online Icon</label>
                        <input type="file" class="form-control @error('tour_online_icon_image')is-invalid @enderror" id="tour_online_icon_image" name="tour_online_icon_image">
                        @error('tour_online_icon_image') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="tour_online_title" class="form-label">Online Title</label>
                        <input type="text" class="form-control @error('tour_online_title')is-invalid @enderror" id="tour_online_title" name="tour_online_title" placeholder="Online Title">
                        @error('tour_online_title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="tour_online_short_desc" class="form-label">Online Short Description</label>
                        <input type="text" class="form-control @error('tour_online_short_desc')is-invalid @enderror" id="tour_online_short_desc" name="tour_online_short_desc" placeholder="Online Short Description">
                        @error('tour_online_short_desc') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="tour_package_icon_image" class="form-label">Package Icon Image</label>
                        <input type="file" class="form-control @error('tour_package_icon_image')is-invalid @enderror" id="tour_package_icon_image" name="tour_package_icon_image">
                        @error('tour_package_icon_image') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="tour_package_title" class="form-label">Package Title</label>
                        <input type="text" class="form-control @error('tour_package_title')is-invalid @enderror" id="tour_package_title" name="tour_package_title" placeholder="Package Title">
                        @error('tour_package_title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="tour_package_short_desc" class="form-label">Package Short Description</label>
                        <input type="text" class="form-control @error('tour_package_short_desc')is-invalid @enderror" id="tour_package_short_desc" name="tour_package_short_desc" placeholder="Package Short Description">
                        @error('tour_package_short_desc') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="tour_service_icon_image" class="form-label">Service Icon Image</label>
                        <input type="file" class="form-control @error('tour_service_icon_image')is-invalid @enderror" id="tour_service_icon_image" name="tour_service_icon_image">
                        @error('tour_service_icon_image') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="tour_service_title" class="form-label">Service Title</label>
                        <input type="text" class="form-control @error('tour_service_title')is-invalid @enderror" id="tour_service_title" name="tour_service_title" placeholder="Service Title">
                        @error('tour_service_title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="tour_service_short_desc" class="form-label">Service Short Description</label>
                        <input type="text" class="form-control @error('tour_service_short_desc')is-invalid @enderror" id="tour_service_short_desc" name="tour_service_short_desc" placeholder="Service Short Description">
                        @error('tour_service_short_desc') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>


            <h4>Overview Section</h4>

            <div class="overviewSectionBox">
                <div class="row">
                    <div class="col-md-6">
                        <label for="tour_overview_title1" class="form-label">Overview Title 1</label>
                        <input type="text" class="form-control @error('tour_overview_title1')is-invalid @enderror" id="tour_overview_title1" name="tour_overview_title1" placeholder="Overview Title 1">
                        @error('tour_overview_title1') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="tour_overview_image1" class="form-label">Overview Image 1</label>
                        <input type="file" class="form-control @error('tour_overview_image1')is-invalid @enderror" id="tour_overview_image1" name="tour_overview_image1">
                        @error('tour_overview_image1') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="overviewDescriptionBox1">
                        <div class="row" id="overviewDescItem1_0">
                            <div class="col-md-10">
                                <label for="tour_overview_description1" class="form-label">Overview Description</label>
                                <textarea class="form-control @error('tour_overview_description1.0')is-invalid @enderror" id="tour_overview_description1" name="tour_overview_description1[]" placeholder="Overview Description 1" rows="2"></textarea>
                                @error('tour_overview_description1.0') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-2">
                            <label for="tour_overview_description1" class="form-label d-block">&nbsp;&nbsp;</label>
                            <button type="button" class="btn btn-primary btn-sm" onclick="addOverviewDesc1();">Add Desc 1</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="tour_overview_title2" class="form-label">Overview Title 2</label>
                        <input type="text" class="form-control @error('tour_overview_title2')is-invalid @enderror" id="tour_overview_title2" name="tour_overview_title2" placeholder="Overview Title 2">
                        @error('tour_overview_title2') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="tour_overview_image2" class="form-label">Overview Image 2</label>
                        <input type="file" class="form-control @error('tour_overview_image2')is-invalid @enderror" id="tour_overview_image2" name="tour_overview_image2">
                        @error('tour_overview_image2') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="overviewDescriptionBox2">
                        <div class="row" id="overviewDescItem2_0">
                            <div class="col-md-10">
                                <label for="tour_overview_description2_0" class="form-label">Overview Description</label>
                                <textarea class="form-control @error('tour_overview_description2.0')is-invalid @enderror" id="tour_overview_description2_0" name="tour_overview_description2[]" placeholder="Overview Description 2" rows="2"></textarea>
                                @error('tour_overview_description2.0') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-2">
                                <label for="tour_overview_description1" class="form-label d-block">&nbsp;&nbsp;</label>
                                <button type="button" class="btn btn-primary btn-sm" onclick="addOverviewDesc2();">Add Desc 2</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Overview Tabs Section</h4>

            <div class="overviewTabsSectionBox">
                <div class="row" id="overviewTabsItem_0">
                    <div class="col-md-10">
                        <label for="tour_tabs_title_0" class="form-label">Tabs Title</label>
                        <input type="text" class="form-control @error('tour_tabs_title.0')is-invalid @enderror" id="tour_tabs_title_0" name="tour_tabs_title[]" placeholder="Tabs Title">
                        @error('tour_tabs_title.0') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="tour_tabs_0" class="form-label d-block">&nbsp;&nbsp;</label>
                        <button type="button" class="btn btn-primary btn-sm" onclick="addTabs();">Add Tabs</button>
                    </div>
                    <div class="overviewTabsDescBox">
                        <div class="row" id="overviewTabsDesc_0">
                            <div class="col-md-10">
                                <label for="tour_tabs_desc_0" class="form-label">Overview Description</label>
                                <textarea class="form-control @error('tour_tabs_desc.0')is-invalid @enderror" id="tour_tabs_desc_0" name="tour_tabs_desc[0][]" placeholder="Tabs Description" rows="2"></textarea>
                                @error('tour_tabs_desc.0') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-2">
                                <label for="tour_tabs_action_0" class="form-label d-block">&nbsp;&nbsp;</label>
                                <button type="button" class="btn btn-primary btn-sm" onclick="addTabsDesc('0');">Add Tabs Desc</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        
            <button type="submit" class="btn btn-success mb-3">Submit</button>
        </form>
    </div>
</div>
               
@endsection


@section('scripts')
<script>
    let slider = 0;
    function addMoreSliders()
    {
        slider++;
        let html = `<div class="row" id="sliderItem_${slider}">
                    <div class="col-md-2">
                        <input type="file" class="form-control @error('tour_slider_image')is-invalid @enderror" name="tour_slider_image[]">
                        @error('tour_slider_image') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control @error('tour_slider_tag')is-invalid @enderror" id="tour_slider_tag" placeholder="Slider Tag" name="tour_slider_tag[]">
                        @error('tour_slider_tag') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control @error('tour_slider_title')is-invalid @enderror" id="tour_slider_title" placeholder="Slider Title" name="tour_slider_title[]">
                        @error('tour_slider_title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control @error('tour_slider_short_desc')is-invalid @enderror" id="tour_slider_short_desc" placeholder="Slider Short Description" name="tour_slider_short_desc[]">
                        @error('tour_slider_short_desc') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-danger btn-sm" onclick="removeSliders('${slider}');">Del</button>
                    </div>
                </div>`;
        $('.slidersSectionBox').append(html);
    }

    function removeSliders(slider)
    {
        $('#sliderItem_'+slider).remove();
        slider--;
    }
</script>

@endsection