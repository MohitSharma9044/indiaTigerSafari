@extends('admin.layouts.app')
@section('title', 'Jeep Safari')

@section('content')

<div class="row py-4">
    <h4 class="mb-3">Manage Jeep Safari</h4>
    @if(session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
        <form action="{{ route('admin.save-jeep-safari') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="jeep_image_1" class="form-label">Image 1</label>
                        <input type="file" class="form-control @error('jeep_image_1')is-invalid @enderror" id="jeep_image_1" name="jeep_image_1" >
                        @error('jeep_image_1') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="jeep_button_text_1" class="form-label">Button Text</label>
                        <input type="text" class="form-control @error('jeep_button_text_1')is-invalid @enderror" id="jeep_button_text_1" placeholder="Button Text" name="jeep_button_text_1" value="{{$jeep->jeep_button_text_1}}">
                        @error('jeep_button_text_1') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="jeep_button_link_1" class="form-label">Button Link</label>
                        <input type="text" class="form-control @error('jeep_button_link_1')is-invalid @enderror" id="jeep_button_link_1" placeholder="Button Link" name="jeep_button_link_1" value="{{$jeep->jeep_button_link_1}}">
                        @error('jeep_button_link_1') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="jeep_image_2" class="form-label">Image 2</label>
                        <input type="file" class="form-control @error('jeep_image_2')is-invalid @enderror" id="jeep_image_2" name="jeep_image_2" >
                        @error('jeep_image_2') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="jeep_button_text_2" class="form-label">Button Text</label>
                        <input type="text" class="form-control @error('jeep_button_text_2')is-invalid @enderror" id="jeep_button_text_2" placeholder="Button Text 2" name="jeep_button_text_2" value="{{$jeep->jeep_button_text_2}}">
                        @error('jeep_button_text_2') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="jeep_button_link_2" class="form-label">Button Link</label>
                        <input type="text" class="form-control @error('jeep_button_link_2')is-invalid @enderror" id="jeep_button_link_2" placeholder="Button Link 2" name="jeep_button_link_2" value="{{$jeep->jeep_button_link_2}}">
                        @error('jeep_button_link_2') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                
            </div>

            <div class="jeepSafariBox">
                @if($jeep)
                    @foreach($jeep->titles as $key => $titles)
                        <div class="row item" id="jeepItem{{$key}}">
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label for="jeep_title_{{$key}}" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('jeep_title.'.$key)is-invalid @enderror" id="jeep_title_{{$key}}" placeholder="Title" name="jeep_title[]" value="{{ $titles->jeep_title }}">
                                    @error('jeep_title.'.$key) <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="jeepSafariDescBox" id="jeepItemDesc{{$key}}">
                                    @if($titles->descriptions)
                                        @foreach($titles->descriptions as $key2 => $description)
                                            <div class="row" id="jeepItemDescItem{{$key}}{{$key2}}">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="jeep_description_{{$key}}_{{$key2}}" class="form-label">Description</label>
                                                        <textarea class="form-control @error('jeep_description.'.$key.'.'.$key2)is-invalid @enderror" id="jeep_description_{{$key}}_{{$key2}}" placeholder="Description" name="jeep_description[{{$key}}][]">{{ $description->jeep_description }}</textarea>
                                                        @error('jeep_description.'.$key.'.'.$key2) <span class="invalid-feedback">{{ $message }}</span> @enderror
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
                                        <button class="btn btn-success" type="button" onclick="addMoreJeep();">Add More</button>
                                    @else
                                        <button class="btn btn-danger" type="button" onclick="removeJeep({{$key}}, {{ $titles->id }});">Remove</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                <div class="row item" id="jeepItem0">
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label for="jeep_title_0" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('jeep_title0')is-invalid @enderror" id="jeep_title_0" placeholder="Title" name="jeep_title[]" value="">
                                    @error('jeep_title.0') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="jeepSafariDescBox" id="jeepItemDesc0">
                                            <div class="row" id="jeepItemDescItem00">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="jeep_description_0_0" class="form-label">Description</label>
                                                        <textarea class="form-control @error('jeep_description00')is-invalid @enderror" id="jeep_description_0_0" placeholder="Description" name="jeep_description[0][]"></textarea>
                                                        @error('jeep_description.0.0') <span class="invalid-feedback">{{ $message }}</span> @enderror
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
                                        <button class="btn btn-success" type="button" onclick="addMoreJeep();">Add More</button>
                                </div>
                            </div>
                        </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="banner_image" class="form-label">Banner Image</label>
                <div class="cpImg">
                    @if($jeep)
                        <img src="{{ asset('storage/uploads/admin/jeep/'.$jeep->banner_image) }}" alt="">
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
    let jeep = {{$jeep ? count($jeep->titles)-1 : 0}};
    let desc = 0;

    function addMoreJeep() {
        jeep++;
        let html = `<div class="row item" id="jeepItem${jeep}">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label for="jeep_title_${jeep}" class="form-label">Title</label>
                                <input type="text" class="form-control" id="jeep_title_${jeep}" placeholder="Title" name="jeep_title[]">
                            </div>
                            <div class="jeepSafariDescBox" id="jeepItemDesc${jeep}">
                                <div class="row" id="jeepItemDescItem${jeep}0">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="jeep_description${jeep}0" class="form-label">Description</label>
                                            <textarea class="form-control" id="jeep_description${jeep}0" placeholder="Description" name="jeep_description[${jeep}][]"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="add_more_desc" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                            <button class="btn btn-success" type="button" onclick="addMoreDescription(${jeep});">Add Desc</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="add_more" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                <button class="btn btn-danger" type="button" onclick="removeJeep(${jeep}, '0');">Remove</button>
                            </div>
                        </div>
                    </div>`;
        $('.jeepSafariBox').append(html);
    }

    function addMoreDescription(jeep) {
        desc++;
        let html = `<div class="row" id="jeepItemDescItem${jeep}${desc}">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label for="jeep_description${jeep}${desc}" class="form-label">Description</label>
                                <textarea class="form-control" id="jeep_description${jeep}${desc}" placeholder="Description" name="jeep_description[${jeep}][]"></textarea>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="add_more_desc" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                <button class="btn btn-danger" type="button" onclick="removeDescription(${jeep}, ${desc}, '0');">Remove</button>
                            </div>
                        </div>
                    </div>`;
        $('#jeepItemDesc' + jeep).append(html);
    }

    function removeJeep(key, id) {
        if (id != 0) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            $.ajax({
                url: "{{route('admin.jeep.title.delete')}}",
                method: "POST",
                type: "POST",
                data: {jeep_id: id},
                success: function (res) {
                    if (res.status == true) {
                        alertify.notify(res.message, 'success', 5);
                        $('#jeepItem' + key).remove();
                    }
                }
            });
        } else {
            $('#jeepItem' + key).remove();
            jeep--;
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
                url: "{{route('admin.jeep.desc.delete')}}",
                method: "POST",
                type: "POST",
                data: {desc_id: id},
                success: function (res) {
                    if (res.status == true) {
                        alertify.notify(res.message, 'success', 5);
                        $('#jeepItemDescItem' + key + '' + key2).remove();
                    }
                }
            });
        } else {
            $('#jeepItemDescItem' + key + '' + key2).remove();
            desc--;
        }
    }
</script>

@endsection
