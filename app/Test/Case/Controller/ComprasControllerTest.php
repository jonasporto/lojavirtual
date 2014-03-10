<?php
App::uses('ComprasController', 'Controller');

/**
 * ComprasController Test Case
 *
 */
class ComprasControllerTest extends ControllerTestCase {

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

}
