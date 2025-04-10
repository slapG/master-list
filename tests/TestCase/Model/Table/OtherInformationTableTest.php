<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OtherInformationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OtherInformationTable Test Case
 */
class OtherInformationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OtherInformationTable
     */
    protected $OtherInformation;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.OtherInformation',
        'app.Employees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OtherInformation') ? [] : ['className' => OtherInformationTable::class];
        $this->OtherInformation = $this->getTableLocator()->get('OtherInformation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->OtherInformation);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OtherInformationTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
