<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class CareerReleventArticlesController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$articles=$this->CareerReleventArticles->find('all',['order'=>array('article_id DESC')]);
		$this->set('articles',$articles);


	} 
     public function careerReleventArticlesList()
    {
        $CareerReleventArticles=$this->CareerReleventArticles->find('all',['order'=>array('article_id DESC')]);
        $this->set('CareerReleventArticles',$CareerReleventArticles);
    }
     public function readmore($id=null)
    {
        $articles = $this->CareerReleventArticles->get($id, [
            'contain' => []
        ]);
        $this->set('articles', $articles);
        $this->set('_serialize', ['articles']);
    }
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$articles = $this->CareerReleventArticles->newEntity();
        if ($this->request->is('post')) {
        	$value=$this->request->data['article_image'];
                $filePath = WWW_ROOT."img".DS."articles".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['article_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            $articles = $this->CareerReleventArticles->patchEntity($articles, $this->request->data);
            if ($this->CareerReleventArticles->save($articles)) {
                $this->Flash->success(__('Your Career Relevent Articles has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Career Relevent Articles.'));
        }
        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $articles = $this->CareerReleventArticles->get($id, [
            'contain' => []
        ]);
        $this->set('articles', $articles);
        $this->set('_serialize', ['articles']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$articles = $this->CareerReleventArticles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
        	$value=$this->request->data['article_image'];
                $filePath = WWW_ROOT."img".DS."articles".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['article_image'] =$imagename; 
                }else{
                     $this->request->data['article_image'] =$articles->article_image;
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            
            $articles = $this->CareerReleventArticles->patchEntity($articles, $this->request->data);
            if ($this->CareerReleventArticles->save($articles)) {
                $this->Flash->success(__('The A4C Magazines has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The A4C Magazines could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $career = $this->CareerReleventArticles->get($id);
        if ($this->CareerReleventArticles->delete($career)) {
            $this->Flash->success(__('The Career Relevent Articles has been deleted.'));
        } else {
            $this->Flash->error(__('The Career Relevent Articles could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);


	}
}