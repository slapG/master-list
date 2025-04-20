<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FamilyBackground Entity
 *
 * @property int $id
 * @property string|null $family_background
 * @property string|null $spouse_name
 * @property string|null $first_name
 * @property string|null $middle_name
 * @property string|null $last_name
 * @property string|null $occupation
 * @property string|null $employer_business_name
 * @property string|null $business_address
 * @property string|null $telephone_number
 * @property string|null $father_surname
 * @property string|null $father_first_name
 * @property string|null $father_middle_name
 * @property string|null $mother_maiden_name
 * @property string|null $mother_first_name
 * @property string|null $mother_middle_name
 * @property string|null $siblings
 * @property string|null $bithdays
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employee[] $employees
 */
class FamilyBackground extends Entity
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
        'family_background' => true,
        'spouse_name' => true,
        'first_name' => true,
        'middle_name' => true,
        'last_name' => true,
        'occupation' => true,
        'employer_business_name' => true,
        'business_address' => true,
        'telephone_number' => true,
        'father_surname' => true,
        'father_first_name' => true,
        'father_middle_name' => true,
        'mother_maiden_name' => true,
        'mother_first_name' => true,
        'mother_middle_name' => true,
        'siblings' => true,
        'bithdays' => true,
        'created' => true,
        'modified' => true,
        'employees' => true,
    ];
}
