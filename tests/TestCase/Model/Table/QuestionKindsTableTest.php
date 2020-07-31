<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionKindsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionKindsTable Test Case
 */
class QuestionKindsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionKindsTable
     */
    public $QuestionKinds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.QuestionKinds',
        'app.Questions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('QuestionKinds') ? [] : ['className' => QuestionKindsTable::class];
        $this->QuestionKinds = TableRegistry::getTableLocator()->get('QuestionKinds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuestionKinds);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
