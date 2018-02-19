<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class TestimonialsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$Testimonials=$this->Testimonials->find('all');
		$this->set('Testimonials',$Testimonials);


	}
     public function testimonialsList()
    {
        $Testimonials=$this->Testimonials->find('all',['order'=>array('testimonial_id DESC')]);
        $this->set('Testimonials',$Testimonials);
    } 

	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$Testimonials = $this->Testimonials->newEntity();
        if ($this->request->is('post')) {
        	
        	
           	$testimonial_image=$this->request->data['testimonial_image'];
                $filePath = WWW_ROOT."img".DS."testimonials".DS;
                $filename = end(explode('.',$testimonial_image['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['testimonial_image']=$imagename;
                    move_uploaded_file($testimonial_image['tmp_name'],$filePath.$imagename);
                    
                }
            
           
             
                $this->request->data['user_id']=1;
                $this->request->data['user_name']='users';
            $Testimonials = $this->Testimonials->patchEntity($Testimonials, $this->request->data);
            if ($this->Testimonials->save($Testimonials)) {
                $this->Flash->success(__('Your Testimonials has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Testimonials.'));
        }
        $this->set(compact('Testimonials'));
        $this->set('_serialize', ['Testimonials']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $Testimonials = $this->Testimonials->get($id, [
            'contain' => []
        ]);
        $this->set('Testimonials', $Testimonials);
        $this->set('_serialize', ['Testimonials']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Testimonials = $this->Testimonials->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
           	$testimonial_image=$this->request->data['testimonial_image'];
                $filePath = WWW_ROOT."img".DS."testimonials".DS;
                $filename = end(explode('.',$testimonial_image['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['testimonial_image']=$imagename;
                    move_uploaded_file($testimonial_image['tmp_name'],$filePath.$imagename);
                    
                }else{
                  $this->request->data['testimonial_image']=$Testimonials->testimonial_image;  
                }
                
            
                      
            $Testimonials = $this->Testimonials->patchEntity($Testimonials, $this->request->data);
            if ($this->Testimonials->save($Testimonials)) {
                $this->Flash->success(__('The Testimonials has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Testimonials could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('Testimonials'));
        $this->set('_serialize', ['Testimonials']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $Testimonials = $this->Testimonials->get($id);
        if ($this->Testimonials->delete($Testimonials)) {
            $this->Flash->success(__('The Testimonials has been deleted.'));
        } else {
            $this->Flash->error(__('The Testimonials could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);


	}
}