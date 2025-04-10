<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganizationTable Test Case
 */
class OrganizationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganizationTable
     */
    protected $Organization;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Organization',
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
        $config = $this->getTableLocator()->exists('Organization') ? [] : ['className' => OrganizationTable::class];
        $this->Organization = $this->getTableLocator()->get('Organization', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Organization);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrganizationTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
