<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FamilyBackgroundFixture
 */
class FamilyBackgroundFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'family_background';
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
                'family_background' => 'Lorem ipsum dolor sit amet',
                'spouse_name' => 'Lorem ipsum dolor sit amet',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'middle_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'occupation' => 'Lorem ipsum dolor sit amet',
                'employer_business_name' => 'Lorem ipsum dolor sit amet',
                'business_address' => 'Lorem ipsum dolor sit amet',
                'telephone_number' => 'Lorem ipsum dolor sit amet',
                'father_surname' => 'Lorem ipsum dolor sit amet',
                'father_first_name' => 'Lorem ipsum dolor sit amet',
                'father_middle_name' => 'Lorem ipsum dolor sit amet',
                'mother_maiden_name' => 'Lorem ipsum dolor sit amet',
                'mother_first_name' => 'Lorem ipsum dolor sit amet',
                'mother_middle_name' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-03-30 10:05:55',
                'modified' => '2025-03-30 10:05:55',
            ],
        ];
        parent::init();
    }
}
