<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WorkExperienceFixture
 */
class WorkExperienceFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'work_experience';
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
                'start_from' => 'Lorem ipsum dolor sit amet',
                'upto' => 'Lorem ipsum dolor sit amet',
                'position' => 'Lorem ipsum dolor sit amet',
                'department_id' => 1,
                'monthly_salary' => 'Lorem ipsum dolor sit amet',
                'salary_grade' => 'Lorem ipsum dolor sit amet',
                'status_of_appointment' => 'Lorem ipsum dolor sit amet',
                'government_service' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-04-02 08:27:48',
                'modified' => '2025-04-02 08:27:48',
            ],
        ];
        parent::init();
    }
}
