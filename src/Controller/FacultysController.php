<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class FacultysController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$Facultys=$this->Facultys->find('all');
		$this->set('Facultys',$Facultys);
	}
    public function facultyList() 
    {
        $Facultys=$this->Facultys->find('all',['order'=>array('faculty_id DESC')]);
        $this->set('Facultys',$Facultys);
    }
     public function readmore($id=null)
    {
        $Facultys = $this->Facultys->get($id, [
            'contain' => []
        ]);
        $this->set('Facultys', $Facultys);
        $this->set('_serialize', ['Facultys']);
    } 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$Facultys = $this->Facultys->newEntity();
        if ($this->request->is('post')) {
        	$value=$this->request->data['faculty_image'];
                $filePath = WWW_ROOT."img".DS."facultys".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['faculty_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            $Facultys = $this->Facultys->patchEntity($Facultys, $this->request->data);
            if ($this->Facultys->save($Facultys)) {
                $this->Flash->success(__('Your Faculty  has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Faculty.'));
        }
        $this->set(compact('Facultys'));
        $this->set('_serialize', ['Facultys']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $Facultys = $this->Facultys->get($id, [
            'contain' => []
        ]);
        $this->set('Facultys', $Facultys);
        $this->set('_serialize', ['Facultys']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Facultys = $this->Facultys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['faculty_image'];
                $filePath = WWW_ROOT."img".DS."facultys".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['faculty_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
           
            $Facultys = $this->Facultys->patchEntity($Facultys, $this->request->data);
            if ($this->Facultys->save($Facultys)) {
                $this->Flash->success(__('The Faculty has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Faculty could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('Facultys'));
        $this->set('_serialize', ['Facultys']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $Facultys = $this->Facultys->get($id);
        if ($this->Facultys->delete($Facultys)) {
            $this->Flash->success(__('The Faculty has been deleted.'));
        } else {
            $this->Flash->error(__('The Faculty could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}