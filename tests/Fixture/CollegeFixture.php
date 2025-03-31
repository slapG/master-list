<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CollegeFixture
 */
class CollegeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'college';
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
                'college_name' => 'Lorem ipsum dolor sit amet',
                'basic_education' => 'Lorem ipsum dolor sit amet',
                'from' => '2025-03-30',
                'to' => '2025-03-30',
                'year_graduated' => '2025-03-30',
                'created' => '2025-03-30 10:05:53',
                'modified' => '2025-03-30 10:05:53',
            ],
        ];
        parent::init();
    }
}
