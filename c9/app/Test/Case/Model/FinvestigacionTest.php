<?php
App::uses('Finvestigacion', 'Model');

/**
 * Finvestigacion Test Case
 *
 */
class FinvestigacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.finvestigacion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Finvestigacion = ClassRegistry::init('Finvestigacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Finvestigacion);

		parent::tearDown();
	}

}
