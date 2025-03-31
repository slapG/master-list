<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Elementary Entity
 *
 * @property int $id
 * @property string|null $elementary_name
 * @property string|null $basic_education
 * @property \Cake\I18n\FrozenDate|null $period_of_attendance
 * @property \Cake\I18n\FrozenDate|null $year_graduated
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employee[] $employees
 */
class Elementary extends Entity
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
        'elementary_name' => true,
        'basic_education' => true,
        'period_of_attendance' => true,
        'year_graduated' => true,
        'created' => true,
        'modified' => true,
        'employees' => true,
    ];
}
