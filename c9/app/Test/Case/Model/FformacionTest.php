<?php
App::uses('Fformacion', 'Model');

/**
 * Fformacion Test Case
 *
 */
class FformacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fformacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fformacion = ClassRegistry::init('Fformacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fformacion);

		parent::tearDown();
	}

}
