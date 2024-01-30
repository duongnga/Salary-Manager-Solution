<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 04/07/2016
 * Time: 3:50 CH
 */
        ?>
@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
@stop

@section('custom-script')
    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>

    <script src="{{url('assets/admin/pages/scripts/table-managed.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            TableManaged.init();
        });
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">KẾT QUẢ TRA CỨU THÔNG TIN HỒ SƠ QUÁ TRÌNH LƯƠNG CÁN BỘ</div>
                    <div class="actions">
                        <button class="btn btn-info" onclick="goBack()"><i class="fa fa-backward"></i>&nbsp;Quay lại tra cứu</button>
                    </div>
                </div>
                <div class="portlet-body form-horizontal">
                    <table id="sample_3" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 7%">STT</th>
                                <th class="text-center">Họ tên</th>
                                <th class="text-center">Từ ngày</th>
                                <th class="text-center">Đến ngày</th>
                                <th class="text-center">Mã ngạch</th>
                                <th class="text-center">Bậc</th>
                                <th class="text-center">Hệ số</th>
                                <th class="text-center">Vượt khung</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($model))
                                @foreach($model as $key=>$value)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td>
                                            <a href="{{url('/nghiep_vu/qua_trinh/luong/maso='.$value->macanbo)}}" target="_blank"><b>{{$value->tencanbo}}</b></a>
                                        </td>
                                        <td>{{getDayVn($value->ngaytu)}}</td>
                                        <td>{{getDayVn($value->ngayden)}}</td>
                                        <td>{{$value->msngbac}}</td>
                                        <td>{{$value->bac}}</td>
                                        <td>{{$value->heso}}</td>
                                        <td>{{$value->vuotkhung}}</td>
                                        <td>
                                            <a href="{{url('/nghiep_vu/qua_trinh/luong/maso='.$value->macanbo)}}" target="_blank" class="btn btn-info btn-xs mbs"><i class="fa fa-edit"></i>&nbsp; Chỉnh sửa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@stop
