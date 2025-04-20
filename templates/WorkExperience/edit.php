<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WorkExperience $workExperience
 * @var string[]|\Cake\Collection\CollectionInterface $departments
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $workExperience->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $workExperience->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Work Experience'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="workExperience form content">
            <?= $this->Form->create($workExperience) ?>
            <fieldset>
                <legend><?= __('Edit Work Experience') ?></legend>
                <?php
                    echo $this->Form->control('start_from');
                    echo $this->Form->control('upto');
                    echo $this->Form->control('position');
                    echo $this->Form->control('department_name');
                    echo $this->Form->control('department_id', ['options' => $departments, 'empty' => true]);
                    echo $this->Form->control('monthly_salary');
                    echo $this->Form->control('salary_grade');
                    echo $this->Form->control('status_of_appointment');
                    echo $this->Form->control('government_service');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
