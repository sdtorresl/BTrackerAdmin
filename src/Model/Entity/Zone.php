<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Zone Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $store_id
 * @property \App\Model\Entity\Store $store
 * @property int $beacon_id
 * @property \App\Model\Entity\Beacon $beacon
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $entrance
 * @property bool $status
 * @property \App\Model\Entity\Visit[] $visits
 * @property \App\Model\Entity\Product[] $products
 */
class Zone extends Entity
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
