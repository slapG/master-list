<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LndTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LndTable Test Case
 */
class LndTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LndTable
     */
    protected $Lnd;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Lnd',
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
        $config = $this->getTableLocator()->exists('Lnd') ? [] : ['className' => LndTable::class];
        $this->Lnd = $this->getTableLocator()->get('Lnd', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Lnd);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LndTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
