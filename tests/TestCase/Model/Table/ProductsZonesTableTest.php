<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsZonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsZonesTable Test Case
 */
class ProductsZonesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsZonesTable
     */
    public $ProductsZones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.products_zones',
        'app.zones',
        'app.beacons',
        'app.users',
        'app.visits',
        'app.customers',
        'app.purchases',
        'app.products',
        'app.customers_products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductsZones') ? [] : ['className' => 'App\Model\Table\ProductsZonesTable'];
        $this->ProductsZones = TableRegistry::get('ProductsZones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductsZones);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
