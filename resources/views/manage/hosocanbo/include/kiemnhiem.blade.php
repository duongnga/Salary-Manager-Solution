<!--form1 thông tin cơ bản -->
<div id="tab5" class="tab-pane">
    <div class="form-horizontal">
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-default" onclick="add_kiemnhiem()"><i class="fa fa-plus"></i>&nbsp;Thêm
                    mới</button>                
            </div>
        </div>
        </br>
        <div class="row" id="dskn">
            <div class="col-md-12">
                <table id="sample_4" class="table table-hover table-striped table-bordered" style="min-height: 230px">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%">STT</th>
                            <th class="text-center">Phân loại</br>công tác</th>
                            <th class="text-center">Chức vụ</br>kiêm nhiệm</th>
                            <th class="text-center">Hệ</br>số</br>lương</th>
                            <th class="text-center">Hệ</br>số</br>phụ</br>cấp</th>
                            <th class="text-center">Phụ</br>cấp</br>chức</br>vụ</th>
                            <th class="text-center">Phụ</br>cấp</br>trách</br>nhiệm</th>
                            <th class="text-center">Phụ</br>cấp</br>kiêm</br>nhiệm</th>
                            <th class="text-center">Phụ</br>cấp</br>đặc</br>thù</th>
                            <th class="text-center">Phụ</br>cấp</br>một</br>cửa</th>
                            <th class="text-center">Phụ</br>cấp</br>điện</br>thoại</th>
                            <th class="text-center">Phụ</br>cấp</br>đại</br>biểu<br>HDND</th>
                            <th class="text-center">Phụ</br>cấp</br>cấp</br>uỷ</th>
                            <th class="text-center">Phụ</br>cấp</br>khác</th>
                            <th class="text-center">Thao tác</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (isset($model_kn))
                            @foreach ($model_kn as $key => $value)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td class="text-center">{{ $value->tenct }}</td>
                                    <td class="text-center">{{ $value->tenchucvu }}</td>
                                    <td class="text-right">{{ $value->heso }}</td>
                                    <td class="text-right">{{ $value->hesopc }}</td>
                                    <td class="text-right">{{ $value->pccv }}</td>
                                    <td class="text-right">{{ $value->pctn }}</td>
                                    <td class="text-right">{{ $value->pckn }}</td>
                                    <td class="text-right">{{ $value->pcdbn }}</td>
                                    <td class="text-right">{{ $value->pcd }}</td>
                                    <td class="text-right">{{ $value->pcdith }}</td>
                                    <td class="text-right">{{ $value->pcdbqh }}</td>
                                    <td class="text-right">{{ $value->pcvk }}</td>
                                    <td class="text-right">{{ $value->pck }}</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-xs mbs"
                                            onclick="edit_kn({{ $value->id }});"><i
                                                class="fa fa-edit"></i>&nbsp;Sửa</button>
                                        <button type="button" class="btn btn-default btn-xs mbs"
                                            onclick="deleteRow({{ $value->id }})"><i
                                                class="fa fa-trash-o"></i>&nbsp;Xóa</button>
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

<!-- Kiêm nhiệm chức vụ công tác -->


<!--end form5  -->
