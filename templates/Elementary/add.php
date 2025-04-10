<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementary $elementary
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Elementary'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="elementary form content">
            <?= $this->Form->create($elementary) ?>
            <fieldset>
                <legend><?= __('Add Elementary') ?></legend>
                <?php
                    echo $this->Form->control('elementary_name');
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
