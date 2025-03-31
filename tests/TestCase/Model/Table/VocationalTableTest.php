<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VocationalTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VocationalTable Test Case
 */
class VocationalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VocationalTable
     */
    protected $Vocational;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Vocational',
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
        $config = $this->getTableLocator()->exists('Vocational') ? [] : ['className' => VocationalTable::class];
        $this->Vocational = $this->getTableLocator()->get('Vocational', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Vocational);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VocationalTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
