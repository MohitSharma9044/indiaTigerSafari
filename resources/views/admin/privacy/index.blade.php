@extends('admin.layouts.app')
@section('title', 'Privacy Policy')

@section('content')

<div class="row py-4">
    <h4 class="mb-3">Manage Privacy Policy</h4>
    @if(session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
        <form action="{{ route('admin.save-privacy-policy') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="privacyPolicyBox">
                @if($privacy)
                    @foreach($privacy->titles as $key => $titles)
                        <div class="row item" id="privacyItem{{$key}}">
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label for="privacy_title_{{$key}}" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('privacy_title.'.$key)is-invalid @enderror" id="privacy_title_{{$key}}" placeholder="Title" name="privacy_title[]" value="{{ $titles->privacy_title }}">
                                    @error('privacy_title.'.$key) <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="privacyPolicyDescBox" id="privacyItemDesc{{$key}}">
                                    @if($titles->descriptions)
                                        @foreach($titles->descriptions as $key2 => $description)
                                            <div class="row" id="privacyItemDescItem{{$key}}{{$key2}}">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="privacy_description_{{$key}}_{{$key2}}" class="form-label">Description</label>
                                                        <textarea class="form-control @error('privacy_description.'.$key.'.'.$key2)is-invalid @enderror" id="privacy_description_{{$key}}_{{$key2}}" placeholder="Description" name="privacy_description[{{$key}}][]">{{ $description->privacy_description }}</textarea>
                                                        @error('privacy_description.'.$key.'.'.$key2) <span class="invalid-feedback">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label for="add_more_desc" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                                        @if($key2 < 1)
                                                            <button class="btn btn-success" type="button" onclick="addMoreDescription({{$key}});">Add Desc</button>
                                                        @else
                                                            <button class="btn btn-danger" type="button" onclick="removeDescription({{$key}}, {{$key2}}, {{ $description->id }});">Remove</button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="add_more" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                    @if($key < 1)
                                        <button class="btn btn-success" type="button" onclick="addMorePrivacy();">Add More</button>
                                    @else
                                        <button class="btn btn-danger" type="button" onclick="removePrivacy({{$key}}, {{ $titles->id }});">Remove</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                <div class="row item" id="privacyItem0">
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label for="privacy_title_0" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('privacy_title0')is-invalid @enderror" id="privacy_title_0" placeholder="Title" name="privacy_title[]" value="">
                                    @error('privacy_title.0') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="privacyPolicyDescBox" id="privacyItemDesc0">
                                            <div class="row" id="privacyItemDescItem00">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="privacy_description_0_0" class="form-label">Description</label>
                                                        <textarea class="form-control @error('privacy_description00')is-invalid @enderror" id="privacy_description_0_0" placeholder="Description" name="privacy_description[0][]"></textarea>
                                                        @error('privacy_description.0.0') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label for="add_more_desc" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                                            <button class="btn btn-success" type="button" onclick="addMoreDescription(0);">Add Desc</button>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="add_more" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                        <button class="btn btn-success" type="button" onclick="addMorePrivacy();">Add More</button>
                                </div>
                            </div>
                        </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="banner_image" class="form-label">Banner Image</label>
                <div class="cpImg">
                    @if($privacy)
                        <img src="{{ asset('storage/uploads/admin/policy/'.$privacy->banner_image) }}" alt="">
                    @else
                        <img src="{{ asset('admin_assets/images/default-bg.jpg') }}" alt="">
                    @endif
                </div>
                <input type="file" class="form-control" id="banner_image" name="banner_image">
            </div>
            <button type="submit" class="btn btn-success mb-3">Submit</button>
        </form>
    </div>
</div>

@endsection


@section('scripts')
<script>
    let privacy = {{$privacy ? count($privacy->titles)-1 : 0}};
    let desc = 0;

    function addMorePrivacy() {
        privacy++;
        let html = `<div class="row item" id="privacyItem${privacy}">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label for="privacy_title_${privacy}" class="form-label">Title</label>
                                <input type="text" class="form-control" id="privacy_title_${privacy}" placeholder="Title" name="privacy_title[]">
                            </div>
                            <div class="privacyPolicyDescBox" id="privacyItemDesc${privacy}">
                                <div class="row" id="privacyItemDescItem${privacy}0">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="privacy_description${privacy}0" class="form-label">Description</label>
                                            <textarea class="form-control" id="privacy_description${privacy}0" placeholder="Description" name="privacy_description[${privacy}][]"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="add_more_desc" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                            <button class="btn btn-success" type="button" onclick="addMoreDescription(${privacy});">Add Desc</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="add_more" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                <button class="btn btn-danger" type="button" onclick="removePrivacy(${privacy}, '0');">Remove</button>
                            </div>
                        </div>
                    </div>`;
        $('.privacyPolicyBox').append(html);
    }

    function addMoreDescription(privacy) {
        desc++;
        let html = `<div class="row" id="privacyItemDescItem${privacy}${desc}">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label for="privacy_description${privacy}${desc}" class="form-label">Description</label>
                                <textarea class="form-control" id="privacy_description${privacy}${desc}" placeholder="Description" name="privacy_description[${privacy}][]"></textarea>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="add_more_desc" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                <button class="btn btn-danger" type="button" onclick="removeDescription(${privacy}, ${desc}, '0');">Remove</button>
                            </div>
                        </div>
                    </div>`;
        $('#privacyItemDesc' + privacy).append(html);
    }

    function removePrivacy(key, id) {
        if (id != 0) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            $.ajax({
                url: "{{route('admin.privacy.title.delete')}}",
                method: "POST",
                type: "POST",
                data: {privacy_id: id},
                success: function (res) {
                    if (res.status == true) {
                        alertify.notify(res.message, 'success', 5);
                        $('#privacyItem' + key).remove();
                    }
                }
            });
        } else {
            $('#privacyItem' + key).remove();
            privacy--;
        }
    }

    function removeDescription(key, key2, id) {
        if (id != 0) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            $.ajax({
                url: "{{route('admin.privacy.desc.delete')}}",
                method: "POST",
                type: "POST",
                data: {desc_id: id},
                success: function (res) {
                    if (res.status == true) {
                        alertify.notify(res.message, 'success', 5);
                        $('#privacyItemDescItem' + key + '' + key2).remove();
                    }
                }
            });
        } else {
            $('#privacyItemDescItem' + key + '' + key2).remove();
            desc--;
        }
    }
</script>

@endsection
