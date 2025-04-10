<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Speciality $speciality
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Speciality'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="speciality form content">
            <?= $this->Form->create($speciality) ?>
            <fieldset>
                <legend><?= __('Add Speciality') ?></legend>
                <?php
                    echo $this->Form->control('speciality_laws');
                    echo $this->Form->control('rating');
                    echo $this->Form->control('date_of_examination', ['empty' => true]);
                    echo $this->Form->control('place_of_examination');
                    echo $this->Form->control('license_number');
                    echo $this->Form->control('date_of_validity', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
