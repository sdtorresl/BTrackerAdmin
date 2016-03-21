<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsZonesFixture
 *
 */
class ProductsZonesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'zone_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'product_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Products_has_Zones_Products1' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
            'fk_Products_has_Zones_Zones1' => ['type' => 'index', 'columns' => ['zone_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['zone_id', 'product_id'], 'length' => []],
            'fk_Products_has_Zones_Products1' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['products', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Products_has_Zones_Zones1' => ['type' => 'foreign', 'columns' => ['zone_id'], 'references' => ['zones', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'zone_id' => 1,
            'product_id' => 1
        ],
    ];
}
