<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $local_uri
 * @property float $price
 * @property float $discount
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $terms
 * @property bool $status
 * @property \App\Model\Entity\Purchase[] $purchases
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\Zone[] $zones
 */
class Product extends Entity
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
        'id' => false,
    ];
}
