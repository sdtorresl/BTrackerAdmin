<?php
namespace App\Model\Table;

use App\Model\Entity\Beacon;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Beacons Model
 *
 * @property \Cake\ORM\Association\HasMany $Zones
 */
class BeaconsTable extends Table
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

        $this->table('beacons');
        $this->displayField('uuid');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Zones', [
            'foreignKey' => 'beacon_id'
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
            ->requirePresence('uuid', 'create')
            ->notEmpty('uuid');

        $validator
            ->integer('major')
            ->requirePresence('major', 'create')
            ->notEmpty('major');

        $validator
            ->integer('minor')
            ->requirePresence('minor', 'create')
            ->notEmpty('minor');

        $validator
            ->integer('detection_range')
            ->requirePresence('detection_range', 'create')
            ->notEmpty('detection_range');

        return $validator;
    }
}
