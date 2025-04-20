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
 * @var \Cake\Collection\CollectionInterface|string[] $lnd
 * @var \Cake\Collection\CollectionInterface|string[] $organization
 * @var \Cake\Collection\CollectionInterface|string[] $workExperience
 * @var \Cake\Collection\CollectionInterface|string[] $otherInformation
 * @var \Cake\Collection\CollectionInterface|string[] $speciality
 */
?>
<section class="content">
      <div class="row">
        <div class="col-md-11 my-2 mx-auto">
          <div class="card">
          <?= $this->Flash->render() ?>
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
                        <?= $this->Form->input('first_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('middle_name') ?>
                        <?= $this->Form->input('middle_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('last_name') ?>
                        <?= $this->Form->input('last_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('date_of_birth') ?>
                        <?= $this->Form->input('date_of_birth', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('address') ?>
                        <?= $this->Form->input('address', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('place_of_birth') ?>
                        <?= $this->Form->input('place_of_birth', ['class' => 'form-control']) ?>
                    </div>
                    
                    <div class="col-md-3">
                        <?= $this->Form->label('sex') ?>
                        <?= $this->Form->select('sex',['Male' => 'Male', 'Female' => 'Female'], [
                            'class' => 'form-control',
                            'empty' => 'Select your Gender'
                            ]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('civil_status') ?>
                        <?= $this->Form->input('civil_status', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('height') ?>
                        <?= $this->Form->input('height', ['class' => 'form-control', 'type' => 'number']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('weight') ?>
                        <?= $this->Form->input('weight', ['class' => 'form-control', 'type' => 'number']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('blood_type') ?>
                        <?= $this->Form->input('blood_type', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('gsis_number') ?>
                        <?= $this->Form->input('gsis_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('pagibig_number') ?>
                        <?= $this->Form->input('pagibig_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('philhealth_number') ?>
                        <?= $this->Form->input('philhealth_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('sss_number') ?>
                        <?= $this->Form->input('sss_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('tin_number') ?>
                        <?= $this->Form->input('tin_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('agency_employee_number') ?>
                        <?= $this->Form->input('agency_employee_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('citizenship') ?>
                        <?= $this->Form->input('citizenship', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('residential_address') ?>
                        <?= $this->Form->input('residential_address', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('permanent_address') ?>
                        <?= $this->Form->input('permanent_address', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('telephone_number') ?>
                        <?= $this->Form->input('telephone_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('mobile_number') ?>
                        <?= $this->Form->input('mobile_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('email') ?>
                        <?= $this->Form->input('email', ['class' => 'form-control']) ?>
                    </div>
                </div>
              
                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">II. Family Background</h2>
                </div>

          
                <div class="row">
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.first_name', 'Spouse First Name') ?>
                        <?= $this->Form->input('family_background.first_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.middle_name', 'Spouse Middle Name') ?>
                        <?= $this->Form->input('family_background.middle_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.last_name', 'Spouse Last Name') ?>
                        <?= $this->Form->input('family_background.last_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('family_background.occupation') ?>
                        <?= $this->Form->input('family_background.occupation', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('family_background.employer_business_name') ?>
                        <?= $this->Form->input('family_background.employer_business_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('family_background.business_address') ?>
                        <?= $this->Form->input('family_background.business_address', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('family_background.telephone_number') ?>
                        <?= $this->Form->input('family_background.telephone_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.father_surname') ?>
                        <?= $this->Form->input('family_background.father_surname', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.father_first_name') ?>
                        <?= $this->Form->input('family_background.father_first_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.father_middle_name') ?>
                        <?= $this->Form->input('family_background.father_middle_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.mother_maiden_name') ?>
                        <?= $this->Form->input('family_background.mother_maiden_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.mother_first_name') ?>
                        <?= $this->Form->input('family_background.mother_first_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('family_background.mother_middle_name') ?>
                        <?= $this->Form->input('family_background.mother_middle_name', ['class' => 'form-control']) ?>
                    </div>

                        <!-- Medyo Dynamic-->
                    
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.siblings', 'Siblings') ?>
                        <?= $this->Form->input("family_background.siblings.0", ['class' => 'form-control ', 'placeholder' => 'Enter sibling name']) ?>
                    </div>
                    <div class="col-md-5">
                        <?= $this->Form->label('family_background.bithdays', 'Birthdays') ?>
                        <?= $this->Form->input("family_background.bithdays.0", ['class' => 'form-control ', 'type' => 'date']) ?>
                    </div>
                    <div class="col-md-1 d-flex align-items-end justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-m" id="add-sibling-birthday">Add Form</button>
                    </div> 
                    <div class="col-md-6">
                        <?= $this->Form->input("family_background.siblings.1", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling name', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.siblings.2", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling name', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.siblings.3", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling name', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.siblings.4", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling name', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.siblings.5", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling name', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.siblings.6", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling name', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.siblings.7", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling name', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.siblings.8", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling name', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.siblings.9", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling name', 'hidden' => true]) ?>
                    </div>
                    <div class="col-md-5">
                        <?= $this->Form->input("family_background.bithdays.1", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling birthday', 'type' => 'date', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.bithdays.2", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling birthday', 'type' => 'date', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.bithdays.3", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling birthday', 'type' => 'date', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.bithdays.4", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling birthday', 'type' => 'date', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.bithdays.5", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling birthday', 'type' => 'date', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.bithdays.6", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling birthday', 'type' => 'date', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.bithdays.7", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling birthday', 'type' => 'date', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.bithdays.8", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling birthday', 'type' => 'date', 'hidden' => true]) ?>
                        <?= $this->Form->input("family_background.bithdays.9", ['class' => 'form-control mt-2', 'placeholder' => 'Enter sibling birthday', 'type' => 'date', 'hidden' => true]) ?>
                    </div>
                </div>
                    
                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">III. Educational Background</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('elementary.elementary_name') ?>
                        <?= $this->Form->input('elementary.elementary_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('elementary.basic_education') ?>
                        <?= $this->Form->input('elementary.basic_education', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('elementary.start_from') ?>
                        <?= $this->Form->input('elementary.start_from', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('elementary.end_to') ?>
                        <?= $this->Form->input('elementary.end_to', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('elementary.year_graduated') ?>
                        <?= $this->Form->input('elementary.year_graduated', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold"></h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('secondary.secondary_name') ?>
                        <?= $this->Form->input('secondary.secondary_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('secondary.basic_education') ?>
                        <?= $this->Form->input('secondary.basic_education', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('secondary.start_from') ?>
                        <?= $this->Form->input('secondary.start_from', [ 'type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('secondary.end_to') ?>
                        <?= $this->Form->input('secondary.end_to', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('secondary.year_graduated') ?>
                        <?= $this->Form->input('secondary.year_graduated', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold"></h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('vocational.vocational_name') ?>
                        <?= $this->Form->input('vocational.vocational_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('vocational.basic_education') ?>
                        <?= $this->Form->input('vocational.basic_education', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('vocational.start_from') ?>
                        <?= $this->Form->input('vocational.start_from', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('vocational.end_to') ?>
                        <?= $this->Form->input('vocational.end_to', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('vocational.year_graduated') ?>
                        <?= $this->Form->input('vocational.year_graduated', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold"></h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('college.college_name') ?>
                        <?= $this->Form->input('college.college_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('college.basic_education') ?>
                        <?= $this->Form->input('college.basic_education', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('college.start_from') ?>
                        <?= $this->Form->input('college.start_from', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('college.end_to') ?>
                        <?= $this->Form->input('college.end_to', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('college.year_graduated') ?>
                        <?= $this->Form->input('college.year_graduated', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold"></h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('graduate.graduate_name') ?>
                        <?= $this->Form->input('graduate.graduate_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('graduate.basic_education') ?>
                        <?= $this->Form->input('graduate.basic_education', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('graduate.start_from') ?>
                        <?= $this->Form->input('graduate.start_from', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('graduate.end_to') ?>
                        <?= $this->Form->input('graduate.end_to', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('graduate.year_graduated') ?>
                        <?= $this->Form->input('graduate.year_graduated', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">IV. Specialities</h2>
                </div>

                <div class="row">
                    <div class="col-md-3  mt-4">
                        <?= $this->Form->label('speciality.speciality_laws') ?>
                        <?= $this->Form->input('speciality.speciality_laws.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1  mt-4">
                        <?= $this->Form->label('speciality.rating') ?>
                        <?= $this->Form->input("speciality.rating.0", ['class' => 'form-control' ]) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('speciality.date_of_examination') ?>
                        <?= $this->Form->input("speciality.date_of_examination.0", ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-2  mt-4">
                        <?= $this->Form->label('speciality.place_of_examination') ?>
                        <?= $this->Form->input("speciality.place_of_examination.0", ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('speciality.license_number') ?>
                        <?= $this->Form->input("speciality.license_number.0", ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('speciality.date_of_validity') ?>
                        <?= $this->Form->input("speciality.date_of_validity.0", ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1 d-flex align-items-end justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-m" id="add-speciality">Add Form</button>
                    </div> 

                    <div class="col-md-3">
                        <?= $this->Form->input("speciality.speciality_laws.1", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.speciality_laws.2", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.speciality_laws.3", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.speciality_laws.4", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.speciality_laws.5", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.speciality_laws.6", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.speciality_laws.7", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.speciality_laws.8", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.speciality_laws.9", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.speciality_laws.10", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->input("speciality.rating.1", ['class' => 'form-control mt-2' , 'hidden' => true ]) ?>
                        <?= $this->Form->input("speciality.rating.2", ['class' => 'form-control mt-2' , 'hidden' => true ]) ?>
                        <?= $this->Form->input("speciality.rating.3", ['class' => 'form-control mt-2' , 'hidden' => true ]) ?>
                        <?= $this->Form->input("speciality.rating.4", ['class' => 'form-control mt-2' , 'hidden' => true ]) ?>
                        <?= $this->Form->input("speciality.rating.5", ['class' => 'form-control mt-2' , 'hidden' => true ]) ?>
                        <?= $this->Form->input("speciality.rating.6", ['class' => 'form-control mt-2' , 'hidden' => true ]) ?>
                        <?= $this->Form->input("speciality.rating.7", ['class' => 'form-control mt-2' , 'hidden' => true ]) ?>
                        <?= $this->Form->input("speciality.rating.8", ['class' => 'form-control mt-2' , 'hidden' => true ]) ?>
                        <?= $this->Form->input("speciality.rating.9", ['class' => 'form-control mt-2' , 'hidden' => true ]) ?>
                        <?= $this->Form->input("speciality.rating.10", ['class' => 'form-control mt-2' , 'hidden' => true ]) ?>

                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->input("speciality.date_of_examination.1", ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_examination.2", ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_examination.3", ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_examination.4", ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_examination.5", ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_examination.6", ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_examination.7", ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_examination.8", ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_examination.9", ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_examination.10", ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>

                    </div>
                    <div class="col-md-2  ">
                        <?= $this->Form->input("speciality.place_of_examination.1", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.place_of_examination.2", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.place_of_examination.3", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.place_of_examination.4", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.place_of_examination.5", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.place_of_examination.6", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.place_of_examination.7", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.place_of_examination.8", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.place_of_examination.9", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.place_of_examination.10", ['class' => 'form-control mt-2' , 'hidden' => true]) ?>


                    </div>
                    <div class="col-md-1 ">
                        <?= $this->Form->input("speciality.license_number.1", ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.license_number.2", ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.license_number.3", ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.license_number.4", ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.license_number.5", ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.license_number.6", ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.license_number.7", ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.license_number.8", ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.license_number.9", ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.license_number.10", ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                    </div>
                    <div class="col-md-2 ">
                        <?= $this->Form->input("speciality.date_of_validity.1", ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_validity.2", ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_validity.3", ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_validity.4", ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_validity.5", ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_validity.6", ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_validity.7", ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_validity.8", ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_validity.9", ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input("speciality.date_of_validity.10", ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                    </div>

                </div>
                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">V. Work Experiences</h2>
                </div>

                <div class="row">
                    <div class="col-md mt-4" style="flex: 0 0 12.5%; max-width: 12.5%;">
                        <?= $this->Form->label('work_experience.start_from') ?>
                        <?= $this->Form->input('work_experience.start_from.0', ['class' => 'form-control', 'type' => 'date']) ?>
                    </div>
                    <div class="col-md mt-4" style="flex: 0 0 12.5%; max-width: 12.5%;">
                        <?= $this->Form->label('work_experience.upto') ?>
                        <?= $this->Form->input('work_experience.upto.0', ['class' => 'form-control',  'type' => 'date']) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('work_experience.position') ?>
                        <?= $this->Form->input('work_experience.position.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('work_experience.department_name', 'Department Name') ?>
                        <?= $this->Form->input('work_experience.department_name.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('work_experience.monthly_salary') ?>
                        <?= $this->Form->input('work_experience.monthly_salary.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('work_experience.salary_grade') ?>
                        <?= $this->Form->input('work_experience.salary_grade.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('work_experience.status_of_appointment') ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('work_experience.government_service') ?>
                        <?= $this->Form->input('work_experience.government_service.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1 d-flex align-items-end justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-m" id="add-work-experience">Add Form</button>
                    </div>




                    <div class="col-md" style="flex: 0 0 12.5%; max-width: 12.5%;">
                        <?= $this->Form->input('work_experience.start_from.1', ['class' => 'form-control mt-2', 'hidden' => true, 'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.start_from.2', ['class' => 'form-control mt-2', 'hidden' => true, 'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.start_from.3', ['class' => 'form-control mt-2', 'hidden' => true, 'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.start_from.4', ['class' => 'form-control mt-2', 'hidden' => true, 'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.start_from.5', ['class' => 'form-control mt-2', 'hidden' => true, 'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.start_from.6', ['class' => 'form-control mt-2', 'hidden' => true, 'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.start_from.7', ['class' => 'form-control mt-2', 'hidden' => true, 'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.start_from.8', ['class' => 'form-control mt-2', 'hidden' => true, 'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.start_from.9', ['class' => 'form-control mt-2', 'hidden' => true, 'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.start_from.10', ['class' => 'form-control mt-2', 'hidden' => true, 'type' => 'date']) ?>

                    </div>
                    <div class="col-md" style="flex: 0 0 12.5%; max-width: 12.5%;">
                        <?= $this->Form->input('work_experience.upto.1', ['class' => 'form-control mt-2', 'hidden' => true,  'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.upto.2', ['class' => 'form-control mt-2', 'hidden' => true,  'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.upto.3', ['class' => 'form-control mt-2', 'hidden' => true,  'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.upto.4', ['class' => 'form-control mt-2', 'hidden' => true,  'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.upto.5', ['class' => 'form-control mt-2', 'hidden' => true,  'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.upto.6', ['class' => 'form-control mt-2', 'hidden' => true,  'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.upto.7', ['class' => 'form-control mt-2', 'hidden' => true,  'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.upto.8', ['class' => 'form-control mt-2', 'hidden' => true,  'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.upto.9', ['class' => 'form-control mt-2', 'hidden' => true,  'type' => 'date']) ?>
                        <?= $this->Form->input('work_experience.upto.10', ['class' => 'form-control mt-2', 'hidden' => true,  'type' => 'date']) ?>

                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->input('work_experience.position.1', ['class' => 'form-control mt-2', 'hidden' => true, ]) ?>
                        <?= $this->Form->input('work_experience.position.2', ['class' => 'form-control mt-2', 'hidden' => true, ]) ?>
                        <?= $this->Form->input('work_experience.position.3', ['class' => 'form-control mt-2', 'hidden' => true, ]) ?>
                        <?= $this->Form->input('work_experience.position.4', ['class' => 'form-control mt-2', 'hidden' => true, ]) ?>
                        <?= $this->Form->input('work_experience.position.5', ['class' => 'form-control mt-2', 'hidden' => true, ]) ?>
                        <?= $this->Form->input('work_experience.position.6', ['class' => 'form-control mt-2', 'hidden' => true, ]) ?>
                        <?= $this->Form->input('work_experience.position.7', ['class' => 'form-control mt-2', 'hidden' => true, ]) ?>
                        <?= $this->Form->input('work_experience.position.8', ['class' => 'form-control mt-2', 'hidden' => true, ]) ?>
                        <?= $this->Form->input('work_experience.position.9', ['class' => 'form-control mt-2', 'hidden' => true, ]) ?>
                        <?= $this->Form->input('work_experience.position.10', ['class' => 'form-control mt-2', 'hidden' => true, ]) ?>

                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->input('work_experience.department_name.1', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.department_name.2', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.department_name.3', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.department_name.4', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.department_name.5', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.department_name.6', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.department_name.7', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.department_name.8', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.department_name.9', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.department_name.10', ['class' => 'form-control mt-2', 'hidden' => true]) ?>

                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->input('work_experience.monthly_salary.1', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.2', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.3', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.4', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.5', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.6', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.7', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.8', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.9', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.monthly_salary.10', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->input('work_experience.salary_grade.1', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.2', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.3', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.4', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.5', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.6', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.7', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.8', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.9', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.salary_grade.10', ['class' => 'form-control mt-2', 'hidden' => true]) ?>

                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->input('work_experience.status_of_appointment.1', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.2', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.3', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.4', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.5', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.6', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.7', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.8', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.9', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.status_of_appointment.10', ['class' => 'form-control mt-2', 'hidden' => true]) ?>

                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->input('work_experience.government_service.1', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.government_service.2', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.government_service.3', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.government_service.4', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.government_service.5', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.government_service.6', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.government_service.7', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.government_service.8', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.government_service.9', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('work_experience.government_service.10', ['class' => 'form-control mt-2', 'hidden' => true]) ?>

                    </div>




                </div>
                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">VI. Organizations</h2>
                </div>

                <div class="row">
                    <div class="col-md-3 mt-4">
                        <?= $this->Form->label('organization.name_of_organization') ?>
                        <?= $this->Form->input('organization.name_of_organization.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('organization.exclusive_from') ?>
                        <?= $this->Form->input('organization.exclusive_from.0', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('organization.exclusive_to') ?>
                        <?= $this->Form->input('organization.exclusive_to.0', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('organization.number_of_hours') ?>
                        <?= $this->Form->input('organization.number_of_hours.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3 mt-4">
                        <?= $this->Form->label('organization.position') ?>
                        <?= $this->Form->input('organization.position.0', ['class' => 'form-control']) ?>
                    </div> 
                    <div class="col-md-1 d-flex align-items-end justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-m" id="add-organizations">Add Form</button>
                    </div>
                    <div class="col-md-3 ">
                        <?= $this->Form->input('organization.name_of_organization.1', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.name_of_organization.2', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.name_of_organization.3', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.name_of_organization.4', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.name_of_organization.5', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.name_of_organization.6', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.name_of_organization.7', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.name_of_organization.8', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.name_of_organization.9', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.name_of_organization.10', ['class' => 'form-control mt-2', 'hidden' => true]) ?>

                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->input('organization.exclusive_from.1', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_from.2', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_from.3', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_from.4', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_from.5', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_from.6', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_from.7', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_from.8', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_from.9', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_from.10', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>

                    </div>
                    <div class="col-md-2 ">
                        <?= $this->Form->input('organization.exclusive_to.1', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_to.2', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_to.3', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_to.4', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_to.5', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_to.6', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_to.7', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_to.8', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_to.9', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.exclusive_to.10', ['type' => 'date', 'class' => 'form-control mt-2', 'hidden' => true]) ?>

                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->input('organization.number_of_hours.1', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.number_of_hours.2', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.number_of_hours.3', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.number_of_hours.4', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.number_of_hours.5', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.number_of_hours.6', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.number_of_hours.7', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.number_of_hours.8', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.number_of_hours.9', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.number_of_hours.10', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                    </div>
                    <div class="col-md-3 ">
                        <?= $this->Form->input('organization.position.1', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.position.2', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.position.3', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.position.4', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.position.5', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.position.6', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.position.7', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.position.8', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.position.9', ['class' => 'form-control mt-2', 'hidden' => true]) ?>
                        <?= $this->Form->input('organization.position.10', ['class' => 'form-control mt-2', 'hidden' => true]) ?>

                    </div>
                </div>
                
                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">VII. Learning and Developments</h2>
                </div>

                <div class="row">
                    <div class="col-md-3 mt-4">
                        <?= $this->Form->label('lnd.training_program') ?>
                        <?= $this->Form->input('lnd.training_program.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('lnd.exclusive_from') ?>
                        <?= $this->Form->input('lnd.exclusive_from.0', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('lnd.exclusive_to') ?>
                        <?= $this->Form->input('lnd.exclusive_to.0', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->label('lnd.number_of_hours') ?>
                        <?= $this->Form->input('lnd.number_of_hours.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1 mt-4">
                        <?= $this->Form->label('lnd.type') ?>
                        <?= $this->Form->input('lnd.type.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-2 mt-4">
                        <?= $this->Form->label('lnd.conducted_by') ?>
                        <?= $this->Form->input('lnd.conducted_by.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1 d-flex align-items-end justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-m" id="add-lnd">Add Form</button>
                    </div>

                    <div class="col-md-3">
                        <?= $this->Form->input('lnd.training_program.1', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.training_program.2', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.training_program.3', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.training_program.4', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.training_program.5', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.training_program.6', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.training_program.7', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.training_program.8', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.training_program.9', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.training_program.10', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->input('lnd.exclusive_from.1', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.2', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.3', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.4', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.5', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.6', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.7', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.8', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.9', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_from.10', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->input('lnd.exclusive_to.1', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_to.2', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_to.3', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_to.4', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_to.5', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_to.6', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_to.7', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_to.8', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_to.9', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.exclusive_to.10', ['type' => 'date', 'class' => 'form-control mt-2' , 'hidden' => true]) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->input('lnd.number_of_hours.1', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.2', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.3', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.4', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.5', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.6', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.7', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.8', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.9', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.number_of_hours.10', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                    </div>
                    <div class="col-md-1">
                        <?= $this->Form->input('lnd.type.1', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.type.2', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.type.3', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.type.4', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.type.5', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.type.6', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.type.7', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.type.8', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.type.9', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.type.10', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>

                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->input('lnd.conducted_by.1', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.conducted_by.2', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.conducted_by.3', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.conducted_by.4', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.conducted_by.5', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.conducted_by.6', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.conducted_by.7', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.conducted_by.8', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.conducted_by.9', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('lnd.conducted_by.10', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                    </div>
                </div>
                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">VIII. Other Informations</h2>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <?= $this->Form->label('other_information.special_skill') ?>
                        <?= $this->Form->input('other_information.special_skill.0', ['class' => 'form-control']) ?>
                    </div>
                    
                    <div class="col-md-5">
                        <?= $this->Form->label('other_information.non_academic_distinction') ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->label('other_information.membership') ?>
                        <?= $this->Form->input('other_information.membership.0', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-1 d-flex align-items-end justify-content-center">
                        <button type="button" class="btn btn-outline-primary btn-m" id="add-other">Add Form</button>
                    </div>


                    <div class="col-md-3">
                        <?= $this->Form->input('other_information.special_skill.1', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.special_skill.2', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.special_skill.3', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.special_skill.4', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.special_skill.5', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.special_skill.6', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.special_skill.7', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.special_skill.8', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.special_skill.9', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.special_skill.10', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                    </div>
                    <div class="col-md-5">
                        <?= $this->Form->input('other_information.non_academic_distinction.1', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.2', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.3', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.4', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.5', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.6', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.7', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.8', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.9', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.non_academic_distinction.10', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->input('other_information.membership.1', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.membership.2', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.membership.3', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.membership.4', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.membership.5', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.membership.6', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.membership.7', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.membership.8', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.membership.9', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                        <?= $this->Form->input('other_information.membership.10', ['class' => 'form-control mt-2' , 'hidden' => true]) ?>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12 justify-between-spaces">
                  <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success float-right']) ?>
                  <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
<?= $this->Html->script('https://code.jquery.com/jquery-3.6.0.min.js') ?>
<?= $this->Html->script('employees.js')?>