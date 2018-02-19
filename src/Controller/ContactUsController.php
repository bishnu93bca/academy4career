<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class ContactUsController extends AppController
{
	public function index()
	{
		if(!empty($this->request->data)){
			$to = "bishnu99bca@gmail.com";
			$subject = "Contact Us";
			$txt = 'Dear Sir,<br> Name : '.$this->request->data['name'].'<br>Email : '.$this->request->data['email'].'<br>Mobile No : '.$this->request->data['mobile'].'br>Message : '.trim($this->request->data['message']);
			$headers = "From: webmaster@example.com";
			if(mail($to,$subject,$txt,$headers)){
				$this->Flash->success(__('Your Message  has been Send.'));
			}
		}

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