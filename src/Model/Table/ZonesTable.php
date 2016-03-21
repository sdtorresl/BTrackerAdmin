<?php
namespace App\Model\Table;

use App\Model\Entity\Zone;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Zones Model
 *
 * @property \Cake\ORM\Association\HasMany $Beacons
 * @property \Cake\ORM\Association\HasMany $Visits
 * @property \Cake\ORM\Association\BelongsToMany $Products
 */
class ZonesTable extends Table
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

        $this->table('zones');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Beacons', [
            'foreignKey' => 'zone_id'
        ]);
        $this->hasMany('Visits', [
            'foreignKey' => 'zone_id'
        ]);
        $this->belongsToMany('Products', [
            'foreignKey' => 'zone_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'products_zones'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('description');

        return $validator;
    }
}
