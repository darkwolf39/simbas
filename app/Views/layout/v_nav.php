<!-- Left side column. contains the sidebar -->
<aside
    class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section
        class="sidebar">
        <!-- Sidebar user panel -->
        <div
            class="user-panel">
            <div
                class="pull-left image">
                <img src="<?= base_url(); ?>/template/dist/img/user2-160x160.jpg"
                    class="img-circle"
                    alt="User Image">
            </div>
            <div
                class="pull-left info">
                <p>Alexander
                    Pierce
                </p>
                <a
                    href="#"><i
                        class="fa fa-circle text-success"></i>
                    Online</a>
            </div>
        </div>
        <!-- search form -->
        <form
            action="#"
            method="get"
            class="sidebar-form">
            <div
                class="input-group">
                <input
                    type="text"
                    name="q"
                    class="form-control"
                    placeholder="Search...">
                <span
                    class="input-group-btn">
                    <button
                        type="submit"
                        name="search"
                        id="search-btn"
                        class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu"
            data-widget="tree">
            <li
                class="header">
                MAIN
                NAVIGATION
            </li>


            <li>
                <a
                    href="<?= base_url(); ?>/template/widgets.html">
                    <i
                        class="fa fa-home"></i>
                    <span>Beranda</span>
                </a>
            </li>


            <li>
                <a
                    href="<?= base_url(); ?>/template/widgets.html">
                    <i
                        class="fa fa-user"></i>
                    <span>Profil
                        Pengguna
                    </span>
                </a>
            </li>


            <li>
                <a
                    href="<?= base_url(); ?>/template/widgets.html">
                    <i
                        class="fa fa-user"></i>
                    <span>Data
                        Admin</span>
                </a>
            </li>


            <li>
                <a
                    href="<?= base_url(); ?>/template/widgets.html">
                    <i
                        class="fa fa-users"></i>
                    <span>Data
                        Nasabah</span>
                </a>
            </li>


            <li>
                <a
                    href="<?= base_url(); ?>/template/widgets.html">
                    <i
                        class="fa fa-trash"></i>
                    <span>Data
                        Sampah</span>
                </a>
            </li>


            <li
                class="treeview">
                <a
                    href="#">
                    <i
                        class="fa fa-history"></i>
                    <span>Data
                        Transaksi</span>
                    <span
                        class="pull-right-container">
                        <i
                            class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul
                    class="treeview-menu">
                    <li><a
                            href="../charts/chartjs.html"><i
                                class="fa fa-circle-o"></i>
                            Transaksi
                            Penyetoran</a>
                    </li>
                    <li><a
                            href="../charts/morris.html"><i
                                class="fa fa-circle-o"></i>
                            Transaksi
                            Penarikan</a>
                    </li>
                </ul>
            </li>


            <li
                class="treeview">
                <a
                    href="#">
                    <i
                        class="fa fa-file"></i>
                    <span>Laporan</span>
                    <span
                        class="pull-right-container">
                        <i
                            class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul
                    class="treeview-menu">
                    <li><a
                            href="../charts/chartjs.html"><i
                                class="fa fa-circle-o"></i>
                            Laporan
                            Penyetoran
                            Nasabah</a>
                    </li>

                    <li><a
                            href="../charts/morris.html"><i
                                class="fa fa-circle-o"></i>
                            Laporan
                            Penarikan
                            Nasabah</a>
                    </li>

                    <li><a
                            href="../charts/morris.html"><i
                                class="fa fa-circle-o"></i>
                            Laporan
                            Tabungan
                            Nasabah</a>
                    </li>

                </ul>
            </li>

            <li
                class="treeview">
                <a
                    href="#">
                    <i
                        class="fa fa-gear"></i>
                    <span>Tentang
                    </span>
                    <span
                        class="pull-right-container">
                        <i
                            class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul
                    class="treeview-menu">
                    <li><a
                            href="../charts/chartjs.html"><i
                                class="fa fa-circle-o"></i>
                            Profil
                            Pembuat
                            Aplikasi
                        </a>
                    </li>

                    <li><a
                            href="../charts/morris.html"><i
                                class="fa fa-circle-o"></i>
                            Profil
                            SIMBAS</a>
                    </li>


                </ul>
            </li>






        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div
    class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section
        class="content-header">
        <h1>
            <?= $title; ?>
            <small>it
                all
                starts
                here</small>
        </h1>
        <ol
            class="breadcrumb">
            <li><a
                    href="#"><i
                        class="fa fa-home"></i>
                    Beranda</a>
            </li>
            <li><a
                    href="#">Examples</a>
            </li>
            <li
                class="active">
                Blank
                page
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section
        class="content">