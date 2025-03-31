<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Secondary $secondary
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $secondary->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $secondary->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Secondary'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="secondary form content">
            <?= $this->Form->create($secondary) ?>
            <fieldset>
                <legend><?= __('Edit Secondary') ?></legend>
                <?php
                    echo $this->Form->control('secondary_name');
                    echo $this->Form->control('basic_education');
                    echo $this->Form->control('start_from', ['empty' => true]);
                    echo $this->Form->control('end_to', ['empty' => true]);
                    echo $this->Form->control('year_graduated', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
