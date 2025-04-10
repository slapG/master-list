<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lnd $lnd
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lnd->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lnd->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Lnd'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lnd form content">
            <?= $this->Form->create($lnd) ?>
            <fieldset>
                <legend><?= __('Edit Lnd') ?></legend>
                <?php
                    echo $this->Form->control('training_program');
                    echo $this->Form->control('exclusive_from', ['empty' => true]);
                    echo $this->Form->control('exclusive_to', ['empty' => true]);
                    echo $this->Form->control('number_of_hours');
                    echo $this->Form->control('type');
                    echo $this->Form->control('conducted_by');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
