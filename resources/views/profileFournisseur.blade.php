@extends('/layout/admin_template')

@section('content-head')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>الملف الشخصي ({{$fournisseur->code_fournisseur}})</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">المكتب</a></li>
                    <li class="breadcrumb-item"><a href="/fournisseurs">الموردين</a></li>
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
                <div class="card card-indigo card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                 src="/image/userimg.png"
                                 alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{$fournisseur->nom}}</h3>

                        <p class="text-muted text-center">زبون</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>موبايل 1</b> <a class="float-right">{{$fournisseur->mobile1}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>الدين</b> <a class="float-right">{{$fournisseur->credit}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>آخر دفع</b> <a class="float-right">{{$fournisseur->dernier_verssement}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>رأس المال</b> <a class="float-right">{{$fournisseur->chifre_affaire}}</a>
                            </li>
                        </ul>

                        <a href="/fournisseur/dell/{{$fournisseur->id}}" class="btn btn-danger btn-block"><b>حذف المورد</b></a>
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

                        <p class="text-muted">{{$fournisseur->adresse}}</p>

                        <hr>

                        <strong><i class="fas fa-city mr-1"></i> المدينة</strong>

                        <p class="text-muted">{{$fournisseur->ville}}</p>

                        <hr>

                        <strong><i class="fas fa-mobile-alt mr-1"></i> الهاتف 1</strong>

                        <p class="text-muted">{{$fournisseur->telephone1}}</p>

                        <hr>

                        <strong><i class="fas fa-mobile-alt mr-1"></i> الهاتف 2</strong>

                        <p class="text-muted">{{$fournisseur->telephone2}}</p>

                        <hr>

                        <strong><i class="fas fa-mobile-alt mr-1"></i> موبايل 2</strong>

                        <p class="text-muted">{{$fournisseur->mobile2}}</p>

                        <hr>

                        <strong><i class="fas fa-at mr-1"></i> البريد الإلكتروني</strong>

                        <p class="text-muted">{{$fournisseur->email}}</p>

                        <hr>

                        <strong><i class="fas fa-dollar-sign mr-1"></i> الرمز البريدي</strong>

                        <p class="text-muted">{{$fournisseur->code_postale}}</p>

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
                            <li class="nav-item"><a class="nav-link active" href="#verssemment_facture" data-toggle="tab">دفع دين قديم</a></li>
                            <li class="nav-item"><a class="nav-link" href="#echeance" data-toggle="tab">مواعيد الدفع</a></li>
                            <li class="nav-item"><a class="nav-link" href="#histo_verssement" data-toggle="tab">سجل الدفع</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">تعديل المعلومات الشخصية</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="verssemment_facture">
                                <button class="btn btn-block btn-outline-dark mb-2" disabled><b>دفع جديد</b></button>
                                <form id="id_form_verssement">
                                    @csrf
                                    <input type="hidden" value="{{$fournisseur->id}}" name="fournisseur_id" id="id_fournisseur">
                                    <div class="form-group">
                                        <label> المعني بالأمر</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                            </div>
                                            <input type="text" class="form-control"  value="{{$fournisseur->code_fournisseur}}" readonly>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>الفاتورة</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-th-list"></i></span>
                                                    </div>
                                                    <select class="form-control" name="verssement_facture_id" >
                                                        <option selected value="$stock->id}}">$stock->code_stock}}</option>
                                                        <option  value="$stock->id}}">$stock->code_stock}}</option>
                                                    </select>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> ملاحظة</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                                                    </div>
                                                    <input type="text"  class="form-control" name="verssement_objet" required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label> تاريخ الدفع </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" name="verssement_date" required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>المبلغ</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                                    </div>
                                                    <input type="number" min="100"  class="form-control" name="verssement_montant" required>
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><b>DZD</b></div>
                                                    </div>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3 ">
                                        <button type="submit" class="btn btn-success" >تأكيد</button>
                                        <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
                                    </div>
                                </form>
                                <hr>
                                <button class="btn btn-block btn-outline-dark mb-2" disabled><b>الفواتير الغير مدفوعة</b></button>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>رمزالفاتورة</th>
                                        <th>التاريخ </th>
                                        <th>المبلغ المطلوب</th>
                                        <th>المبلغ المدفوع</th>
                                        <th>المبلغ المتبقي</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>$echeance->code_echeance}}</td>
                                        <td>$client->nom}}</td>
                                        <td>$client->code_client}}</td>
                                        <td>$echeance->date}}</td>
                                        <td>$echeance->montant}}</td>
                                        <td class="text-center py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>رمزالفاتورة</th>
                                        <th>التاريخ </th>
                                        <th>المبلغ المطلوب</th>
                                        <th>المبلغ المدفوع</th>
                                        <th>المبلغ المتبقي</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="echeance">
                                <button class="btn btn-block btn-outline-dark mb-2" disabled><b>إضافة موعد جديد</b></button>
                                <form id="id_form_echeance">
                                    @csrf
                                    <input type="hidden" value="{{$fournisseur->id}}" name="echeance_fournisseur_id">
                                    <input type="hidden" value="fournisseur" name="echeance_from">
                                    <div class="form-group">
                                        <label> المعني بالأمر</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                            </div>
                                            <input type="text" class="form-control"  value="{{$fournisseur->code_fournisseur}}" readonly>
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
                                                    <input type="date" class="form-control" name="echeance_date" required>
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
                                                    <input type="number"  class="form-control" name="echeance_nombre_jour" required>
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
                                            <input type="number" min="100"  class="form-control" name="echeance_montant" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><b>DZD</b></div>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label> ملاحظة</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-align-justify"></i></span>
                                            </div>
                                            <input type="text"  class="form-control" name="echeance_observation">
                                        </div>
                                        <!-- /.input group -->
                                        <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                                    </div>
                                    <div class="col-12 mb-3 ">
                                        <button type="submit" class="btn btn-success" >تأكيد</button>
                                        <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
                                    </div>
                                </form>
                                <hr>
                                <button class="btn btn-block btn-outline-dark mb-2" disabled><b>قائمة المواعيد</b></button>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>رمزالتعريف</th>
                                        <th>إسم المعني </th>
                                        <th>رمز المعني</th>
                                        <th>آخر أجل</th>
                                        <th>المبلغ المطلوب</th>
                                        <th>الملاحظة</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($echeances as $echeance)
                                        <tr>
                                            <td class="text-center py-0 align-middle">
                                                <div class="btn-group btn-group-sm">
                                                    <a href="/echeance/{{$echeance->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                    <a href="/echeance/dell/{{$echeance->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                            <td>{{$echeance->code_echeance}}</td>
                                            <td>{{$fournisseur->nom}}</td>
                                            <td>{{$fournisseur->code_fournisseur}}</td>
                                            <td>{{$echeance->date}}</td>
                                            <td>{{$echeance->montant}}</td>
                                            <td>{{$echeance->observation}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>رمزالتعريف</th>
                                        <th>إسم المعني </th>
                                        <th>رمز المعني</th>
                                        <th>آخر أجل</th>
                                        <th>المبلغ المطلوب</th>
                                        <th>الملاحظة</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="histo_verssement">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button class="btn btn-block btn-info"><b>طباعة الوضعية الحالية</b></button>
                                    </div>
                                </div>
                                <hr>
                                <button class="btn btn-block btn-outline-dark mb-2" disabled><b>الدفعات</b></button>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>رمزالتعريف</th>
                                        <th> التاريخ</th>
                                        <th>المبلغ المدفوع</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>$client->nom}}</td>
                                        <td>$echeance->date}}</td>
                                        <td>$echeance->montant}}</td>
                                        <td class="text-center py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="" class="btn btn-success"><i class="fas fa-print"></i> طباعة</a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>رمزالتعريف</th>
                                        <th> التاريخ</th>
                                        <th>المبلغ المدفوع</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <form action="fournisseur" id="id_form_fournisseur">
                                    @csrf
                                    <div class="form-group">
                                        <label>الإسم و اللقب</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="fournisseur_nom" value="{{$fournisseur->nom}}" required>
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
                                                    <input type="text" class="form-control" name="fournisseur_adresse" value="{{$fournisseur->adresse}}" required>
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
                                                    <input type="text" class="form-control" name="fournisseur_ville" value="{{$fournisseur->ville}}" required>
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
                                                    <input type="tel" class="form-control" name="fournisseur_mobile1" value="{{$fournisseur->mobile1}}" required>
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
                                                    <input type="tel" class="form-control" name="fournisseur_mobile2" value="{{$fournisseur->mobile2}}">
                                                </div>
                                                <!-- /.input group -->
                                                <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>رقم الهاتف 1</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                    </div>
                                                    <input type="tel" class="form-control" name="fournisseur_telephone1" value="{{$fournisseur->telephone1}}">
                                                </div>
                                                <!-- /.input group -->
                                                <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>رقم الهاتف 2</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                    </div>
                                                    <input type="tel" class="form-control" name="fournisseur_telephone2" value="{{$fournisseur->telephone2}}">
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
                                                    <input type="email" class="form-control" name="fournisseur_email" value="{{$fournisseur->email}}">
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
                                                    <input type="number" class="form-control" name="fournisseur_code_postale" value="{{$fournisseur->code_postale}}">
                                                </div>
                                                <!-- /.input group -->
                                                <small class="form-text text-muted">هدا الحقل ليس إلزامي</small>
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
        $('#id_form_fournisseur').submit(function (e) {
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
        $('#id_form_echeance').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url:'/echeance',
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
        $('#id_form_echeance').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url:'/echeance',
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