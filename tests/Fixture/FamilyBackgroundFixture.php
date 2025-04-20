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
                'siblings' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'bithdays' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2025-04-15 02:29:44',
                'modified' => '2025-04-15 02:29:44',
            ],
        ];
        parent::init();
    }
}
