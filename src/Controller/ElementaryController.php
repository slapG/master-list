<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Elementary Controller
 *
 * @property \App\Model\Table\ElementaryTable $Elementary
 * @method \App\Model\Entity\Elementary[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ElementaryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $elementary = $this->paginate($this->Elementary);

        $this->set(compact('elementary'));
    }

    /**
     * View method
     *
     * @param string|null $id Elementary id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $elementary = $this->Elementary->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('elementary'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $elementary = $this->Elementary->newEmptyEntity();
        if ($this->request->is('post')) {
            $elementary = $this->Elementary->patchEntity($elementary, $this->request->getData());
            if ($this->Elementary->save($elementary)) {
                $this->Flash->success(__('The elementary has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The elementary could not be saved. Please, try again.'));
        }
        $this->set(compact('elementary'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Elementary id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $elementary = $this->Elementary->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $elementary = $this->Elementary->patchEntity($elementary, $this->request->getData());
            if ($this->Elementary->save($elementary)) {
                $this->Flash->success(__('The elementary has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The elementary could not be saved. Please, try again.'));
        }
        $this->set(compact('elementary'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Elementary id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $elementary = $this->Elementary->get($id);
        if ($this->Elementary->delete($elementary)) {
            $this->Flash->success(__('The elementary has been deleted.'));
        } else {
            $this->Flash->error(__('The elementary could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
