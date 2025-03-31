<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vocational $vocational
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vocational->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vocational->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Vocational'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vocational form content">
            <?= $this->Form->create($vocational) ?>
            <fieldset>
                <legend><?= __('Edit Vocational') ?></legend>
                <?php
                    echo $this->Form->control('vocational_name');
                    echo $this->Form->control('basic_education');
                    echo $this->Form->control('from', ['empty' => true]);
                    echo $this->Form->control('to', ['empty' => true]);
                    echo $this->Form->control('year_graduated', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
