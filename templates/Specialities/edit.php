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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $speciality->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $speciality->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Specialities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="specialities form content">
            <?= $this->Form->create($speciality) ?>
            <fieldset>
                <legend><?= __('Edit Speciality') ?></legend>
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
