<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Secondary Controller
 *
 * @property \App\Model\Table\SecondaryTable $Secondary
 * @method \App\Model\Entity\Secondary[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SecondaryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $secondary = $this->paginate($this->Secondary);

        $this->set(compact('secondary'));
    }

    /**
     * View method
     *
     * @param string|null $id Secondary id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $secondary = $this->Secondary->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('secondary'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $secondary = $this->Secondary->newEmptyEntity();
        if ($this->request->is('post')) {
            $secondary = $this->Secondary->patchEntity($secondary, $this->request->getData());
            if ($this->Secondary->save($secondary)) {
                $this->Flash->success(__('The secondary has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The secondary could not be saved. Please, try again.'));
        }
        $this->set(compact('secondary'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Secondary id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $secondary = $this->Secondary->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $secondary = $this->Secondary->patchEntity($secondary, $this->request->getData());
            if ($this->Secondary->save($secondary)) {
                $this->Flash->success(__('The secondary has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The secondary could not be saved. Please, try again.'));
        }
        $this->set(compact('secondary'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Secondary id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $secondary = $this->Secondary->get($id);
        if ($this->Secondary->delete($secondary)) {
            $this->Flash->success(__('The secondary has been deleted.'));
        } else {
            $this->Flash->error(__('The secondary could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
