<?php
App::uses('Facademica', 'Model');

/**
 * Facademica Test Case
 *
 */
class FacademicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.facademica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Facademica = ClassRegistry::init('Facademica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Facademica);

		parent::tearDown();
	}

}
