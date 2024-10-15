<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CotizacionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CotizacionTable Test Case
 */
class CotizacionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CotizacionTable
     */
    protected $Cotizacion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Cotizacion',
        'app.DomiciliosArray',
        'app.Licitacion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cotizacion') ? [] : ['className' => CotizacionTable::class];
        $this->Cotizacion = $this->getTableLocator()->get('Cotizacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Cotizacion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CotizacionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
