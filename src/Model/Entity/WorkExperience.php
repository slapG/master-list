<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WorkExperience Entity
 *
 * @property int $id
 * @property string|null $start_from
 * @property string|null $upto
 * @property string|null $position
 * @property string $department_name
 * @property int|null $department_id
 * @property string|null $monthly_salary
 * @property string|null $salary_grade
 * @property string|null $status_of_appointment
 * @property string|null $government_service
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Employee[] $employees
 */
class WorkExperience extends Entity
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
        'start_from' => true,
        'upto' => true,
        'position' => true,
        'department_name' => true,
        'department_id' => true,
        'monthly_salary' => true,
        'salary_grade' => true,
        'status_of_appointment' => true,
        'government_service' => true,
        'created' => true,
        'modified' => true,
        'department' => true,
        'employees' => true,
    ];
}
