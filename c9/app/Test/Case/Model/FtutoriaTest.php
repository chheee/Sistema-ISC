<?php
App::uses('Ftutoria', 'Model');

/**
 * Ftutoria Test Case
 *
 */
class FtutoriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ftutoria'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ftutoria = ClassRegistry::init('Ftutoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ftutoria);

		parent::tearDown();
	}

}
