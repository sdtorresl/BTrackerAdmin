<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Purchases Controller
 *
 * @property \App\Model\Table\PurchasesTable $Purchases
 */
class PurchasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Customers']
        ];
        $purchases = $this->paginate($this->Purchases);

        $this->set(compact('purchases'));
        $this->set('_serialize', ['purchases']);
    }

    /**
     * View method
     *
     * @param string|null $id Purchase id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $purchase = $this->Purchases->get($id, [
            'contain' => ['Products', 'Customers']
        ]);

        $this->set('purchase', $purchase);
        $this->set('_serialize', ['purchase']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $purchase = $this->Purchases->newEntity();
        if ($this->request->is('post')) {
            $purchase = $this->Purchases->patchEntity($purchase, $this->request->data);
            if ($this->Purchases->save($purchase)) {
                $this->Flash->success(__('The purchase has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The purchase could not be saved. Please, try again.'));
            }
        }
        $products = $this->Purchases->Products->find('list', ['limit' => 200]);
        $customers = $this->Purchases->Customers->find('list', ['limit' => 200]);
        $this->set(compact('purchase', 'products', 'customers'));
        $this->set('_serialize', ['purchase']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Purchase id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $purchase = $this->Purchases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $purchase = $this->Purchases->patchEntity($purchase, $this->request->data);
            if ($this->Purchases->save($purchase)) {
                $this->Flash->success(__('The purchase has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The purchase could not be saved. Please, try again.'));
            }
        }
        $products = $this->Purchases->Products->find('list', ['limit' => 200]);
        $customers = $this->Purchases->Customers->find('list', ['limit' => 200]);
        $this->set(compact('purchase', 'products', 'customers'));
        $this->set('_serialize', ['purchase']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Purchase id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $purchase = $this->Purchases->get($id);
        if ($this->Purchases->delete($purchase)) {
            $this->Flash->success(__('The purchase has been deleted.'));
        } else {
            $this->Flash->error(__('The purchase could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function zone()
    {
        $purchase = $this->Purchases->find('all', [
            'contain' => ['Products', 'Customers']
        ]);

        // $purchase->

        $this->set('purchase', $purchase);
        $this->set('_serialize', ['purchase']);
    }
}
