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
        <div class="col-md-3">
            <a href="article/add" class="btn btn-success btn-block mb-3"> <i class="fa fa-plus"> منتج جديد </i></a>
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-danger card-outline">
                <div class="card-header">
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>كود بار</th>
                            <th>رمزالتعريف</th>
                            <th>إسم المنتج</th>
                            <th>الكمية المتوفرة</th>
                            <th>عدد الصناديق</th>
                            <th>ثمن الشراء</th>
                            <th>الثمن الأدنى للبيع</th>
                            <th>ثمن البيع1</th>
                            <th>الفئة</th>
                            <th>المخزن</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td class="text-left py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="article/{{$article->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a href="article/dell/{{$article->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                                <td>{{$article->code_bare}}</td>
                                <td>{{$article->referance}}</td>
                                <td>{{$article->designation}}</td>
                                <td>{{$article->qte_disponible}}</td>
                                <td>{{$article->colis}}</td>
                                <td>{{$article->prix_achat}}</td>
                                <td>{{$article->prix_vente_min}}</td>
                                <td>{{$article->prix_vente}}</td>
                                <td>{{$article->famille_id}}</td>
                                <td>{{$article->stock_id}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="text-left py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a href="article/1" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="article/dell/1" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td>X</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>كود بار</th>
                            <th>رمزالتعريف</th>
                            <th>إسم المنتج</th>
                            <th>الكمية المتوفرة</th>
                            <th>عدد الصناديق</th>
                            <th>ثمن الشراء</th>
                            <th>الثمن الأدنى للبيع</th>
                            <th>ثمن البيع1</th>
                            <th>الفئة</th>
                            <th>المخزن</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
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