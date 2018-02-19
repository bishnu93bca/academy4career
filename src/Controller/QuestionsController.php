<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class QuestionsController extends AppController
{
	public function index()
	{
	$this->viewBuilder()->layout('admin');
	$Questions=$this->Questions->find('all',['contain'=>['Tests']]);
		$this->set('Questions',$Questions);

	}
	public function add()
	{

		$this->viewBuilder()->layout('ajax');
		$Questions=$this->Questions->newEntity();
		 if ($this->request->is('post')) {
		$file = $this->request->data['upload_file'];
		$file=$file['tmp_name'];
		$handle=fopen($file,'r');
		while ($data=fgetcsv($handle)) {
			
			$array[]=array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5]);
		}
 		fclose($handle);
 		$qustion_json=json_encode($array);
 		$Questions->name=$qustion_json;
 		 if ($this->Questions->save($Questions)) {
 		}

 	}
	}
	public function view($id=null)
	{
		$Questions=$this->Questions->find('all')->where(['id'=>$id])->first();
		$this->set('Questions',$Questions);		
	}

	public function results()
	{
			$TestSheets   =   TableRegistry::get('test_sheets');
			$Results=$TestSheets->find('all',['contain'=>['Questions','Tests']])->where(['test_sheets.user_id'=>$_SESSION->id]);
			$this->set('Results',$Results);

	}
	public function ajax()
	{
		$this->viewBuilder()->layout('ajax');
		return $this->redirect(['action' => 'results']);	

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Questions = $this->Questions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $Questions = $this->Questions->patchEntity($Questions, $this->request->data);
            if ($Questions=$this->Questions->save($Questions)) {

                $this->Flash->success(__('Your Questions has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Questions.'));
        }


        $this->set('Tests',$this->Questions->Tests->find('all')->select(['id','title']));
        $this->set(compact('Questions'));
        $this->set('_serialize', ['Questions']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');


	}
}