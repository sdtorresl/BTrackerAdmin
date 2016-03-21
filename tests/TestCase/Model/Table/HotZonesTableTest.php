<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HotZonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HotZonesTable Test Case
 */
class HotZonesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HotZonesTable
     */
    public $HotZones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hot_zones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HotZones') ? [] : ['className' => 'App\Model\Table\HotZonesTable'];
        $this->HotZones = TableRegistry::get('HotZones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HotZones);

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
