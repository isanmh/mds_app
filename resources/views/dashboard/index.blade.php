<x-admin-layout>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('adminlte/dist/img/mds_logo.png') }}" alt="MitraDigitalServiceLogo"
                height="100" width="100">
        </div>

        @include('dashboard.components.navbar-admin')

        <!-- Main Sidebar Container -->
        @include('dashboard.components.sidebar-admin')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('dashboard.components.header-admin')
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    @include('dashboard.components.box-status')

                </div>
            </section>

        </div>

        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>Copyright &copy; 2021-2023</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Mitra Digital Service</b>
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
</x-admin-layout>
