<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Visit Entity.
 *
 * @property int $id
 * @property \Cake\I18n\Time $trigger_time
 * @property string $leave_time
 * @property int $customer_id
 * @property \App\Model\Entity\Customer $customer
 * @property int $zone_id
 * @property \App\Model\Entity\Zone $zone
 */
class Visit extends Entity
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
        'customer_id' => false,
    ];
}
