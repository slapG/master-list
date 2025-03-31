<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SecondaryTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SecondaryTable Test Case
 */
class SecondaryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SecondaryTable
     */
    protected $Secondary;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Secondary',
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
        $config = $this->getTableLocator()->exists('Secondary') ? [] : ['className' => SecondaryTable::class];
        $this->Secondary = $this->getTableLocator()->get('Secondary', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Secondary);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SecondaryTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
