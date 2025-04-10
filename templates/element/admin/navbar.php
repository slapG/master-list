<?= $this->Html->css('custom')?>
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__bounce" src="<?= $this->Url->assetUrl('/img/stgocitys.png'); ?>" alt="AdminLTELogo" height="200" width="200">
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light main-header" style="background: linear-gradient(45deg,rgb(223, 73, 32),rgb(19, 159, 167));">
    <div class="container">
        <!-- Brand Logo -->
        <a href="<?= $this->Url->build(['controller' => 'Dashboard', 'action' => 'index']) ?>" class="brand-link d-flex align-items-center">
            <img src="<?= $this->Url->assetUrl('/img/stgocitys.png'); ?>" alt="City Hall Logo" 
                 class="brand-image img-circle elevation-3" 
                 style="width: 40px; height: 40px; margin-right: 10px;">
                <span style="color: white; font-size: 20px; font-family: 'Roboto', sans-serif;">City Hall EMS</span>
            </a>

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Left Navbar Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="<?= $this->Url->build([ 'controller' => 'Dashboard', 'action' => 'index']) ?>" class="nav-link">
                      <i class=" nav-icon fa fa-user-tie" style="margin-left: 70px"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->Url->build('/employees') ?>" class="nav-link">
                      <i class=" nav-icon fa fa-user-tie"></i> Employees</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->Url->build([ 'controller' => 'Users', 'action' => 'index'])?>" class="nav-link">
                    <i class="nav-icon fa fa-users"></i> Users</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->Url->build([ 'controller' => 'Departments', 'action' => 'index'])?>" class="nav-link">
                        <i class="nav-icon fa fa-building"></i> Departments
                    </a>
                </li>
            </ul>
            <!-- Right Navbar Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']) ?>" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0"><?= $this->fetch('title'); ?><small><?= $this->fetch('subtitle'); ?></small></h1> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layout</a></li>
                        <li class="breadcrumb-item active">Top Navigation</li> -->
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
