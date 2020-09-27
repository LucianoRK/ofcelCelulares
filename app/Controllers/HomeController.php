<?php

namespace App\Controllers;

class HomeController extends BaseController
{
	public function __construct()
	{
		//
	}
	
	/////////////////////////////
	//                         //
	//	        CRUD           //
	//                         //
	/////////////////////////////

	/**
	 * Pagina inicial do módulo
	 */
	public function index()
	{
		$this->template('home', 'index');
	}

	/**
	 * Mostra um item específico
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Retorna a View para criar um item da tabela
	 */
	public function create()
	{
		//
	}

	/**
	 * Salva o novo item na tabela
	 */
	public function store()
	{
		//
	}

	/**
	 * Retorna a View para edição do dado
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Salva a atualização do dado
	 */
	public function update()
	{
		//
	}

	/**
	 * Remove ou desabilita o dado
	 */
	public function destroy()
	{
		//
	}

	/////////////////////////////
	//                         //
	//	   Outras funções      //
	//                         //
	/////////////////////////////
}
