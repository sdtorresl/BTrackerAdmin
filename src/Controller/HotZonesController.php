<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HotZones Controller
 *
 * @property \App\Model\Table\HotZonesTable $HotZones
 */
class HotZonesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $hotZones = $this->paginate($this->HotZones);

        $this->set(compact('hotZones'));
        $this->set('_serialize', ['hotZones']);
    }

    /**
     * View method
     *
     * @param string|null $id Hot Zone id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotZone = $this->HotZones->get($id, [
            'contain' => []
        ]);

        $this->set('hotZone', $hotZone);
        $this->set('_serialize', ['hotZone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotZone = $this->HotZones->newEntity();
        if ($this->request->is('post')) {
            $hotZone = $this->HotZones->patchEntity($hotZone, $this->request->data);
            if ($this->HotZones->save($hotZone)) {
                $this->Flash->success(__('The hot zone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hot zone could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('hotZone'));
        $this->set('_serialize', ['hotZone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hot Zone id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotZone = $this->HotZones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotZone = $this->HotZones->patchEntity($hotZone, $this->request->data);
            if ($this->HotZones->save($hotZone)) {
                $this->Flash->success(__('The hot zone has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hot zone could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('hotZone'));
        $this->set('_serialize', ['hotZone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hot Zone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotZone = $this->HotZones->get($id);
        if ($this->HotZones->delete($hotZone)) {
            $this->Flash->success(__('The hot zone has been deleted.'));
        } else {
            $this->Flash->error(__('The hot zone could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
