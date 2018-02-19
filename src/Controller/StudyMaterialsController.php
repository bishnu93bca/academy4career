<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class StudyMaterialsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$StudyMaterials=$this->StudyMaterials->find('all');
		$this->set('StudyMaterials',$StudyMaterials);


	}
    public function studyMaterialList()
    {
        if(empty($this->request->data)){
            $StudyMaterials=$this->StudyMaterials->find('all',['order'=>array('study_material_id DESC')], ['contain' => ['Class']]);
         }elseif (!empty($this->request->data['class_id'])) {
            $StudyMaterials=$this->StudyMaterials->find('all',['order'=>array('study_material_id DESC')], ['contain' => ['Class']])->where(['StudyMaterials.class_id'=>$this->request->data['class_id']]);
         }
        $Class=$this->StudyMaterials->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $this->set('StudyMaterials',$StudyMaterials);
    } 
    public function readmore($id=null){
        $StudyMaterials = $this->StudyMaterials->get($id, [
            'contain' => ['Class']
        ]);
        $this->set('StudyMaterials', $StudyMaterials);
        $this->set('_serialize', ['StudyMaterials']);
    }

	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$StudyMaterials = $this->StudyMaterials->newEntity();
        if ($this->request->is('post')) {
        	
        	
           	$study_material_sample=$this->request->data['study_material_sample'];
                $filePath = WWW_ROOT."img".DS."studymaterials".DS."pdf".DS;
                $filename = end(explode('.',$study_material_sample['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['study_material_sample']=$imagename;
                    move_uploaded_file($study_material_sample['tmp_name'],$filePath.$imagename);
                    
                }
            
            $study_material_full=$this->request->data['study_material_full'];
                $filePath = WWW_ROOT."img".DS."studymaterials".DS."pdf".DS;
                $filename = end(explode('.',$study_material_full['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['study_material_full']=$imagename;
                    move_uploaded_file($study_material_full['tmp_name'],$filePath.$imagename); 
                }
            $study_material_image=$this->request->data['study_material_image'];
                $filePath = WWW_ROOT."img".DS."studymaterials".DS;
                $filename = end(explode('.',$study_material_image['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['study_material_image']=$imagename;
                    move_uploaded_file($study_material_image['tmp_name'],$filePath.$imagename); 
                }
             
                $this->request->data['member_id']=1;
                $this->request->data['parents_id']=1;
            $StudyMaterials = $this->StudyMaterials->patchEntity($StudyMaterials, $this->request->data);
            if ($this->StudyMaterials->save($StudyMaterials)) {
                $this->Flash->success(__('Your Study Materials has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Study Materials.'));
        }

        $Class=$this->StudyMaterials->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $this->set(compact('StudyMaterials'));
        $this->set('_serialize', ['StudyMaterials']);			
	}
	public function view($id=null) 
	{
		$this->viewBuilder()->layout('admin');
		 $StudyMaterials = $this->StudyMaterials->get($id, [
            'contain' => ['Class']
        ]);
        $this->set('StudyMaterials', $StudyMaterials);
        $this->set('_serialize', ['StudyMaterials']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$StudyMaterials = $this->StudyMaterials->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	
           	$study_material_sample=$this->request->data['study_material_sample'];
                $filePath = WWW_ROOT."img".DS."studymaterials".DS."pdf".DS;
                $filename = end(explode('.',$study_material_sample['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['study_material_sample']=$imagename;
                    move_uploaded_file($study_material_sample['tmp_name'],$filePath.$imagename);
                    
                }
                
            
            $study_material_full=$this->request->data['study_material_full'];
                $filePath = WWW_ROOT."img".DS."studymaterials".DS."pdf".DS;
                $filename = end(explode('.',$study_material_full['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['study_material_full']=$imagename;
                    move_uploaded_file($study_material_full['tmp_name'],$filePath.$imagename); 
                }
            $study_material_image=$this->request->data['study_material_image'];
                $filePath = WWW_ROOT."img".DS."studymaterials".DS;
                $filename = end(explode('.',$study_material_image['name']));
                $imagename = 'PDF_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['study_material_image']=$imagename;
                    move_uploaded_file($study_material_image['tmp_name'],$filePath.$imagename); 
                }
                            
            $StudyMaterials = $this->StudyMaterials->patchEntity($StudyMaterials, $this->request->data);
            if ($this->StudyMaterials->save($StudyMaterials)) {
                $this->Flash->success(__('The Study Materials has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Study Materials could not be Update. Please, try again.'));
            }
        }
        $Class=$this->StudyMaterials->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $this->set(compact('StudyMaterials'));
        $this->set('_serialize', ['StudyMaterials']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $StudyMaterials = $this->StudyMaterials->get($id);
        if ($this->StudyMaterials->delete($StudyMaterials)) {
            $this->Flash->success(__('The Study Materials has been deleted.'));
        } else {
            $this->Flash->error(__('The Study Materials could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);


	}
}