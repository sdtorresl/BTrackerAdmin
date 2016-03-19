<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RegionsProducts Controller
 *
 * @property \App\Model\Table\RegionsProductsTable $RegionsProducts
 */
class RegionsProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Regions', 'Products']
        ];
        $regionsProducts = $this->paginate($this->RegionsProducts);

        $this->set(compact('regionsProducts'));
        $this->set('_serialize', ['regionsProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Regions Product id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regionsProduct = $this->RegionsProducts->get($id, [
            'contain' => ['Regions', 'Products']
        ]);

        $this->set('regionsProduct', $regionsProduct);
        $this->set('_serialize', ['regionsProduct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $regionsProduct = $this->RegionsProducts->newEntity();
        if ($this->request->is('post')) {
            $regionsProduct = $this->RegionsProducts->patchEntity($regionsProduct, $this->request->data);
            if ($this->RegionsProducts->save($regionsProduct)) {
                $this->Flash->success(__('The regions product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The regions product could not be saved. Please, try again.'));
            }
        }
        $regions = $this->RegionsProducts->Regions->find('list', ['limit' => 200]);
        $products = $this->RegionsProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('regionsProduct', 'regions', 'products'));
        $this->set('_serialize', ['regionsProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Regions Product id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regionsProduct = $this->RegionsProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regionsProduct = $this->RegionsProducts->patchEntity($regionsProduct, $this->request->data);
            if ($this->RegionsProducts->save($regionsProduct)) {
                $this->Flash->success(__('The regions product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The regions product could not be saved. Please, try again.'));
            }
        }
        $regions = $this->RegionsProducts->Regions->find('list', ['limit' => 200]);
        $products = $this->RegionsProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('regionsProduct', 'regions', 'products'));
        $this->set('_serialize', ['regionsProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Regions Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regionsProduct = $this->RegionsProducts->get($id);
        if ($this->RegionsProducts->delete($regionsProduct)) {
            $this->Flash->success(__('The regions product has been deleted.'));
        } else {
            $this->Flash->error(__('The regions product could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
