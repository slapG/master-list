<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Speciality Entity
 *
 * @property int $id
 * @property string|null $speciality_laws
 * @property string|null $rating
 * @property string|null $date_of_examination
 * @property string|null $place_of_examination
 * @property string|null $license_number
 * @property string|null $date_of_validity
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employee[] $employees
 */
class Speciality extends Entity
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
        'speciality_laws' => true,
        'rating' => true,
        'date_of_examination' => true,
        'place_of_examination' => true,
        'license_number' => true,
        'date_of_validity' => true,
        'created' => true,
        'modified' => true,
        'employees' => true,
    ];
}
