<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Graduate Controller
 *
 * @property \App\Model\Table\GraduateTable $Graduate
 * @method \App\Model\Entity\Graduate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GraduateController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $graduate = $this->paginate($this->Graduate);

        $this->set(compact('graduate'));
    }

    /**
     * View method
     *
     * @param string|null $id Graduate id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $graduate = $this->Graduate->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set(compact('graduate'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $graduate = $this->Graduate->newEmptyEntity();
        if ($this->request->is('post')) {
            $graduate = $this->Graduate->patchEntity($graduate, $this->request->getData());
            if ($this->Graduate->save($graduate)) {
                $this->Flash->success(__('The graduate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The graduate could not be saved. Please, try again.'));
        }
        $this->set(compact('graduate'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Graduate id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $graduate = $this->Graduate->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $graduate = $this->Graduate->patchEntity($graduate, $this->request->getData());
            if ($this->Graduate->save($graduate)) {
                $this->Flash->success(__('The graduate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The graduate could not be saved. Please, try again.'));
        }
        $this->set(compact('graduate'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Graduate id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $graduate = $this->Graduate->get($id);
        if ($this->Graduate->delete($graduate)) {
            $this->Flash->success(__('The graduate has been deleted.'));
        } else {
            $this->Flash->error(__('The graduate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
