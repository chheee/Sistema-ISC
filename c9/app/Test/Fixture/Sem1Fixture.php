<?php
/**
 * Sem1Fixture
 *
 */
class Sem1Fixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sem1';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false, 'key' => 'primary'),
		'matricula' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apellidopaterno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apellidomaterno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'semestre' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			
		),
		'tableParameters' => array('comment' => 'VIEW')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'matricula' => 1,
			'nombre' => 'Lorem ipsum dolor ',
			'apellidopaterno' => 'Lorem ipsum dolor sit amet',
			'apellidomaterno' => 'Lorem ipsum dolor sit amet',
			'semestre' => 1,
			'created' => '2015-04-21 21:55:16',
			'modified' => '2015-04-21 21:55:16'
		),
	);

}
