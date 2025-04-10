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

$cakeDescription = 'Expenses System';
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
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"',
        '/adminlte/plugins/fontawesome-free/css/all.min.css',
        '/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        '/adminlte/dist/css/adminlte.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'
    ]) ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
    <?= $this->Html->script('https://code.jquery.com/jquery-3.6.0.min.js') ?>

    <?= $this->Html->script([
        '/adminlte/plugins/jquery/jquery.min.js',
        '/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
        '/adminlte/dist/js/adminlte.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js',
        'https://cdn.jsdelivr.net/npm/sweetalert2@11',
        'https://code.jquery.com/jquery-3.6.0.min.js'
    ])?>
</body>
</html>
