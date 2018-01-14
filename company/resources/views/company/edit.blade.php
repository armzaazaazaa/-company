<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/company">จัดการรางวัล</a></li>
            </ol>
            <div class="box-header with-border">
                <h3 class="box-title">เพิ่ม</h3>
            </div>

            <form class="form-horizontal" method="post" action="/admin/company/{{$branch->id}}/edit">
                <div class="box-body">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ชื่อ</label>

                        <input type="text"
                               name="employee[name_first]"
                               value="{{$branch->name_first}}" class="form-control">
                    </div>
                    <label class="col-sm-2 control-label">ปีรางวัล</label>
                    <div class="col-sm-10">
                        <input type="text"
                               name="employee[name_last]"
                               value="{{$branch->name_last}}" class="form-control">
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info">ตกลง</button>
                        <button type="submit" class="btn btn-default">ยกเลิก</button>

                    </div>
                </div>
            </form>
            <!-- /.box-footer -->
        </div>
    </div>
</div>
</div>


