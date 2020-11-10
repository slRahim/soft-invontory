@extends('/layout/admin_template')

@section('content-head')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{$from_title}}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">المكتب</a></li>
                    <li class="breadcrumb-item active">{{$from_title}}</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <!-- /.col add stock -->
        <div class="col-md-6">
            <form action="stock" method="post">
                @csrf
            <div class="card card-danger collapsed-card">
                <div class="card-header">
                    <h3 class="card-title float-left">مستودع جديد</h3>
                    <div class="card-tools float-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>العنوان</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" name="stock_adresse" required>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success" >تأكيد</button>
                    <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
                </div>
            </div>
            </form>
        </div>

        <!-- /.col add famille-->
        <div class="col-md-6">
            <form action="/famille" method="post">
                @csrf
            <div class="card card-indigo collapsed-card">
                <div class="card-header">
                    <h3 class="card-title float-left">إضافة فئة جديدة </h3>
                    <div class="card-tools float-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>الإسم</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-stream"></i></span>
                            </div>
                            <input type="text" class="form-control" name="famille_libelle" required>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                        <label>نسبة الفائدة1</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-coins"></i></span>
                            </div>
                            <input type="number" class="form-control" name="famille_marge1" required>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                        <label>نسبة الفائدة2</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-coins"></i></span>
                            </div>
                            <input type="number" class="form-control" name="famille_marge2" required>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success" >تأكيد</button>
                    <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="row">
        <!-- /.col table stock-->
        <div class="col-md-6">
            <div class="card card-outline card-danger">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>رمزالمستودع</th>
                            <th>العنوان</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stocks as $stock)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$stock->code_stock}}</td>
                                <td>{{$stock->adresse}}</td>
                                <td class="text-left py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="stock/dell/{{$stock->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <!-- /.col table famille-->
        <div class="col-md-6">
            <div class="card card-outline card-indigo">
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>رمزالفئة</th>
                            <th>إسم الفئة </th>
                            <th>نسبة الفائدة1</th>
                            <th>نسبة الفائدة2</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($familles as $famille)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$famille->code_famille}}</td>
                                <td>{{$famille->libelle}}</td>
                                <td>{{$famille->pourcentage_marge1}}</td>
                                <td>{{$famille->pourcentage_marge2}}</td>
                                <td class="text-left py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="famille/dell/{{$famille->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
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
                "autoWidth": true,
                "responsive": true,
                "oLanguage": {
                    "sSearch": "بحث",
                    'oShow':'affi',
                    'eetries':'opt'
                }
            });
            $("#example2").DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
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