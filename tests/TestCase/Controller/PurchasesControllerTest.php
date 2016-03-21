<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PurchasesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PurchasesController Test Case
 */
class PurchasesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.purchases',
        'app.products',
        'app.customers',
        'app.visits',
        'app.zones',
        'app.beacons',
        'app.users',
        'app.products_zones',
        'app.customers_products'
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
