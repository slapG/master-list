<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OtherInformationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OtherInformationsTable Test Case
 */
class OtherInformationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OtherInformationsTable
     */
    protected $OtherInformations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.OtherInformations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OtherInformations') ? [] : ['className' => OtherInformationsTable::class];
        $this->OtherInformations = $this->getTableLocator()->get('OtherInformations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->OtherInformations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OtherInformationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
