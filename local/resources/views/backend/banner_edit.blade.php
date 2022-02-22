@extends('main_backend.maindash')

@section('title_back')
NAYA GREEN
@endsection

@section('styles_link')
<link rel="stylesheet" type="text/css" href="{{ asset('local/public/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('local/public/files/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('local/public/files/bower_components/lightbox2/css/lightbox.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('local/public/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
@endsection

@section('style_back')
@endsection

@section('mainbody_back')

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-md-12">
            <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;Banner</h4>
            <div class="card">
                <div class="card-header card_head_modify">
                    <div class="row mt-2">
                        <div class="col-md-10">
                            <h5 class="pull-left pt-1" style="font-size: 18px;">Banner Edit</h5>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ url('banners') }}">
                                <button class="btn btn-primary form-control"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</button>
                            </a>
                        </div>
                    </div>
                </div>
                {{ Form::open(['url'=>['banner/update'],'id'=>'gen_form','autocomplete'=>'off','enctype'=>'multipart/form-data']) }}
                <div class="card-block pt-1">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Link : </label>
                            <div class="col-md-10">
                                <input type="text" name="banners_link" id="banners_link" value="{{ isset($banner) ? $banner->banners_link : '' }}" class="form-control" placeholder="Link">
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-right">Picture :</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control form-control-primary" id="banner" name="banner" onchange='readURL1(this);' >
                                <span class="messages" ></span>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label text-right"></label>
                            <div class="col-md-9">
                                <img src="" id="img_building1" class="img-fluid img-responsive" style="width:150px;" >
                                <img id="imgshow">
                                <input type="hidden" class="form-control form-control-primary" name="imgold" id="imgold" > 
                            </div>
                        </div>
                    </div>  --}}


                    <div class="col-md-12 mt-2">
                        <label for="">Picture <span style="color:red">** รูปภาพควรมีขนาด 1600 x 556 px **</span> </label>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="file" name="banner" id="input-file-now" class="dropify" data-default-file="{{ isset($banner->banners_pic) ? asset('local/public/upload/banner/'.$banner->banners_pic) : '' }}" />
                            </div>
                        </div>
                    </div>


                    <input type="hidden" name="id" id="id" value="{{ isset($banner) ? $banner->id : '' }}">
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" id="submit" class="btn btn-success form-control">{{ isset($banner) ? 'Update' : 'Save'}}</button>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>
<!-- Page-body end -->
@endsection

@section('js_back')
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')  }}"></script>
<script src="{{ asset('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')  }}"></script>
<script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.print.min.js')  }}"></script>
<script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.html5.min.js')  }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')  }}"></script>
<script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')  }}"></script>
<script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')  }}"></script>
<script src="{{ asset('bower_components/lightbox2/js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/dropify.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_data').DataTable({});
        @if(!empty(Session::get('error')) AND Session::get('error') == 'error')
        swal({
            title: 'Duplicate Mission name',
            type: 'warning',
            confirmButtonColor: '#999999',
            confirmButtonText: 'Close'
        }).then((result) => {
            {
                {
                    Session::put('error', '-')
                }
            }
        })
        @endif
    });

    function modal() {
        $('#gen_form').attr('action', "{!! url('banner/store') !!}");
        //$('#banner').val('');
        $('#submit').text('Save');
        $('#exampleModal').modal('toggle');
    }

    function edit_modal(id) {
        $('#gen_form').attr('action', "{!! url('banner/update') !!}");
        $('#banners_link').val('');
        $('#submit').text('Update');
        $.ajax({
            type: "GET",
            url: "{!! url('banner/edit/" + id + "') !!}",
            success: function(data) {
                $('#banners_link').val(data['banners_link']);
                $('#id').val(data['id']);
            }
        });
        $('#exampleModal').modal('toggle');
    }

    function del_user(id) {
        swal({
            title: "ต้องการลบข้อมูลหรือไม่ ?",
            text: "การลบข้อมูลจะทำให้ข้อมูลหายไปอย่างถาวร",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "GET",
                    url: "{!! url('banner/delete/" + id + "') !!}",
                    success: function(data) {
                        swal({
                            title: "Sucess!",
                            text: "ลบข้อมูลสำเร็จ",
                            type: "success",
                        }).then(() => {
                            location.reload();
                        })
                    }
                });
            }
        })
    }

    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#img_building1').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    };
</script>
<script type="text/javascript">
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();
        // Used events  

        var drEvent = $('.dropify').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {

            return confirm("Do you really want to delete \"" + element.filename + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            input_name = event.target.name;
            input_file_name = element.filename
            id = "{{request()->id}}";
            $.ajax({
                url: "{{url('banner/delete_image')}}",
                data: {
                    input_name: input_name,
                    input_file_name: input_file_name,
                    id: id,
                    _token: "{{ csrf_token() }}",
                },
                type: 'POST'
            }).done(function(data) {
                if (data.status == 200) alert('File deleted');
            })
        });
    });
</script>

@endsection