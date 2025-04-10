<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Employee> $employees
 */
?>
<div class="col-12 my-2 d-flex">
    <h1  class="mx-auto" style="font-family: 'Poppins', sans-serif;">Employee Management System</h1>
    </div>
<div class="col-12 my-2 d-flex justify-content-end">
    </div>
<div class="row">
          <div class="col-11 mx-auto">
            <div class="card shadow">
              <div class="card-header">
                <?= $this->Flash->render()?>
                <a href="<?=$this->Url->build(['action' => 'add'])?>" class="btn btn-outline-primary float-right" style="margin-top: 7px">
                    New Employee
                </a>
                <h5  class="mx-auto" style="margin-top: 10px">List of Employee</h5>
              </div>
              <div class="card-body">
              <table class="display table table-hover table-responsive table-bordered table-striped" id="employeesTable">
              <thead>
                <tr>
                    <th>Count</th>
                    <th>Check Box</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Telephone Number</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody></tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->script('https://code.jquery.com/jquery-3.6.0.min.js', ['block' => true]) ?>
<?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') ?>
<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') ?>
<?= $this->Html->css('https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css', ['block' => true]) ?>
<?= $this->Html->script('https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js', ['block' => true]) ?>
<?= $this->Html->script('employees.js', ['block' => true]) ?>
<script>
    var employees = <?= json_encode($employees) ?>;
</script>
<?= $this->Html->script('https://cdn.jsdelivr.net/npm/sweetalert2@11') ?>
<?= $this->Html->script('login.js') ?>