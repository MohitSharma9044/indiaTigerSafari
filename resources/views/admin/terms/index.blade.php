@extends('admin.layouts.app')
@section('title', 'Terms & Condition')

@section('content')

<div class="row py-4">
    <h4 class="mb-3">Manage Terms & Conditions</h4>
    @if(session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
        <form action="{{ route('admin.save-terms-and-condition') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="termsConditionBox">
                @if($terms)
                    @foreach($terms->titles as $key => $titles)
                        <div class="row item" id="termsItem{{$key}}">
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label for="terms_title_{{$key}}" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('terms_title.'.$key)is-invalid @enderror" id="terms_title_{{$key}}" placeholder="Title" name="terms_title[]" value="{{ $titles->terms_title }}">
                                    @error('terms_title.'.$key) <span class="invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="termsConditionDescBox" id="termsItemDesc{{$key}}">
                                    @if($titles->descriptions)
                                        @foreach($titles->descriptions as $key2 => $description)
                                            <div class="row" id="termsItemDescItem{{$key}}{{$key2}}">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label for="terms_description_{{$key}}_{{$key2}}" class="form-label">Description</label>
                                                        <textarea class="form-control @error('terms_description.'.$key.'.'.$key2)is-invalid @enderror" id="terms_description_{{$key}}_{{$key2}}" placeholder="Description" name="terms_description[{{$key}}][]">{{ $description->terms_description }}</textarea>
                                                        @error('terms_description.'.$key.'.'.$key2) <span class="invalid-feedback">{{ $message }}</span> @enderror
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
                                        <button class="btn btn-success" type="button" onclick="addMoreTerms();">Add More</button>
                                    @else
                                        <button class="btn btn-danger" type="button" onclick="removeTerms({{$key}}, {{ $titles->id }});">Remove</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="mb-3">
                <label for="banner_image" class="form-label">Banner Image</label>
                <div class="cpImg">
                    @if($terms)
                        <img src="{{ asset('storage/uploads/admin/terms/'.$terms->banner_image) }}" alt="">
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
    let terms = {{count($terms->titles) ? count($terms->titles)-1 : 0}};
    let desc = 0;

    function addMoreTerms() {
        terms++;
        let html = `<div class="row item" id="termsItem${terms}">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label for="terms_title_${terms}" class="form-label">Title</label>
                                <input type="text" class="form-control" id="terms_title_${terms}" placeholder="Title" name="terms_title[]">
                            </div>
                            <div class="termsConditionDescBox" id="termsItemDesc${terms}">
                                <div class="row" id="termsItemDescItem${terms}0">
                                    <div class="col-md-10">
                                        <div class="mb-3">
                                            <label for="terms_description${terms}0" class="form-label">Description</label>
                                            <textarea class="form-control" id="terms_description${terms}0" placeholder="Description" name="terms_description[${terms}][]"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="add_more_desc" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                            <button class="btn btn-success" type="button" onclick="addMoreDescription(${terms});">Add Desc</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="add_more" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                <button class="btn btn-danger" type="button" onclick="removeTerms(${terms}, '0');">Remove</button>
                            </div>
                        </div>
                    </div>`;
        $('.termsConditionBox').append(html);
    }

    function addMoreDescription(terms) {
        desc++;
        let html = `<div class="row" id="termsItemDescItem${terms}${desc}">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label for="terms_description${terms}${desc}" class="form-label">Description</label>
                                <textarea class="form-control" id="terms_description${terms}${desc}" placeholder="Description" name="terms_description[${terms}][]"></textarea>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="add_more_desc" class="d-block">&nbsp;&nbsp;&nbsp;</label>
                                <button class="btn btn-danger" type="button" onclick="removeDescription(${terms}, ${desc}, '0');">Remove</button>
                            </div>
                        </div>
                    </div>`;
        $('#termsItemDesc' + terms).append(html);
    }

    function removeTerms(key, id) {
        if (id != 0) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            $.ajax({
                url: "{{route('admin.terms.title.delete')}}",
                method: "POST",
                type: "POST",
                data: {terms_id: id},
                success: function (res) {
                    if (res.status == true) {
                        alertify.notify(res.message, 'success', 5);
                        $('#termsItem' + key).remove();
                    }
                }
            });
        } else {
            $('#termsItem' + key).remove();
            terms--;
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
                url: "{{route('admin.terms.desc.delete')}}",
                method: "POST",
                type: "POST",
                data: {desc_id: id},
                success: function (res) {
                    if (res.status == true) {
                        alertify.notify(res.message, 'success', 5);
                        $('#termsItemDescItem' + key + '' + key2).remove();
                    }
                }
            });
        } else {
            $('#termsItemDescItem' + key + '' + key2).remove();
            desc--;
        }
    }
</script>

@endsection
