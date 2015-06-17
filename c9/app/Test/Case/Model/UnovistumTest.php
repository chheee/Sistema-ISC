<?php
App::uses('Unovistum', 'Model');

/**
 * Unovistum Test Case
 *
 */
class UnovistumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Unovistum = ClassRegistry::init('Unovistum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Unovistum);

		parent::tearDown();
	}

}
