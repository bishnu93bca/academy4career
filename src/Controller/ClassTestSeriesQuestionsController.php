<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class ClassTestSeriesQuestionsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$ClassTestSeriesQuestions=$this->ClassTestSeriesQuestions->find('all', [
            'contain' => ['Class','Subjects']
        ]);
		$this->set('ClassTestSeriesQuestions',$ClassTestSeriesQuestions);
	} 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$ClassTestSeriesQuestions = $this->ClassTestSeriesQuestions->newEntity();
        if ($this->request->is('post')) {
        	
            $ClassTestSeriesQuestions = $this->ClassTestSeriesQuestions->patchEntity($ClassTestSeriesQuestions, $this->request->data);
            if ($this->ClassTestSeriesQuestions->save($ClassTestSeriesQuestions)) {
                $this->Flash->success(__('Your Class Test Series Questions has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Class Test Series Questions.'));
        }
        $Class=$this->ClassTestSeriesQuestions->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $this->set(compact('ClassTestSeriesQuestions'));
        $this->set('_serialize', ['ClassTestSeriesQuestions']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $ClassTestSeriesQuestions = $this->ClassTestSeriesQuestions->get($id, [
            'contain' => ['Class','Subjects']
        ]);
        $this->set('ClassTestSeriesQuestions', $ClassTestSeriesQuestions);
        $this->set('_serialize', ['ClassTestSeriesQuestions']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$ClassTestSeriesQuestions = $this->ClassTestSeriesQuestions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ClassTestSeriesQuestions = $this->ClassTestSeriesQuestions->patchEntity($ClassTestSeriesQuestions, $this->request->data);
            if ($this->ClassTestSeriesQuestions->save($ClassTestSeriesQuestions)) {
                $this->Flash->success(__('The Class Test Series Questions has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Class Test Series Questions could not be Update. Please, try again.'));
            }
        }
        $Class=$this->ClassTestSeriesQuestions->Class->find('all')->select(['class_id','class_name']);
        $this->set('Class',$Class);
        $this->set(compact('ClassTestSeriesQuestions'));
        $this->set('_serialize', ['ClassTestSeriesQuestions']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $ClassTestSeriesQuestions = $this->ClassTestSeriesQuestions->get($id);
        if ($this->ClassTestSeriesQuestions->delete($ClassTestSeriesQuestions)) {
            $this->Flash->success(__('The Class Test Series Questions has been deleted.'));
        } else {
            $this->Flash->error(__('The Class Test Series Questions could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}