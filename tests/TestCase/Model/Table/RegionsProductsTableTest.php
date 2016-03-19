<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegionsProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegionsProductsTable Test Case
 */
class RegionsProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegionsProductsTable
     */
    public $RegionsProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.regions_products',
        'app.regions',
        'app.beacons',
        'app.users',
        'app.visits',
        'app.products',
        'app.purchases',
        'app.customers',
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
        $config = TableRegistry::exists('RegionsProducts') ? [] : ['className' => 'App\Model\Table\RegionsProductsTable'];
        $this->RegionsProducts = TableRegistry::get('RegionsProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegionsProducts);

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
