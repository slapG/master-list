<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Speciality Controller
 *
 * @property \App\Model\Table\SpecialityTable $Speciality
 * @method \App\Model\Entity\Speciality[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpecialityController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $speciality = $this->paginate($this->Speciality);

        $this->set(compact('speciality'));
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
        $speciality = $this->Speciality->get($id, [
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
        $speciality = $this->Speciality->newEmptyEntity();
        if ($this->request->is('post')) {
            $speciality = $this->Speciality->patchEntity($speciality, $this->request->getData());
            if ($this->Speciality->save($speciality)) {
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
        $speciality = $this->Speciality->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $speciality = $this->Speciality->patchEntity($speciality, $this->request->getData());
            if ($this->Speciality->save($speciality)) {
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
        $speciality = $this->Speciality->get($id);
        if ($this->Speciality->delete($speciality)) {
            $this->Flash->success(__('The speciality has been deleted.'));
        } else {
            $this->Flash->error(__('The speciality could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
