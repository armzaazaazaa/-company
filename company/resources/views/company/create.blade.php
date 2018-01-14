<li class="breadcrumb-item"><a href="/admin/company">กลับ</a></li>
<div class="row">

    <form class="form-horizontal" method="post" action="/admin/company/create">
        <div class="box-body">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-sm-2 control-label">ชื่อ</label>
                <div class="col-sm-10">
                    <input required type="text"
                           name="employee[name_first]">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">นามสกุล</label>

                <div class="col-sm-10">
                    <input required type="text"
                           name="employee[name_last]">
                </div>
            </div>



            <div class="box-footer">

                <button type="submit" class="btn btn-info">ตกลง</button>
                <button href="/Index/home" class="btn btn-default">ยกเลิก</button>

            </div>
            <!-- /.box-footer -->
    </form>
    <!-- /.content -->
</div>
</div>



@section('javascript')
@endsection