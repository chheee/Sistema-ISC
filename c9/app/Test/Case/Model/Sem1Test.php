<?php
App::uses('Sem1', 'Model');

/**
 * Sem1 Test Case
 *
 */
class Sem1Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sem1'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sem1 = ClassRegistry::init('Sem1');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sem1);

		parent::tearDown();
	}

}
