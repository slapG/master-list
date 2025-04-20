<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        $this->viewBuilder()->setLayout('admin');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $employees = $this->Employees->find('all', [
            'contain' => [
                'FamilyBackground', 
                'Elementary', 
                'Secondary', 
                'Vocational', 
                'College', 
                'Graduate', 
                'Lnd', 
                'Organization', 
                'WorkExperience', 
                'OtherInformation', 
                'Speciality'
            ]
        ])->all();

        $this->set(compact('employees'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('Departments');
        $employee = $this->Employees->get($id, [
            'contain' => ['FamilyBackground', 'Elementary', 'Secondary', 'Vocational', 'College', 'Graduate', 'Lnd', 'Organization', 'WorkExperience', 'OtherInformation', 'Speciality'],
        ]);

        if (!empty($employee->family_background->siblings)) {
            $employee->family_background->siblings = json_decode($employee->family_background->siblings, true);
        }
        if (!empty($employee->family_background->bithdays)) {
            $employee->family_background->bithdays = json_decode($employee->family_background->bithdays, true);
        }
        if (!empty($employee->speciality->speciality_laws)) {
            $employee->speciality->speciality_laws = json_decode($employee->speciality->speciality_laws, true);
        }
        if (!empty($employee->speciality->rating)) {
            $employee->speciality->rating = json_decode($employee->speciality->rating, true);
        }
        if (!empty($employee->speciality->date_of_examination)) {
            $employee->speciality->date_of_examination = json_decode($employee->speciality->date_of_examination, true);
        }
        if (!empty($employee->speciality->place_of_examination)) {
            $employee->speciality->place_of_examination = json_decode($employee->speciality->place_of_examination, true);
        }
        if (!empty($employee->speciality->license_number)) {
            $employee->speciality->license_number = json_decode($employee->speciality->license_number, true);
        }
        if (!empty($employee->speciality->date_of_validity)) {
            $employee->speciality->date_of_validity = json_decode($employee->speciality->date_of_validity, true);
        }
        if (!empty($employee->organization->name_of_organization)) {
            $employee->organization->name_of_organization = json_decode($employee->organization->name_of_organization, true);
        }
        if (!empty($employee->organization->exclusive_from)) {
            $employee->organization->exclusive_from = json_decode($employee->organization->exclusive_from, true);
        }
        if (!empty($employee->organization->exclusive_to)) {
            $employee->organization->exclusive_to = json_decode($employee->organization->exclusive_to, true);
        }
        if (!empty($employee->organization->number_of_hours)) {
            $employee->organization->number_of_hours = json_decode($employee->organization->number_of_hours, true);
        }
        if (!empty($employee->organization->position)) {
            $employee->organization->position = json_decode($employee->organization->position, true);
        }
        if (!empty($employee->lnd->training_program)) {
            $employee->lnd->training_program = json_decode($employee->lnd->training_program, true);
        }
        if (!empty($employee->lnd->exclusive_from)) {
            $employee->lnd->exclusive_from = json_decode($employee->lnd->exclusive_from, true);
        }
        if (!empty($employee->lnd->exclusive_to)) {
            $employee->lnd->exclusive_to = json_decode($employee->lnd->exclusive_to, true);
        }
        if (!empty($employee->lnd->number_of_hours)) {
            $employee->lnd->number_of_hours = json_decode($employee->lnd->number_of_hours, true);
        }
        if (!empty($employee->lnd->type)) {
            $employee->lnd->type = json_decode($employee->lnd->type, true);
        }
        if (!empty($employee->lnd->conducted_by)) {
            $employee->lnd->conducted_by = json_decode($employee->lnd->conducted_by, true);
        }
        if (!empty($employee->other_information->special_skill)) {
            $employee->other_information->special_skill = json_decode($employee->other_information->special_skill, true);
        }
        if (!empty($employee->other_information->non_academic_distinction)) {
            $employee->other_information->non_academic_distinction = json_decode($employee->other_information->non_academic_distinction, true);
        }
        if (!empty($employee->other_information->membership)) {
            $employee->other_information->membership = json_decode($employee->other_information->membership, true);
        }
        if (!empty($employee->work_experience->start_from)){
            $employee->work_experience->start_from = json_decode($employee->work_experience->start_from, true);
        }
        if (!empty($employee->work_experience->upto)){
            $employee->work_experience->upto = json_decode($employee->work_experience->upto, true);
        }
        if (!empty($employee->work_experience->position)){
            $employee->work_experience->position = json_decode($employee->work_experience->position, true);
        }
        if (!empty($employee->work_experience->department_name)){
            $employee->work_experience->department_name = json_decode($employee->work_experience->department_name, true);
        }
        if (!empty($employee->work_experience->monthly_salary)){
            $employee->work_experience->monthly_salary = json_decode($employee->work_experience->monthly_salary, true);
        }
        if (!empty($employee->work_experience->salary_grade)){
            $employee->work_experience->salary_grade = json_decode($employee->work_experience->salary_grade, true);
        }
        if (!empty($employee->work_experience->status_of_appointment)){
            $employee->work_experience->status_of_appointment = json_decode($employee->work_experience->status_of_appointment, true);
        }
        if (!empty($employee->work_experience->government_service)){
            $employee->work_experience->government_service = json_decode($employee->work_experience->government_service, true);
        }

        $departments = $this->Departments->find('list', ['limit' => 200])->all();
        $this->set(compact('employee', 'departments'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('FamilyBackground');
        $this->loadModel('Elementary');
        $this->loadModel('Secondary');
        $this->loadModel('Vocational');
        $this->loadModel('College');
        $this->loadModel('Graduate');
        $this->loadModel('Lnd');
        $this->loadModel('Organization');
        $this->loadModel('WorkExperience');
        $this->loadModel('OtherInformation');
        $this->loadModel('Speciality');
        $this->loadModel('Departments');

        $employee = $this->Employees->newEmptyEntity();
        $familyBackground = $this->FamilyBackground->newEmptyEntity();
        $elementary = $this->Elementary->newEmptyEntity();
        $secondary = $this->Secondary->newEmptyEntity();
        $vocational = $this->Vocational->newEmptyEntity();
        $college = $this->College->newEmptyEntity();
        $graduate = $this->Graduate->newEmptyEntity();
        $lnd = $this->Lnd->newEmptyEntity();
        $organization = $this->Organization->newEmptyEntity();
        $workExperience = $this->WorkExperience->newEmptyEntity();
        $otherInformation = $this->OtherInformation->newEmptyEntity();
        $speciality = $this->Speciality->newEmptyEntity();
        
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            // Ensure department_id is properly set

            if (!empty($data['family_background']['siblings']) && is_array($data['family_background']['siblings'])) {
                $data['family_background']['siblings'] = json_encode(array_filter($data['family_background']['siblings']));
            }
            if (!empty($data['family_background']['bithdays']) && is_array($data['family_background']['bithdays'])) {
                $data['family_background']['bithdays'] = json_encode(array_filter($data['family_background']['bithdays']));
            }
            if (!empty($data['speciality']['speciality_laws']) && is_array($data['speciality']['speciality_laws'])){
                $data['speciality']['speciality_laws'] = json_encode(array_filter($data['speciality']['speciality_laws']));
            }
            if (!empty($data['speciality']['rating']) && is_array($data['speciality']['rating'])){
                $data['speciality']['rating'] = json_encode(array_filter($data['speciality']['rating']));
            }
            if (!empty($data['speciality']['date_of_examination']) && is_array($data['speciality']['date_of_examination'])){
                $data['speciality']['date_of_examination'] = json_encode(array_filter($data['speciality']['date_of_examination']));
            }
            if (!empty($data['speciality']['place_of_examination']) && is_array($data['speciality']['place_of_examination'])){
                $data['speciality']['place_of_examination'] = json_encode(array_filter($data['speciality']['place_of_examination']));
            }
            if (!empty($data['speciality']['license_number']) && is_array($data['speciality']['license_number'])){
                $data['speciality']['license_number'] = json_encode(array_filter($data['speciality']['license_number']));
            }
            if (!empty($data['speciality']['date_of_validity']) && is_array($data['speciality']['date_of_validity'])){
                $data['speciality']['date_of_validity'] = json_encode(array_filter($data['speciality']['date_of_validity']));
            }
            if (!empty($data['organization']['name_of_organization']) && is_array($data['organization']['name_of_organization'])){
                $data['organization']['name_of_organization'] = json_encode(array_filter($data['organization']['name_of_organization']));
            }
            if (!empty($data['organization']['exclusive_from']) && is_array($data['organization']['exclusive_from'])){
                $data['organization']['exclusive_from'] = json_encode(array_filter($data['organization']['exclusive_from']));
            }
            if (!empty($data['organization']['exclusive_to']) && is_array($data['organization']['exclusive_to'])){
                $data['organization']['exclusive_to'] = json_encode(array_filter($data['organization']['exclusive_to']));
            }
            if (!empty($data['organization']['number_of_hours']) && is_array($data['organization']['number_of_hours'])){
                $data['organization']['number_of_hours'] = json_encode(array_filter($data['organization']['number_of_hours']));
            }
            if (!empty($data['organization']['position']) && is_array($data['organization']['position'])){
                $data['organization']['position'] = json_encode(array_filter($data['organization']['position']));
            }
            if (!empty($data['lnd']['training_program']) && is_array($data['lnd']['training_program'])){
                $data['lnd']['training_program'] = json_encode(array_filter($data['lnd']['training_program']));
            }
            if (!empty($data['lnd']['exclusive_from']) && is_array($data['lnd']['exclusive_from'])){
                $data['lnd']['exclusive_from'] = json_encode(array_filter($data['lnd']['exclusive_from']));
            }
            if (!empty($data['lnd']['exclusive_to']) && is_array($data['lnd']['exclusive_to'])){
                $data['lnd']['exclusive_to'] = json_encode(array_filter($data['lnd']['exclusive_to']));
            }
            if (!empty($data['lnd']['number_of_hours']) && is_array($data['lnd']['number_of_hours'])){
                $data['lnd']['number_of_hours'] = json_encode(array_filter($data['lnd']['number_of_hours']));
            }
            if (!empty($data['lnd']['type']) && is_array($data['lnd']['type'])){
                $data['lnd']['type'] = json_encode(array_filter($data['lnd']['type']));
            }
            if (!empty($data['lnd']['conducted_by']) && is_array($data['lnd']['conducted_by'])){
                $data['lnd']['conducted_by'] = json_encode(array_filter($data['lnd']['conducted_by']));
            }
            if (!empty($data['other_information']['special_skill']) && is_array($data['other_information']['special_skill'])){
                $data['other_information']['special_skill'] = json_encode($data['other_information']['special_skill']);
            }
            if (!empty($data['other_information']['non_academic_distinction']) && is_array($data['other_information']['non_academic_distinction'])){
                $data['other_information']['non_academic_distinction'] = json_encode($data['other_information']['non_academic_distinction']);
            }
            if (!empty($data['other_information']['membership']) && is_array($data['other_information']['membership'])){
                $data['other_information']['membership'] = json_encode($data['other_information']['membership']);
            }
            if (!empty($data['work_experience']['start_from']) && is_array($data['work_experience']['start_from'])){
                $data['work_experience']['start_from'] = json_encode(array_filter($data['work_experience']['start_from']));
            }
            if (!empty($data['work_experience']['upto']) && is_array($data['work_experience']['upto'])){
                $data['work_experience']['upto'] = json_encode(array_filter($data['work_experience']['upto']));
            }
            if (!empty($data['work_experience']['position']) && is_array($data['work_experience']['position'])){
                $data['work_experience']['position'] = json_encode(array_filter($data['work_experience']['position']));
            }
            if (!empty($data['work_experience']['department_name']) && is_array($data['work_experience']['department_name'])){
                $data['work_experience']['department_name'] = json_encode(array_filter($data['work_experience']['department_name']));
            }
            if (!empty($data['work_experience']['monthly_salary']) && is_array($data['work_experience']['monthly_salary'])){
                $data['work_experience']['monthly_salary'] = json_encode(array_filter($data['work_experience']['monthly_salary']));
            }
            if (!empty($data['work_experience']['salary_grade']) && is_array($data['work_experience']['salary_grade'])){
                $data['work_experience']['salary_grade'] = json_encode(array_filter($data['work_experience']['salary_grade']));
            }
            if (!empty($data['work_experience']['status_of_appointment']) && is_array($data['work_experience']['status_of_appointment'])){
                $data['work_experience']['status_of_appointment'] = json_encode(array_filter($data['work_experience']['status_of_appointment']));
            }
            if (!empty($data['work_experience']['government_service']) && is_array($data['work_experience']['government_service'])){
                $data['work_experience']['government_service'] = json_encode(array_filter($data['work_experience']['government_service']));
            }

            $speciality = $this->Speciality->patchEntity($speciality, $data['speciality']);
            if($this->Speciality->save($speciality)){
                $data['speciality_id'] = $speciality->id;

                $otherInformations = $this->OtherInformation->patchEntity($otherInformation, $data['other_information']);
                if($this->OtherInformation->save($otherInformations)){
                    $data['other_information_id'] = $otherInformations->id;

                    $workExperience = $this->WorkExperience->patchEntity($workExperience, $data['work_experience']);
                    if($this->WorkExperience->save($workExperience)){
                        $data['work_experience_id'] = $workExperience->id;

                        $organization = $this->Organization->patchEntity($organization, $data['organization']);
                        if($this->Organization->save($organization)){
                            $data['organization_id'] = $organization->id;

                            $lnd = $this->Lnd->patchEntity($lnd, $data['lnd']);
                            if($this->Lnd->save($lnd)){
                                $data['lnd_id'] = $lnd->id;

                                $graduate = $this->Graduate->patchEntity($graduate, $data['graduate']);
                                if($this->Graduate->save($graduate)){
                                    $data['graduate_id'] = $graduate->id;

                                    $college = $this->College->patchEntity($college, $data['college']);
                                    if($this->College->save($college)){
                                        $data['college_id'] = $college->id;

                                        $vocational = $this->Vocational->patchEntity($vocational, $data['vocational']);
                                        if($this->Vocational->save($vocational)){
                                            $data['vocational_id'] = $vocational->id;
                                        
                                            $secondary = $this->Secondary->patchEntity($secondary, $data['secondary']);
                                            if($this->Secondary->save($secondary)){
                                                $data['secondary_id'] = $secondary->id;
                                                
                                                $elementary = $this->Elementary->patchEntity($elementary, $data['elementary']);
                                                if($this->Elementary->save($elementary)){
                                                    $data['elementary_id'] = $elementary->id;

                                                    $familyBackground = $this->FamilyBackground->patchEntity($familyBackground, $data['family_background']);
                                                    if ($this->FamilyBackground->save($familyBackground)){
                                                        $data['family_background_id'] = $familyBackground->id;

                                                        $employee = $this->Employees->patchEntity($employee, $data);
                                                        if ($this->Employees->save($employee)) {
                                                            $this->Flash->toastr_success(__('The employee has been saved successfully.'));
                                                            return $this->redirect(['action' => 'index']);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $familyBackground = $this->Employees->FamilyBackground->find('list', ['limit' => 200])->all();
        $elementary = $this->Employees->Elementary->find('list', ['limit' => 200])->all();
        $secondary = $this->Employees->Secondary->find('list', ['limit' => 200])->all();
        $vocational = $this->Employees->Vocational->find('list', ['limit' => 200])->all();
        $college = $this->Employees->College->find('list', ['limit' => 200])->all();
        $graduate = $this->Employees->Graduate->find('list', ['limit' => 200])->all();
        $lnd = $this->Employees->Lnd->find('list', ['limit' => 200])->all();
        $organization = $this->Employees->Organization->find('list', ['limit' => 200])->all();
        $workExperience = $this->Employees->WorkExperience->find('list', ['limit' => 200])->all();
        $otherInformation = $this->Employees->OtherInformation->find('list', ['limit' => 200])->all();
        $speciality = $this->Employees->Speciality->find('list', ['limit' => 200])->all();
        $departments = $this->Employees->Departments->find('list', ['limit' => 200])->all();
        $this->set(compact('employee', 'familyBackground', 'elementary', 'secondary', 'vocational', 'college', 'graduate', 'lnd', 'organization', 'workExperience', 'otherInformation', 'speciality', 'departments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->loadModel('FamilyBackground');
        $this->loadModel('Elementary');
        $this->loadModel('Secondary');
        $this->loadModel('Vocational');
        $this->loadModel('College');
        $this->loadModel('Graduate');
        $this->loadModel('Lnd');
        $this->loadModel('Organization');
        $this->loadModel('WorkExperience');
        $this->loadModel('OtherInformation');
        $this->loadModel('Speciality');
        $this->loadModel('Departments');

        $employee = $this->Employees->get($id, [
            'contain' => ['FamilyBackground', 'Elementary', 'Secondary', 'Vocational', 'College', 'Graduate', 'Lnd', 'Organization', 'WorkExperience', 'OtherInformation', 'Speciality']
        ]);

        if (!empty($employee->family_background->siblings)) {
            $employee->family_background->siblings = json_decode($employee->family_background->siblings, true);
        }
        if (!empty($employee->family_background->bithdays)) {
            $employee->family_background->bithdays = json_decode($employee->family_background->bithdays, true);
        }
        if (!empty($employee->speciality->speciality_laws)) {
            $employee->speciality->speciality_laws = json_decode($employee->speciality->speciality_laws, true);
        }
        if (!empty($employee->speciality->rating)) {
            $employee->speciality->rating = json_decode($employee->speciality->rating, true);
        }
        if (!empty($employee->speciality->date_of_examination)) {
            $employee->speciality->date_of_examination = json_decode($employee->speciality->date_of_examination, true);
        }
        if (!empty($employee->speciality->place_of_examination)) {
            $employee->speciality->place_of_examination = json_decode($employee->speciality->place_of_examination, true);
        }
        if (!empty($employee->speciality->license_number)) {
            $employee->speciality->license_number = json_decode($employee->speciality->license_number, true);
        }
        if (!empty($employee->speciality->date_of_validity)) {
            $employee->speciality->date_of_validity = json_decode($employee->speciality->date_of_validity, true);
        }
        if (!empty($employee->organization->name_of_organization)) {
            $employee->organization->name_of_organization = json_decode($employee->organization->name_of_organization, true);
        }
        if (!empty($employee->organization->exclusive_from)) {
            $employee->organization->exclusive_from = json_decode($employee->organization->exclusive_from, true);
        }
        if (!empty($employee->organization->exclusive_to)) {
            $employee->organization->exclusive_to = json_decode($employee->organization->exclusive_to, true);
        }
        if (!empty($employee->organization->number_of_hours)) {
            $employee->organization->number_of_hours = json_decode($employee->organization->number_of_hours, true);
        }
        if (!empty($employee->organization->position)) {
            $employee->organization->position = json_decode($employee->organization->position, true);
        }
        if (!empty($employee->lnd->training_program)) {
            $employee->lnd->training_program = json_decode($employee->lnd->training_program, true);
        }
        if (!empty($employee->lnd->exclusive_from)) {
            $employee->lnd->exclusive_from = json_decode($employee->lnd->exclusive_from, true);
        }
        if (!empty($employee->lnd->exclusive_to)) {
            $employee->lnd->exclusive_to = json_decode($employee->lnd->exclusive_to, true);
        }
        if (!empty($employee->lnd->number_of_hours)) {
            $employee->lnd->number_of_hours = json_decode($employee->lnd->number_of_hours, true);
        }
        if (!empty($employee->lnd->type)) {
            $employee->lnd->type = json_decode($employee->lnd->type, true);
        }
        if (!empty($employee->lnd->conducted_by)) {
            $employee->lnd->conducted_by = json_decode($employee->lnd->conducted_by, true);
        }
        if (!empty($employee->other_information->special_skill)) {
            $employee->other_information->special_skill = json_decode($employee->other_information->special_skill, true);
        }
        if (!empty($employee->other_information->non_academic_distinction)) {
            $employee->other_information->non_academic_distinction = json_decode($employee->other_information->non_academic_distinction, true);
        }
        if (!empty($employee->other_information->membership)) {
            $employee->other_information->membership = json_decode($employee->other_information->membership, true);
        }
        if (!empty($employee->work_experience->start_from)){
            $employee->work_experience->start_from = json_decode($employee->work_experience->start_from, true);
        }
        if (!empty($employee->work_experience->upto)){
            $employee->work_experience->upto = json_decode($employee->work_experience->upto, true);
        }
        if (!empty($employee->work_experience->position)){
            $employee->work_experience->position = json_decode($employee->work_experience->position, true);
        }
        if (!empty($employee->work_experience->department_name)){
            $employee->work_experience->department_name = json_decode($employee->work_experience->department_name, true);
        }
        if (!empty($employee->work_experience->monthly_salary)){
            $employee->work_experience->monthly_salary = json_decode($employee->work_experience->monthly_salary, true);
        }
        if (!empty($employee->work_experience->salary_grade)){
            $employee->work_experience->salary_grade = json_decode($employee->work_experience->salary_grade, true);
        }
        if (!empty($employee->work_experience->status_of_appointment)){
            $employee->work_experience->status_of_appointment = json_decode($employee->work_experience->status_of_appointment, true);
        }
        if (!empty($employee->work_experience->government_service)){
            $employee->work_experience->government_service = json_decode($employee->work_experience->government_service, true);
        }
        

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();

            if (!empty($data['family_background']['siblings']) && is_array($data['family_background']['siblings'])) {
                $data['family_background']['siblings'] = json_encode(array_filter($data['family_background']['siblings']));
            }
            if (!empty($data['family_background']['bithdays']) && is_array($data['family_background']['bithdays'])) {
                $data['family_background']['bithdays'] = json_encode(array_filter($data['family_background']['bithdays']));
            }
            if (!empty($data['speciality']['speciality_laws']) && is_array($data['speciality']['speciality_laws'])){
                $data['speciality']['speciality_laws'] = json_encode(array_filter($data['speciality']['speciality_laws']));
            }
            if (!empty($data['speciality']['rating']) && is_array($data['speciality']['rating'])){
                $data['speciality']['rating'] = json_encode(array_filter($data['speciality']['rating']));
            }
            if (!empty($data['speciality']['date_of_examination']) && is_array($data['speciality']['date_of_examination'])){
                $data['speciality']['date_of_examination'] = json_encode(array_filter($data['speciality']['date_of_examination']));
            }
            if (!empty($data['speciality']['place_of_examination']) && is_array($data['speciality']['place_of_examination'])){
                $data['speciality']['place_of_examination'] = json_encode(array_filter($data['speciality']['place_of_examination']));
            }
            if (!empty($data['speciality']['license_number']) && is_array($data['speciality']['license_number'])){
                $data['speciality']['license_number'] = json_encode(array_filter($data['speciality']['license_number']));
            }
            if (!empty($data['speciality']['date_of_validity']) && is_array($data['speciality']['date_of_validity'])){
                $data['speciality']['date_of_validity'] = json_encode(array_filter($data['speciality']['date_of_validity']));
            }
            if (!empty($data['organization']['name_of_organization']) && is_array($data['organization']['name_of_organization'])){
                $data['organization']['name_of_organization'] = json_encode(array_filter($data['organization']['name_of_organization']));
            }
            if (!empty($data['organization']['exclusive_from']) && is_array($data['organization']['exclusive_from'])){
                $data['organization']['exclusive_from'] = json_encode(array_filter($data['organization']['exclusive_from']));
            }
            if (!empty($data['organization']['exclusive_to']) && is_array($data['organization']['exclusive_to'])){
                $data['organization']['exclusive_to'] = json_encode(array_filter($data['organization']['exclusive_to']));
            }
            if (!empty($data['organization']['number_of_hours']) && is_array($data['organization']['number_of_hours'])){
                $data['organization']['number_of_hours'] = json_encode(array_filter($data['organization']['number_of_hours']));
            }
            if (!empty($data['organization']['position']) && is_array($data['organization']['position'])){
                $data['organization']['position'] = json_encode(array_filter($data['organization']['position']));
            }
            if (!empty($data['lnd']['training_program']) && is_array($data['lnd']['training_program'])){
                $data['lnd']['training_program'] = json_encode(array_filter($data['lnd']['training_program']));
            }
            if (!empty($data['lnd']['exclusive_from']) && is_array($data['lnd']['exclusive_from'])){
                $data['lnd']['exclusive_from'] = json_encode(array_filter($data['lnd']['exclusive_from']));
            }
            if (!empty($data['lnd']['exclusive_to']) && is_array($data['lnd']['exclusive_to'])){
                $data['lnd']['exclusive_to'] = json_encode(array_filter($data['lnd']['exclusive_to']));
            }
            if (!empty($data['lnd']['number_of_hours']) && is_array($data['lnd']['number_of_hours'])){
                $data['lnd']['number_of_hours'] = json_encode(array_filter($data['lnd']['number_of_hours']));
            }
            if (!empty($data['lnd']['type']) && is_array($data['lnd']['type'])){
                $data['lnd']['type'] = json_encode(array_filter($data['lnd']['type']));
            }
            if (!empty($data['lnd']['conducted_by']) && is_array($data['lnd']['conducted_by'])){
                $data['lnd']['conducted_by'] = json_encode(array_filter($data['lnd']['conducted_by']));
            }
            if (!empty($data['other_information']['special_skill']) && is_array($data['other_information']['special_skill'])){
                $data['other_information']['special_skill'] = json_encode($data['other_information']['special_skill']);
            }
            if (!empty($data['other_information']['non_academic_distinction']) && is_array($data['other_information']['non_academic_distinction'])){
                $data['other_information']['non_academic_distinction'] = json_encode($data['other_information']['non_academic_distinction']);
            }
            if (!empty($data['other_information']['membership']) && is_array($data['other_information']['membership'])){
                $data['other_information']['membership'] = json_encode($data['other_information']['membership']);
            }
            if (!empty($data['work_experience']['start_from']) && is_array($data['work_experience']['start_from'])){
                $data['work_experience']['start_from'] = json_encode(array_filter($data['work_experience']['start_from']));
            }
            if (!empty($data['work_experience']['upto']) && is_array($data['work_experience']['upto'])){
                $data['work_experience']['upto'] = json_encode(array_filter($data['work_experience']['upto']));
            }
            if (!empty($data['work_experience']['position']) && is_array($data['work_experience']['position'])){
                $data['work_experience']['position'] = json_encode(array_filter($data['work_experience']['position']));
            }
            if (!empty($data['work_experience']['department_name']) && is_array($data['work_experience']['department_name'])){
                $data['work_experience']['department_name'] = json_encode(array_filter($data['work_experience']['department_name']));
            }
            if (!empty($data['work_experience']['monthly_salary']) && is_array($data['work_experience']['monthly_salary'])){
                $data['work_experience']['monthly_salary'] = json_encode(array_filter($data['work_experience']['monthly_salary']));
            }
            if (!empty($data['work_experience']['salary_grade']) && is_array($data['work_experience']['salary_grade'])){
                $data['work_experience']['salary_grade'] = json_encode(array_filter($data['work_experience']['salary_grade']));
            }
            if (!empty($data['work_experience']['status_of_appointment']) && is_array($data['work_experience']['status_of_appointment'])){
                $data['work_experience']['status_of_appointment'] = json_encode(array_filter($data['work_experience']['status_of_appointment']));
            }
            if (!empty($data['work_experience']['government_service']) && is_array($data['work_experience']['government_service'])){
                $data['work_experience']['government_service'] = json_encode(array_filter($data['work_experience']['government_service']));
            }
                $employee = $this->Employees->patchEntity($employee, $data);
                if ($this->Employees->save($employee)) {
                    $this->Flash->success(__('The employee has been updated.'));
                    return $this->redirect(['action' => 'index']);
                }

            $this->Flash->error(__('The employee could not be updated. Please, try again.'));
        }

        $familyBackground = $this->Employees->FamilyBackground->find('list', ['limit' => 200])->all();
        $elementary = $this->Employees->Elementary->find('list', ['limit' => 200])->all();
        $secondary = $this->Employees->Secondary->find('list', ['limit' => 200])->all();
        $vocational = $this->Employees->Vocational->find('list', ['limit' => 200])->all();
        $college = $this->Employees->College->find('list', ['limit' => 200])->all();
        $graduate = $this->Employees->Graduate->find('list', ['limit' => 200])->all();
        $lnd = $this->Employees->Lnd->find('list', ['limit' => 200])->all();
        $organization = $this->Employees->Organization->find('list', ['limit' => 200])->all();
        $workExperience = $this->Employees->WorkExperience->find('list', ['limit' => 200])->all();
        $otherInformation = $this->Employees->OtherInformation->find('list', ['limit' => 200])->all();
        $speciality = $this->Employees->Speciality->find('list', ['limit' => 200])->all();
        $departments = $this->Employees->Departments->find('list', ['limit' => 200])->all();
        $this->set(compact('employee', 'familyBackground', 'elementary', 'secondary', 'vocational', 'college', 'graduate', 'lnd', 'organization', 'workExperience', 'otherInformation', 'speciality', 'departments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);  

        // Attempt to fetch the employee data
        $employee = $this->Employees->get($id);

        if ($this->request->is('ajax')) {
            if ($this->Employees->delete($employee)) {
                // Return a success response
                $this->response = $this->response->withType('json')
                    ->withStringBody(json_encode(['status' => 'success', 'redirect' => true]));
            } else {
                // Return an error response
                $this->response = $this->response->withType('json')
                    ->withStringBody(json_encode(['status' => 'error', 'redirect' => false]));
            }
            return $this->response;
        }
    }


    public function deletee($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }


}
