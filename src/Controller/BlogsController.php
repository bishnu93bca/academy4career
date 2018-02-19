<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;
 
class BlogsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$blogs=$this->Blogs->find('all',['order'=>array('post_id DESC')]);
		$this->set('blogs',$blogs);
	} 
    public function blogList()
    {
        $Blogs=$this->Blogs->find('all',['order'=>array('post_id DESC')]);
        $this->set('Blogs',$Blogs);
    }
    public function readmore($id=null)
    {
        $CommentsTable   =   TableRegistry::get('comments');
         $Blogs = $this->Blogs->get($id, [
            'contain' => []
        ]);
         $Comments=$CommentsTable->find('all',['order'=>array('comment_id DESC')])->where(['post_id'=>$id]);
         $this->set('Comments',$Comments);
        $this->set('Blogs', $Blogs);
        $this->set('_serialize', ['Blogs']);
    } 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$blogs = $this->Blogs->newEntity();
        if ($this->request->is('post')) {
            $value=$this->request->data['post_image'];
                $filePath = WWW_ROOT."img".DS."blogs".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['post_image'] =$imagename; 
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
        	$this->request->data['user_id']=1;
            $blogs = $this->Blogs->patchEntity($blogs, $this->request->data);
            if ($this->Blogs->save($blogs)) {
                $this->Flash->success(__('Your Blogs has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Blogs.'));
        }
        $this->set(compact('blogs'));
        $this->set('_serialize', ['blogs']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $blogs = $this->Blogs->get($id, [
            'contain' => []
        ]);
        $this->set('blogs', $blogs);
        $this->set('_serialize', ['blogs']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$blogs = $this->Blogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $value=$this->request->data['post_image'];
                $filePath = WWW_ROOT."img".DS."blogs".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['post_image'] =$imagename; 
                }else{
                   $this->request->data['post_image']=$blogs->post_image;
                }
                move_uploaded_file($value['tmp_name'],$filePath.$imagename);
            $blogs = $this->Blogs->patchEntity($blogs, $this->request->data);
            if ($this->Blogs->save($blogs)) {
                $this->Flash->success(__('The A4C blogs has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Blogs could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('blogs'));
        $this->set('_serialize', ['blogs']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $Blogs = $this->Blogs->get($id);
        if ($this->Blogs->delete($Blogs)) {
            $this->Flash->success(__('The Blogs has been deleted.'));
        } else {
            $this->Flash->error(__('The Blogs could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}