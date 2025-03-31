<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ElementaryTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ElementaryTable Test Case
 */
class ElementaryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ElementaryTable
     */
    protected $Elementary;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Elementary',
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
        $config = $this->getTableLocator()->exists('Elementary') ? [] : ['className' => ElementaryTable::class];
        $this->Elementary = $this->getTableLocator()->get('Elementary', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Elementary);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ElementaryTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
