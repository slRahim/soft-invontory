@extends('/layout/admin_template')

@section('content-head')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>منتج جديد</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">المكتب</a></li>
                    <li class="breadcrumb-item active">منتج جديد</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div id="toast-container" class="toast-top-left"></div>
    <form id="id_form">
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
                        <label>كود بار</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                            </div>
                            <input type="text" class="form-control" name="art_code_bare" required>
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
                                    <input type="text" class="form-control" name="art_referance" required>
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
                                    <input type="text" class="form-control" name="art_designation" required>
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
                                    <input type="number" class="form-control" name="art_qte" required>
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
                                    <input type="number" class="form-control" name="art_qte_min">
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
                            <input type="number" class="form-control" name="art_colis" required>
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
                                            <option  value="{{$famille->id}}">{{$famille->libelle}} ({{$famille->code_famille}})</option>
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
                                            <option  value="{{$stock->id}}">{{$stock->code_stock}}</option>
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
            <!-- /.card economic information -->
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
                            <input type="number" class="form-control" name="art_prix_achat" id="p_achat" required>
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
                                    <input type="number" class="form-control" name="art_prix_vente_min" id="min_vente" required>
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
                                    <input type="number" class="form-control" name="art_marge_min" id="min_marge" required>
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
                                    <input type="number" class="form-control" name="art_pourcentage_marge_min" id="min_marge_pourcentage" required>
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
                                    <input type="number" class="form-control" name="art_prix_vente1" id="vente1">
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
                                    <input type="number" class="form-control" name="art_marge1" id="marge1">
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
                                    <input type="number" class="form-control" name="art_pourcentage_marge1" id="marge1_pourcentage">
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
                                    <input type="number" class="form-control" name="art_prix_vente2" id="vente2">
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
                                    <input type="number" class="form-control" name="art_marge2" id="marge2">
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
                                    <input type="number" class="form-control" name="art_pourcentage_marge2" id="marge2_pourcentage">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>

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
        $('#id_form').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url:'/article',
                method:'POST',
                data:$(this).serialize(),
                success:function (result) {
                    if (result.success == true){
                        $('#id_form')[0].reset();
                        toastr.success(result.success_msg);
                    } else {
                        toastr.error(result.error_msg);
                    }
                },
            });
        });

    </script>
@endsection