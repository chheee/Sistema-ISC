<?php
App::uses('Fextracurricular', 'Model');

/**
 * Fextracurricular Test Case
 *
 */
class FextracurricularTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fextracurricular'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fextracurricular = ClassRegistry::init('Fextracurricular');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fextracurricular);

		parent::tearDown();
	}

}
