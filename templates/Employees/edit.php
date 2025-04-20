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
 * @var string[]|\Cake\Collection\CollectionInterface $lnd
 * @var string[]|\Cake\Collection\CollectionInterface $organization
 * @var string[]|\Cake\Collection\CollectionInterface $workExperience
 * @var string[]|\Cake\Collection\CollectionInterface $otherInformation
 * @var string[]|\Cake\Collection\CollectionInterface $speciality
 */
?>
<section class="content">
      <div class="row">
        <div class="col-md-11 my-2 mx-auto">
          <div class="card">
            <div class="card-header">
            <?= $this->Form->create($employee) ?>
            <h3 class="card-title"><?=__('Add Employee')?></h3>
              <div class="card-tools">
                <button type="button"  class="btn btn-tool float-right" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">I. Personal Information</h2>
                </div>
            <div class="row">
                    <div class="col-md-3">
                        <?= $this->Form->label('first_name') ?>
                        <?= $this->Form->input('first_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('middle_name') ?>
                        <?= $this->Form->input('middle_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('last_name') ?>
                        <?= $this->Form->input('last_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->control('date_of_birth',[
                            'type' => 'date',
                            'label' => 'Date of Birth',
                            'value' => $employee->date_of_birth ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('address') ?>
                        <?= $this->Form->input('address', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('place_of_birth') ?>
                        <?= $this->Form->input('place_of_birth', ['class' => 'form-control', ]) ?>
                    </div>
                    
                    <div class="col-md-3">
                        <?= $this->Form->label('sex') ?>
                        <?= $this->Form->select('sex',['Male' => 'Male', 'Female' => 'Female'], [
                            'class' => 'form-control',
                            ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('civil_status') ?>
                        <?= $this->Form->input('civil_status', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label(ucwords('height (cm)')) ?>
                        <?= $this->Form->input('height', [
                            'class' => 'form-control',
                            'type' => 'number',
                            
                            ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label(ucwords('weight (kg)')) ?>
                        <?= $this->Form->input('weight', [
                            'class' => 'form-control',
                            'type' => 'number',
                            
                             ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('blood_type') ?>
                        <?= $this->Form->input('blood_type', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('gsis_number') ?>
                        <?= $this->Form->input('gsis_number', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('pagibig_number') ?>
                        <?= $this->Form->input('pagibig_number', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('philhealth_number') ?>
                        <?= $this->Form->input('philhealth_number', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('sss_number') ?>
                        <?= $this->Form->input('sss_number', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('tin_number') ?>
                        <?= $this->Form->input('tin_number', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('agency_employee_number') ?>
                        <?= $this->Form->input('agency_employee_number', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('citizenship') ?>
                        <?= $this->Form->input('citizenship', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('residential_address') ?>
                        <?= $this->Form->input('residential_address', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('permanent_address') ?>
                        <?= $this->Form->input('permanent_address', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('telephone_number') ?>
                        <?= $this->Form->input('telephone_number', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('mobile_number') ?>
                        <?= $this->Form->input('mobile_number', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('email') ?>
                        <?= $this->Form->input('email', ['class' => 'form-control', ]) ?>
                    </div>
                </div>
              
                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">II. Family Background</h2>
                </div>

          
                <div class="row">
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.first_name', 'Spouse First Name') ?>
                        <?= $this->Form->input('family_background.first_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.middle_name', 'Spouse Middle Name') ?>
                        <?= $this->Form->input('family_background.middle_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.last_name', 'Spouse Last Name') ?>
                        <?= $this->Form->input('family_background.last_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('family_background.occupation') ?>
                        <?= $this->Form->input('family_background.occupation', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('family_background.employer_business_name') ?>
                        <?= $this->Form->input('family_background.employer_business_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('family_background.business_address') ?>
                        <?= $this->Form->input('family_background.business_address', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('family_background.telephone_number') ?>
                        <?= $this->Form->input('family_background.telephone_number', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.father_surname') ?>
                        <?= $this->Form->input('family_background.father_surname', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.father_first_name') ?>
                        <?= $this->Form->input('family_background.father_first_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.father_middle_name') ?>
                        <?= $this->Form->input('family_background.father_middle_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.mother_maiden_name') ?>
                        <?= $this->Form->input('family_background.mother_maiden_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.mother_first_name') ?>
                        <?= $this->Form->input('family_background.mother_first_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.mother_middle_name') ?>
                        <?= $this->Form->input('family_background.mother_middle_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.siblings', 'Sibling/Siblings Fullname') ?>
                        <?= $this->Form->input("family_background.siblings.0", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling name',
                            'value' => $employee->family_background->siblings[0] ?? null,
                        ]) ?>
                        <?= $this->Form->input("family_background.siblings.1", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling name',
                            'hidden' => empty($employee->family_background->siblings[1]),
                            'value' => $employee->family_background->siblings[1] ?? null,
                        ]) ?>
                        <?= $this->Form->input("family_background.siblings.2", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling name',
                            'hidden' => empty($employee->family_background->siblings[2]),
                            'value' => $employee->family_background->siblings[2] ?? null,
                        ]) ?>
                        <?= $this->Form->input("family_background.siblings.3", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling name',
                            'hidden' => empty($employee->family_background->siblings[3]),
                            'value' => $employee->family_background->siblings[3] ?? null,
                        ]) ?>
                        <?= $this->Form->input("family_background.siblings.4", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling name',
                            'hidden' => empty($employee->family_background->siblings[4]),
                            'value' => $employee->family_background->siblings[4] ?? null,
                        ]) ?>
                        <?= $this->Form->input("family_background.siblings.5", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling name',
                            'hidden' => empty($employee->family_background->siblings[5]),
                            'value' => $employee->family_background->siblings[5] ?? null,
                        ]) ?>
                        <?= $this->Form->input("family_background.siblings.6", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling name',
                            'hidden' => empty($employee->family_background->siblings[6]),
                            'value' => $employee->family_background->siblings[6] ?? null,
                        ]) ?>
                        <?= $this->Form->input("family_background.siblings.7", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling name',
                            'hidden' => empty($employee->family_background->siblings[7]),
                            'value' => $employee->family_background->siblings[7] ?? null,
                        ]) ?>
                        <?= $this->Form->input("family_background.siblings.8", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling name',
                            'hidden' => empty($employee->family_background->siblings[8]),
                            'value' => $employee->family_background->siblings[8] ?? null,
                        ]) ?>
                        <?= $this->Form->input("family_background.siblings.9", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling name',
                            'hidden' => empty($employee->family_background->siblings[9]),
                            'value' => $employee->family_background->siblings[9] ?? null,
                        ]) ?>
                        <?= $this->Form->input("family_background.siblings.10", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling name',
                            'hidden' => empty($employee->family_background->siblings[10]),
                            'value' => $employee->family_background->siblings[10] ?? null,
                        ]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.bithdays', 'Birthdays') ?>
                        <?= $this->Form->input("family_background.bithdays.0", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling birthday',
                            'type' => 'date',
                            'value' => $employee->family_background->bithdays[0] ?? '',
                        ]) ?>
                        <?= $this->Form->input("family_background.bithdays.1", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling birthday',
                            'type' => 'date',
                            'hidden' => empty($employee->family_background->bithdays[1]),
                            'value' => $employee->family_background->bithdays[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input("family_background.bithdays.2", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling birthday',
                            'type' => 'date',
                            'hidden' => empty($employee->family_background->bithdays[2]),
                            'value' => $employee->family_background->bithdays[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input("family_background.bithdays.3", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling birthday',
                            'type' => 'date',
                            'hidden' => empty($employee->family_background->bithdays[3]),
                            'value' => $employee->family_background->bithdays[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input("family_background.bithdays.4", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling birthday',
                            'type' => 'date',
                            'hidden' => empty($employee->family_background->bithdays[4]),
                            'value' => $employee->family_background->bithdays[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input("family_background.bithdays.5", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling birthday',
                            'type' => 'date',
                            'hidden' => empty($employee->family_background->bithdays[5]),
                            'value' => $employee->family_background->bithdays[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input("family_background.bithdays.6", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling birthday',
                            'type' => 'date',
                            'hidden' => empty($employee->family_background->bithdays[6]),
                            'value' => $employee->family_background->bithdays[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input("family_background.bithdays.7", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling birthday',
                            'type' => 'date',
                            'hidden' => empty($employee->family_background->bithdays[7]),
                            'value' => $employee->family_background->bithdays[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input("family_background.bithdays.8", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling birthday',
                            'type' => 'date',
                            'hidden' => empty($employee->family_background->bithdays[8]),
                            'value' => $employee->family_background->bithdays[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input("family_background.bithdays.9", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling birthday',
                            'type' => 'date',
                            'hidden' => empty($employee->family_background->bithdays[9]),
                            'value' => $employee->family_background->bithdays[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input("family_background.bithdays.10", [
                            'class' => 'form-control mt-2',
                            'placeholder' => 'Enter sibling birthday',
                            'type' => 'date',
                            'hidden' => empty($employee->family_background->bithdays[10]),
                            'value' => $employee->family_background->bithdays[10] ?? '',
                        ]) ?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">III. Educational Background</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('elementary.elementary_name') ?>
                        <?= $this->Form->input('elementary.elementary_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('elementary.basic_education') ?>
                        <?= $this->Form->input('elementary.basic_education', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('elementary.start_from',[
                            'type' => 'date',
                            'label' => 'Start From',
                            'value' => $employee->elementary->start_from ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('elementary.end_to',[
                            'type' => 'date',
                            'label' => 'End To',
                            'value' => $employee->elementary->end_to ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('elementary.year_graduated',[
                            'type' => 'date',
                            'label' => 'Year Graduated',
                            'value' => $employee->elementary->year_graduated ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h3 class="text-2xl font-bold"></h3>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('secondary.secondary_name') ?>
                        <?= $this->Form->input('secondary.secondary_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('secondary.basic_education') ?>
                        <?= $this->Form->input('secondary.basic_education', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('secondary.start_from',[
                            'type' => 'date',
                            'label' => 'Start From',
                            'value' => $employee->secondary->start_from ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('secondary.end_to',[
                            'type' => 'date',
                            'label' => 'End To',
                            'value' => $employee->secondary->end_to ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('secondary.year_graduated',[
                            'type' => 'date',
                            'label' => 'Year Graduated',
                            'value' => $employee->secondary->year_graduated ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h3 class="text-2xl font-bold"></h3>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('vocational.vocational_name') ?>
                        <?= $this->Form->input('vocational.vocational_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('vocational.basic_education') ?>
                        <?= $this->Form->input('vocational.basic_education', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('vocational.start_from',[
                            'type' => 'date',
                            'label' => 'Start From',
                            'value' => $employee->vocational->start_from ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('vocational.end_to',[
                            'type' => 'date',
                            'label' => 'End To',
                            'value' => $employee->vocational->end_to ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('vocational.year_graduated',[
                            'type' => 'date',
                            'label' => 'Year Graduated',
                            'value' => $employee->vocational->year_graduated ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h3 class="text-2xl font-bold"></h3>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('college.college_name') ?>
                        <?= $this->Form->input('college.college_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('college.basic_education') ?>
                        <?= $this->Form->input('college.basic_education', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('college.start_from',[
                            'type' => 'date',
                            'label' => 'Start From',
                            'value' => $employee->college->start_from ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('college.end_to',[
                            'type' => 'date',
                            'label' => 'End To',
                            'value' => $employee->college->end_to ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('college.year_graduated',[
                            'type' => 'date',
                            'label' => 'Year Graduated',
                            'value' => $employee->college->year_graduated ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold"></h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('graduate.graduate_name') ?>
                        <?= $this->Form->input('graduate.graduate_name', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('graduate.basic_education') ?>
                        <?= $this->Form->input('graduate.basic_education', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('graduate.start_from',[
                            'type' => 'date',
                            'label' => 'Start From',
                            'value' => $employee->graduate->start_from ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('graduate.end_to',[
                            'type' => 'date',
                            'label' => 'End To',
                            'value' => $employee->graduate->end_to ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                    <div class="col-md-4">
                    <?= $this->Form->control('graduate.year_graduated',[
                            'type' => 'date',
                            'label' => 'Year Graduated',
                            'value' => $employee->graduate->year_graduated ?? null,
                            'class' => 'form-control', 
                        ])?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">IV. Specialities</h2>
                </div>

                <div class="row">
                    <div class="col-md-3 mt-4">
                        <?= $this->Form->label('speciality.speciality_laws') ?>
                        <?= $this->Form->input('speciality.speciality_laws.0', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-1 mt-4">
                        <?= $this->Form->label('speciality.rating') ?>
                        <?= $this->Form->input('speciality.rating.0', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('Date Of Examination')?>
                        <?= $this->Form->input('speciality.date_of_examination.0', [
                            'type' => 'date',
                            'class' => 'form-control',
                            'value' => $employee->speciality->date_of_examination[0] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-3 mt-4">
                        <?= $this->Form->label('speciality.place_of_examination') ?>
                        <?= $this->Form->input('speciality.place_of_examination.0', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('speciality.license_number') ?>
                        <?= $this->Form->input('speciality.license_number.0', ['class' => 'form-control', ]) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('Date Of Validity')?>
                        <?= $this->Form->input('speciality.date_of_validity.0', [
                            'type' => 'date',
                            'class' => 'form-control',
                            'value' => $employee->speciality->date_of_validity[0] ?? '',
                        ]) ?>
                    </div>

                    <div class="col-md-3">
                        <?= $this->Form->input('speciality.speciality_laws.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->speciality_laws[1]),
                            'value' => $employee->speciality->speciality_laws[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.speciality_laws.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->speciality_laws[2]),
                            'value' => $employee->speciality->speciality_laws[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.speciality_laws.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->speciality_laws[3]),
                            'value' => $employee->speciality->speciality_laws[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.speciality_laws.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->speciality_laws[4]),
                            'value' => $employee->speciality->speciality_laws[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.speciality_laws.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->speciality_laws[5]),
                            'value' => $employee->speciality->speciality_laws[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.speciality_laws.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->speciality_laws[6]),
                            'value' => $employee->speciality->speciality_laws[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.speciality_laws.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->speciality_laws[7]),
                            'value' => $employee->speciality->speciality_laws[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.speciality_laws.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->speciality_laws[8]),
                            'value' => $employee->speciality->speciality_laws[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.speciality_laws.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->speciality_laws[9]),
                            'value' => $employee->speciality->speciality_laws[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.speciality_laws.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->speciality_laws[10]),
                            'value' => $employee->speciality->speciality_laws[10] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->input('speciality.rating.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->rating[1]),
                            'value' => $employee->speciality->rating[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.rating.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->rating[2]),
                            'value' => $employee->speciality->rating[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.rating.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->rating[3]),
                            'value' => $employee->speciality->rating[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.rating.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->rating[4]),
                            'value' => $employee->speciality->rating[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.rating.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->rating[5]),
                            'value' => $employee->speciality->rating[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.rating.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->rating[6]),
                            'value' => $employee->speciality->rating[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.rating.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->rating[7]),
                            'value' => $employee->speciality->rating[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.rating.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->rating[8]),
                            'value' => $employee->speciality->rating[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.rating.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->rating[9]),
                            'value' => $employee->speciality->rating[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.rating.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->rating[10]),
                            'value' => $employee->speciality->rating[10] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->input('speciality.date_of_examination.1', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_examination[1]),
                            'value' => $employee->speciality->date_of_examination[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_examination.2', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_examination[2]),
                            'value' => $employee->speciality->date_of_examination[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_examination.3', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_examination[3]),
                            'value' => $employee->speciality->date_of_examination[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_examination.4', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_examination[4]),
                            'value' => $employee->speciality->date_of_examination[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_examination.5', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_examination[5]),
                            'value' => $employee->speciality->date_of_examination[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_examination.6', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_examination[6]),
                            'value' => $employee->speciality->date_of_examination[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_examination.7', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_examination[7]),
                            'value' => $employee->speciality->date_of_examination[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_examination.8', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_examination[8]),
                            'value' => $employee->speciality->date_of_examination[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_examination.9', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_examination[9]),
                            'value' => $employee->speciality->date_of_examination[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_examination.10', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_examination[10]),
                            'value' => $employee->speciality->date_of_examination[10] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->input('speciality.place_of_examination.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->place_of_examination[1]),
                            'value' => $employee->speciality->place_of_examination[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.place_of_examination.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->place_of_examination[2]),
                            'value' => $employee->speciality->place_of_examination[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.place_of_examination.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->place_of_examination[3]),
                            'value' => $employee->speciality->place_of_examination[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.place_of_examination.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->place_of_examination[4]),
                            'value' => $employee->speciality->place_of_examination[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.place_of_examination.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->place_of_examination[5]),
                            'value' => $employee->speciality->place_of_examination[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.place_of_examination.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->place_of_examination[6]),
                            'value' => $employee->speciality->place_of_examination[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.place_of_examination.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->place_of_examination[7]),
                            'value' => $employee->speciality->place_of_examination[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.place_of_examination.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->place_of_examination[8]),
                            'value' => $employee->speciality->place_of_examination[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.place_of_examination.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->place_of_examination[9]),
                            'value' => $employee->speciality->place_of_examination[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.place_of_examination.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->place_of_examination[10]),
                            'value' => $employee->speciality->place_of_examination[10] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->input('speciality.license_number.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->license_number[1]),
                            'value' => $employee->speciality->license_number[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.license_number.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->license_number[2]),
                            'value' => $employee->speciality->license_number[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.license_number.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->license_number[3]),
                            'value' => $employee->speciality->license_number[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.license_number.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->license_number[4]),
                            'value' => $employee->speciality->license_number[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.license_number.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->license_number[5]),
                            'value' => $employee->speciality->license_number[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.license_number.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->license_number[6]),
                            'value' => $employee->speciality->license_number[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.license_number.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->license_number[7]),
                            'value' => $employee->speciality->license_number[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.license_number.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->license_number[8]),
                            'value' => $employee->speciality->license_number[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.license_number.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->license_number[9]),
                            'value' => $employee->speciality->license_number[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.license_number.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->license_number[10]),
                            'value' => $employee->speciality->license_number[10] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->input('speciality.date_of_validity.1', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_validity[1]),
                            'value' => $employee->speciality->date_of_validity[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_validity.2', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_validity[2]),
                            'value' => $employee->speciality->date_of_validity[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_validity.3', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_validity[3]),
                            'value' => $employee->speciality->date_of_validity[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_validity.4', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_validity[4]),
                            'value' => $employee->speciality->date_of_validity[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_validity.5', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_validity[5]),
                            'value' => $employee->speciality->date_of_validity[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_validity.6', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_validity[6]),
                            'value' => $employee->speciality->date_of_validity[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_validity.7', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_validity[7]),
                            'value' => $employee->speciality->date_of_validity[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_validity.8', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_validity[8]),
                            'value' => $employee->speciality->date_of_validity[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_validity.9', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_validity[9]),
                            'value' => $employee->speciality->date_of_validity[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('speciality.date_of_validity.10', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->speciality->date_of_validity[10]),
                            'value' => $employee->speciality->date_of_validity[10] ?? '',
                        ]) ?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">V. Work Experiences</h2>
                </div>

                <div class="row">
                    <div class="col-md mt-4" style="flex: 0 0 12.5%; max-width: 12.5%;">
                        <?= $this->Form->label('work_experience.start_from') ?>
                        <?= $this->Form->input('work_experience.start_from.0', [
                            'type' => 'date', 
                            'label' => 'Start From',
                            'value' => $employee->work_experience->start_from[0] ?? null,
                            'class' => 'form-control', 
                        ])?>
                        <?= $this->Form->input('work_experience.start_from.1', [
                            'type' => 'date', 
                            'label' => 'Start From',
                            'hidden' => empty($employee->work_experience->start_from[1]),
                            'value' => $employee->work_experience->start_from[1] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.start_from.2', [
                            'type' => 'date', 
                            'label' => 'Start From',
                            'hidden' => empty($employee->work_experience->start_from[2]),
                            'value' => $employee->work_experience->start_from[2] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.start_from.3', [
                            'type' => 'date', 
                            'label' => 'Start From',
                            'hidden' => empty($employee->work_experience->start_from[3]),
                            'value' => $employee->work_experience->start_from[3] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.start_from.4', [
                            'type' => 'date', 
                            'label' => 'Start From',
                            'hidden' => empty($employee->work_experience->start_from[4]),
                            'value' => $employee->work_experience->start_from[4] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.start_from.5', [
                            'type' => 'date', 
                            'label' => 'Start From',
                            'hidden' => empty($employee->work_experience->start_from[5]),
                            'value' => $employee->work_experience->start_from[5] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.start_from.6', [
                            'type' => 'date', 
                            'label' => 'Start From',
                            'hidden' => empty($employee->work_experience->start_from[6]),
                            'value' => $employee->work_experience->start_from[6] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.start_from.7', [
                            'type' => 'date', 
                            'label' => 'Start From',
                            'hidden' => empty($employee->work_experience->start_from[7]),
                            'value' => $employee->work_experience->start_from[7] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.start_from.8', [
                            'type' => 'date', 
                            'label' => 'Start From',
                            'hidden' => empty($employee->work_experience->start_from[8]),
                            'value' => $employee->work_experience->start_from[8] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.start_from.9', [
                            'type' => 'date', 
                            'label' => 'Start From',
                            'hidden' => empty($employee->work_experience->start_from[9]),
                            'value' => $employee->work_experience->start_from[9] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.start_from.10', [
                            'type' => 'date', 
                            'label' => 'Start From',
                            'hidden' => empty($employee->work_experience->start_from[10]),
                            'value' => $employee->work_experience->start_from[10] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                    </div>

                    <div class="col-md mt-4" style="flex: 0 0 12.5%; max-width: 12.5%;">
                        <?= $this->Form->label('work_experience.upto', 'Up To') ?>
                        <?= $this->Form->input('work_experience.upto.0', [
                            'type' => 'date', 
                            'label' => 'Up To',
                            'value' => $employee->work_experience->upto[0] ?? null,
                            'class' => 'form-control', 
                        ])?>
                        <?= $this->Form->input('work_experience.upto.1', [
                            'type' => 'date', 
                            'label' => 'Up To',
                            'hidden' => empty($employee->work_experience->upto[1]),
                            'value' => $employee->work_experience->upto[1] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.upto.2', [
                            'type' => 'date', 
                            'label' => 'Up To',
                            'hidden' => empty($employee->work_experience->upto[2]),
                            'value' => $employee->work_experience->upto[2] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>    
                        <?= $this->Form->input('work_experience.upto.3', [
                            'type' => 'date', 
                            'label' => 'Up To',
                            'hidden' => empty($employee->work_experience->upto[3]),
                            'value' => $employee->work_experience->upto[3] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.upto.4', [
                            'type' => 'date', 
                            'label' => 'Up To',
                            'hidden' => empty($employee->work_experience->upto[4]),
                            'value' => $employee->work_experience->upto[4] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.upto.5', [
                            'type' => 'date', 
                            'label' => 'Up To',
                            'hidden' => empty($employee->work_experience->upto[5]),
                            'value' => $employee->work_experience->upto[5] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.upto.6', [
                            'type' => 'date', 
                            'label' => 'Up To',
                            'hidden' => empty($employee->work_experience->upto[6]),
                            'value' => $employee->work_experience->upto[6] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.upto.7', [
                            'type' => 'date', 
                            'label' => 'Up To',
                            'hidden' => empty($employee->work_experience->upto[7]),
                            'value' => $employee->work_experience->upto[7] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.upto.8', [
                            'type' => 'date', 
                            'label' => 'Up To',
                            'hidden' => empty($employee->work_experience->upto[8]),
                            'value' => $employee->work_experience->upto[8] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.upto.9', [
                            'type' => 'date', 
                            'label' => 'Up To',
                            'hidden' => empty($employee->work_experience->upto[9]),
                            'value' => $employee->work_experience->upto[9] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>
                        <?= $this->Form->input('work_experience.upto.10', [
                            'type' => 'date', 
                            'label' => 'Up To',
                            'hidden' => empty($employee->work_experience->upto[10]),
                            'value' => $employee->work_experience->upto[10] ?? null,
                            'class' => 'form-control mt-2', 
                        ])?>

                            
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('work_experience.position') ?>
                        <?= $this->Form->input('work_experience.position.0', [
                            'class' => 'form-control',
                            'value' => $employee->work_experience->position[0] ?? null,
                        ]) ?>

                        <?= $this->Form->input('work_experience.position.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->position[1]),
                            'value' => $employee->work_experience->position[1] ?? null,
                        ]) ?>
                        <?= $this->Form->input('work_experience.position.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->position[2]),
                            'value' => $employee->work_experience->position[2] ?? null,
                        ]) ?>
                        <?= $this->Form->input('work_experience.position.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->position[3]),
                            'value' => $employee->work_experience->position[3] ?? null,
                        ]) ?>
                        <?= $this->Form->input('work_experience.position.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->position[4]),
                            'value' => $employee->work_experience->position[4] ?? null,
                        ]) ?>
                        <?= $this->Form->input('work_experience.position.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->position[5]),
                            'value' => $employee->work_experience->position[5] ?? null,
                        ]) ?>
                        <?= $this->Form->input('work_experience.position.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->position[6]),
                            'value' => $employee->work_experience->position[6] ?? null,
                        ]) ?>
                        <?= $this->Form->input('work_experience.position.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->position[7]),
                            'value' => $employee->work_experience->position[7] ?? null,
                        ]) ?>
                        <?= $this->Form->input('work_experience.position.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->position[8]),
                            'value' => $employee->work_experience->position[8] ?? null,
                        ]) ?>
                        <?= $this->Form->input('work_experience.position.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->position[9]),
                            'value' => $employee->work_experience->position[9] ?? null,
                        ]) ?>
                        <?= $this->Form->input('work_experience.position.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->position[10]),
                            'value' => $employee->work_experience->position[10] ?? null,
                        ]) ?>

                    </div>
                    <div class="col-md-3 mt-4">
                        <?= $this->Form->label('work_experience.department_name') ?>
                        <?= $this->Form->input('work_experience.department_name.0',[
                            'class' => 'form-control',
                            'value' => $employee->work_experience->department_name[0] ?? null,
                        ] )?>

                        <?= $this->Form->input('work_experience.department_name.1',[
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->department_name[1]),
                            'value' => $employee->work_experience->department_name[1] ?? null,
                        ] )?>
                        <?= $this->Form->input('work_experience.department_name.2',[
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->department_name[2]),
                            'value' => $employee->work_experience->department_name[2] ?? null,
                        ] )?>
                        <?= $this->Form->input('work_experience.department_name.3',[
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->department_name[3]),
                            'value' => $employee->work_experience->department_name[3] ?? null,
                        ] )?>
                        <?= $this->Form->input('work_experience.department_name.4',[
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->department_name[4]),
                            'value' => $employee->work_experience->department_name[4] ?? null,
                        ] )?>
                        <?= $this->Form->input('work_experience.department_name.5',[
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->department_name[5]),
                            'value' => $employee->work_experience->department_name[5] ?? null,
                        ] )?>
                        <?= $this->Form->input('work_experience.department_name.6',[
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->department_name[6]),
                            'value' => $employee->work_experience->department_name[6] ?? null,
                        ] )?>
                        <?= $this->Form->input('work_experience.department_name.7',[
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->department_name[7]),
                            'value' => $employee->work_experience->department_name[7] ?? null,
                        ] )?>
                        <?= $this->Form->input('work_experience.department_name.8',[
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->department_name[8]),
                            'value' => $employee->work_experience->department_name[8] ?? null,
                        ] )?>
                        <?= $this->Form->input('work_experience.department_name.9',[
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->department_name[9]),
                            'value' => $employee->work_experience->department_name[9] ?? null,
                        ] )?>
                        <?= $this->Form->input('work_experience.department_name.10',[
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->department_name[10]),
                            'value' => $employee->work_experience->department_name[10] ?? null,
                        ] )?>
                        
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('work_experience.monthly_salary') ?>
                        <?= $this->Form->input('work_experience.monthly_salary.0', [
                            'class' => 'form-control', 
                            'value' => $employee->work_experience->monthly_salary[0] ?? null
                        ]) ?>

                        <?= $this->Form->input('work_experience.monthly_salary.1', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->monthly_salary[1]),
                            'value' => $employee->work_experience->monthly_salary[1] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.2', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->monthly_salary[2]),
                            'value' => $employee->work_experience->monthly_salary[2] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.3', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->monthly_salary[3]),
                            'value' => $employee->work_experience->monthly_salary[3] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.4', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->monthly_salary[4]),
                            'value' => $employee->work_experience->monthly_salary[4] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.5', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->monthly_salary[5]),
                            'value' => $employee->work_experience->monthly_salary[5] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.6', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->monthly_salary[6]),
                            'value' => $employee->work_experience->monthly_salary[6] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.7', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->monthly_salary[7]),
                            'value' => $employee->work_experience->monthly_salary[7] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.8', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->monthly_salary[8]),
                            'value' => $employee->work_experience->monthly_salary[8] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.9', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->monthly_salary[9]),
                            'value' => $employee->work_experience->monthly_salary[9] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.10', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->monthly_salary[10]),
                            'value' => $employee->work_experience->monthly_salary[10] ?? null
                        ]) ?>

                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('work_experience.salary_grade') ?>
                        <?= $this->Form->input('work_experience.salary_grade.0', [
                            'class' => 'form-control',
                            'value' => $employee->work_experience->salary_grade[0] ?? null
                        ]) ?>

                        <?= $this->Form->input('work_experience.salary_grade.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->salary_grade[1]),
                            'value' => $employee->work_experience->salary_grade[1] ?? null
                        ]) ?>

                        <?= $this->Form->input('work_experience.salary_grade.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->salary_grade[2]),
                            'value' => $employee->work_experience->salary_grade[2] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->salary_grade[3]),
                            'value' => $employee->work_experience->salary_grade[3] ?? null
                        ]) ?>

                        <?= $this->Form->input('work_experience.salary_grade.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->salary_grade[4]),
                            'value' => $employee->work_experience->salary_grade[4] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->salary_grade[5]),
                            'value' => $employee->work_experience->salary_grade[5] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->salary_grade[6]),
                            'value' => $employee->work_experience->salary_grade[6] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->salary_grade[7]),
                            'value' => $employee->work_experience->salary_grade[7] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->salary_grade[8]),
                            'value' => $employee->work_experience->salary_grade[8] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->salary_grade[9]),
                            'value' => $employee->work_experience->salary_grade[9] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->work_experience->salary_grade[10]),
                            'value' => $employee->work_experience->salary_grade[10] ?? null
                        ]) ?>

                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('work_experience.status_of_appointment') ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.0', [
                            'class' => 'form-control', 
                            'value' => $employee->work_experience->status_of_appointment[0] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.1', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->status_of_appointment[1]),
                            'value' => $employee->work_experience->status_of_appointment[1] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.2', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->status_of_appointment[2]),
                            'value' => $employee->work_experience->status_of_appointment[2] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.3', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->status_of_appointment[3]),
                            'value' => $employee->work_experience->status_of_appointment[3] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.4', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->status_of_appointment[4]),
                            'value' => $employee->work_experience->status_of_appointment[4] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.5', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->status_of_appointment[5]),
                            'value' => $employee->work_experience->status_of_appointment[5] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.6', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->status_of_appointment[6]),
                            'value' => $employee->work_experience->status_of_appointment[6] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.7', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->status_of_appointment[7]),
                            'value' => $employee->work_experience->status_of_appointment[7] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.8', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->status_of_appointment[8]),
                            'value' => $employee->work_experience->status_of_appointment[8] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.9', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->status_of_appointment[9]),
                            'value' => $employee->work_experience->status_of_appointment[9] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.10', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->status_of_appointment[10]),
                            'value' => $employee->work_experience->status_of_appointment[10] ?? null
                        ]) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('work_experience.government_service') ?>
                        <?= $this->Form->input('work_experience.government_service.0', [
                            'class' => 'form-control', 
                            'value' => $employee->work_experience->government_service[0] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.government_service.1', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->government_service[1]),
                            'value' => $employee->work_experience->government_service[1] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.government_service.2', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->government_service[2]),
                            'value' => $employee->work_experience->government_service[2] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.government_service.3', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->government_service[3]),
                            'value' => $employee->work_experience->government_service[3] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.government_service.4', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->government_service[4]),
                            'value' => $employee->work_experience->government_service[4] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.government_service.5', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->government_service[5]),
                            'value' => $employee->work_experience->government_service[5] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.government_service.6', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->government_service[6]),
                            'value' => $employee->work_experience->government_service[6] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.government_service.7', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->government_service[7]),
                            'value' => $employee->work_experience->government_service[7] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.government_service.8', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->government_service[8]),
                            'value' => $employee->work_experience->government_service[8] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.government_service.9', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->government_service[9]),
                            'value' => $employee->work_experience->government_service[9] ?? null
                        ]) ?>
                        <?= $this->Form->input('work_experience.government_service.10', [
                            'class' => 'form-control mt-2', 
                            'hidden' => empty($employee->work_experience->government_service[10]),
                            'value' => $employee->work_experience->government_service[10] ?? null
                        ]) ?>
                        
                    </div>
                    
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">VI. Organizations</h2>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-4">
                        <?= $this->Form->label('organization.name_of_organization') ?>
                        <?= $this->Form->input('organization.name_of_organization.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('organization.exclusive_from') ?>
                        <?= $this->Form->input('organization.exclusive_from.0', [
                            'type' => 'date',
                            'class' => 'form-control',
                            'value' => $employee->organization->exclusive_from[0] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('organization.exclusive_to') ?>
                        <?= $this->Form->input('organization.exclusive_to.0', [
                            'type' => 'date',
                            'class' => 'form-control',
                            'value' => $employee->organization->exclusive_to[0] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('organization.number_of_hours') ?>
                        <?= $this->Form->input('organization.number_of_hours.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3 mt-4">
                        <?= $this->Form->label('organization.position') ?>
                        <?= $this->Form->input('organization.position.0', ['class' => 'form-control']) ?>
                    </div>

                    <div class="col-md-4">
                        <?= $this->Form->input('organization.name_of_organization.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->name_of_organization[1]),
                            'value' => $employee->organization->name_of_organization[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.name_of_organization.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->name_of_organization[2]),
                            'value' => $employee->organization->name_of_organization[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.name_of_organization.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->name_of_organization[3]),
                            'value' => $employee->organization->name_of_organization[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.name_of_organization.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->name_of_organization[4]),
                            'value' => $employee->organization->name_of_organization[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.name_of_organization.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->name_of_organization[5]),
                            'value' => $employee->organization->name_of_organization[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.name_of_organization.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->name_of_organization[6]),
                            'value' => $employee->organization->name_of_organization[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.name_of_organization.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->name_of_organization[7]),
                            'value' => $employee->organization->name_of_organization[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.name_of_organization.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->name_of_organization[8]),
                            'value' => $employee->organization->name_of_organization[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.name_of_organization.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->name_of_organization[9]),
                            'value' => $employee->organization->name_of_organization[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.name_of_organization.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->name_of_organization[10]),
                            'value' => $employee->organization->name_of_organization[10] ?? '',
                        ]) ?>
                        <!-- ...repeat for other name_of_organization inputs... -->
                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->input('organization.exclusive_from.1', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_from[1]),
                            'value' => $employee->organization->exclusive_from[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_from.2', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_from[2]),
                            'value' => $employee->organization->exclusive_from[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_from.3', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_from[3]),
                            'value' => $employee->organization->exclusive_from[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_from.4', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_from[4]),
                            'value' => $employee->organization->exclusive_from[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_from.5', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_from[5]),
                            'value' => $employee->organization->exclusive_from[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_from.6', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_from[6]),
                            'value' => $employee->organization->exclusive_from[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_from.7', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_from[7]),
                            'value' => $employee->organization->exclusive_from[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_from.8', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_from[8]),
                            'value' => $employee->organization->exclusive_from[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_from.9', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_from[9]),
                            'value' => $employee->organization->exclusive_from[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_from.10', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_from[10]),
                            'value' => $employee->organization->exclusive_from[10] ?? '',
                        ]) ?>
                        <!-- ...repeat for other exclusive_from inputs... -->
                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->input('organization.exclusive_to.1', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_to[1]),
                            'value' => $employee->organization->exclusive_to[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_to.2', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_to[2]),
                            'value' => $employee->organization->exclusive_to[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_to.3', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_to[3]),
                            'value' => $employee->organization->exclusive_to[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_to.4', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_to[4]),
                            'value' => $employee->organization->exclusive_to[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_to.5', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_to[5]),
                            'value' => $employee->organization->exclusive_to[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_to.6', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_to[6]),
                            'value' => $employee->organization->exclusive_to[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_to.7', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_to[7]),
                            'value' => $employee->organization->exclusive_to[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_to.8', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_to[8]),
                            'value' => $employee->organization->exclusive_to[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_to.9', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_to[9]),
                            'value' => $employee->organization->exclusive_to[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.exclusive_to.10', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->exclusive_to[10]),
                            'value' => $employee->organization->exclusive_to[10] ?? '',
                        ]) ?>
                        <!-- ...repeat for other exclusive_to inputs... -->
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->input('organization.number_of_hours.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->number_of_hours[1]),
                            'value' => $employee->organization->number_of_hours[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.number_of_hours.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->number_of_hours[2]),
                            'value' => $employee->organization->number_of_hours[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.number_of_hours.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->number_of_hours[3]),
                            'value' => $employee->organization->number_of_hours[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.number_of_hours.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->number_of_hours[4]),
                            'value' => $employee->organization->number_of_hours[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.number_of_hours.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->number_of_hours[5]),
                            'value' => $employee->organization->number_of_hours[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.number_of_hours.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->number_of_hours[6]),
                            'value' => $employee->organization->number_of_hours[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.number_of_hours.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->number_of_hours[7]),
                            'value' => $employee->organization->number_of_hours[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.number_of_hours.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->number_of_hours[8]),
                            'value' => $employee->organization->number_of_hours[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.number_of_hours.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->number_of_hours[9]),
                            'value' => $employee->organization->number_of_hours[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.number_of_hours.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->number_of_hours[10]),
                            'value' => $employee->organization->number_of_hours[10] ?? '',
                        ]) ?>
                        <!-- ...repeat for other number_of_hours inputs... -->
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->input('organization.position.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->position[1]),
                            'value' => $employee->organization->position[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.position.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->position[2]),
                            'value' => $employee->organization->position[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.position.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->position[3]),
                            'value' => $employee->organization->position[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.position.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->position[4]),
                            'value' => $employee->organization->position[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.position.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->position[5]),
                            'value' => $employee->organization->position[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.position.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->position[6]),
                            'value' => $employee->organization->position[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.position.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->position[7]),
                            'value' => $employee->organization->position[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.position.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->position[8]),
                            'value' => $employee->organization->position[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.position.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->position[9]),
                            'value' => $employee->organization->position[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('organization.position.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->organization->position[10]),
                            'value' => $employee->organization->position[10] ?? '',
                        ]) ?>
                        <!-- ...repeat for other position inputs... -->
                    </div>
                </div>

                
                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">VII. Learning and Development</h2>
                </div>

                <div class="row">
                    <div class="col-md-3 mt-4">
                        <?= $this->Form->label('lnd.training_program') ?>
                        <?= $this->Form->input('lnd.training_program.0', ['class' => 'form-control', ]) ?>
                        <?= $this->Form->input('lnd.training_program.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->training_program[1]),
                            'value' => $employee->lnd->training_program[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.training_program.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->training_program[2]),
                            'value' => $employee->lnd->training_program[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.training_program.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->training_program[3]),
                            'value' => $employee->lnd->training_program[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.training_program.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->training_program[4]),
                            'value' => $employee->lnd->training_program[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.training_program.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->training_program[5]),
                            'value' => $employee->lnd->training_program[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.training_program.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->training_program[6]),
                            'value' => $employee->lnd->training_program[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.training_program.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->training_program[7]),
                            'value' => $employee->lnd->training_program[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.training_program.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->training_program[8]),
                            'value' => $employee->lnd->training_program[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.training_program.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->training_program[9]),
                            'value' => $employee->lnd->training_program[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.training_program.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->training_program[10]),
                            'value' => $employee->lnd->training_program[10] ?? '',
                        ]) ?>
                        
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('lnd.exclusive_from') ?>
                        <?= $this->Form->input('organization.exclusive_from.0', [
                            'type' => 'date',
                            'class' => 'form-control',
                            'value' => $employee->lnd->exclusive_from[0] ?? null,
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.1', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[1]),
                            'value' => $employee->lnd->exclusive_from[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.2', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[2]),
                            'value' => $employee->lnd->exclusive_from[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.3', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[3]),
                            'value' => $employee->lnd->exclusive_from[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.4', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[4]),
                            'value' => $employee->lnd->exclusive_from[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.5', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[5]),
                            'value' => $employee->lnd->exclusive_from[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.6', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[6]),
                            'value' => $employee->lnd->exclusive_from[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.7', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[7]),
                            'value' => $employee->lnd->exclusive_from[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.8', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[8]),
                            'value' => $employee->lnd->exclusive_from[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.9', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[9]),
                            'value' => $employee->lnd->exclusive_from[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.10', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[10]),
                            'value' => $employee->lnd->exclusive_from[10] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('lnd.exclusive_to') ?>
                        <?= $this->Form->input('lnd.exclusive_to.0', [
                            'type' => 'date',
                            'label' => 'Exclusive To',
                            'value' => $employee->lnd->exclusive_to[0] ?? null,
                            'class' => 'form-control', 
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_to.1', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_to[1]),
                            'value' => $employee->lnd->exclusive_to[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.2', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[2]),
                            'value' => $employee->lnd->exclusive_from[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.3', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[3]),
                            'value' => $employee->lnd->exclusive_from[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.4', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[4]),
                            'value' => $employee->lnd->exclusive_from[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.5', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[5]),
                            'value' => $employee->lnd->exclusive_from[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.6', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[6]),
                            'value' => $employee->lnd->exclusive_from[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.7', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[7]),
                            'value' => $employee->lnd->exclusive_from[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.8', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[8]),
                            'value' => $employee->lnd->exclusive_from[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.9', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[9]),
                            'value' => $employee->lnd->exclusive_from[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.10', [
                            'type' => 'date',
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->exclusive_from[10]),
                            'value' => $employee->lnd->exclusive_from[10] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('lnd.number_of_hours') ?>
                        <?= $this->Form->input('lnd.number_of_hours.0', ['class' => 'form-control', ]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->number_of_hours[1]),
                            'value' => $employee->lnd->number_of_hours[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->number_of_hours[2]),
                            'value' => $employee->lnd->number_of_hours[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->number_of_hours[3]),
                            'value' => $employee->lnd->number_of_hours[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->number_of_hours[4]),
                            'value' => $employee->lnd->number_of_hours[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->number_of_hours[5]),
                            'value' => $employee->lnd->number_of_hours[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->number_of_hours[6]),
                            'value' => $employee->lnd->number_of_hours[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->number_of_hours[7]),
                            'value' => $employee->lnd->number_of_hours[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->number_of_hours[8]),
                            'value' => $employee->lnd->number_of_hours[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->number_of_hours[9]),
                            'value' => $employee->lnd->number_of_hours[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->number_of_hours[10]),
                            'value' => $employee->lnd->number_of_hours[10] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-1 mt-4">
                        <?= $this->Form->label('lnd.type') ?>
                        <?= $this->Form->input('lnd.type.0', ['class' => 'form-control', ]) ?>
                        <?= $this->Form->input('lnd.type.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->type[1]),
                            'value' => $employee->lnd->type[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.type.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->type[2]),
                            'value' => $employee->lnd->type[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.type.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->type[3]),
                            'value' => $employee->lnd->type[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.type.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->type[4]),
                            'value' => $employee->lnd->type[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.type.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->type[5]),
                            'value' => $employee->lnd->type[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.type.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->type[6]),
                            'value' => $employee->lnd->type[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.type.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->type[7]),
                            'value' => $employee->lnd->type[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.type.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->type[8]),
                            'value' => $employee->lnd->type[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.type.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->type[9]),
                            'value' => $employee->lnd->type[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.type.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->type[10]),
                            'value' => $employee->lnd->type[10] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-3 mt-4">
                        <?= $this->Form->label('lnd.conducted_by') ?>
                        <?= $this->Form->input('lnd.conducted_by.0', ['class' => 'form-control', ]) ?>
                        <?= $this->Form->input('lnd.conducted_by.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->conducted_by[1]),
                            'value' => $employee->lnd->conducted_by[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.conducted_by.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->conducted_by[2]),
                            'value' => $employee->lnd->conducted_by[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.conducted_by.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->conducted_by[3]),
                            'value' => $employee->lnd->conducted_by[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.conducted_by.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->conducted_by[4]),
                            'value' => $employee->lnd->conducted_by[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.conducted_by.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->conducted_by[5]),
                            'value' => $employee->lnd->conducted_by[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.conducted_by.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->conducted_by[6]),
                            'value' => $employee->lnd->conducted_by[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.conducted_by.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->conducted_by[7]),
                            'value' => $employee->lnd->conducted_by[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.conducted_by.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->conducted_by[8]),
                            'value' => $employee->lnd->conducted_by[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.conducted_by.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->conducted_by[9]),
                            'value' => $employee->lnd->conducted_by[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('lnd.conducted_by.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->lnd->conducted_by[10]),
                            'value' => $employee->lnd->conducted_by[10] ?? '',
                        ]) ?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">VIII. Other Informations</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <?= $this->Form->label('other_information.special_skill') ?>
                        <?= $this->Form->input('other_information.special_skill.0', ['class' => 'form-control', ]) ?>
                        <?= $this->Form->input('other_information.special_skill.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->special_skill[1]),
                            'value' => $employee->other_information->special_skill[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.special_skill.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->special_skill[2]),
                            'value' => $employee->other_information->special_skill[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.special_skill.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->special_skill[3]),
                            'value' => $employee->other_information->special_skill[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.special_skill.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->special_skill[4]),
                            'value' => $employee->other_information->special_skill[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.special_skill.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->special_skill[5]),
                            'value' => $employee->other_information->special_skill[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.special_skill.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->special_skill[6]),
                            'value' => $employee->other_information->special_skill[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.special_skill.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->special_skill[7]),
                            'value' => $employee->other_information->special_skill[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.special_skill.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->special_skill[8]),
                            'value' => $employee->other_information->special_skill[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.special_skill.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->special_skill[9]),
                            'value' => $employee->other_information->special_skill[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.special_skill.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->special_skill[10]),
                            'value' => $employee->other_information->special_skill[10] ?? '',
                        ]) ?>

                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('other_information.non_academic_distinction') ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.0', ['class' => 'form-control', ]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->non_academic_distinction[1]),
                            'value' => $employee->other_information->non_academic_distinction[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->non_academic_distinction[2]),
                            'value' => $employee->other_information->non_academic_distinction[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->non_academic_distinction[3]),
                            'value' => $employee->other_information->non_academic_distinction[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->non_academic_distinction[4]),
                            'value' => $employee->other_information->non_academic_distinction[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->non_academic_distinction[5]),
                            'value' => $employee->other_information->non_academic_distinction[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->non_academic_distinction[6]),
                            'value' => $employee->other_information->non_academic_distinction[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->non_academic_distinction[7]),
                            'value' => $employee->other_information->non_academic_distinction[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->non_academic_distinction[8]),
                            'value' => $employee->other_information->non_academic_distinction[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->non_academic_distinction[9]),
                            'value' => $employee->other_information->non_academic_distinction[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->non_academic_distinction[10]),
                            'value' => $employee->other_information->non_academic_distinction[10] ?? '',
                        ]) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('other_information.membership') ?>
                        <?= $this->Form->input('other_information.membership.0', ['class' => 'form-control']) ?>
                        <?= $this->Form->input('other_information.membership.1', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->membership[1]),
                            'value' => $employee->other_information->membership[1] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.membership.2', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->membership[2]),
                            'value' => $employee->other_information->membership[2] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.membership.3', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->membership[3]),
                            'value' => $employee->other_information->membership[3] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.membership.4', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->membership[4]),
                            'value' => $employee->other_information->membership[4] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.membership.5', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->membership[5]),
                            'value' => $employee->other_information->membership[5] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.membership.6', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->membership[6]),
                            'value' => $employee->other_information->membership[6] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.membership.7', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->membership[7]),
                            'value' => $employee->other_information->membership[7] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.membership.8', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->membership[8]),
                            'value' => $employee->other_information->membership[8] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.membership.9', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->membership[9]),
                            'value' => $employee->other_information->membership[9] ?? '',
                        ]) ?>
                        <?= $this->Form->input('other_information.membership.10', [
                            'class' => 'form-control mt-2',
                            'hidden' => empty($employee->other_information->membership[10]),
                            'value' => $employee->other_information->membership[10] ?? '',
                        ]) ?>

                    </div>
                </div>
            <div class="card-body">
            <a href="<?= $this->Url->build(['action' => 'index']) ?>" class="btn btn-primary float-right ">Back</a>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success float-right mr-2']) ?>
            <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
<?= $this->Html->script('https://code.jquery.com/jquery-3.6.0.min.js') ?>
<?= $this->Html->script('employees.js')?>