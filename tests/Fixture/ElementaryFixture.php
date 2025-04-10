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
                'start_from' => '2025-04-07',
                'end_to' => '2025-04-07',
                'year_graduated' => '2025-04-07',
                'created' => '2025-04-07 02:56:45',
                'modified' => '2025-04-07 02:56:45',
            ],
        ];
        parent::init();
    }
}
