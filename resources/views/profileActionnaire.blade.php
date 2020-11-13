@extends('/layout/admin_template')

@section('content-head')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>الملف الشخصي</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">المكتب</a></li>
                    <li class="breadcrumb-item "><a href="/actionnaires">الشركاء</a> </li>
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

                        <h3 class="profile-username text-center">{{$actionnaire->nom}}</h3>

                        <p class="text-muted text-center">مساهم إقتصادي</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>الهاتف</b> <a class="float-right">{{$actionnaire->mobile1}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>نسبة المساهمة</b> <a class="float-right">{{$actionnaire->pourcentage}} %</a>
                            </li>
                        </ul>

                        <button class="btn btn-danger btn-block">حذف الشريك</button>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-indigo collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title float-left">المعلومات </h3>
                        <div class="card-tools float-right">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="far fa-id-badge"></i> رمز الشريك</strong>
                        <p class="text-muted">{{$actionnaire->code_actionnaire}}</p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i>العنوان</strong>
                        <p class="text-muted">{{$actionnaire->adresse}}</p>

                        <hr>

                        <strong><i class="fas fa-mobile-alt"></i> الهاتف</strong>
                        <p class="text-muted">{{$actionnaire->mobile1}}</p>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">تعديل المعلومات</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="settings">
                                <form id="id_form_actionnaire" >
                                    @csrf
                                    <div class="form-group">
                                        <label>الإسم و اللقب</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="act_nom" value="{{$actionnaire->nom}}" readonly>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>العنوان</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="act_adresse" value="{{$actionnaire->adresse}}" required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>رقم الموبايل</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                            </div>
                                            <input type="tel" class="form-control" name="act_mobile1" value="{{$actionnaire->mobile1}}" required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>نسبة المشاركة(بالأرقام)</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-percentage"></i></span>
                                            </div>
                                            <input type="number" min="1" max="100" class="form-control" name="act_pourcentage" value="{{$actionnaire->pourcentage}}" required>
                                        </div>
                                        <!-- /.input group -->
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
        <input type="hidden" id="id_pourcentage_g" value="{{$pourcentage_g}}">
    </div>
@endsection
@section('additionel script')
    <script>
        verefie_pourcentage( $('#id_pourcentage_g').val())
        $('#id_form_actionnaire').submit(function (e) {
            e.preventDefault();
            $.ajax({
                method:'POST',
                data:$(this).serialize(),
                success:function (result) {
                    if (result.success == true){
                        toastr.success(result.success_msg);
                        if (result.pourcentage_g > 100){
                            toastr.info("النسبة الإجمالية للمساهة "+result.pourcentage_g+" %");
                            toastr.warning("الرجاء مراجعة نسب المساهة الخاصة بكل الشركاء");
                        }
                    } else {
                        toastr.error(result.error_msg);
                    }
                },
            });
        });
        function verefie_pourcentage(p) {
            if (p > 100) {
                toastr.info("النسبة الإجمالية للمساهة "+p+" %");
                toastr.warning("الرجاء مراجعة نسب المساهة الخاصة بكل الشركاء");
            }
        }
    </script>
@endsection
