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
                'start_from' => '2025-04-02',
                'end_to' => '2025-04-02',
                'year_graduated' => '2025-04-02',
                'created' => '2025-04-02 08:27:47',
                'modified' => '2025-04-02 08:27:47',
            ],
        ];
        parent::init();
    }
}
