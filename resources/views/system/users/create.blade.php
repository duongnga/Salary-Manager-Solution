@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
@stop


@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>

@stop

@section('content')


    <h3 class="page-title">
        Thông tin tài khoản<small> thêm mới</small>
    </h3>
    <!-- END PAGE HEADER-->

    <!-- BEGIN DASHBOARD STATS -->
    <div class="row center">
        <div class="col-md-12 center">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet box blue">
                <!--div class="portlet-title">
                </div-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    {!! Form::open(['url'=>$url.'add_user', 'id' => 'create_tttaikhoan', 'class'=>'horizontal-form']) !!}
                        <input type="hidden" id="madv" name="madv" value="{{$madv}}" />
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tên người dùng<span class="require">*</span></label>
                                        <input type="text" class="form-control required" name="name" id="name" autofocus>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Điện thoại</label>
                                        <input type="text" class="form-control" name="phone" id="phone">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Trạng thái</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="active" selected>Kích hoạt</option>
                                            <option value="disable">Vô hiệu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tài khoản truy cập<span class="require">*</span></label>
                                        <input type="text" class="form-control required"  name="username" id="username">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Mật khẩu<span class="require">*</span></label>
                                        <input type="text" class="form-control required"  name="password" id="password">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            @if(session('admin')->level=='SA' ||session('admin')->level=='SSA')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Cấp tài khoản</label>
                                            {!!Form::select('sadmin',array('NULL'=>'Tài khoản sử dụng','sa'=>'Tài khoản quản trị'),null,array('id'=>'','class'=>'form-control'))!!}
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                            @endif
                        </div>

                        <div class="form-actions">
                            <div class="row" style="text-align: center">
                                <div class="col-md-12">
                                    <button type="submit" class="btn green" onclick="validateForm()"><i class="fa fa-check"></i> Cập nhật</button>
                                    <a href="{{url($url.'list_user?&madv='.$madv)}}" class="btn default"><i class="fa fa-mail-reply"></i> Quay lại</a>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
    <script type="text/javascript">
        function validateForm(){
            var validator = $("#create_tttaikhoan").validate({
                rules: {
                    name :"required",
                    username :"required",
                    password :"required"

                },
                messages: {
                    name :"Chưa nhập dữ liệu",
                    username :"Chưa nhập dữ liệu",
                    password :"Chưa nhập dữ liệu"
                }
            });
        }
    </script>
    <script>
        jQuery(document).ready(function($) {
            $('input[name="username"]').change(function(){
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'GET',
                    url: '/checkuser',
                    data: {
                        _token: CSRF_TOKEN,
                        user:$(this).val()

                    },
                    success: function (respond) {
                        if(respond != 'ok'){
                            toastr.error("Bạn cần nhập tài khoản khác", "Tài khoản nhập vào đã tồn tại!!!");
                            $('input[name="username"]').val('');
                            $('input[name="username"]').focus();
                        }
                    }

                });
            })
        }(jQuery));
    </script>
@stop