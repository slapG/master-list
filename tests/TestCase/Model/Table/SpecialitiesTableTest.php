<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecialitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecialitiesTable Test Case
 */
class SpecialitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecialitiesTable
     */
    protected $Specialities;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Specialities',
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
        $config = $this->getTableLocator()->exists('Specialities') ? [] : ['className' => SpecialitiesTable::class];
        $this->Specialities = $this->getTableLocator()->get('Specialities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Specialities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SpecialitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
