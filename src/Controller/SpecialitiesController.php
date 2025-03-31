<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Specialities Controller
 *
 * @property \App\Model\Table\SpecialitiesTable $Specialities
 * @method \App\Model\Entity\Speciality[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpecialitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $specialities = $this->paginate($this->Specialities);

        $this->set(compact('specialities'));
    }

    /**
     * View method
     *
     * @param string|null $id Speciality id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $speciality = $this->Specialities->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('speciality'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $speciality = $this->Specialities->newEmptyEntity();
        if ($this->request->is('post')) {
            $speciality = $this->Specialities->patchEntity($speciality, $this->request->getData());
            if ($this->Specialities->save($speciality)) {
                $this->Flash->success(__('The speciality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The speciality could not be saved. Please, try again.'));
        }
        $this->set(compact('speciality'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Speciality id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $speciality = $this->Specialities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $speciality = $this->Specialities->patchEntity($speciality, $this->request->getData());
            if ($this->Specialities->save($speciality)) {
                $this->Flash->success(__('The speciality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The speciality could not be saved. Please, try again.'));
        }
        $this->set(compact('speciality'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Speciality id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $speciality = $this->Specialities->get($id);
        if ($this->Specialities->delete($speciality)) {
            $this->Flash->success(__('The speciality has been deleted.'));
        } else {
            $this->Flash->error(__('The speciality could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
