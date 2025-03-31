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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FamilyBackground', 'Elementary', 'Secondary', 'Vocational', 'College', 'Graduate', 'Specialities', 'Lnds', 'Organizations', 'WorkExperiences', 'OtherInformations'],
        ];
        $employees = $this->paginate($this->Employees);

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
        $employee = $this->Employees->get($id, [
            'contain' => ['FamilyBackground', 'Elementary', 'Secondary', 'Vocational', 'College', 'Graduate', 'Specialities', 'Lnds', 'Organizations', 'WorkExperiences', 'OtherInformations']
        ]);

        $this->set(compact('employee'));
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
        $this->loadModel('Lnds');
        $this->loadModel('Organizations');
        $this->loadModel('WorkExperiences');
        $this->loadModel('OtherInformations');
        $this->loadModel('Specialities');

        $employee = $this->Employees->newEmptyEntity();
        $familyBackground = $this->FamilyBackground->newEmptyEntity();
        $elementary = $this->Elementary->newEmptyEntity();
        $secondary = $this->Secondary->newEmptyEntity();
        $vocational = $this->Vocational->newEmptyEntity();
        $college = $this->College->newEmptyEntity();
        $graduate = $this->Graduate->newEmptyEntity();
        $lnds = $this->Lnds->newEmptyEntity();
        $organizations = $this->Organizations->newEmptyEntity();
        $workExperiences = $this->WorkExperiences->newEmptyEntity();
        $otherInformations = $this->OtherInformations->newEmptyEntity();
        $specialities = $this->Specialities->newEmptyEntity();
        
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            $specialities = $this->Specialities->patchEntity($specialities, $data['specialities']);
            if($this->Specialities->save($specialities)){
                $data['specialities_id'] = $specialities->id;

                $otherInformations = $this->OtherInformations->patchEntity($otherInformations, $data['other_informations']);
                if($this->OtherInformations->save($otherInformations)){
                    $data['other_informations_id'] = $otherInformations->id;

                    $workExperiences = $this->WorkExperiences->patchEntity($workExperiences, $data['work_experiences']);
                    if($this->WorkExperiences->save($workExperiences)){
                        $data['work_experiences_id'] = $workExperiences->id;

                        $organizations = $this->Organizations->patchEntity($organizations, $data['organizations']);
                        if($this->Organizations->save($organizations)){
                            $data['organizations_id'] = $organizations->id;

                            $lnds = $this->Lnds->patchEntity($lnds, $data['lnds']);
                            if($this->Lnds->save($lnds)){
                                $data['lnds_id'] = $lnds->id;

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
                                                            $this->Flash->success(__('The employee has been saved.'));
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
        $specialities = $this->Employees->Specialities->find('list', ['limit' => 200])->all();
        $lnds = $this->Employees->Lnds->find('list', ['limit' => 200])->all();
        $organizations = $this->Employees->Organizations->find('list', ['limit' => 200])->all();
        $workExperiences = $this->Employees->WorkExperiences->find('list', ['limit' => 200])->all();
        $otherInformations = $this->Employees->OtherInformations->find('list', ['limit' => 200])->all();
        $this->set(compact('employee', 'familyBackground', 'elementary', 'secondary', 'vocational', 'college', 'graduate', 'specialities', 'lnds', 'organizations', 'workExperiences', 'otherInformations'));
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
        $employee = $this->Employees->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $familyBackground = $this->Employees->FamilyBackground->find('list', ['limit' => 200])->all();
        $elementary = $this->Employees->Elementary->find('list', ['limit' => 200])->all();
        $secondary = $this->Employees->Secondary->find('list', ['limit' => 200])->all();
        $vocational = $this->Employees->Vocational->find('list', ['limit' => 200])->all();
        $college = $this->Employees->College->find('list', ['limit' => 200])->all();
        $graduate = $this->Employees->Graduate->find('list', ['limit' => 200])->all();
        $specialities = $this->Employees->Specialities->find('list', ['limit' => 200])->all();
        $lnds = $this->Employees->Lnds->find('list', ['limit' => 200])->all();
        $organizations = $this->Employees->Organizations->find('list', ['limit' => 200])->all();
        $workExperiences = $this->Employees->WorkExperiences->find('list', ['limit' => 200])->all();
        $otherInformations = $this->Employees->OtherInformations->find('list', ['limit' => 200])->all();
        $departments = $this->Employees->Departments->find('list', ['limit' => 200])->all();
        $this->set(compact('employee', 'familyBackground', 'elementary', 'secondary', 'vocational', 'college', 'graduate', 'specialities', 'lnds', 'organizations', 'workExperiences', 'otherInformations', 'departments'));
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
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
