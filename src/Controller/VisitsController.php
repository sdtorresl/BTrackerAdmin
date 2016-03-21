<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Visits Controller
 *
 * @property \App\Model\Table\VisitsTable $Visits
 */
class VisitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        // All visits
        $this->paginate = [
            'contain' => ['Customers', 'Zones']
        ];
        $visits = $this->paginate($this->Visits);
        $this->set(compact('visits'));
        $this->set('_serialize', ['visits']);

        //Visits by zone 
        $query = $this->Visits
            ->find('all', ['contain' => ['Zones']])
            ->group('Zones.name');
        $query->select([
            'visits' => $query->func()->count('*'),
            'Zones.name',
            'trigger_time']);
        $this->set('visits_by_zone', $this->paginate($query));
        $this->set('_serialize', ['visits_by_zone']);
    }

    /**
     * View method
     *
     * @param string|null $id Visit id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visit = $this->Visits->get($id, [
            'contain' => ['Customers', 'Zones']
        ]);

        $this->set('visit', $visit);
        $this->set('_serialize', ['visit']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visit = $this->Visits->newEntity();
        if ($this->request->is('post')) {
            $visit = $this->Visits->patchEntity($visit, $this->request->data);
            if ($this->Visits->save($visit)) {
                $this->Flash->success(__('The visit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The visit could not be saved. Please, try again.'));
            }
        }
        $customers = $this->Visits->Customers->find('list', ['limit' => 200]);
        $zones = $this->Visits->Zones->find('list', ['limit' => 200]);
        $this->set(compact('visit', 'customers', 'zones'));
        $this->set('_serialize', ['visit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Visit id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visit = $this->Visits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visit = $this->Visits->patchEntity($visit, $this->request->data);
            if ($this->Visits->save($visit)) {
                $this->Flash->success(__('The visit has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The visit could not be saved. Please, try again.'));
            }
        }
        $customers = $this->Visits->Customers->find('list', ['limit' => 200]);
        $zones = $this->Visits->Zones->find('list', ['limit' => 200]);
        $this->set(compact('visit', 'customers', 'zones'));
        $this->set('_serialize', ['visit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Visit id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visit = $this->Visits->get($id);
        if ($this->Visits->delete($visit)) {
            $this->Flash->success(__('The visit has been deleted.'));
        } else {
            $this->Flash->error(__('The visit could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function hot()
    {
        $query = $this->Visits
            ->find('all', ['contain' => ['Zones']])
            // ->select(['Zones.id'])
            ->group('Zones.name');
        $query->select([
            'visits' => $query->func()->count('*'),
            'Zones.name',
            'trigger_time']);

        $this->set('visits', $this->paginate($query));
        $this->set('_serialize', ['visits']);
    }
}
