

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
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            لوحة التحكم
                        </p>
                    </a>
                </li>
                <li class="nav-header text-bold text-center">الفواتير</li>
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-cart-plus"></i>
                        <p>
                            المبيعات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link ">
                                <i class="fas fa-cash-register"></i>
                                <p>فاتورة بيع</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="fas fa-file-alt"></i>
                                <p>فاتورة عودة</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-ambulance"></i>
                        <p>
                            المشتريات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link active">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <p>فاتورة شراء</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index2.html" class="nav-link">
                                <i class="fas fa-external-link-square-alt"></i>
                                <p>أمر شراء</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header text-bold text-center">الموارد البشرية</li>
                <li class="nav-item">
                    <a href="/employees" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>العمال</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/actionnaires" class="nav-link">
                        <i class="fas fa-handshake"></i>
                        <p>الشركاء</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-people-arrows"></i>
                        <p>
                            المتعاملين الإقتصاديين
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/clients" class="nav-link">
                                <i class="fas fa-people-carry"></i>
                                <p>الزبائن</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/fournisseurs" class="nav-link">
                                <i class="fas fa-truck-loading"></i>
                                <p>الموردين</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header text-bold text-center">المخزن</li>
                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="fas fa-plus"></i>
                        <p>
                            منتج جديد
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-boxes"></i>
                        <p>
                            المنتجات
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="fas fa-th-list"></i>
                                <p>قائمة المنتجات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="fas fa-th-list"></i>
                                <p>قائمة الفئات</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header text-bold text-center">قسم المحاسبة</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-calendar-alt"></i>
                        <p>
                            مواعيد الدفع
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-th-list"></i>
                                <p>قائمة المواعيد</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-calendar-plus"></i>
                                <p>
                                     إضافة موعد زبون
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-calendar-plus"></i>
                                <p>
                                    إضافة موعد لمورد
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-coins"></i>
                        <p>
                            الصندوق
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-th-list"></i>
                                <p>قائمة الصناديق</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-piggy-bank"></i>
                                <p>
                                    إضافة صندوق جديد
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>