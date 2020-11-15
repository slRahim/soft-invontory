

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/bower_components/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/bower_components/admin-lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"> لوحة التحكم</i>
                    </a>
                </li>
                <li class="nav-header text-bold text-center">الفواتير</li>
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-cart-plus"> المبيعات</i>
                        <p>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link ">
                                <i class="fas fa-cash-register"> فاتورة بيع</i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="fas fa-file-alt"> فاتورة عودة</i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-ambulance"> المشتريات</i>
                        <p>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                                <i class="fas fa-file-invoice-dollar"> فاتورة شراء</i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="fas fa-external-link-square-alt"> أمر شراء</i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header text-bold text-center">الموارد البشرية</li>
                <li class="nav-item">
                    <a href="/employees" class="nav-link">
                        <i class="fas fa-users"> العمال</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/actionnaires" class="nav-link">
                        <i class="fas fa-handshake"> الشركاء</i>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-people-arrows"> المتعاملين الإقتصاديين</i>
                        <p>
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/clients" class="nav-link">
                                <i class="fas fa-people-carry"> الزبائن</i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/fournisseurs" class="nav-link">
                                <i class="fas fa-truck-loading"> الموردين</i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header text-bold text-center">المخزن</li>
                <li class="nav-item">
                    <a href="/article/add" class="nav-link">
                        <i class="fas fa-plus"> منتج جديد</i>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-boxes"> المنتجات</i>
                        <p>
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/articles" class="nav-link">
                                <i class="fas fa-th-list"> قائمة المنتجات </i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/familles" class="nav-link">
                                <i class="fas fa-th-list"> قائمة الفئات </i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header text-bold text-center">قسم المحاسبة</li>
                <li class="nav-item">
                    <a href="/echeances" class="nav-link">
                        <i class="fas fa-calendar"> إضافة / قائمة المواعيد</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-chart-bar"> الإحصائيات</i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>