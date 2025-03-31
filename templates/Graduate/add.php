<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Graduate $graduate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Graduate'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="graduate form content">
            <?= $this->Form->create($graduate) ?>
            <fieldset>
                <legend><?= __('Add Graduate') ?></legend>
                <?php
                    echo $this->Form->control('graduate_name');
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
