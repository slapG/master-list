<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LndsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LndsTable Test Case
 */
class LndsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LndsTable
     */
    protected $Lnds;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Lnds',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Lnds') ? [] : ['className' => LndsTable::class];
        $this->Lnds = $this->getTableLocator()->get('Lnds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Lnds);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LndsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
