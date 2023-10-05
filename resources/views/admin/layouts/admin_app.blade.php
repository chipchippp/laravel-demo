<!DOCTYPE html>
<html lang="en">
<head>
   @include("admin.layouts.head-admin")
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    @include("admin.layouts.navbar-table")
    <!-- Content Wrapper. Contains page content -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield("main")
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@include("admin.layouts.footer-admin")

@include("admin.layouts.scripts-admin")

</body>
</html>
