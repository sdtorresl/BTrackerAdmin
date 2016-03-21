<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PurchasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PurchasesTable Test Case
 */
class PurchasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PurchasesTable
     */
    public $Purchases;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Purchases') ? [] : ['className' => 'App\Model\Table\PurchasesTable'];
        $this->Purchases = TableRegistry::get('Purchases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Purchases);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
