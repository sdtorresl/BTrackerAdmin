<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BeaconsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BeaconsTable Test Case
 */
class BeaconsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BeaconsTable
     */
    public $Beacons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.beacons',
        'app.zones',
        'app.stores',
        'app.users',
        'app.visits',
        'app.customers',
        'app.purchases',
        'app.products',
        'app.customers_products',
        'app.products_zones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Beacons') ? [] : ['className' => 'App\Model\Table\BeaconsTable'];
        $this->Beacons = TableRegistry::get('Beacons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Beacons);

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
}
