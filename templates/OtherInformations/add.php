<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OtherInformation $otherInformation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Other Informations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="otherInformations form content">
            <?= $this->Form->create($otherInformation) ?>
            <fieldset>
                <legend><?= __('Add Other Information') ?></legend>
                <?php
                    echo $this->Form->control('special_skill');
                    echo $this->Form->control('non_academic_distinction');
                    echo $this->Form->control('membership');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
