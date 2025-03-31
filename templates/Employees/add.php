<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 * @var \Cake\Collection\CollectionInterface|string[] $familyBackground
 * @var \Cake\Collection\CollectionInterface|string[] $elementary
 * @var \Cake\Collection\CollectionInterface|string[] $secondary
 * @var \Cake\Collection\CollectionInterface|string[] $vocational
 * @var \Cake\Collection\CollectionInterface|string[] $college
 * @var \Cake\Collection\CollectionInterface|string[] $graduate
 * @var \Cake\Collection\CollectionInterface|string[] $specialities
 * @var \Cake\Collection\CollectionInterface|string[] $lnds
 * @var \Cake\Collection\CollectionInterface|string[] $organizations
 * @var \Cake\Collection\CollectionInterface|string[] $workExperiences
 * @var \Cake\Collection\CollectionInterface|string[] $otherInformations
 * @var \Cake\Collection\CollectionInterface|string[] $departments
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees form content">
            <?= $this->Form->create($employee) ?>
            <fieldset>
                <legend><?= __('Add Employee') ?></legend>
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
                    echo $this->Form->control('family_background_id', ['options' => $familyBackground, 'type' => 'hidden']);
                    echo $this->Form->control('elementary_id', ['options' => $elementary, 'type' => 'hidden']);
                    echo $this->Form->control('secondary_id', ['options' => $secondary, 'type' => 'hidden']);
                    echo $this->Form->control('vocational_id', ['options' => $vocational, 'type' => 'hidden']);
                    echo $this->Form->control('college_id', ['options' => $college, 'type' => 'hidden']);
                    echo $this->Form->control('graduate_id', ['options' => $graduate, 'type' => 'hidden']);
                    echo $this->Form->control('lnds_id', ['options' => $lnds, 'type' => 'hidden']);
                    echo $this->Form->control('organizations_id', ['options' => $organizations, 'type' => 'hidden']);
                    echo $this->Form->control('work_experiences_id', ['options' => $workExperiences, 'type' => 'hidden']);
                    echo $this->Form->control('other_informations_id', ['options' => $otherInformations, 'type' => 'hidden']);
                    echo $this->Form->control('specialities_id', ['options' => $specialities, 'type' => 'hidden']);
                    echo '<h2>Family Background</h2>';
                    echo $this->Form->control('family_background.family_background');
                    echo $this->Form->control('family_background.spouse_name');
                    echo $this->Form->control('family_background.first_name', ['label' => 'Spouse First Name']);
                    echo $this->Form->control('family_background.middle_name', ['label' => 'Spouse Middle Name']);
                    echo $this->Form->control('family_background.last_name', ['label' => 'Spouse Last Name']);
                    echo $this->Form->control('family_background.occupation');
                    echo $this->Form->control('family_background.employer_business_name');
                    echo $this->Form->control('family_background.business_address');
                    echo $this->Form->control('family_background.telephone_number');
                    echo $this->Form->control('family_background.father_surname');
                    echo $this->Form->control('family_background.father_first_name');
                    echo $this->Form->control('family_background.father_middle_name');
                    echo $this->Form->control('family_background.mother_maiden_name');
                    echo $this->Form->control('family_background.mother_first_name');
                    echo $this->Form->control('family_background.mother_middle_name');
                    echo '<h2>Elementary</h2>';
                    echo $this->Form->control('elementary.elementary_name');
                    echo $this->Form->control('elementary.basic_education');
                    echo $this->Form->control('elementary.period_of_attendance');
                    echo $this->Form->control('elementary.year_graduated');
                    echo '<h2>Secondary</h2>';
                    echo $this->Form->control('secondary.secondary_name');
                    echo $this->Form->control('secondary.basic_education');
                    echo $this->Form->control('secondary.start_from');
                    echo $this->Form->control('secondary.end_to');
                    echo $this->Form->control('secondary.year_graduated');
                    echo '<h2>Vocational</h2>';
                    echo $this->Form->control('vocational.vocational_name');
                    echo $this->Form->control('vocational.basic_education');
                    echo $this->Form->control('vocational.start_from');
                    echo $this->Form->control('vocational.end_to');
                    echo $this->Form->control('vocational.year_graduated');
                    echo '<h2>College</h2>';
                    echo $this->Form->control('college.college_name');
                    echo $this->Form->control('college.basic_education');
                    echo $this->Form->control('college.start_from');
                    echo $this->Form->control('college.end_to');
                    echo $this->Form->control('college.year_graduated');
                    echo '<h2>Graduate</h2>';
                    echo $this->Form->control('graduate.graduate_name');
                    echo $this->Form->control('graduate.basic_education');
                    echo $this->Form->control('graduate.start_from');
                    echo $this->Form->control('graduate.end_to');
                    echo $this->Form->control('graduate.year_graduated');
                    echo '<h2>Lnd</h2>';
                    echo $this->Form->control('lnds.training_program');
                    echo $this->Form->control('lnds.exclusive_from', ['type' => 'date']);
                    echo $this->Form->control('lnds.exclusive_to',['type' => 'date']);
                    echo $this->Form->control('lnds.number_of_hours');
                    echo $this->Form->control('lnds.type');
                    echo $this->Form->control('lnds.conducted_by');
                    echo '<h2>Organizations</h2>';
                    echo $this->Form->control('organizations.name_of_organization');
                    echo $this->Form->control('organizations.exclusive_from', ['type' => 'date']);
                    echo $this->Form->control('organizations.exclusive_to', ['type' => 'date']);
                    echo $this->Form->control('organizations.number_of_hours');
                    echo $this->Form->control('organizations.position');
                    echo '<h2>Work Experiences</h2>';
                    echo $this->Form->control('work_experiences.start_from');
                    echo $this->Form->control('work_experiences.upto');
                    echo $this->Form->control('work_experiences.position');
                    echo $this->Form->control('work_experiences.department_id');
                    echo $this->Form->control('work_experiences.monthly_salary');
                    echo $this->Form->control('work_experiences.salary_grade');
                    echo $this->Form->control('work_experiences.status_of_appointment');
                    echo $this->Form->control('work_experiences.government_service');
                    echo '<h2>Other Informations</h2>';
                    echo $this->Form->control('other_informations.special_skill');
                    echo $this->Form->control('other_informations.non_academic');
                    echo $this->Form->control('other_informations.non_academic_distinction');
                    echo '<h2>Specialities</h2>';
                    echo $this->Form->control('specialities.speciality_laws');
                    echo $this->Form->control('specialities.rating');
                    echo $this->Form->control('specialities.date_of_examination',['type' => 'date']);
                    echo $this->Form->control('specialities.place_of_examination');
                    echo $this->Form->control('specialities.license_number');
                    echo $this->Form->control('specialities.date_of_validity',['type' => 'date']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
