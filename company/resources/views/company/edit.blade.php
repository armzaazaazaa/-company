
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="/admin/company">จัดการรางวัล</a></li>

                        </ol>
                        <div class="box-header with-border">
                            <h3 class="box-title">เพิ่ม</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="post" action="/admin/company/{{$branch->id}}/edit">
                            <div class="box-body">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ชื่อรางวัลา</label>

                                    <div class="col-sm-10">
                                        <input type="text"
                                               name="employee[name_first]"
                                               value="{{$branch->name_first}}"
                                             >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ปีรางวัล</label>

                                    <div class="col-sm-10">
                                        <input type="text"
                                               name="employee[name_last]"
                                               value="{{$branch->name_last}}"
                                             >
                                    </div>
                                </div>



                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info">ตกลง</button>
                                    <button type="submit" class="btn btn-default">ยกเลิก</button>

                                </div>
                                <!-- /.box-footer -->
                        </form>
                    </div>
                </div>
            </div>


@endsection

