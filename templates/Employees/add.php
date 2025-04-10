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
                    <div class="col-md-4">
                        <?= $this->Form->label('first_name') ?>
                        <?= $this->Form->input('first_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('middle_name') ?>
                        <?= $this->Form->input('middle_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->label('last_name') ?>
                        <?= $this->Form->input('last_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('address') ?>
                        <?= $this->Form->input('address', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('place_of_birth') ?>
                        <?= $this->Form->input('place_of_birth', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('date_of_birth') ?>
                        <?= $this->Form->input('date_of_birth', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('sex') ?>
                        <?= $this->Form->select('sex',['Male' => 'Male', 'Female' => 'Female'], [
                            'class' => 'form-control',
                            'empty' => 'Select your Gender'
                            ]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('civil_status') ?>
                        <?= $this->Form->input('civil_status', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('height') ?>
                        <?= $this->Form->input('height', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('weight') ?>
                        <?= $this->Form->input('weight', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('blood_type') ?>
                        <?= $this->Form->input('blood_type', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('gsis_number') ?>
                        <?= $this->Form->input('gsis_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('pagibig_number') ?>
                        <?= $this->Form->input('pagibig_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('philhealth_number') ?>
                        <?= $this->Form->input('philhealth_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('sss_number') ?>
                        <?= $this->Form->input('sss_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('tin_number') ?>
                        <?= $this->Form->input('tin_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('agency_employee_number') ?>
                        <?= $this->Form->input('agency_employee_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('citizenship') ?>
                        <?= $this->Form->input('citizenship', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('residential_address') ?>
                        <?= $this->Form->input('residential_address', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('permanent_address') ?>
                        <?= $this->Form->input('permanent_address', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('telephone_number') ?>
                        <?= $this->Form->input('telephone_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('mobile_number') ?>
                        <?= $this->Form->input('mobile_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('email') ?>
                        <?= $this->Form->input('email', ['class' => 'form-control']) ?>
                    </div>
                </div>
              
                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">II. Family Background</h2>
                </div>

          
                <div class="row">
                    
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.family_background') ?>
                        <?= $this->Form->input('family_background.family_background', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.spouse_name') ?>
                        <?= $this->Form->input('family_background.spouse_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.first_name', 'Spouse First Name') ?>
                        <?= $this->Form->input('family_background.first_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.middle_name', 'Spouse Middle Name') ?>
                        <?= $this->Form->input('family_background.middle_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.last_name', 'Spouse Last Name') ?>
                        <?= $this->Form->input('family_background.last_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.occupation') ?>
                        <?= $this->Form->input('family_background.occupation', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.employer_business_name') ?>
                        <?= $this->Form->input('family_background.employer_business_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.business_address') ?>
                        <?= $this->Form->input('family_background.business_address', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.telephone_number') ?>
                        <?= $this->Form->input('family_background.telephone_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.father_surname') ?>
                        <?= $this->Form->input('family_background.father_surname', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.father_first_name') ?>
                        <?= $this->Form->input('family_background.father_first_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.father_middle_name') ?>
                        <?= $this->Form->input('family_background.father_middle_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.mother_maiden_name') ?>
                        <?= $this->Form->input('family_background.mother_maiden_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.mother_first_name') ?>
                        <?= $this->Form->input('family_background.mother_first_name', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('family_background.mother_middle_name') ?>
                        <?= $this->Form->input('family_background.mother_middle_name', ['class' => 'form-control']) ?>
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
                    <div class="col-md-6">
                        <?= $this->Form->label('elementary.start_from') ?>
                        <?= $this->Form->input('elementary.start_from', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('elementary.end_to') ?>
                        <?= $this->Form->input('elementary.end_to', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <?= $this->Form->label('secondary.start_from') ?>
                        <?= $this->Form->input('secondary.start_from', [ 'type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('secondary.end_to') ?>
                        <?= $this->Form->input('secondary.end_to', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <?= $this->Form->label('vocational.start_from') ?>
                        <?= $this->Form->input('vocational.start_from', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('vocational.end_to') ?>
                        <?= $this->Form->input('vocational.end_to', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <?= $this->Form->label('college.start_from') ?>
                        <?= $this->Form->input('college.start_from', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('college.end_to') ?>
                        <?= $this->Form->input('college.end_to', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <?= $this->Form->label('graduate.start_from') ?>
                        <?= $this->Form->input('graduate.start_from', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('graduate.end_to') ?>
                        <?= $this->Form->input('graduate.end_to', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('graduate.year_graduated') ?>
                        <?= $this->Form->input('graduate.year_graduated', ['type' => 'date','class' => 'form-control']) ?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">IV. Specialities</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('speciality.speciality_laws') ?>
                        <?= $this->Form->input('speciality.speciality_laws', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('speciality.rating') ?>
                        <?= $this->Form->input('speciality.rating', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('speciality.date_of_examination') ?>
                        <?= $this->Form->input('speciality.date_of_examination', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('speciality.place_of_examination') ?>
                        <?= $this->Form->input('speciality.place_of_examination', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('speciality.license_number') ?>
                        <?= $this->Form->input('speciality.license_number', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('speciality.date_of_validity') ?>
                        <?= $this->Form->input('speciality.date_of_validity', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">V. Work Experiences</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('work_experience.start_from') ?>
                        <?= $this->Form->input('work_experience.start_from', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('work_experience.upto') ?>
                        <?= $this->Form->input('work_experience.upto', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('work_experience.position') ?>
                        <?= $this->Form->input('work_experience.position', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('work_experience.department_id') ?>
                        <?= $this->Form->select('Departments', $departments, ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('work_experience.monthly_salary') ?>
                        <?= $this->Form->input('work_experience.monthly_salary', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('work_experience.salary_grade') ?>
                        <?= $this->Form->input('work_experience.salary_grade', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('work_experience.status_of_appointment') ?>
                        <?= $this->Form->input('work_experience.status_of_appointment', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('work_experience.government_service') ?>
                        <?= $this->Form->input('work_experience.government_service', ['class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">VI. Organizations</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('organization.name_of_organization') ?>
                        <?= $this->Form->input('organization.name_of_organization', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('organization.exclusive_from') ?>
                        <?= $this->Form->input('organization.exclusive_from', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('organization.exclusive_to') ?>
                        <?= $this->Form->input('organization.exclusive_to', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('organization.number_of_hours') ?>
                        <?= $this->Form->input('organization.number_of_hours', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('organization.position') ?>
                        <?= $this->Form->input('organization.position', ['class' => 'form-control']) ?>
                    </div>
                </div>

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">VII. Learning and Developments</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('lnd.training_program') ?>
                        <?= $this->Form->input('lnd.training_program', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('lnd.exclusive_from') ?>
                        <?= $this->Form->input('lnd.exclusive_from', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('lnd.exclusive_to') ?>
                        <?= $this->Form->input('lnd.exclusive_to', ['type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('lnd.number_of_hours') ?>
                        <?= $this->Form->input('lnd.number_of_hours', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('lnd.type') ?>
                        <?= $this->Form->input('lnd.type', ['class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->label('lnd.conducted_by') ?>
                        <?= $this->Form->input('lnd.conducted_by', ['class' => 'form-control']) ?>
                    </div>
                </div>

                

                

                <div class="p-4 text-left">
                    <h2 class="text-2xl font-bold">VIII. Other Informations</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Form->label('other_information.special_skill') ?>
                        <?= $this->Form->input('other_information.special_skill', ['class' => 'form-control']) ?>
                    </div>
                    
                    <div class="col-md-6">
                        <?= $this->Form->label('other_information.non_academic_distinction') ?>
                        <?= $this->Form->input('other_information.non_academic_distinction', ['class' => 'form-control']) ?>
                    </div>
                </div>

                
                
            <div class="card-body">
                <div class="col-md-12 justify-between-spaces">
                  <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success float-right']) ?>
                  <?= $this->Form->end() ?>
                </div>
            </div>
        </div>

