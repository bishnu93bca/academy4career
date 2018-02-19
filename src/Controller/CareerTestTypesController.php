<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class CareerTestTypesController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$CareerTestTypes=$this->CareerTestTypes->find('all', [
            'contain' => ['CareerTests']
        ]);
		$this->set('CareerTestTypes',$CareerTestTypes);
	} 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$CareerTestTypes = $this->CareerTestTypes->newEntity();
        if ($this->request->is('post')) {
        	$value=$this->request->data['career_test_type_image'];
                $filePath = WWW_ROOT."img".DS."careertesttypes".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['career_test_type_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            $CareerTestTypes = $this->CareerTestTypes->patchEntity($CareerTestTypes, $this->request->data);
            if ($this->CareerTestTypes->save($CareerTestTypes)) {
                $this->Flash->success(__('Your Career Test Type has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Career Test Type.'));
        }
        $CareerTests = $this->CareerTestTypes->CareerTests->find('all')->select(['career_test_id','career_test_name']);
        
        $this->set('CareerTests',$CareerTests);
        $this->set(compact('CareerTestTypes'));
        $this->set('_serialize', ['CareerTestTypes']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $CareerTestTypes = $this->CareerTestTypes->get($id, [
            'contain' => ['CareerTests']
        ]);
        $this->set('CareerTestTypes', $CareerTestTypes);
        $this->set('_serialize', ['CareerTestTypes']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$CareerTestTypes = $this->CareerTestTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['career_test_type_image'];
                $filePath = WWW_ROOT."img".DS."careertesttypes".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['career_test_type_image'] =$imagename; 
                }else{
                     $this->request->data['career_test_type_image'] =$CareerTestTypes->career_test_type_image; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            
            $CareerTestTypes = $this->CareerTestTypes->patchEntity($CareerTestTypes, $this->request->data);
            if ($this->CareerTestTypes->save($CareerTestTypes)) {
                $this->Flash->success(__('The Career Test Type has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Career Test Type could not be Update. Please, try again.'));
            }
        }
        $CareerTests = $this->CareerTestTypes->CareerTests->find('all')->select(['career_test_id','career_test_name']);
        $this->set('CareerTests',$CareerTests);
        $this->set(compact('CareerTestTypes'));
        $this->set('_serialize', ['CareerTestTypes']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$this->request->allowMethod(['post', 'delete']);
        $CareerTestTypes = $this->CareerTestTypes->get($id);
        if ($this->CareerTestTypes->delete($CareerTestTypes)) {
            $this->Flash->success(__('The Career Test Type has been deleted.'));
        } else {
            $this->Flash->error(__('The Career Test Type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}