<?php
App::uses('ComentariosController', 'Controller');

/**
 * ComentariosController Test Case
 *
 */
class ComentariosControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comentario',
		'app.produto',
		'app.usuario',
		'app.compra',
		'app.notificacao',
		'app.compras_produto',
		'app.foto',
		'app.categoria',
		'app.categorias_produto'
	);

}
