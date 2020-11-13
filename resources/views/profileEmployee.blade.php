@extends('/layout/admin_template')

@section('content-head')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>الملف الشخصي ({{$employee->code_emp}})</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">المكتب</a></li>
                    <li class="breadcrumb-item"><a href="/employees">العمال</a> </li>
                    <li class="breadcrumb-item active">الملف الشخصي</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div id="toast-container" class="toast-top-left"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-success card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                 src="/image/userimg.png"
                                 alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{$employee->nom}}</h3>

                        <p class="text-muted text-center">عامل</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>الهاتف</b> <a class="float-right">{{$employee->mobile1}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>الرصيد المتبقي</b> <a class="float-right">{{$employee->solde}}</a>
                            </li>
                            <li class="list-group-item">
                                <b> الغيابات</b> <a class="float-right">{{$employee->nombre_absence}}</a>
                            </li>

                        </ul>

                        <a href="/employee/dell/{{$employee->id}}" class="btn btn-danger btn-block"><b>حذف العامل</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-success collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title float-left">المعلومات </h3>
                        <div class="card-tools float-right">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> العنوان</strong>

                        <p class="text-muted">{{$employee->adresse}}</p>

                        <hr>

                        <strong><i class="fas fa-city mr-1"></i> المدينة</strong>

                        <p class="text-muted">{{$employee->ville}}</p>

                        <hr>

                        <strong><i class="fas fa-mobile-alt mr-1"></i> موبايل 2</strong>

                        <p class="text-muted">{{$employee->mobile2}}</p>

                        <hr>

                        <strong><i class="fas fa-at mr-1"></i> البريد الإلكتروني</strong>

                        <p class="text-muted">{{$employee->email}}</p>

                        <hr>

                        <strong><i class="fas fa-dollar-sign mr-1"></i> الراتب</strong>

                        <p class="text-muted">{{$employee->salaire}}</p>

                        <hr>

                        <strong><i class="fas fa-calendar-alt mr-1"></i> تاريخ السحب</strong>

                        <p class="text-muted">{{$employee->date_paiement}}</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> آخر سحب</strong>

                        <p class="text-muted">{{$employee->dernier_acompte}}</p>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-indigo card-outline-tabs">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#acompte" data-toggle="tab"><b>تسجيل الغياب/ سحب الراتب</b></a></li>
                            <li class="nav-item"><a class="nav-link" href="#list_acompte" data-toggle="tab"><b>سجل السحب</b></a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"> <b>تعديل المعلومات الشخصية</b></a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="acompte">
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-block btn-info"><b>إضافة غياب جديد</b></button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-block btn-secondary float-right"><b>إلغاء كل الغيابات</b></button>
                                    </div>
                                </div>
                                <hr>
                                <button class="btn btn-block btn-outline-dark mb-2" disabled><b>تسجيل سحب جديد</b></button>
                                <form  id="id_form_acompte">
                                    @csrf
                                    <input type="hidden" value="{{$employee->id}}" id="id_emp">
                                    <div class="form-group">
                                        <label>سبب السحب</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-align-center"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="acompte_objet" required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>تاريخ السحب</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" class="form-control" name="acompte_date" required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>المبلغ</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                            </div>
                                            <input type="number" min="100"  class="form-control" name="acompte_montant" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><b>DZD</b></div>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>كيفية الدفع</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-hand-holding-usd"></i></span>
                                            </div>
                                            <input type="text"  class="form-control" name="acompte_modalite" value="نقدا" readonly>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="col-12 mb-3 ">
                                        <button type="submit" class="btn btn-success" >تأكيد</button>
                                        <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="list_acompte">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الرمزالاجتماعي</th>
                                        <th>إسم و اللقب</th>
                                        <th>التاريخ</th>
                                        <th>الموضوع</th>
                                        <th> قيمة السحب</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($acomptes as $acompte)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$employee->code_emp}}</td>
                                            <td>{{$employee->nom}}</td>
                                            <td>{{$acompte->date}}</td>
                                            <td>{{$acompte->objet}}</td>
                                            <td>{{$acompte->montant}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>الرمزالاجتماعي</th>
                                        <th>إسم و اللقب</th>
                                        <th>التاريخ</th>
                                        <th>الموضوع</th>
                                        <th> قيمة السحب</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="tab-pane" id="settings">
                                <form id="id_form_emp">
                                    @csrf
                                    <div class="form-group">
                                        <label>الإسم و اللقب</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="emp_nom" value="{{$employee->nom}}" required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>العنوان</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="emp_adresse" value="{{$employee->adresse}}" required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>المدينة</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-city"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="emp_ville" value="{{$employee->ville}}" required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label> البريد الإلكتروني </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                                            </div>
                                            <input type="email" class="form-control" name="emp_email" value="{{$employee->email}}">
                                        </div>
                                        <!-- /.input group -->
                                        <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>رقم الموبايل 1</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                    </div>
                                                    <input type="tel" class="form-control" name="emp_mobile1" value="{{$employee->mobile1}}" required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>رقم الموبايل 2</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                    </div>
                                                    <input type="tel" class="form-control" name="emp_mobile2" value="{{$employee->mobile2}}">
                                                </div>
                                                <!-- /.input group -->
                                                <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>الراتب الشهري (بالأرقام)</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                                    </div>
                                                    <input type="number" class="form-control" name="emp_salaire" value="{{$employee->salaire}}" required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>تاريخ إستلام المرتب</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" name="emp_date_paiement" value="{{$employee->date_paiement}}" required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">تأكيد</button>
                                    <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
                                </form>
                            </div>
                            <!-- /.tab-pane -->

                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection
@section('additionel script')
    <script>
        $(function () {
            $("#example1").DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "responsive": true,
                "oLanguage": {
                    "sSearch": "بحث",
                }
            });
        });
        $('#id_form_emp').submit(function (e) {
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
        $('#id_form_acompte').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url:'/acompte/'+$('#id_emp').val(),
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

