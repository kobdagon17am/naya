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
            <h4>&nbsp;<i class="fa fa-chevron-circle-right"></i>&nbsp;News</h4>
            <div class="card">
                <div class="card-header card_head_modify">
                    <div class="row mt-2">
                        <div class="col-md-10">
                            <h5 class="pull-left pt-1" style="font-size: 18px;">News</h5>
                        </div>
                        <div class="col-md-2">
                            <button onclick="modal()" class="btn btn-primary form-control"> <i class="fa fa-plus" aria-hidden="true"></i> Add</button>
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
                                        <th>HeadType Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody_txt_center">
                                    @foreach ($news as $item => $value)
                                    <tr>
                                        @if(is_numeric($item))
                                        <td>{{ ($item+1) }}</td>
                                        @endif
                                        <td>
                                            <p class="text-left">{!! isset($value) ? $value->title : '' !!}</p>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="offset-4 col-1">
                                                    <a href="{{ url('new/edit/'.$value->id) }}">
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
    <div class="modal-dialog" style="max-width:50%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add News</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(['url'=>['new/store'],'id'=>'gen_form','autocomplete'=>'off','enctype'=>'multipart/form-data']) }}
                <div class="card-block pt-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">title : </label>
                                <div class="col-md-10">
                                    <input type="text" name="title" id="title" required value="" class="form-control" placeholder="Title">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Detail Title : </label>
                                <div class="col-md-10">
                                    <input type="text" name="new_detail_title" id="new_detail_title" value="" class="form-control" placeholder="Detail Title">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">Select Type : </label>
                                <div class="col-md-10">
                                    <select name="new_type_id" id="new_type_id" class="form-control" required>
                                        <option value="">Select Type</option>
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
                                            <input type="file" name="news" id="input-file-now" class="dropify" data-default-file="" />
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
                                        <input type="text" name="new_date" id="new_date" class="form-control" placeholder="วัน/เดือน/ปี"><span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label text-right">News Detail : </label>
                                <div class="col-md-10">
                                    <textarea class="form-control summernote_ed1" rows="5" name="new_detail" id="new_detail" placeholder="Text"></textarea>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="id" id="id">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" id="submit" class="form-control btn btn-primary" style="width: 110px; margin-left: auto; margin-right: auto; display: block;">Save</button>
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
            $('#submit').text('Save');
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
            language: "th"
        });
    </script>

    @endsection