<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecialityTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecialityTable Test Case
 */
class SpecialityTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecialityTable
     */
    protected $Speciality;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Speciality',
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
        $config = $this->getTableLocator()->exists('Speciality') ? [] : ['className' => SpecialityTable::class];
        $this->Speciality = $this->getTableLocator()->get('Speciality', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Speciality);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SpecialityTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
