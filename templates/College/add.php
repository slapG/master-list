<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\College $college
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List College'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="college form content">
            <?= $this->Form->create($college) ?>
            <fieldset>
                <legend><?= __('Add College') ?></legend>
                <?php
                    echo $this->Form->control('college_name');
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
