<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $address
 * @property string $place_of_birth
 * @property \Cake\I18n\FrozenDate $date_of_birth
 * @property string $sex
 * @property string $civil_status
 * @property string $height
 * @property string $weight
 * @property string|null $blood_type
 * @property string|null $gsis_number
 * @property string|null $pagibig_number
 * @property string|null $philhealth_number
 * @property string|null $sss_number
 * @property string|null $tin_number
 * @property string $agency_employee_number
 * @property string $citizenship
 * @property string $residential_address
 * @property string $permanent_address
 * @property string $telephone_number
 * @property string $mobile_number
 * @property string $email
 * @property int $family_background_id
 * @property int $elementary_id
 * @property int $secondary_id
 * @property int $vocational_id
 * @property int $college_id
 * @property int $graduate_id
 * @property int $lnd_id
 * @property int $organization_id
 * @property int $work_experience_id
 * @property int $other_information_id
 * @property int $speciality_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\FamilyBackground $family_background
 * @property \App\Model\Entity\Elementary $elementary
 * @property \App\Model\Entity\Secondary $secondary
 * @property \App\Model\Entity\Vocational $vocational
 * @property \App\Model\Entity\College $college
 * @property \App\Model\Entity\Graduate $graduate
 * @property \App\Model\Entity\Lnd $lnd
 * @property \App\Model\Entity\Organization $organization
 * @property \App\Model\Entity\WorkExperience $work_experience
 * @property \App\Model\Entity\OtherInformation $other_information
 * @property \App\Model\Entity\Speciality $speciality
 */
class Employee extends Entity
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
        'first_name' => true,
        'middle_name' => true,
        'last_name' => true,
        'address' => true,
        'place_of_birth' => true,
        'date_of_birth' => true,
        'sex' => true,
        'civil_status' => true,
        'height' => true,
        'weight' => true,
        'blood_type' => true,
        'gsis_number' => true,
        'pagibig_number' => true,
        'philhealth_number' => true,
        'sss_number' => true,
        'tin_number' => true,
        'agency_employee_number' => true,
        'citizenship' => true,
        'residential_address' => true,
        'permanent_address' => true,
        'telephone_number' => true,
        'mobile_number' => true,
        'email' => true,
        'family_background_id' => true,
        'elementary_id' => true,
        'secondary_id' => true,
        'vocational_id' => true,
        'college_id' => true,
        'graduate_id' => true,
        'lnd_id' => true,
        'organization_id' => true,
        'work_experience_id' => true,
        'other_information_id' => true,
        'speciality_id' => true,
        'created' => true,
        'modified' => true,
        'family_background' => true,
        'elementary' => true,
        'secondary' => true,
        'vocational' => true,
        'college' => true,
        'graduate' => true,
        'lnd' => true,
        'organization' => true,
        'work_experience' => true,
        'other_information' => true,
        'speciality' => true,
    ];
}
