<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Users extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {

        $table = $this->table('other_informations');
        $table->addColumn('special_skill', 'text', ['null' => true])
            ->addColumn('non_academic_distinction', 'text', ['null' => true])
            ->addColumn('membership', 'text', ['null' => true])
            ->create();

        $table = $this->table('lnds');
        $table->addColumn('training_program', 'string', ['null' => true])
            ->addColumn('exclusive_from', 'date', ['null' => true])
            ->addColumn('exclusive_to', 'date', ['null' => true])
            ->addColumn('number_of_hours', 'string', ['null' => true])
            ->addColumn('type', 'string', ['null' => true])
            ->addColumn('conducted_by', 'string', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $table = $this->table('organizations');
        $table->addColumn('name_of_organization', 'string', ['null' => true])
            ->addColumn('exclusive_from', 'date', ['null' => true])
            ->addColumn('exclusive_to', 'date', ['null' => true])
            ->addColumn('number_of_hours', 'string', ['null' => true])
            ->addColumn('position', 'string', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $table = $this->table('departments');
        $table->addColumn('department', 'string', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $table = $this->table('work_experiences');
        $table->addColumn('start_from', 'string', ['null' => true])
            ->addColumn('upto', 'string', ['null' => true])
            ->addColumn('position', 'string', ['null' => true])
            ->addColumn('department_id', 'integer', ['null' => true])
            ->addColumn('monthly_salary', 'string', ['null' => true])
            ->addColumn('salary_grade', 'string', ['null' => true])
            ->addColumn('status_of_appointment', 'string', ['null' => true])
            ->addColumn('government_service', 'string', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addForeignKey('department_id', 'departments', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->create();

        $table = $this->table('specialities');
        $table->addColumn('speciality_laws', 'string', ['null' => true])
            ->addColumn('rating', 'string', ['null' => true])
            ->addColumn('date_of_examination', 'date', ['null' => true])
            ->addColumn('place_of_examination', 'string', ['null' => true])
            ->addColumn('license_number', 'string', ['null' => true])
            ->addColumn('date_of_validity', 'date', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $table = $this->table('elementary');
        $table->addColumn('elementary_name', 'string', ['null' => true])
            ->addColumn('basic_education', 'string', ['null' => true])
            ->addColumn('period_of_attendance', 'date', ['null' => true])
            ->addColumn('year_graduated', 'date', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $table = $this->table('secondary', ['null' => true]);
        $table->addColumn('secondary_name', 'string', ['null' => true])
            ->addColumn('basic_education', 'string', ['null' => true])
            ->addColumn('start_from', 'date', ['null' => true])
            ->addColumn('end_to', 'date', ['null' => true])
            ->addColumn('year_graduated', 'date', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $table = $this->table('vocational');
        $table->addColumn('vocational_name', 'string', ['null' => true])
            ->addColumn('basic_education', 'string', ['null' => true])
            ->addColumn('start_from', 'date', ['null' => true])
            ->addColumn('end_to', 'date', ['null' => true])
            ->addColumn('year_graduated', 'date', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $table = $this->table('college');
        $table->addColumn('college_name', 'string', ['null' => true])
            ->addColumn('basic_education', 'string', ['null' => true])
            ->addColumn('start_from', 'date', ['null' => true])
            ->addColumn('end_to', 'date', ['null' => true])
            ->addColumn('year_graduated', 'date', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $table = $this->table('graduate');
        $table->addColumn('graduate_name', 'string', ['null' => true])
            ->addColumn('basic_education', 'string', ['null' => true])
            ->addColumn('start_from', 'date', ['null' => true])
            ->addColumn('end_to', 'date', ['null' => true])
            ->addColumn('year_graduated', 'date', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $table = $this->table('Users');
        $table->addColumn('username', 'string')
            ->addColumn('email', 'string')
            ->addColumn('password', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $table = $this->table('family_background');
        $table->addColumn('family_background', 'string')
            ->addColumn('spouse_name', 'string', ['null' => true])
            ->addColumn('first_name', 'string', ['null' => true])
            ->addColumn('middle_name', 'string', ['null' => true])
            ->addColumn('last_name', 'string', ['null' => true])
            ->addColumn('occupation', 'string', ['null' => true])
            ->addColumn('employer_business_name', 'string', ['null' => true])
            ->addColumn('business_address', 'string', ['null' => true])
            ->addColumn('telephone_number', 'string', ['null' => true])
            ->addColumn('father_surname', 'string')
            ->addColumn('father_first_name', 'string')
            ->addColumn('father_middle_name', 'string')
            ->addColumn('mother_maiden_name', 'string')
            ->addColumn('mother_first_name', 'string')
            ->addColumn('mother_middle_name', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();

        $table = $this->table('employees');
        $table->addColumn('first_name', 'string')
            ->addColumn('middle_name', 'string')
            ->addColumn('last_name', 'string')
            ->addColumn('address', 'string')
            ->addColumn('place_of_birth', 'string')
            ->addColumn('date_of_birth', 'date')
            ->addColumn('sex', 'string')
            ->addColumn('civil_status', 'string')
            ->addColumn('height', 'string')
            ->addColumn('weight', 'string')
            ->addColumn('blood_type', 'string', ['null' => true])
            ->addColumn('gsis_number', 'string', ['null' => true])
            ->addColumn('pagibig_number', 'string', ['null' => true])
            ->addColumn('philhealth_number', 'string', ['null' => true])
            ->addColumn('sss_number', 'string', ['null' => true])
            ->addColumn('tin_number', 'string', ['null' => true])
            ->addColumn('agency_employee_number', 'string')
            ->addColumn('citizenship', 'string')
            ->addColumn('residential_address', 'string')
            ->addColumn('permanent_address', 'string')
            ->addColumn('telephone_number', 'string')
            ->addColumn('mobile_number', 'string')
            ->addColumn('email', 'string')
            ->addColumn('family_background_id', 'integer')
            ->addColumn('elementary_id', 'integer')
            ->addColumn('secondary_id', 'integer')
            ->addColumn('vocational_id', 'integer')
            ->addColumn('college_id', 'integer')
            ->addColumn('graduate_id', 'integer')
            ->addColumn('lnds_id', 'integer')
            ->addColumn('organizations_id', 'integer')
            ->addColumn('work_experiences_id', 'integer')
            ->addColumn('other_informations_id', 'integer')
            ->addColumn('specialities_id', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addForeignKey('family_background_id', 'family_background', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('elementary_id', 'elementary', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('secondary_id', 'secondary', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('vocational_id', 'vocational', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('college_id', 'college', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('graduate_id', 'graduate', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('lnds_id', 'lnds', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('organizations_id', 'organizations', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('work_experiences_id', 'work_experiences', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('other_informations_id', 'other_informations', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->addForeignKey('specialities_id', 'specialities', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])          
            ->create();
    }
}
