<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'City Hall : Employee Management System';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')) ?>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
        '/adminlte/plugins/fontawesome-free/css/all.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        '/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        '/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        '/adminlte/plugins/jqvmap/jqvmap.min.css',
        '/adminlte/dist/css/adminlte.min.css',
        '/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        '/adminlte/plugins/daterangepicker/daterangepicker.css',
        '/adminlte/plugins/summernote/summernote-bs4.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css',
        'custom.css'

    ]) ?>

    <?= $this->Html->script('https://cdn.jsdelivr.net/npm/chart.js')?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>


<body class="hold-transition layout-top-nav">
<?= $this->Flash->render() ?>
<div class="wrapper">
<?= $this->element('admin/navbar')?>
<div class="content-wrapper">
<?= $this->fetch('admin/header') ?>
<section class="content">
<?= $this->fetch('content') ?>
</section>
</div>
<?= $this->element('admin/footer')?>
</div>
    <?=$this->Html->script([
        '/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        '/adminlte/plugins/chart.js/Chart.min.js',
        '/adminlte/plugins/sparklines/sparkline.js',
        '/adminlte/plugins/jqvmap/jquery.vmap.min.js',
        '/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js',
        '/adminlte/plugins/jquery-knob/jquery.knob.min.js',
        '/adminlte/plugins/moment/moment.min.js',
        '/adminlte/plugins/daterangepicker/daterangepicker.js',
        '/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        '/adminlte/plugins/summernote/summernote-bs4.min.js',
        '/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        '/adminlte/dist/js/adminlte.js',
        '/adminlte/dist/js/demo.js',
        '/adminlte/dist/js/pages/dashboard.js',
        '/adminlte/plugins/jquery/jquery.min.js',
        '/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        '/adminlte/dist/js/adminlte.min.js',
        '/adminlte/dist/js/demo.js',
        '/adminlte/plugins/datatables/jquery.dataTables.js',
        'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js',
        'https://cdn.jsdelivr.net/npm/sweetalert2@11'
    ])?>
</body>
</html>
