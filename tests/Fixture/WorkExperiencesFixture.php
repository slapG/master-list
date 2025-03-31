<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WorkExperiencesFixture
 */
class WorkExperiencesFixture extends TestFixture
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
                'from' => 'Lorem ipsum dolor sit amet',
                'to' => 'Lorem ipsum dolor sit amet',
                'position' => 'Lorem ipsum dolor sit amet',
                'department_id' => 1,
                'monthly_salary' => 'Lorem ipsum dolor sit amet',
                'salary_grade' => 'Lorem ipsum dolor sit amet',
                'status_of_appointment' => 'Lorem ipsum dolor sit amet',
                'government_service' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-03-30 10:06:11',
                'modified' => '2025-03-30 10:06:11',
            ],
        ];
        parent::init();
    }
}
