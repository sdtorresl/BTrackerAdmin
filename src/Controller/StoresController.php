<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Stores Controller
 *
 * @property \App\Model\Table\StoresTable $Stores
 */
class StoresController extends AppController
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
            $this->Stores = $this->Stores->find()
                ->where(['name LIKE' => '%'.$value.'%']);
        }

        $this->paginate = [
            'contain' => ['Users']
        ];
        $stores = $this->paginate($this->Stores);

        $this->set(compact('stores'));
        $this->set('_serialize', ['stores']);
    }

    /**
     * View method
     *
     * @param string|null $id Store id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $store = $this->Stores->get($id, [
            'contain' => ['Users', 'Zones']
        ]);

        $this->set('store', $store);
        $this->set('_serialize', ['store']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $store = $this->Stores->newEntity();
        if ($this->request->is('post')) {
            $store = $this->Stores->patchEntity($store, $this->request->data);
            if ($this->Stores->save($store)) {
                $this->Flash->success(__('The store has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The store could not be saved. Please, try again.'));
            }
        }
        $users = $this->Stores->Users->find('list', ['limit' => 200]);
        $this->set(compact('store', 'users'));
        $this->set('_serialize', ['store']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Store id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $store = $this->Stores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $store = $this->Stores->patchEntity($store, $this->request->data);
            if ($this->Stores->save($store)) {
                $this->Flash->success(__('The store has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The store could not be saved. Please, try again.'));
            }
        }
        $users = $this->Stores->Users->find('list', ['limit' => 200]);
        $this->set(compact('store', 'users'));
        $this->set('_serialize', ['store']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Store id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $store = $this->Stores->get($id);
        if ($this->Stores->delete($store)) {
            $this->Flash->success(__('The store has been deleted.'));
        } else {
            $this->Flash->error(__('The store could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * View method
     *
     * @param string|null $id Store id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function visits()
    {
        $connection = ConnectionManager::get('default');
        $stores = $connection->execute("
            SELECT 
                SUM(visits) AS visits,
                store
            FROM
                (SELECT 
                    COUNT(*) AS visits, 
                    z.name AS zone,
                    s.name AS store
                FROM visits as v
                INNER JOIN zones as z
                ON z.id = v.zone_id
                INNER JOIN stores as s
                ON z.store_id = s.id
                GROUP BY v.zone_id
                ORDER BY s.name) AS visits_store
            GROUP BY store")
            ->fetchAll('assoc');

        $this->set(compact('stores'));
        $this->set('_serialize', ['store']);
    }
}
