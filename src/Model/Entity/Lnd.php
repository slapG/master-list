<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lnd Entity
 *
 * @property int $id
 * @property string|null $training_program
 * @property \Cake\I18n\FrozenDate|null $exclusive_from
 * @property \Cake\I18n\FrozenDate|null $exclusive_to
 * @property string|null $number_of_hours
 * @property string|null $type
 * @property string|null $conducted_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employee[] $employees
 */
class Lnd extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'training_program' => true,
        'exclusive_from' => true,
        'exclusive_to' => true,
        'number_of_hours' => true,
        'type' => true,
        'conducted_by' => true,
        'created' => true,
        'modified' => true,
        'employees' => true,
    ];
}
