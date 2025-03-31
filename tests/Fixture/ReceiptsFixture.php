<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReceiptsFixture
 */
class ReceiptsFixture extends TestFixture
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
                'date' => '2025-03-04',
                'doc_type' => 'Lorem ipsum dolor sit amet',
                'doc_num' => 'Lorem ipsum dolor sit amet',
                'atc' => 'Lorem ipsum dolor sit amet',
                'invoice_date' => '2025-03-04',
                'vendor_tin' => 1,
                'branch_code' => 'Lo',
                'trade_name' => 'Lorem ipsum dolor sit amet',
                'company_name' => 'Lorem ipsum dolor sit amet',
                'lastname' => 'Lorem ipsum dolor sit amet',
                'firstname' => 'Lorem ipsum dolor sit amet',
                'middlename' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'receipt_type' => 'Lorem ipsum dolor sit amet',
                'document_number' => 1,
                'nature' => 'Lorem ipsum dolor sit amet',
                'does_nvat' => 1.5,
                'non_vat' => 1.5,
                'zero_rated' => 1.5,
                'services' => 1.5,
                'capital_goods' => 1.5,
                'goods' => 1.5,
                'taxable' => 1.5,
                'vatrate' => 1.5,
                'inputvat' => 1.5,
                'total_purchases' => 1.5,
                'total_amount' => 1.5,
                'detatchment' => 'Lorem ipsum dolor sit amet',
                'created' => 1741074334,
                'modified' => 1741074334,
            ],
        ];
        parent::init();
    }
}
