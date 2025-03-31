<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lnds Controller
 *
 * @property \App\Model\Table\LndsTable $Lnds
 * @method \App\Model\Entity\Lnd[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LndsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $lnds = $this->paginate($this->Lnds);

        $this->set(compact('lnds'));
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
        $lnd = $this->Lnds->get($id, [
            'contain' => [],
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
        $lnd = $this->Lnds->newEmptyEntity();
        if ($this->request->is('post')) {
            $lnd = $this->Lnds->patchEntity($lnd, $this->request->getData());
            if ($this->Lnds->save($lnd)) {
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
        $lnd = $this->Lnds->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lnd = $this->Lnds->patchEntity($lnd, $this->request->getData());
            if ($this->Lnds->save($lnd)) {
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
        $lnd = $this->Lnds->get($id);
        if ($this->Lnds->delete($lnd)) {
            $this->Flash->success(__('The lnd has been deleted.'));
        } else {
            $this->Flash->error(__('The lnd could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
