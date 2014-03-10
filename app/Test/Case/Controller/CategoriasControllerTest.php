<?php
App::uses('CategoriasController', 'Controller');

/**
 * CategoriasController Test Case
 *
 */
class CategoriasControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categoria',
		'app.produto',
		'app.usuario',
		'app.compra',
		'app.notificacao',
		'app.compras_produto',
		'app.comentario',
		'app.foto',
		'app.categorias_produto'
	);

}
