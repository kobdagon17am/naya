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
<link rel="stylesheet" href="{{asset('local/public/files/bower_components/bootstrap-datepicker/css/bootstrap-datepicker3.standalone.min.css')}}">
@endsection

@section('style_back')
@endsection

@section('mainbody_back')
<!-- Main-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-md-12">
            <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;Edit News Type</h4>
            <div class="card">
                <div class="card-header card_head_modify">
                    <div class="row mt-2">
                        <div class="col-md-10">
                            <h5 class="pull-left pt-1" style="font-size: 18px;">Edit News Type</h5>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ url('new') }}">
                                <button class="btn btn-primary form-control"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
                            </a>
                        </div>
                    </div>
                </div>
                {{ Form::open(['url'=>['new/update'],'id'=>'gen_form','autocomplete'=>'off','enctype'=>'multipart/form-data']) }}
                <div class="card-block pt-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">title : </label>
                                <div class="col-md-10">
                                    <input type="text" name="title" id="title" required value="{{ isset($news[0]) ? $news[0]->title : '' }}" class="form-control" placeholder="Title">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Detail Title : </label>
                                <div class="col-md-10">
                                    <input type="text" name="new_detail_title" id="new_detail_title" value="{{ isset($news[0]) ? $news[0]->new_detail_title : '' }}" class="form-control" placeholder="Detail Title">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Select Type : </label>
                                <div class="col-md-10">
                                    <select name="new_type_id" id="new_type_id" class="form-control" required>
                                        @foreach($news as $value)
                                        <option value="{{ isset($value) ? $value->new_type_id : '' }}">{{$value->new_type_name}}</option>
                                        @endforeach

                                        <option value="0">Select Type</option>

                                        @foreach($new_type as $value)
                                        <option value="{{ isset($value) ? $value->id : '' }}">{{$value->new_type_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"></label>
                                <label class="col-md-10" for=""><span style="color:red">** รูปภาพควรมีขนาด 295 x 295 px **</span> </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Picture : </label>
                                <div class="col-md-10">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input type="file" name="news" id="input-file-now" class="dropify" data-default-file="{{ isset($news[0]->new_pics) ? asset('local/public/upload/news/'.$news[0]->new_pics) : '' }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right"> Date : </label>
                                <div class="col-md-10">
                                    <div class="input-group date frmdate">
                                        <input type="text" name="new_date" id="new_date" value="{{ isset($news[0]) ? $news[0]->new_date : '' }}" class="form-control" placeholder="วัน/เดือน/ปี"><span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">News Detail : </label>
                                <div class="col-md-10">
                                    <textarea class="form-control summernote_ed1" rows="5" name="new_detail" id="new_detail" placeholder="Text">{{ isset($news[0]) ? $news[0]->new_detail : '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="id" id="id" value="{{ isset($news[0]) ? $news[0]->id : '' }}">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" id="submit" class="form-control btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
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
<script src="{{asset('local/public/files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('local/public/files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.th.min.js')}}"></script>
<!-- <script src="{{ asset('bower_components/summernote/summernote.min.js') }}" type="text/javascript" ></script> -->
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
        $('#gen_form').attr('action', "{!! url('new/store') !!}");
        $('#title').val('');
        $('#submit').text('Save');
        $('#exampleModal').modal('toggle');
    }

    function edit_modal(id) {
        $('#image-upload').attr('action', "{!! url('new/update') !!}");
        $('#title').val('');
        $('#new_detail_title').val('');
        $('#new_pics').val('');
        $('#new_date').val('');
        $('#new_detail').val('');
        $('#submit').text('Update');
        $.ajax({
            type: "GET",
            url: "{!! url('product/edit/" + id + "') !!}",
            success: function(data) {
                $('#title').val(data['title']);
                $('#product_name_en').val(data['product_name_en']);
                $('#new_detail_title').val(data['new_detail_title']);
                $('#new_pics').val(data['new_pics']);
                $('#new_date').val(data['new_date']);
                $('#new_detail').val(data['new_detail']);
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
                    url: "{!! url('new/delete/" + id + "') !!}",
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
                url: "{{url('new/delete_image')}}",
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
<script type="text/javascript">
    $('.summernote_ed1').summernote({
        fontSizes: ['6', '8', '9', '10', '11', '12', '14', '16', '18', '20', '22', '24', '30', '36', '48', '64', '72'],
        height: 150,
        popover: {
            table: [
                ['custom', ['imageAttributes']],
                ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
            ],
            image: [
                ['resize', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']],
            ],
            link: [
                ['link', ['linkDialogShow', 'unlink']],
            ],
            air: [
                ['color', ['color']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
            ],
        },
        imageAttributes: {
            icon: '<i class="note-icon-pencil"/>',
            removeEmpty: false, // true = remove attributes | false = leave empty if present
            disableUpload: false // true = don't display Upload Options | Display Upload Options
        },
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
        ]
    });
</script>

<script type="text/javascript">
    $('.input-group.date').datepicker({
        language: "th",
        format: "yyyy-mm-dd",
        autoclose: "true",
    });
</script>

@endsection