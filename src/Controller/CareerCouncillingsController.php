<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class CareerCouncillingsController extends AppController
{
	public function index()
	{
		

	}
	public function add()
	{
		$this->viewBuilder()->layout('admin');


	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');


	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');


	}
}