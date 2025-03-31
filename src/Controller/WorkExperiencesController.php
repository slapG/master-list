<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * WorkExperiences Controller
 *
 * @property \App\Model\Table\WorkExperiencesTable $WorkExperiences
 * @method \App\Model\Entity\WorkExperience[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WorkExperiencesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments'],
        ];
        $workExperiences = $this->paginate($this->WorkExperiences);

        $this->set(compact('workExperiences'));
    }

    /**
     * View method
     *
     * @param string|null $id Work Experience id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workExperience = $this->WorkExperiences->get($id, [
            'contain' => ['Departments'],
        ]);

        $this->set(compact('workExperience'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workExperience = $this->WorkExperiences->newEmptyEntity();
        if ($this->request->is('post')) {
            $workExperience = $this->WorkExperiences->patchEntity($workExperience, $this->request->getData());
            if ($this->WorkExperiences->save($workExperience)) {
                $this->Flash->success(__('The work experience has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work experience could not be saved. Please, try again.'));
        }
        $departments = $this->WorkExperiences->Departments->find('list', ['limit' => 200])->all();
        $this->set(compact('workExperience', 'departments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Work Experience id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workExperience = $this->WorkExperiences->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workExperience = $this->WorkExperiences->patchEntity($workExperience, $this->request->getData());
            if ($this->WorkExperiences->save($workExperience)) {
                $this->Flash->success(__('The work experience has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work experience could not be saved. Please, try again.'));
        }
        $departments = $this->WorkExperiences->Departments->find('list', ['limit' => 200])->all();
        $this->set(compact('workExperience', 'departments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Work Experience id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workExperience = $this->WorkExperiences->get($id);
        if ($this->WorkExperiences->delete($workExperience)) {
            $this->Flash->success(__('The work experience has been deleted.'));
        } else {
            $this->Flash->error(__('The work experience could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
