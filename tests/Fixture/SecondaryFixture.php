<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SecondaryFixture
 */
class SecondaryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'secondary';
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
                'secondary_name' => 'Lorem ipsum dolor sit amet',
                'basic_education' => 'Lorem ipsum dolor sit amet',
                'start_from' => '2025-03-31',
                'end_to' => '2025-03-31',
                'year_graduated' => '2025-03-31',
                'created' => '2025-03-31 02:15:49',
                'modified' => '2025-03-31 02:15:49',
            ],
        ];
        parent::init();
    }
}
