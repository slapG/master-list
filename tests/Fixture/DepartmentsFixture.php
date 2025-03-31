<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DepartmentsFixture
 */
class DepartmentsFixture extends TestFixture
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
                'department' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-03-30 10:05:54',
                'modified' => '2025-03-30 10:05:54',
            ],
        ];
        parent::init();
    }
}
