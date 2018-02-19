<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class ScholarShipsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$ScholarShips=$this->ScholarShips->find('all', [
            'contain' => ['Levels','Disciplines']
        ]);
		$this->set('ScholarShips',$ScholarShips);
	}  
    public function ScholarShipsList()
    {
       
        
        if (empty($this->request->data)) {
            $ScholarShips=$this->ScholarShips->find('all',['order'=>array('scholarship_id DESC'),
            'contain' => ['Levels','Disciplines'],]);
        }elseif(!empty($this->request->data['year'])&&!empty($this->request->data['level_id'])&&!empty($this->request->data['discipline_id'])){
            $ScholarShips=$this->ScholarShips->find('all', ['order'=>array('scholarship_id DESC'),'contain' => ['Levels','Disciplines']
        ])->where(['scholarship_year'=>$this->request->data['year']])->andwhere(['ScholarShips.level_id'=>$this->request->data['level_id']])->andwhere(['ScholarShips.discipline_id'=>$this->request->data['discipline_id']]);
        }elseif(!empty($this->request->data['year'])&&!empty($this->request->data['level_id'])){
          $ScholarShips=$this->ScholarShips->find('all', ['order'=>array('scholarship_id DESC'),'contain' => ['Levels','Disciplines']
        ])->where(['scholarship_year'=>$this->request->data['year']])->andwhere(['ScholarShips.level_id'=>$this->request->data['level_id']]);  
        }elseif (!empty($this->request->data['year'])) {
           $ScholarShips=$this->ScholarShips->find('all', ['order'=>array('scholarship_id DESC'),'contain' => ['Levels','Disciplines']
        ])->where(['scholarship_year'=>$this->request->data['year']]);
        }
        $Levels=$this->ScholarShips->Levels->find('all')->select(['level_id','level_name']);
        
        $this->set('Levels',$Levels);
        $this->set('ScholarShips',$ScholarShips);
    } 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$ScholarShips = $this->ScholarShips->newEntity();
        if ($this->request->is('post')) {
        	$value=$this->request->data['scholarship_image'];
                $filePath = WWW_ROOT."img".DS."scholarships".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['scholarship_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
          
            $ScholarShips = $this->ScholarShips->patchEntity($ScholarShips, $this->request->data);
            if ($this->ScholarShips->save($ScholarShips)) {
                $this->Flash->success(__('Your Scholarships has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Scholarships.'));
        }
        $Levels=$this->ScholarShips->Levels->find('all')->select(['level_id','level_name']);
        $Disciplines=$this->ScholarShips->Disciplines->find('all')->select(['discipline_id','discipline_name']);
        $this->set('Levels',$Levels);
        $this->set('Disciplines',$Disciplines);
        $this->set(compact('ScholarShips'));
        $this->set('_serialize', ['ScholarShips']);			
	}
    public function readmore($id=null)
    {
         $ScholarShips = $this->ScholarShips->get($id, [
            'contain' => ['Levels','Disciplines']
        ]);
        $this->set('ScholarShips', $ScholarShips);
        $this->set('_serialize', ['ScholarShips']);

    }
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $ScholarShips = $this->ScholarShips->get($id, [
            'contain' => ['Levels','Disciplines']
        ]);
        $this->set('ScholarShips', $ScholarShips);
        $this->set('_serialize', ['ScholarShips']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$ScholarShips = $this->ScholarShips->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
           
        	$value=$this->request->data['scholarship_image'];
                $filePath = WWW_ROOT."img".DS."scholarships".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['scholarship_image'] =$imagename; 
                }else{
                  $this->request->data['scholarship_image']=$ScholarShips->scholarship_image;  
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
           
            
            $ScholarShips = $this->ScholarShips->patchEntity($ScholarShips, $this->request->data);
            if ($this->ScholarShips->save($ScholarShips)) {
                $this->Flash->success(__('The Scholarships has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Scholarships could not be Update. Please, try again.'));
            }
        }
        $Levels=$this->ScholarShips->Levels->find('all')->select(['level_id','level_name']);
        $Disciplines=$this->ScholarShips->Disciplines->find('all')->select(['discipline_id','discipline_name']);
        $this->set('Levels',$Levels);
        $this->set('Disciplines',$Disciplines);
        $this->set(compact('ScholarShips'));
        $this->set('_serialize', ['ScholarShips']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $ScholarShips = $this->ScholarShips->get($id);
        if ($this->ScholarShips->delete($ScholarShips)) {
            $this->Flash->success(__('The Scholarships has been deleted.'));
        } else {
            $this->Flash->error(__('The Scholarships could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}