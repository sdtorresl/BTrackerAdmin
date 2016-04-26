<?php
namespace App\Model\Table;

use App\Model\Entity\Product;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \Cake\ORM\Association\HasMany $Purchases
 * @property \Cake\ORM\Association\BelongsToMany $Customers
 * @property \Cake\ORM\Association\BelongsToMany $Zones
 */
class ProductsTable extends Table
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

        $this->table('products');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Proffer.Proffer', [
            'picture' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'picture_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'square' => [   // Define the prefix of your thumbnail
                        'w' => 300, // Width
                        'h' => 300, // Height
                        'crop' => true, // Crop will crop the image as well as resize it
                        'jpeg_quality'  => 100,
                        'png_compression_level' => 9
                    ],
                    'portrait' => [     // Define a second thumbnail
                        'w' => 360,
                        'h' => 540,
                        'crop' => false
                    ],
                ],
                'thumbnailMethod' => 'imagick'  // Options are Imagick, Gd or Gmagick
            ]
        ]);

        $this->hasMany('Purchases', [
            'foreignKey' => 'product_id'
        ]);
        $this->belongsToMany('Customers', [
            'foreignKey' => 'product_id',
            'targetForeignKey' => 'customer_id',
            'joinTable' => 'customers_products'
        ]);
        $this->belongsToMany('Zones', [
            'foreignKey' => 'product_id',
            'targetForeignKey' => 'zone_id',
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

        $validator
            ->decimal('price')
            ->allowEmpty('price');

        $validator
            ->decimal('discount')
            ->allowEmpty('discount');

        $validator
            ->allowEmpty('terms');

        $validator
            ->allowEmpty('picture');

        $validator
            ->allowEmpty('picture_dir');

        $validator
            ->allowEmpty('type');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
