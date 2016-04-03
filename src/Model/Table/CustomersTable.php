<?php
namespace App\Model\Table;

use App\Model\Entity\Customer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @property \Cake\ORM\Association\HasMany $Purchases
 * @property \Cake\ORM\Association\HasMany $Visits
 * @property \Cake\ORM\Association\BelongsToMany $Products
 */
class CustomersTable extends Table
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

        $this->table('customers');
        $this->displayField('mac');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Purchases', [
            'foreignKey' => 'customer_id'
        ]);
        $this->hasMany('Visits', [
            'foreignKey' => 'customer_id'
        ]);
        $this->belongsToMany('Products', [
            'foreignKey' => 'customer_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'customers_products'
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
            ->requirePresence('mac', 'create')
            ->notEmpty('mac')
            ->add('mac', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
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
        $rules->add($rules->isUnique(['mac']));
        return $rules;
    }
}
