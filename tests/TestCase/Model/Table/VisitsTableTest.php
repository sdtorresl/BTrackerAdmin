<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisitsTable Test Case
 */
class VisitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VisitsTable
     */
    public $Visits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.visits',
        'app.customers',
        'app.purchases',
        'app.products',
        'app.customers_products',
        'app.zones',
        'app.beacons',
        'app.users',
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
        $config = TableRegistry::exists('Visits') ? [] : ['className' => 'App\Model\Table\VisitsTable'];
        $this->Visits = TableRegistry::get('Visits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Visits);

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
