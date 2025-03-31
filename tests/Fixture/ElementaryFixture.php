<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ElementaryFixture
 */
class ElementaryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'elementary';
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
                'elementary_name' => 'Lorem ipsum dolor sit amet',
                'basic_education' => 'Lorem ipsum dolor sit amet',
                'period_of_attendance' => '2025-03-30',
                'year_graduated' => '2025-03-30',
                'created' => '2025-03-30 10:05:54',
                'modified' => '2025-03-30 10:05:54',
            ],
        ];
        parent::init();
    }
}
