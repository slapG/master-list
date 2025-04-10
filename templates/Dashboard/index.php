<?= $this->Html->css('custom')?>
<section class="content">
  <div class="container-fluid">
  <div class="col-11 mx-auto">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= h($employees)?></h3>
            <p>Total Employee</p>
          </div>
          <div class="icon">
            <i class="fas fa-address-book"></i>
          </div>
          <a href="<?= $this->Url->build(['controller' => 'Employees', 'action' => 'index'])?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= h($departments)?></h3>
            <p>Total Department</p>
          </div>
          <div class="icon">
            <i class="fas fa-building"></i>
          </div>
          <a href="<?= $this->Url->build(['controller' => 'Departments', 'action' => 'index'])?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= h($users)?></h3>
            <p>Total Users</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index'])?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3><?= h($this->request->getAttribute('identity')->username ?? 'Unknown') ?></h3>
            <p>Logged in account</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'profile']) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>

<!-- chart js na to brad  -->
<div class="col-11 mx-auto">
  <div class="row">
    <div class="col-lg-7 col-12">
        <div class="card shadow">
          <div class="card-header">
            <h3 class="card-title">Employees Added Per Month</h3>
          </div>
          <div class="card-body">
            <canvas id="employeeChart" height="200"></canvas>
          </div>
        </div>
      </div>
    <div class="col-lg-5 col-12">
      <div class="card shadow">
        <div class="card-header">
          <h3 class="card-title">Employee Gender Distribution</h3>
        </div>
        <div class="card-body">
          <canvas id="genderChart" height="289"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const genderData = <?= json_encode($genderData) ?>; 
  const employeeAddedData = <?= json_encode($employeeAddedData) ?>;
</script>
<?= $this->Html->script('dashboard.js')?>

