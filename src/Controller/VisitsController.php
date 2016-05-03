<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use DateTime;

/**
 * Visits Controller
 *
 * @property \App\Model\Table\VisitsTable $Visits
 */
class VisitsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Util');
    }

    private $months = [1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'October', 10 => 'September', 11 => 'October', 12 => 'November', 13 => 'December'];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
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
        $customers = $this->Visits->Customers->find('list');
        $zones = $this->Visits->Zones->find('list');
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

    public function permanency()
    {
        $this->loadModel('Stores');
        $stores = $this->Stores->find('list', ['limit' => 200]);

        if ($this->request->is('post')) {
            $this->request->data('store') ? $store_id = $this->request->data('store') : $store_id = null;
            $this->request->data('month') ? $month = $this->request->data('month') : $month = null;
        }

        $query = $this->Visits
            ->find('all', ['contain' => ['Zones']]);
        $query->select([
            'name' => 'Zones.name', 
            'permanency' => $query->func()->avg('TIMESTAMPDIFF(SECOND, trigger_time, leave_time)')]);
        if (isset($store_id)) {
            $query->where(['Zones.store_id' => $store_id]);
        }

        if (isset($month)) {
            $firstMonthDay = $this->Util->firstMonthDay($month);
            $lastMonthDay = $this->Util->lastMonthDay($month);
            
            $firstWeekEndDay = $this->Util->firstWeekEndDay($month);
            $secondWeekEndDay = $this->Util->secondWeekEndDay($month);
            $thirdWeekEndDay = $this->Util->thirdWeekEndDay($month);
            $fourthWeekEndDay = $this->Util->fourthWeekEndDay($month);
            $fifthWeekEndDay = $this->Util->fifthWeekEndDay($month);

            $week1 = clone $query;
            $week1->where([
                'Visits.trigger_time >' => new DateTime($firstMonthDay),
                'Visits.trigger_time <=' => new DateTime($firstWeekEndDay)
            ]);
            $week1->group('Zones.id');

            $week2 = clone $query;
            $week2->where([
                'Visits.trigger_time >' => new DateTime($firstWeekEndDay),
                'Visits.trigger_time <=' => new DateTime($secondWeekEndDay)
            ]);
            $week2->group('Zones.id');

            $week3 = clone $query;
            $week3->where([
                'Visits.trigger_time >' => new DateTime($secondWeekEndDay),
                'Visits.trigger_time <=' => new DateTime($thirdWeekEndDay)
            ]);
            $week3->group('Zones.id');

            $week4 = clone $query;
            $week4->where([
                'Visits.trigger_time >' => new DateTime($thirdWeekEndDay),
                'Visits.trigger_time <=' => new DateTime($fourthWeekEndDay)
            ]);
            $week4->group('Zones.id');

            $week5 = clone $query;
            $week5->where([
                'Visits.trigger_time >' => new DateTime($fourthWeekEndDay),
                'Visits.trigger_time <=' => new DateTime($fifthWeekEndDay)
            ]);
            $week5->group('Zones.id');

            $query->where([
                'Visits.trigger_time >=' => new DateTime($firstMonthDay),
                'Visits.trigger_time <=' => new DateTime($lastMonthDay)
            ]);

            $this->set(compact('week1', 'week2', 'week3', 'week4', 'week5'));

        }

        $query->group('Zones.id');

        $permanency = $query;
        
        $months = $this->months;

        $this->set(compact('permanency', 'stores', 'months'));
    }

    public function permanencyByStore()
    {
        $connection = ConnectionManager::get('default');
        $permanency_store = $connection->execute("
            SELECT
                FORMAT(AVG(permanency), 0) AS permanency,
                store
            FROM (
                SELECT 
                    AVG(TIMESTAMPDIFF(SECOND, trigger_time, leave_time)) as permanency,
                    zones.name as zone,
                    stores.name as store
                FROM zones, visits, stores
                WHERE stores.id = zones.store_id
                AND visits.zone_id = zones.id
                GROUP BY zones.id) AS permanency
            GROUP BY store")
            ->fetchAll('assoc');
        $this->set('permanency_store', $permanency_store);
    }

    public function zones()
    {
        $this->loadModel('Stores');
        $stores = $this->Stores->find('list', ['limit' => 200]);
        
        if ($this->request->is('post')) {
            $this->request->data('store') ? $store_id = $this->request->data('store') : $store_id = null;
            $this->request->data('month') ? $month = $this->request->data('month') : $month = null;
        }

        $query = $this->Visits
            ->find('all', ['contain' => ['Zones']]);
        $query->select([
            'name' => 'Zones.name', 
            'visits' => $query->func()->count('*')]);

        if (isset($store_id)) {
            $query->where(['Zones.store_id' => $store_id]);
        }

        if (isset($month)) {
            $firstMonthDay = $this->Util->firstMonthDay($month);
            $lastMonthDay = $this->Util->lastMonthDay($month);
            
            $firstWeekEndDay = $this->Util->firstWeekEndDay($month);
            $secondWeekEndDay = $this->Util->secondWeekEndDay($month);
            $thirdWeekEndDay = $this->Util->thirdWeekEndDay($month);
            $fourthWeekEndDay = $this->Util->fourthWeekEndDay($month);
            $fifthWeekEndDay = $this->Util->fifthWeekEndDay($month);

            $week1 = clone $query;
            $week1->where([
                'Visits.trigger_time >' => new DateTime($firstMonthDay),
                'Visits.trigger_time <=' => new DateTime($firstWeekEndDay)
            ]);
            $week1->group('Zones.id');

            $week2 = clone $query;
            $week2->where([
                'Visits.trigger_time >' => new DateTime($firstWeekEndDay),
                'Visits.trigger_time <=' => new DateTime($secondWeekEndDay)
            ]);
            $week2->group('Zones.id');

            $week3 = clone $query;
            $week3->where([
                'Visits.trigger_time >' => new DateTime($secondWeekEndDay),
                'Visits.trigger_time <=' => new DateTime($thirdWeekEndDay)
            ]);
            $week3->group('Zones.id');

            $week4 = clone $query;
            $week4->where([
                'Visits.trigger_time >' => new DateTime($thirdWeekEndDay),
                'Visits.trigger_time <=' => new DateTime($fourthWeekEndDay)
            ]);
            $week4->group('Zones.id');

            $week5 = clone $query;
            $week5->where([
                'Visits.trigger_time >' => new DateTime($fourthWeekEndDay),
                'Visits.trigger_time <=' => new DateTime($fifthWeekEndDay)
            ]);
            $week5->group('Zones.id');

            $query->where([
                'Visits.trigger_time >=' => new DateTime($firstMonthDay),
                'Visits.trigger_time <=' => new DateTime($lastMonthDay)
            ]);

            $this->set(compact('week1', 'week2', 'week3', 'week4', 'week5'));
        }

        $query->group('Zones.id');
        $query->order(['Zones.store_id', 'Zones.entrance' => 'DESC']);
        $visits = $query;

        $months = $this->months;
        $this->set(compact('visits', 'stores', 'months')) ;
    }

    public function entranceRate()
    {
        $this->loadModel('Stores');
        $stores = $this->Stores->find('all');

        $connection = ConnectionManager::get('default');
        $entrance_rate = $connection->execute("
            SELECT SUM(visits) AS visits, 
                entrance, 
                zone,
                store
             FROM (
                SELECT COUNT(*) AS visits, 
                    v.zone_id,
                    v.customer_id,
                    z.entrance,
                    z.name AS zone,
                    s.name AS store,
                    s.id AS store_id
                FROM visits AS v
                INNER JOIN zones AS z
                ON z.id = v.zone_id
                INNER JOIN stores AS s
                ON s.id = z.store_id
                GROUP BY z.id
                ORDER BY s.name, z.entrance desc, z.name) AS visits_by_zone
            GROUP BY store, entrance DESC")
            ->fetchAll('assoc');
        $this->set(compact('entrance_rate', 'stores'));
    }
}
