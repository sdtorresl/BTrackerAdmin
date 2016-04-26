<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Beacons Controller
 *
 * @property \App\Model\Table\BeaconsTable $Beacons
 */
class BeaconsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        if ($this->request->is('post')) {
            $value = $this->request->data('search');
            $this->Beacons = $this->Beacons->find()
                ->where(['OR' => [['name LIKE' => '%'.$value.'%'], ['uuid LIKE' => '%'.$value.'%']]]);
        }

        $beacons = $this->paginate($this->Beacons);

        $this->set(compact('beacons'));
        $this->set('_serialize', ['beacons']);
    }

    /**
     * View method
     *
     * @param string|null $id Beacon id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $beacon = $this->Beacons->get($id, [
            'contain' => ['Zones']
        ]);

        $this->set('beacon', $beacon);
        $this->set('_serialize', ['beacon']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $beacon = $this->Beacons->newEntity();
        if ($this->request->is('post')) {
            $beacon = $this->Beacons->patchEntity($beacon, $this->request->data);
            if ($this->Beacons->save($beacon)) {
                $this->Flash->success(__('The beacon has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The beacon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('beacon'));
        $this->set('_serialize', ['beacon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Beacon id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $beacon = $this->Beacons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $beacon = $this->Beacons->patchEntity($beacon, $this->request->data);
            if ($this->Beacons->save($beacon)) {
                $this->Flash->success(__('The beacon has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The beacon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('beacon'));
        $this->set('_serialize', ['beacon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Beacon id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $beacon = $this->Beacons->get($id);
        if ($this->Beacons->delete($beacon)) {
            $this->Flash->success(__('The beacon has been deleted.'));
        } else {
            $this->Flash->error(__('The beacon could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
