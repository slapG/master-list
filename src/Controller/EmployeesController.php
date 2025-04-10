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
                                                            $this->Flash->toastr_success(__(''));
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

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();

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
