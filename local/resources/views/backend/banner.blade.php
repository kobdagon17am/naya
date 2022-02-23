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

<!-- Main-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-md-12">
            <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;Banner</h4>
            <div class="card">
                <div class="card-header card_head_modify">
                    <div class="row mt-2">
                        <div class="col-md-10">
                            <h5 class="pull-left pt-1" style="font-size: 18px;">Banner List</h5>
                        </div>
                        <div class="col-md-2">
                            <button onclick="modal()" class="btn btn-primary form-control"><i class="fa fa-plus" aria-hidden="true"></i>Add</button>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="dt-responsive table-responsive">
                            <table id="table_data" style="width:100%;" class="table table-striped table-bordered nowrap">
                                <thead class="thead_txt_center">
                                    <tr style="width:100%;">
                                        <th>#</th>
                                        <th>Img</th>
                                        <th>Slide No.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody_txt_center">
                                    @foreach ($banner as $item => $value)
                                    <tr>
                                        <td>{{ $item+1 }}</td>
                                        <td> <img style="max-width:295px" src="{{ isset($value->banners_pic) ? asset('local/public/upload/banner/'.$value->banners_pic) : '' }}"></td>
                                        <td>Slide No. {{ isset($value->banners_slide_no) ? $value->banners_slide_no : '' }}
                                            <br> <button onclick="slide_no({{ $value->id  }})" class="btn btn-primary btn-round btn-mini"> แก้ไขลำดับสไลด์</button>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="offset-4 col-1">
                                                    {{-- <button onclick="edit_modal({{ $value->id }})" class="btn btn-info btn-round btn-mini">แก้ไข</button> --}}
                                                    <a href="{{ url('banner/edit/'.$value->id) }}">
                                                        <button class="btn btn-info btn-round btn-mini">แก้ไข</button>
                                                    </a>
                                                    <button onclick="del_user({{ $value->id }})" class="btn btn-danger btn-round btn-mini">ลบข้อมูล</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:70%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Picture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(['url'=>['banner/store'],'id'=>'gen_form','autocomplete'=>'off','enctype'=>'multipart/form-data']) }}
                <div class="card-block pt-1">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Link : </label>
                            <div class="col-md-10">
                                <input type="text" name="banners_link" id="banners_link" value="" class="form-control" placeholder="Link">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="">Picture <span style="color:red">** รูปภาพควรมีขนาด 1600 x 556 px **</span> </label>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="file" name="banner" id="input-file-now" class="dropify" data-default-file="{{ isset($banner->banners_pic) ? asset('local/public/upload/banner/'.$banner->banners_pic) : '' }}" />
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="id" id="id">

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" id="submit" class="btn btn-success form-control" style="width: 110px; margin-left: auto; margin-right: auto; display: block;">{{ isset($banner) ? 'Update' : 'Save'}}</button>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>


{{-- Slide No. Modal --}}
<div class="modal fade" id="slideModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:30%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Slide No.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(['url'=>['banner/slide/update'],'id'=>'gen_form','autocomplete'=>'off','enctype'=>'multipart/form-data']) }}
                <div class="card-block pt-1">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-left">Slide No. : </label>
                            <div class="col-md-8" id="show_slide_no">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="show_id" id="show_id">
                    {{-- <input type="hidden" name="show_pic" id="show_pic"> --}}

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" id="submit" class="btn btn-success form-control" style="width: 110px; margin-left: auto; margin-right: auto; display: block;">Save</button>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
        @endsection

        @section('js_back')
        <script src="{{ asset('local/public/files/bower_components/datatables.net/js/jquery.dataTables.min.js')  }}"></script>
        <script src="{{ asset('local/public/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')  }}"></script>
        <script src="{{ asset('local/public/files/bower_components/datatables.net-buttons/js/buttons.print.min.js')  }}"></script>
        <script src="{{ asset('local/public/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js')  }}"></script>
        <script src="{{ asset('local/public/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')  }}"></script>
        <script src="{{ asset('local/public/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')  }}"></script>
        <script src="{{ asset('local/public/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')  }}"></script>
        <script src="{{ asset('local/public/files/bower_components/lightbox2/js/lightbox.min.js') }}"></script>
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


            function slide_no(id) {
                $.ajax({
                    'type': 'post',
                    'url': "{{ url('banner/get/slide') }}",
                    'data': {
                        'id': id,
                        '_token': "{{csrf_token()}}"
                    },
                    'dataType': 'json',
                    'success': function(data) {
                        var option = '<select name="slide_no" class="form-control">';
                        for (var i = 0; i < data.count; i++) {
                            var slide = i + 1;
                            var selected = '';
                            if (data.banner.banners_slide_no == slide) {
                                selected = 'selected';
                            }
                            option += '<option value="' + slide + '" ' + selected + '> Slide No. ' + slide + '</option>';
                        }
                        option += '</select>';
                        $('#slideModal').modal();
                        $("#show_id").val(data.banner.id);
                        // $("#show_pic").val(data.banner.partner_banners_pic);
                        $('#show_slide_no').empty();
                        $('#show_slide_no').append(option);

                    }
                });
            }
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