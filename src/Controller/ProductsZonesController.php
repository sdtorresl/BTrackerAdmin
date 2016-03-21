<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsZones Controller
 *
 * @property \App\Model\Table\ProductsZonesTable $ProductsZones
 */
class ProductsZonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Zones', 'Products']
        ];
        $productsZones = $this->paginate($this->ProductsZones);

        $this->set(compact('productsZones'));
        $this->set('_serialize', ['productsZones']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Zone id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsZone = $this->ProductsZones->get($id, [
            'contain' => ['Zones', 'Products']
        ]);

        $this->set('productsZone', $productsZone);
        $this->set('_serialize', ['productsZone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsZone = $this->ProductsZones->newEntity();
        if ($this->request->is('post')) {
            $productsZone = $this->ProductsZones->patchEntity($productsZone, $this->request->data);
            if ($this->ProductsZones->save($productsZone)) {
                $this->Flash->success(__('The products zone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products zone could not be saved. Please, try again.'));
            }
        }
        $zones = $this->ProductsZones->Zones->find('list', ['limit' => 200]);
        $products = $this->ProductsZones->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsZone', 'zones', 'products'));
        $this->set('_serialize', ['productsZone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Zone id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsZone = $this->ProductsZones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsZone = $this->ProductsZones->patchEntity($productsZone, $this->request->data);
            if ($this->ProductsZones->save($productsZone)) {
                $this->Flash->success(__('The products zone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products zone could not be saved. Please, try again.'));
            }
        }
        $zones = $this->ProductsZones->Zones->find('list', ['limit' => 200]);
        $products = $this->ProductsZones->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsZone', 'zones', 'products'));
        $this->set('_serialize', ['productsZone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Zone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsZone = $this->ProductsZones->get($id);
        if ($this->ProductsZones->delete($productsZone)) {
            $this->Flash->success(__('The products zone has been deleted.'));
        } else {
            $this->Flash->error(__('The products zone could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
