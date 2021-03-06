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
                    <li class="breadcrumb-item active">قائمة المنتجات</li>
                    <li class="breadcrumb-item active">{{$from_title}}</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div id="toast-container" class="toast-top-left"></div>
    <form id="id_form1">
        @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title float-left">المعلومات الأساسية</h3>
                    <div class="card-tools float-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>كود المنتح</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{$article->code_article}}" disabled>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>كود بار</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                            </div>
                            <input type="text" class="form-control" name="art_code_bare" value="{{$article->code_bare}}" required>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>رمز التعريف</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-box-open"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="art_referance" value="{{$article->referance}}" required>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>إسم المنتج</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-info"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="art_designation" value="{{$article->designation}}" required>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>الكمية المتوفرة</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="art_qte" value="{{$article->qte_disponible}}" required>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>الكمية الدنيا</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="art_qte_min" value="{{$article->qte_minimale}}">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>عدد الصناديق</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-boxes"></i></span>
                            </div>
                            <input type="number" class="form-control" name="art_colis" value="{{$article->colis}}" required>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>الفئة الأساسية</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-th-list"></i></span>
                                    </div>
                                    <select class="form-control" name="art_famille">
                                        @foreach($familles as $famille)
                                            @if($famille->id == $article->famille_id)
                                                <option selected value="{{$famille->id}}" >{{$famille->libelle}} ({{$famille->code_famille}})</option>
                                            @else
                                                <option  value="{{$famille->id}}" >{{$famille->libelle}} ({{$famille->code_famille}})</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>المستودع</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-th-list"></i></span>
                                    </div>
                                    <select class="form-control" name="art_stock">
                                        @foreach($stocks as $stock)
                                            @if($stock->id == $article->stock_id)
                                                <option selected value="{{$stock->id}}">{{$stock->code_stock}}</option>
                                            @else
                                                <option value="{{$stock->id}}">{{$stock->code_stock}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
            <div class="card card-info collapsed-card">
                <div class="card-header">
                    <h3 class="card-title float-left">في نفس الفئة</h3>
                    <div class="card-tools float-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>كود بار</th>
                            <th>إسم المنتج</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles_fam as $art)
                            <tr>
                                <td>{{$art->code_bare}}</td>
                                <td>{{$art->designation}}</td>
                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <a href="article/{{$art->id}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card card-success">
                <div class="card-header ">
                    <h3 class="card-title float-left">المعلومات الإقتصادية</h3>
                    <div class="card-tools float-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>ثمن الشراء</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            </div>
                            <input type="number" class="form-control" name="art_prix_achat" value="{{$article->prix_achat}}" >
                            <div class="input-group-append">
                                <div class="input-group-text"><b>DZD</b></div>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label>أقل ثمن للبيع</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="art_prix_vente_min" value="{{$article->prix_vente_min}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><b>DZD</b></div>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label> الفائدة</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="art_marge_min" value="{{$article->marge_min}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><b>DZD</b></div>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label>نسبةالفائدة</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="art_pourcentage_marge_min" value="{{$article->pourcentage_marge_min}}">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label> ثمن البيع1</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="art_prix_vente1" value="{{$article->prix_vente1}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><b>DZD</b></div>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label> الفائدة</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="art_marge1" value="{{$article->marge1}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><b>DZD</b></div>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label>نسبةالفائدة</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="art_pourcentage_marge1" value="{{$article->pourcentage_marge1}}" >
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label>ثمن البيع2</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="art_prix_vente2" value="{{$article->prix_vente2}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><b>DZD</b></div>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label> الفائدة</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="art_marge2" value="{{$article->marge2}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><b>DZD</b></div>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label>نسبةالفائدة</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="art_pourcentage_marge2" value="{{$article->pourcentage_marge2}}">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3 ">
            <button type="submit" class="btn btn-success" >تأكيد</button>
            <button type="reset" class="btn btn-secondary float-right">إلغاء</button>
        </div>
    </div>
    </form>
@endsection
@section('additionel script')
    <script>
        $('#id_form1').submit(function (e) {
            e.preventDefault();
            $.ajax({
                method:'POST',
                data:$(this).serialize(),
                success:function (result) {
                    if (result.success == true){
                        toastr.success(result.success_msg);
                    } else {
                        toastr.error(result.error_msg);
                    }
                },
            });
        });

    </script>
@endsection