<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LndFixture
 */
class LndFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'lnd';
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
                'training_program' => 'Lorem ipsum dolor sit amet',
                'exclusive_from' => '2025-04-02',
                'exclusive_to' => '2025-04-02',
                'number_of_hours' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'conducted_by' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-04-02 08:27:47',
                'modified' => '2025-04-02 08:27:47',
            ],
        ];
        parent::init();
    }
}
