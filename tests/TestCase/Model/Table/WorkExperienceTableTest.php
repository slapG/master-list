<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorkExperienceTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorkExperienceTable Test Case
 */
class WorkExperienceTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WorkExperienceTable
     */
    protected $WorkExperience;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.WorkExperience',
        'app.Departments',
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
        $config = $this->getTableLocator()->exists('WorkExperience') ? [] : ['className' => WorkExperienceTable::class];
        $this->WorkExperience = $this->getTableLocator()->get('WorkExperience', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->WorkExperience);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WorkExperienceTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\WorkExperienceTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
