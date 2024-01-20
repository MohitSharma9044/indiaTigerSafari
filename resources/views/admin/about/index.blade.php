@extends('admin.layouts.app')
@section('title', 'About Us')

@section('content')

<div class="row py-4">
    <h4 class="mb-3">Manage About Us</h4>
    @if(session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
        <form action="{{ route('admin.save-about') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="about_id" value="{{ $about_us->id ?? '' }}">
        <div class="mb-3">
            <label for="main_heading" class="form-label">Main Heading</label>
            <input type="text" class="form-control @error('main_heading')is-invalid @enderror" id="main_heading" value="{{ $about_us->main_heading ?? '' }}" placeholder="Main Heading" name="main_heading">
            @error('main_heading') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="main_content" class="form-label">Main Content</label>
            <textarea class="form-control" id="main_content" placeholder="Main Contrnt" name="main_content" rows="4">{{ $about_us->main_content ?? '' }}</textarea>
        </div>

        <div class="mb-3">
            <label for="main_image" class="form-label">Main Image</label>
            <div class="cpImg">
                @if($about_us->main_image)
                <img src="{{ asset('storage/uploads/admin/about/'.$about_us->main_image) }}" alt="{{ $about_us->main_heading ?? '' }}">
                @else
                <img src="{{ asset('admin_assets/images/default-bg.jpg') }}" alt="Main Heading">
                @endif
            </div>
            <input type="file" class="form-control" id="main_image" name="main_image">
        </div>

        <div class="mb-3">
            <label for="sub_heading_tag" class="form-label">Sub Heading Tag</label>
            <input type="text" class="form-control" id="sub_heading_tag" value="{{ $about_us->sub_heading_tag ?? '' }}" placeholder="Sub Heading Tag" name="sub_heading_tag">
        </div>

        <div class="mb-3">
            <label for="sub_heading" class="form-label">Sub Heading</label>
            <input type="text" class="form-control" id="sub_heading" value="{{ $about_us->sub_heading ?? '' }}" placeholder="Sub Heading" name="sub_heading">
        </div>

        <div class="mb-3">
            <label for="sub_content" class="form-label">Sub Content</label>
            <input type="text" class="form-control" id="sub_content" value="{{ $about_us->sub_content ?? '' }}" placeholder="Sub Content" name="sub_content">
        </div>

        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label for="heading1" class="form-label">Heading 1</label>
                    <input type="text" class="form-control" id="heading1" value="{{ $about_us->heading1 ?? '' }}" placeholder="Heading 1" name="heading1">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label for="content1" class="form-label">Content 1</label>
                    <input type="text" class="form-control" id="content1" value="{{ $about_us->content1 ?? '' }}" placeholder="Content 1" name="content1">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label for="heading2" class="form-label">Heading 2</label>
                    <input type="text" class="form-control" id="heading2" value="{{ $about_us->heading2 ?? '' }}" placeholder="Heading 2" name="heading2">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-3">
                    <label for="content2" class="form-label">Content 2</label>
                    <input type="text" class="form-control" id="content2" value="{{ $about_us->content2 ?? '' }}" placeholder="Content 2" name="content2">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="banner_image" class="form-label">Banner Image</label>
            <div class="cpImg">
            @if($about_us->banner_image)
                <img src="{{ asset('storage/uploads/admin/about/'.$about_us->banner_image) }}" alt="{{ $about_us->main_heading ?? '' }}">
                @else
                <img src="{{ asset('admin_assets/images/default-bg.jpg') }}" alt="Main Heading">
                @endif
            </div>
            <input type="file" class="form-control" id="banner_image" name="banner_image">
        </div>

            <div class="moreContentBox">
                @if($about_us->descriptions)
                @foreach($about_us->descriptions as $key => $description)
                <div class="row" id="content_{{$key}}">
                    <div class="col-md-10">
                        <div class="mb-3">
                            <label for="ext_content_{{$key}}" class="form-label">More Content</label>
                            <input type="hidden" name="description_id[]" value="{{$description->id}}">
                            <textarea class="form-control" id="ext_content_{{$key}}" placeholder="More Content" name="ext_content[]" rows="3">{{$description->description}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="mb-3">
                        <label class="form-label">Action</label>
                        @if($key > 0)
                            <button type="button" class="btn btn-danger d-block" onclick="removeContent('{{ $description->id }}', '{{ $key }}');">Remove</button>
                            @else
                            <button type="button" class="btn btn-primary d-block" onclick="addmoreContent();">Add More</button>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <button type="submit" class="btn btn-success mb-3">Submit</button>
        </form>
    </div>
</div>
               
@endsection

@section('scripts')

<script>
    let index = {{count($about_us->descriptions) - 1}};
    function addmoreContent()
    {
        index++;
        let html = `<div class="row" id="content_${index}">
                    <div class="col-md-10">
                        <div class="mb-3">
                            <input type="hidden" name="description_id[]" value="">
                            <textarea class="form-control" id="ext_content_${index}" placeholder="More Content" name="ext_content[]" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="mb-3">
                            <button type="button" class="btn btn-danger d-block" onclick="removeContent('0', '${index}');">Remove</button>
                        </div>
                    </div>
                </div>`;

            $('.moreContentBox').append(html);
    }


    function removeContent(id, index) {
    if (id > 0) {
        $.ajax({
            type: 'DELETE',
            url: '/admin/remove-content/' + id,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                window.location.reload();
            },
            error: function (xhr, status, error) {
                // Handle error here if needed
                console.error('Error removing content:', error);
            }
        });
    } else {
        $('#content_' + index).remove();
        index--;
    }
}
</script>

@endsection