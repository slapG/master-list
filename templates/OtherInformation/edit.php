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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $otherInformation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $otherInformation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Other Information'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="otherInformation form content">
            <?= $this->Form->create($otherInformation) ?>
            <fieldset>
                <legend><?= __('Edit Other Information') ?></legend>
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
