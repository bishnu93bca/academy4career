<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class VisitorsDairysController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$VisitorsDairys=$this->VisitorsDairys->find('all');
		$this->set('VisitorsDairys',$VisitorsDairys);
	}
    public function visitorsDairysList()
    {

    } 
	public function add()
	{
		$this->viewBuilder()->layout('admin');
		$VisitorsDairys = $this->VisitorsDairys->newEntity();
        if ($this->request->is('post')) {
            $VisitorsDairys = $this->VisitorsDairys->patchEntity($VisitorsDairys, $this->request->data);
            if ($this->VisitorsDairys->save($VisitorsDairys)) {
                $this->Flash->success(__('Your Visitors Dairy has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your Visitors Dairy.'));
        }
        $this->set(compact('VisitorsDairys'));
        $this->set('_serialize', ['VisitorsDairys']);			
	}
	public function view($id=null)
	{
		$this->viewBuilder()->layout('admin');
		 $VisitorsDairys = $this->VisitorsDairys->get($id, [
            'contain' => []
        ]);
        $this->set('VisitorsDairys', $VisitorsDairys);
        $this->set('_serialize', ['VisitorsDairys']);

	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$VisitorsDairys = $this->VisitorsDairys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $VisitorsDairys = $this->VisitorsDairys->patchEntity($VisitorsDairys, $this->request->data);
            if ($this->VisitorsDairys->save($VisitorsDairys)) {
                $this->Flash->success(__('The Visitors Dairy has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Visitors Dairy could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('VisitorsDairys'));
        $this->set('_serialize', ['VisitorsDairys']);


	}
	public function delete($id=null)
	{
		$this->viewBuilder()->layout('admin');
		//$this->request->allowMethod(['post', 'delete']);
        $VisitorsDairys = $this->VisitorsDairys->get($id);
        if ($this->VisitorsDairys->delete($VisitorsDairys)) {
            $this->Flash->success(__('The Visitors Dairy has been deleted.'));
        } else {
            $this->Flash->error(__('The Visitors Dairy could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
	}
}