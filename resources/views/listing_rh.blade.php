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
    <div class="container-fluid">

        <!-- card to add new humain resource -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-danger collapsed-card">
                    <div class="card-header">
                        <div class="card-tools float-right">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-left">إضافة جديدة</h3>
                    </div>
                    <div class="card-body">
                        @if($from === 'actionnaire')
                            <form action="actionnaire" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>الإسم و اللقب</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="act_nom" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <label>العنوان</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="act_adresse" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <label>رقم الموبايل</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                        </div>
                                        <input type="tel" class="form-control" name="act_mobile1" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <label>نسبة المشاركة(بالأرقام)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                                        </div>
                                        <input type="number" min="1" max="100" class="form-control" name="act_pourcentage" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <button type="submit" class="btn btn-success">تأكيد</button>
                                <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
                        </form>
                        @endif
                        @if($from === 'employee')
                            <form action="employee" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>الإسم و اللقب</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="emp_nom" required>
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
                                                    <input type="text" class="form-control" name="emp_adresse" required>
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
                                                    <input type="text" class="form-control" name="emp_ville" required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>رقم الموبايل 1</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                    </div>
                                                    <input type="tel" class="form-control" name="emp_mobile1" required>
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
                                                    <input type="tel" class="form-control" name="emp_mobile2">
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
                                                    <input type="number" class="form-control" name="emp_salaire" required>
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
                                                    <input type="date" class="form-control" name="emp_date_paiement" required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">تأكيد</button>
                                    <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
                                </form>
                        @endif
                        @if($from === 'client')
                            <form action="client" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>الإسم و اللقب</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="client_nom" required>
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
                                                <input type="text" class="form-control" name="client_adresse" required>
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
                                                <input type="text" class="form-control" name="client_ville" required>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>رقم الموبايل 1</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                </div>
                                                <input type="tel" class="form-control" name="client_mobile1" required>
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
                                                <input type="tel" class="form-control" name="client_mobile2">
                                            </div>
                                            <!-- /.input group -->
                                            <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>البريد الإلكتروني</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                                </div>
                                                <input type="email" class="form-control" name="client_email" >
                                            </div>
                                            <!-- /.input group -->
                                            <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>الرمز البريدي</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-shipping-fast"></i></span>
                                                </div>
                                                <input type="number" class="form-control" name="client_code_postale" >
                                            </div>
                                            <!-- /.input group -->
                                            <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">تأكيد</button>
                                <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
                            </form>
                        @endif
                        @if($from === 'fournisseur')
                            <form action="fournisseur" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>الإسم و اللقب</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="fournisseur_nom" required>
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
                                                <input type="text" class="form-control" name="fournisseur_adresse" required>
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
                                                <input type="text" class="form-control" name="fournisseur_ville" required>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>رقم الموبايل 1</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                </div>
                                                <input type="tel" class="form-control" name="fournisseur_mobile1" required>
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
                                                <input type="tel" class="form-control" name="fournisseur_mobile2">
                                            </div>
                                            <!-- /.input group -->
                                            <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>البريد الإلكتروني</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                                </div>
                                                <input type="email" class="form-control" name="fournisseur_email" >
                                            </div>
                                            <!-- /.input group -->
                                            <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>الرمز البريدي</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-shipping-fast"></i></span>
                                                </div>
                                                <input type="number" class="form-control" name="fournisseur_code_postale" >
                                            </div>
                                            <!-- /.input group -->
                                            <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">تأكيد</button>
                                <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
                            </form>
                        @endif
                    </div>
                    <div class="card-footer">
                        <h6 class="float-left">الرجاء إدخال كل البيانات (لإضافة بيانات متقدمة الرجاء زيارة حساب العميل).</h6>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col (left) -->
            <div class="col-md-4">

            </div>
            <!-- /.col (right) -->
        </div>
        <!-- card to add new humain resource -->

        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-warning">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الرمزالاجتماعي</th>
                                <th>إسم و اللقب</th>
                                <th>العنوان</th>
                                <th>رقم الهاتف</th>
                                @if($from !== 'employee' && $from !== 'actionnaire')
                                    <th>المستحقات</th>
                                    <th>آخر دفع</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @if($from === 'employee')
                                @foreach($employees as $emp)
                                    <tr>
                                        <td class="text-center py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="employee/{{$emp->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="employee/dell/{{$emp->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                        <td>{{$emp->code_emp}}</td>
                                        <td>{{$emp->nom}}</td>
                                        <td>{{$emp->adresse}}</td>
                                        <td>{{$emp->mobile1}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            @if($from === 'actionnaire')
                                @foreach($actionnaires as $act)
                                    <tr>
                                        <td class="text-center py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="actionnaire/{{$act->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="actionnaire/dell/{{$act->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                        <td>{{$act->code_actionnaire}}</td>
                                        <td>{{$act->nom}}</td>
                                        <td>{{$act->adresse}}</td>
                                        <td>{{$act->mobile1}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            @if($from === 'client')
                                @foreach($clients as $client)
                                    <tr>
                                        <td class="text-center py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="client/{{$client->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="client/dell/{{$client->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                        <td>{{$client->code_client}}</td>
                                        <td>{{$client->nom}}</td>
                                        <td>{{$client->adresse}}</td>
                                        <td>{{$client->mobile1}}</td>
                                        <td>{{$client->credit}}</td>
                                        <td>{{$client->dernier_verssement}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            @if($from === 'fournisseur')
                                @foreach($fournisseurs as $fournisseur)
                                    <tr>
                                        <td class="text-center py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="fournisseur/{{$fournisseur->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="fournisseur/dell/{{$fournisseur->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                        <td>{{$fournisseur->code_fournisseur}}</td>
                                        <td>{{$fournisseur->nom}}</td>
                                        <td>{{$fournisseur->adresse}}</td>
                                        <td>{{$fournisseur->mobile1}}</td>
                                        <td>{{$fournisseur->credit}}</td>
                                        <td>{{$fournisseur->dernier_verssement}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>الرقم الاجتماعي</th>
                                <th>إسم و اللقب</th>
                                <th>العنوان</th>
                                <th>رقم الهاتف</th>
                                @if($from !== 'employee' && $from !== 'actionnaire')
                                    <th>المستحقات</th>
                                    <th>آخر دفع</th>
                                @endif
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
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
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "oLanguage": {
                    "sSearch": "بحث",
                    'oShow':'affi',
                    'eetries':'opt'
                }
            });
        });
    </script>
@endsection

