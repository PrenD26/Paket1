<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="<?=base_url('dashboard')?>" class="navbar-brand sidebar-gone-hide">PEDULI DIRI</a>
                <div class="navbar-nav">
                    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                </div>
              
                <form class="form-inline ml-auto">
              
              
                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?=$this->session->userdata('nama')?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <a href="<?=base_url('auth/logout')?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item <?php if ($this->uri->segment(1) == 'dashboard') {
                                echo('active');
                            }?>">
                            <a href="<?=base_url('dashboard')?>" class="nav-link "><i class="fas fa-home"></i><span>Home</span></a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->segment(1) == 'riwayat') {
                                echo('active');
                            }?>">
                            <a href="<?=base_url('riwayat')?>" class="nav-link"><i class="fas fa-paper-plane"></i><span>Catatan Perjalanan</span></a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->segment(1) == 'isidata') {
                                echo('active');
                            }?>">
                            <a href="<?=base_url('isidata')?>" class="nav-link"><i class="fas fa-book-open"></i><span>Isi Data</span></a>
                        </li>
                    </ul>
                </div>
            </nav>