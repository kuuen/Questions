<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuestionKinds Controller
 *
 * @property \App\Model\Table\QuestionKindsTable $QuestionKinds
 *
 * @method \App\Model\Entity\QuestionKind[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionKindsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $questionKinds = $this->paginate($this->QuestionKinds);

        $this->set(compact('questionKinds'));
    }

    /**
     * View method
     *
     * @param string|null $id Question Kind id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionKind = $this->QuestionKinds->get($id, [
            'contain' => ['Questions'],
        ]);

        $this->set('questionKind', $questionKind);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionKind = $this->QuestionKinds->newEntity();
        if ($this->request->is('post')) {
            $questionKind = $this->QuestionKinds->patchEntity($questionKind, $this->request->getData());
            if ($this->QuestionKinds->save($questionKind)) {
                $this->Flash->success(__('The question kind has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question kind could not be saved. Please, try again.'));
        }
        $this->set(compact('questionKind'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Question Kind id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionKind = $this->QuestionKinds->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionKind = $this->QuestionKinds->patchEntity($questionKind, $this->request->getData());
            if ($this->QuestionKinds->save($questionKind)) {
                $this->Flash->success(__('The question kind has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question kind could not be saved. Please, try again.'));
        }
        $this->set(compact('questionKind'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Question Kind id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionKind = $this->QuestionKinds->get($id);
        if ($this->QuestionKinds->delete($questionKind)) {
            $this->Flash->success(__('The question kind has been deleted.'));
        } else {
            $this->Flash->error(__('The question kind could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
