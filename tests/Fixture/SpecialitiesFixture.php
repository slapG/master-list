<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SpecialitiesFixture
 */
class SpecialitiesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'speciality_laws' => 'Lorem ipsum dolor sit amet',
                'rating' => 'Lorem ipsum dolor sit amet',
                'date_of_examination' => '2025-03-30',
                'place_of_examination' => 'Lorem ipsum dolor sit amet',
                'license_number' => 'Lorem ipsum dolor sit amet',
                'date_of_validity' => '2025-03-30',
                'created' => '2025-03-30 10:05:56',
                'modified' => '2025-03-30 10:05:56',
            ],
        ];
        parent::init();
    }
}
