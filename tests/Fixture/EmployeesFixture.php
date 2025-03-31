<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 */
class EmployeesFixture extends TestFixture
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
                'first_name' => 'Lorem ipsum dolor sit amet',
                'middle_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'place_of_birth' => 'Lorem ipsum dolor sit amet',
                'date_of_birth' => '2025-03-31',
                'sex' => 'Lorem ipsum dolor sit amet',
                'civil_status' => 'Lorem ipsum dolor sit amet',
                'height' => 'Lorem ipsum dolor sit amet',
                'weight' => 'Lorem ipsum dolor sit amet',
                'blood_type' => 'Lorem ipsum dolor sit amet',
                'gsis_number' => 'Lorem ipsum dolor sit amet',
                'pagibig_number' => 'Lorem ipsum dolor sit amet',
                'philhealth_number' => 'Lorem ipsum dolor sit amet',
                'sss_number' => 'Lorem ipsum dolor sit amet',
                'tin_number' => 'Lorem ipsum dolor sit amet',
                'agency_employee_number' => 'Lorem ipsum dolor sit amet',
                'citizenship' => 'Lorem ipsum dolor sit amet',
                'residential_address' => 'Lorem ipsum dolor sit amet',
                'permanent_address' => 'Lorem ipsum dolor sit amet',
                'telephone_number' => 'Lorem ipsum dolor sit amet',
                'mobile_number' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'family_background_id' => 1,
                'elementary_id' => 1,
                'secondary_id' => 1,
                'vocational_id' => 1,
                'college_id' => 1,
                'graduate_id' => 1,
                'lnds_id' => 1,
                'organizations_id' => 1,
                'work_experiences_id' => 1,
                'other_informations_id' => 1,
                'specialities_id' => 1,
                'created' => '2025-03-31 04:11:10',
                'modified' => '2025-03-31 04:11:10',
            ],
        ];
        parent::init();
    }
}
