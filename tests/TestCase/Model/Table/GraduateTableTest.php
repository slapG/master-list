<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GraduateTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GraduateTable Test Case
 */
class GraduateTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GraduateTable
     */
    protected $Graduate;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Graduate',
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
        $config = $this->getTableLocator()->exists('Graduate') ? [] : ['className' => GraduateTable::class];
        $this->Graduate = $this->getTableLocator()->get('Graduate', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Graduate);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GraduateTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
