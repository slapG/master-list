<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FamilyBackground $familyBackground
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $familyBackground->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $familyBackground->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Family Background'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="familyBackground form content">
            <?= $this->Form->create($familyBackground) ?>
            <fieldset>
                <legend><?= __('Edit Family Background') ?></legend>
                <?php
                    echo $this->Form->control('family_background');
                    echo $this->Form->control('spouse_name');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('middle_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('occupation');
                    echo $this->Form->control('employer_business_name');
                    echo $this->Form->control('business_address');
                    echo $this->Form->control('telephone_number');
                    echo $this->Form->control('father_surname');
                    echo $this->Form->control('father_first_name');
                    echo $this->Form->control('father_middle_name');
                    echo $this->Form->control('mother_maiden_name');
                    echo $this->Form->control('mother_first_name');
                    echo $this->Form->control('mother_middle_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
