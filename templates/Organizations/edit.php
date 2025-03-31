<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organization $organization
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $organization->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $organization->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Organizations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="organizations form content">
            <?= $this->Form->create($organization) ?>
            <fieldset>
                <legend><?= __('Edit Organization') ?></legend>
                <?php
                    echo $this->Form->control('name_of_organization');
                    echo $this->Form->control('exclusive_from', ['empty' => true]);
                    echo $this->Form->control('exclusive_to', ['empty' => true]);
                    echo $this->Form->control('number_of_hours');
                    echo $this->Form->control('position');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
