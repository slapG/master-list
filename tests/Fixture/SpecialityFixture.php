<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SpecialityFixture
 */
class SpecialityFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'speciality';
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
                'date_of_examination' => '2025-04-02',
                'place_of_examination' => 'Lorem ipsum dolor sit amet',
                'license_number' => 'Lorem ipsum dolor sit amet',
                'date_of_validity' => '2025-04-02',
                'created' => '2025-04-02 08:27:48',
                'modified' => '2025-04-02 08:27:48',
            ],
        ];
        parent::init();
    }
}
