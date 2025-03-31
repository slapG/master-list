<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * FamilyBackground Controller
 *
 * @property \App\Model\Table\FamilyBackgroundTable $FamilyBackground
 * @method \App\Model\Entity\FamilyBackground[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FamilyBackgroundController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $familyBackground = $this->paginate($this->FamilyBackground);

        $this->set(compact('familyBackground'));
    }

    /**
     * View method
     *
     * @param string|null $id Family Background id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $familyBackground = $this->FamilyBackground->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('familyBackground'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $familyBackground = $this->FamilyBackground->newEmptyEntity();
        if ($this->request->is('post')) {
            $familyBackground = $this->FamilyBackground->patchEntity($familyBackground, $this->request->getData());
            if ($this->FamilyBackground->save($familyBackground)) {
                $this->Flash->success(__('The family background has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The family background could not be saved. Please, try again.'));
        }
        $this->set(compact('familyBackground'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Family Background id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $familyBackground = $this->FamilyBackground->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $familyBackground = $this->FamilyBackground->patchEntity($familyBackground, $this->request->getData());
            if ($this->FamilyBackground->save($familyBackground)) {
                $this->Flash->success(__('The family background has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The family background could not be saved. Please, try again.'));
        }
        $this->set(compact('familyBackground'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Family Background id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $familyBackground = $this->FamilyBackground->get($id);
        if ($this->FamilyBackground->delete($familyBackground)) {
            $this->Flash->success(__('The family background has been deleted.'));
        } else {
            $this->Flash->error(__('The family background could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
