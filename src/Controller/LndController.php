<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lnd Controller
 *
 * @property \App\Model\Table\LndTable $Lnd
 * @method \App\Model\Entity\Lnd[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LndController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $lnd = $this->paginate($this->Lnd);

        $this->set(compact('lnd'));
    }

    /**
     * View method
     *
     * @param string|null $id Lnd id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lnd = $this->Lnd->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('lnd'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lnd = $this->Lnd->newEmptyEntity();
        if ($this->request->is('post')) {
            $lnd = $this->Lnd->patchEntity($lnd, $this->request->getData());
            if ($this->Lnd->save($lnd)) {
                $this->Flash->success(__('The lnd has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lnd could not be saved. Please, try again.'));
        }
        $this->set(compact('lnd'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lnd id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lnd = $this->Lnd->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lnd = $this->Lnd->patchEntity($lnd, $this->request->getData());
            if ($this->Lnd->save($lnd)) {
                $this->Flash->success(__('The lnd has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lnd could not be saved. Please, try again.'));
        }
        $this->set(compact('lnd'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lnd id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lnd = $this->Lnd->get($id);
        if ($this->Lnd->delete($lnd)) {
            $this->Flash->success(__('The lnd has been deleted.'));
        } else {
            $this->Flash->error(__('The lnd could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
