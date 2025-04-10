<div class="d-flex justify-content-center align-items-center" style="height: 100vh; background-image: url('<?= $this->Url->assetUrl('/img/stgocitys.png') ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="login-box">

    <!-- Render Flash messages normally -->
    <?= $this->Flash->render() ?>

    <!-- SweetAlert for success -->
    <?php if (!empty($flashSuccess)): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '<?= h($flashSuccess) ?>',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    <?php endif; ?>

    <!-- SweetAlert for error -->
    <?php if (!empty($flashError)): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?= h($flashError) ?>'
            });
        </script>
    <?php endif; ?>
        <!-- Login Form -->
        <div class="card card-outline card-danger shadow">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Employee </b>System</a>
            </div>
            <?= $this->Form->create() ?>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <div class="input-group mb-3">
                    <?= $this->Form->text('email', [
                        'class' => 'form-control', 
                        'placeholder' => 'Email', 
                        'id' => 'email', 
                        'required' => true
                    ]); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                
                <div class="input-group mb-3">
                    <?= $this->Form->password('password', [
                        'class' => 'form-control', 
                        'placeholder' => 'Password', 
                        'id' => 'password', 
                        'required' => true
                    ]); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <?= $this->Form->checkbox('remember', ['id' => 'remember']); ?>
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <?= $this->Form->button('Login', ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<?= $this->Html->script('https://code.jquery.com/jquery-3.6.0.min.js') ?>
<?= $this->Html->script('https://cdn.jsdelivr.net/npm/sweetalert2@11') ?>
<?= $this->Html->script('login.js') ?>
