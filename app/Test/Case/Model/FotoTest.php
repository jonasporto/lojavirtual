<?php
App::uses('Foto', 'Model');

/**
 * Foto Test Case
 *
 */
class FotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.foto',
		'app.produto',
		'app.usuario',
		'app.compra',
		'app.notificacao',
		'app.compras_produto',
		'app.comentario',
		'app.categoria',
		'app.categorias_produto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Foto = ClassRegistry::init('Foto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Foto);

		parent::tearDown();
	}

}
