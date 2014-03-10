<?php
App::uses('Compra', 'Model');

/**
 * Compra Test Case
 *
 */
class CompraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.compra',
		'app.usuario',
		'app.produto',
		'app.comentario',
		'app.foto',
		'app.categoria',
		'app.categorias_produto',
		'app.compras_produto',
		'app.notificacao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Compra = ClassRegistry::init('Compra');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Compra);

		parent::tearDown();
	}

}
