<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LndsFixture
 */
class LndsFixture extends TestFixture
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
                'training_program' => 'Lorem ipsum dolor sit amet',
                'exclusive_from' => '2025-03-31',
                'exclusive_to' => '2025-03-31',
                'number_of_hours' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'conducted_by' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-03-31 02:24:13',
                'modified' => '2025-03-31 02:24:13',
            ],
        ];
        parent::init();
    }
}
