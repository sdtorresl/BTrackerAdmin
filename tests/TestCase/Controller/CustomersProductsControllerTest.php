<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CustomersProductsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CustomersProductsController Test Case
 */
class CustomersProductsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customers_products',
        'app.customers',
        'app.purchases',
        'app.products',
        'app.zones',
        'app.stores',
        'app.users',
        'app.beacons',
        'app.visits',
        'app.products_zones'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
