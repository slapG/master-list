<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FamilyBackgroundTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FamilyBackgroundTable Test Case
 */
class FamilyBackgroundTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FamilyBackgroundTable
     */
    protected $FamilyBackground;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.FamilyBackground',
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
        $config = $this->getTableLocator()->exists('FamilyBackground') ? [] : ['className' => FamilyBackgroundTable::class];
        $this->FamilyBackground = $this->getTableLocator()->get('FamilyBackground', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->FamilyBackground);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FamilyBackgroundTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
