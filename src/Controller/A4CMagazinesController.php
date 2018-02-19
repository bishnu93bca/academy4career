<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use App\Controller\AppController;

class A4CMagazinesController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$this->set('magazines', $this->A4CMagazines->find("all",['order'=>array('magazine_id DESC')]));
        $this->set('_serialize', ['magazines']);


	}
    public function a4cMagazineList()
    {
        
        $this->set('A4CMagazines', $this->A4CMagazines->find("all",['order'=>array('magazine_id DESC')]));
        $this->set('_serialize', ['A4CMagazines']);


    }

    public function readmore($id=null)
    {
        $A4CMagazines = $this->A4CMagazines->get($id, [
            'contain' => []
        ]);
        $this->set('A4CMagazines', $A4CMagazines);
        $this->set('_serialize', ['A4CMagazines']);

    }  
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$magazines = $this->A4CMagazines->newEntity();
        if ($this->request->is('post')) {
        	$value=$this->request->data['magazine_image'];
                $filePath = WWW_ROOT."img".DS."magazine".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['magazine_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
           
           //pr($this->request->data);
           // exit();
            $magazines = $this->A4CMagazines->patchEntity($magazines, $this->request->data);
            if ($this->A4CMagazines->save($magazines)) {
                $this->Flash->success(__('Your A4C Magazines has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your A4C Magazines.'));
        }
        $this->set(compact('magazines'));
        $this->set('_serialize', ['magazines']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $magazines = $this->A4CMagazines->get($id, [
            'contain' => []
        ]);
        $this->set('magazines', $magazines);
        $this->set('_serialize', ['magazines']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$magazines = $this->A4CMagazines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['magazine_image'];
                $filePath = WWW_ROOT."img".DS."magazine".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['magazine_image'] =$imagename; 
                }else{
                   $this->request->data['magazine_image']=$magazines->magazine_image;
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            $magazines = $this->A4CMagazines->patchEntity($magazines, $this->request->data);
            if ($this->A4CMagazines->save($magazines)) {
                $this->Flash->success(__('The A4C Magazines has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The A4C Magazines could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('magazines'));
        $this->set('_serialize', ['magazines']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $A4CMagazines = $this->A4CMagazines->get($id);
        if ($this->A4CMagazines->delete($A4CMagazines)) {
            $this->Flash->success(__('The A4C Magazines has been deleted.'));
        } else {
            $this->Flash->error(__('The A4C Magazines could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);


	}
}