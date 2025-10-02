<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets02/vendors/feather/feather.css">
    <link rel="stylesheet" href="/assets02/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets02/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/assets02/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/assets02/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/assets02/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="/assets02/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="/assets02/js/select.dataTables.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/assets02/css/vertical-layout-light/style.css">
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo">
                        <img src="/assets01/images/profil.jpg" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini">
                        <img src="/assets01/images/profil.jpg" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Halo, <span class="text-black fw-bold"><?php echo e(Auth::user()->name); ?></span></h1>
                        
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial:partials/_navbar.html -->
        
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">Ganti Warna Sidebar</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">Ganti Warna Header</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <!-- partial -->

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../admin-home">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                   
                    <li class="nav-item nav-category">DATA</li>
                   
                   
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false"
                            aria-controls="tables">
                            <i class="menu-icon mdi mdi-table"></i>
                            <span class="menu-title">Tabel Data</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="../shop-table">Toko</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../item-table">Item</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../actionlogout">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Log Out</span>
                        </a>
                    </li>
                  
                   
                </ul>
            </nav>
            <!-- partial -->
            <?php echo $__env->yieldContent('content'); ?>

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php echo $__env->yieldContent('footer'); ?>
    <!-- plugins:js -->
    <script src="/assets02/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets02/vendors/chart.js/Chart.min.js"></script>
    <script src="/assets02/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets02/vendors/progressbar.js/progressbar.min.js"></script>
    <script>
        $(function () {
            $('#table').bootstrapTable()
        })
    </script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets02/js/off-canvas.js"></script>
    <script src="/assets02/js/hoverable-collapse.js"></script>
    <script src="/assets02/js/template.js"></script>
    <script src="/assets02/js/settings.js"></script>
    <script src="/assets02/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/assets02/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/assets02/js/dashboard.js"></script>
    <script src="/assets02/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html><?php /**PATH C:\xampp\htdocs\Momo\resources\views/dashboard-admin/dashboard.blade.php ENDPATH**/ ?>