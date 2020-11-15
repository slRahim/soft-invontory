@extends('/layout/admin_template')

@section('content-head')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{$from_title}}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">المكتب</a></li>
                    <li class="breadcrumb-item active">{{$from_title}}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection
@section('content')
    <div id="toast-container" class="toast-top-left"></div>
    <div class="container-fluid">
        <div class="card card-success card-outline">
            <div class="card-header">
                <div class="card-tools float-right">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                </div>
                <h3 class="card-title float-left"><b>تعديل الوعد</b></h3>
            </div>
            <div class="card-body">
                <form id="id_form_edit_echeance">
                    @csrf
                    <div class="form-group">
                        <label> المعني بالأمر</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{$owner->nom}}" readonly>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label> آخر أجل للدفع</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name="echeance_date" value="{{$echeance->date}}" required>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label> الدفع بعد (يوم)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-hand-holding-usd"></i></span>
                                    </div>
                                    <input type="number"  class="form-control" name="echeance_nombre_jour" value="{{$echeance->nombre_jour}}" required>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>المبلغ</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="number" min="100"  class="form-control" name="echeance_montant" value="{{$echeance->montant}}" required>
                            <div class="input-group-append">
                                <div class="input-group-text"><b>DZD</b></div>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>الحالة</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-th-list"></i></span>
                            </div>
                            <select class="form-control" name="echeance_etat">
                                <option selected value="active">فعال</option>
                                <option value="bloque">موقف</option>
                                <option value="regle">منتهي</option>
                            </select>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label> ملاحظة</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                            </div>
                            <input type="text"  class="form-control" name="echeance_observation" value="{{$echeance->observation}}">
                        </div>
                        <!-- /.input group -->
                        <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                    </div>
                    <div class="col-12 mb-3 ">
                        <button type="submit" class="btn btn-success" >تأكيد</button>
                        <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
@section('additionel script')
    <script>
        $('#id_form_edit_echeance').submit(function (e) {
            e.preventDefault();
            $.ajax({
                method:'POST',
                data:$(this).serialize(),
                success:function (result) {
                    if (result.success == true){
                        toastr.success(result.success_msg);
                        setTimeout(function() {
                            location.reload();
                        }, 5000);
                    } else {
                        toastr.error(result.error_msg);
                    }
                },
            });
        });
    </script>
@endsection