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
        Thông tin tài khoản người dùng<small> chỉnh sửa</small>
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
                    {!! Form::model($model,['method' => 'PATCH', 'url'=>$url.'don_vi/maso='.$model->id.'/update', 'class'=>'horizontal-form','id'=>'create_tttaikhoan']) !!}
                        <meta name="csrf-token" content="{{ csrf_token() }}" />
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tên người dùng<span class="require">*</span></label>
                                        {!!Form::text('name', null, array('id' => 'name','class' => 'form-control'))!!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Số điện thoại</label>
                                        {!!Form::text('phone', null, array('id' => 'phone','class' => 'form-control'))!!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Địa chỉ email</label>
                                        {!!Form::text('email', null, array('id' => 'email','class' => 'form-control'))!!}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Trạng thái</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="Kích hoạt" selected>Kích hoạt</option>
                                            <option value="Vô hiệu">Vô hiệu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tài khoản truy cập<span class="require">*</span></label>
                                        {!!Form::text('username', null, array('id' => 'username','class' => 'form-control required', 'readonly'=>'readonly'))!!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Mật khẩu mới<span class="require">*</span></label>
                                        {!!Form::text('newpass', null, array('id' => 'newpass','class' => 'form-control'))!!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Phân loại tài khoản<span class="require">*</span></label>
                                        <select class="form-control" name="sadmin" id="sadmin">
                                            <option value="NULL" selected>Tài khoản người dùng</option>
                                            <option value="sa">Tài khoản hệ thống</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>

            <div style="text-align: center">
                <button type="submit" class="btn green" onclick="validateForm()"><i class="fa fa-check"></i> Cập nhật</button>
                <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i>&nbsp;Nhập lại</button>
                <a href="{{url('/he_thong/quan_tri/don_vi')}}" class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;Quay lại</a>
            </div>
            {!! Form::close() !!}
                <!-- END FORM-->
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
@stop