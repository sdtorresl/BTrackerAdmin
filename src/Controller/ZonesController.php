<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Zones Controller
 *
 * @property \App\Model\Table\ZonesTable $Zones
 */
class ZonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stores', 'Beacons']
        ];
        $zones = $this->paginate($this->Zones);

        $this->set(compact('zones'));
        $this->set('_serialize', ['zones']);
    }

    /**
     * View method
     *
     * @param string|null $id Zone id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zone = $this->Zones->get($id, [
            'contain' => ['Stores', 'Beacons', 'Products', 'Visits']
        ]);

        $this->set('zone', $zone);
        $this->set('_serialize', ['zone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zone = $this->Zones->newEntity();
        if ($this->request->is('post')) {
            $zone = $this->Zones->patchEntity($zone, $this->request->data);
            if ($this->Zones->save($zone)) {
                $this->Flash->success(__('The zone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The zone could not be saved. Please, try again.'));
            }
        }
        $stores = $this->Zones->Stores->find('list', ['limit' => 200]);
        $beacons = $this->Zones->Beacons->find('list', ['limit' => 200]);
        $products = $this->Zones->Products->find('list', ['limit' => 200]);
        $this->set(compact('zone', 'stores', 'beacons', 'products'));
        $this->set('_serialize', ['zone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Zone id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zone = $this->Zones->get($id, [
            'contain' => ['Products']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zone = $this->Zones->patchEntity($zone, $this->request->data);
            if ($this->Zones->save($zone)) {
                $this->Flash->success(__('The zone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The zone could not be saved. Please, try again.'));
            }
        }
        $stores = $this->Zones->Stores->find('list', ['limit' => 200]);
        $beacons = $this->Zones->Beacons->find('list', ['limit' => 200]);
        $products = $this->Zones->Products->find('list', ['limit' => 200]);
        $this->set(compact('zone', 'stores', 'beacons', 'products'));
        $this->set('_serialize', ['zone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Zone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zone = $this->Zones->get($id);
        if ($this->Zones->delete($zone)) {
            $this->Flash->success(__('The zone has been deleted.'));
        } else {
            $this->Flash->error(__('The zone could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
