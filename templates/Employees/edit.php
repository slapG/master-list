<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 * @var string[]|\Cake\Collection\CollectionInterface $familyBackground
 * @var string[]|\Cake\Collection\CollectionInterface $elementary
 * @var string[]|\Cake\Collection\CollectionInterface $secondary
 * @var string[]|\Cake\Collection\CollectionInterface $vocational
 * @var string[]|\Cake\Collection\CollectionInterface $college
 * @var string[]|\Cake\Collection\CollectionInterface $graduate
 * @var string[]|\Cake\Collection\CollectionInterface $specialities
 * @var string[]|\Cake\Collection\CollectionInterface $lnds
 * @var string[]|\Cake\Collection\CollectionInterface $organizations
 * @var string[]|\Cake\Collection\CollectionInterface $workExperiences
 * @var string[]|\Cake\Collection\CollectionInterface $otherInformations
 * @var string[]|\Cake\Collection\CollectionInterface $departments
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees form content">
            <?= $this->Form->create($employee) ?>
            <fieldset>
                <legend><?= __('Edit Employee') ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('middle_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('address');
                    echo $this->Form->control('place_of_birth');
                    echo $this->Form->control('date_of_birth');
                    echo $this->Form->control('sex');
                    echo $this->Form->control('civil_status');
                    echo $this->Form->control('height');
                    echo $this->Form->control('weight');
                    echo $this->Form->control('blood_type');
                    echo $this->Form->control('gsis_number');
                    echo $this->Form->control('pagibig_number');
                    echo $this->Form->control('philhealth_number');
                    echo $this->Form->control('sss_number');
                    echo $this->Form->control('tin_number');
                    echo $this->Form->control('agency_employee_number');
                    echo $this->Form->control('citizenship');
                    echo $this->Form->control('residential_address');
                    echo $this->Form->control('permanent_address');
                    echo $this->Form->control('telephone_number');
                    echo $this->Form->control('mobile_number');
                    echo $this->Form->control('email');
                    echo $this->Form->control('family_background_id', ['options' => $familyBackground]);
                    echo $this->Form->control('elementary_id', ['options' => $elementary]);
                    echo $this->Form->control('secondary_id', ['options' => $secondary]);
                    echo $this->Form->control('vocational_id', ['options' => $vocational]);
                    echo $this->Form->control('college_id', ['options' => $college]);
                    echo $this->Form->control('graduate_id', ['options' => $graduate]);
                    echo $this->Form->control('lnds_id', ['options' => $lnds]);
                    echo $this->Form->control('organizations_id', ['options' => $organizations]);
                    echo $this->Form->control('work_experiences_id', ['options' => $workExperiences]);
                    echo $this->Form->control('other_informations_id', ['options' => $otherInformations]);
                    echo $this->Form->control('specialities_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
