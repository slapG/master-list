<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="col-12 my-2 d-flex ">
</div>

<section class="content">
      <div class="row">
        <div class="col-md-6 my-2 mx-auto">
          <div class="card">
            <div class="card-header">
            <?= $this->Form->create($user) ?>
            <h3 class="card-title"><?=__('Edit User')?></h3>
              <div class="card-tools">
                <button type="button"  class="btn btn-tool float-right" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <div class="col-md-7 mx-auto">
                            <?= $this->Form->label('username') ?>
                            <?= $this->Form->input('username', ['class' => 'form-control', ]) ?>
                        </div>
                    </div>
                    <div class="col-md-11">
                        <div class="col-md-7 mx-auto">
                            <?= $this->Form->label('email') ?>
                            <?= $this->Form->input('email', ['class' => 'form-control', ]) ?>
                        </div>
                    </div>
                    <div class="col-md-11">
                        <div class="col-md-7 mx-auto">
                            <?= $this->Form->label('password') ?>
                            <?= $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'value' => '']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <a href="<?= $this->Url->build(['action' => 'index']) ?>" class="btn btn-primary float-right ">Back</a>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success float-right mr-2']) ?>
            <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
