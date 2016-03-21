<?php
namespace App\Model\Table;

use App\Model\Entity\ProductsZone;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsZones Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Zones
 * @property \Cake\ORM\Association\BelongsTo $Products
 */
class ProductsZonesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('products_zones');
        $this->displayField('zone_id');
        $this->primaryKey(['zone_id', 'product_id']);

        $this->belongsTo('Zones', [
            'foreignKey' => 'zone_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['zone_id'], 'Zones'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        return $rules;
    }
}
