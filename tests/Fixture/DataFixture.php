<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DataFixture
 */
class DataFixture extends TestFixture
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
                'vendor_tin' => 1,
                'branch_code' => 'Lo',
                'atc' => 'Lorem ipsum dolor sit amet',
                'trade_name' => 'Lorem ipsum dolor sit amet',
                'company_name' => 'Lorem ipsum dolor sit amet',
                'lastname' => 'Lorem ipsum dolor sit amet',
                'firstname' => 'Lorem ipsum dolor sit amet',
                'middlename' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'receipt_type' => 'Lorem ipsum dolor sit amet',
                'nature' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
