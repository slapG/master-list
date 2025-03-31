<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src=<?= $this->Url->assetUrl('/img/aljay.png'); ?> alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 1" >
      <span class="brand-text font-weight-light  ">Aljay</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src=<?= $this->Url->assetUrl('/image/aljay.png'); ?> class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'account', intval(@$auth['id'])]); ?>"
           class="d-block"><?= @$auth['email']; ?></a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">NAVIGATION</li>
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller' => 'dashboard', 'action' => 'index'])?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">ENCODE</li>
          <li class="nav-item">
            <a href="<?= $this->Url->build([ 'controller' => 'Members', 'action' => 'index' ]) ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Members
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $this->Url->build([ 'controller' => 'members', 'action' => 'leaders' ]) ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Leaders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $this->Url->build([ 'controller' => 'cellGroups', 'action' => 'index' ]) ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Cell Group
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller' => 'attendances', 'action' => 'index'])?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Attendance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $this->Url->build([ 'controller' => 'Schedules', 'action' => 'index'])?>" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Schedule
              </p>
            </a>
          </li>
          <li class="nav-header">TECHNICALS</li>
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index'])?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>