<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RegionsProduct Entity.
 *
 * @property int $region_id
 * @property \App\Model\Entity\Region $region
 * @property int $product_id
 * @property \App\Model\Entity\Product $product
 */
class RegionsProduct extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'region_id' => false,
        'product_id' => false,
    ];
}
