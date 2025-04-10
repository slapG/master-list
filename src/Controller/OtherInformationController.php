<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OtherInformation Controller
 *
 * @property \App\Model\Table\OtherInformationTable $OtherInformation
 * @method \App\Model\Entity\OtherInformation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OtherInformationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $otherInformation = $this->paginate($this->OtherInformation);

        $this->set(compact('otherInformation'));
    }

    /**
     * View method
     *
     * @param string|null $id Other Information id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $otherInformation = $this->OtherInformation->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('otherInformation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $otherInformation = $this->OtherInformation->newEmptyEntity();
        if ($this->request->is('post')) {
            $otherInformation = $this->OtherInformation->patchEntity($otherInformation, $this->request->getData());
            if ($this->OtherInformation->save($otherInformation)) {
                $this->Flash->success(__('The other information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The other information could not be saved. Please, try again.'));
        }
        $this->set(compact('otherInformation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Other Information id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $otherInformation = $this->OtherInformation->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $otherInformation = $this->OtherInformation->patchEntity($otherInformation, $this->request->getData());
            if ($this->OtherInformation->save($otherInformation)) {
                $this->Flash->success(__('The other information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The other information could not be saved. Please, try again.'));
        }
        $this->set(compact('otherInformation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Other Information id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $otherInformation = $this->OtherInformation->get($id);
        if ($this->OtherInformation->delete($otherInformation)) {
            $this->Flash->success(__('The other information has been deleted.'));
        } else {
            $this->Flash->error(__('The other information could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
