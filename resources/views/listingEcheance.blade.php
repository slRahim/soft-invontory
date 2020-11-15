@extends('/layout/admin_template')

@section('content-head')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{}}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">المكتب</a></li>
                    <li class="breadcrumb-item active">{}}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection
@section('content')
    <div class="container-fluid">

        <!-- card to add new humain resource -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-success card-outline collapsed-card">
                    <div class="card-header">
                        <div class="card-tools float-right">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-left">إضافة جديدة</h3>
                    </div>
                    <div class="card-body">
                        <form id="id_form_echeance1">
                            @csrf
                            <input type="hidden" value="client" name="echeance_from">
                            <div class="form-group">
                                <label> المعني بالأمر</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                    </div>
                                    <input type="text" class="form-control"  readonly>
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
                    </div>
                    <div class="card-footer">
                        <h6 class="float-left">الرجاء إدخال كل البيانات (لإضافة بيانات متقدمة الرجاء زيارة حساب العميل).</h6>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col (left) -->
            <div class="col-lg-6">
                <div class="card card-info card-outline collapsed-card">
                    <div class="card-header">
                        <div class="card-tools float-right">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <h3 class="card-title float-left">إضافة جديدة</h3>
                    </div>
                    <div class="card-body">
                        <form id="id_form_echeance2">
                            @csrf
                            <input type="hidden" value="fournisseur" name="echeance_from">
                            <div class="form-group">
                                <label> المعني بالأمر</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                    </div>
                                    <input type="text" class="form-control"  value="" readonly>
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
                    </div>
                    <div class="card-footer">
                        <h6 class="float-left">الرجاء إدخال كل البيانات (لإضافة بيانات متقدمة الرجاء زيارة حساب العميل).</h6>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
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
                                <th>رمزالتعريف</th>
                                <th>إسم المعني </th>
                                <th>رمز المعني</th>
                                <th>آخر أجل</th>
                                <th>المبلغ المطلوب</th>
                                <th>الملاحظة</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="text-center py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <a href="" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                    <td>$echeance->code_echeance}}</td>
                                    <td>$client->nom}}</td>
                                    <td>$client->code_client}}</td>
                                    <td>$echeance->date}}</td>
                                    <td>$echeance->montant}}</td>
                                    <td>$echeance->observation}}</td>
                                </tr>

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


