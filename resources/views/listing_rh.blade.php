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
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <h3 class="card-title">إضافة جديدة</h3>
                    </div>
                    <div class="card-body">
                        @if($from === 'actionnaire')
                            <form action="" method="post">
                            <div class="form-group">
                                <label>رمز الشريك</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-code-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label>الإسم و اللقب</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-user-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label>العنوان</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-home-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label>رقم الموبايل</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-phone-alt"></i></span>
                                    </div>
                                    <input type="tel" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label>نسبة المشاركة</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-percentage-alt"></i></span>
                                    </div>
                                    <input type="number" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </form>
                        @endif
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
                                        <td class="text-right py-0 align-middle">
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
                                        <td class="text-right py-0 align-middle">
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
                                        <td class="text-right py-0 align-middle">
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
                                        <td class="text-right py-0 align-middle">
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
                            <tr>
                                <td class="text-left py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="employee/1" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                            </tr>
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
