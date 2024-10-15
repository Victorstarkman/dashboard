<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProveedoresInfoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProveedoresInfoTable Test Case
 */
class ProveedoresInfoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProveedoresInfoTable
     */
    protected $ProveedoresInfo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProveedoresInfo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProveedoresInfo') ? [] : ['className' => ProveedoresInfoTable::class];
        $this->ProveedoresInfo = $this->getTableLocator()->get('ProveedoresInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProveedoresInfo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProveedoresInfoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
