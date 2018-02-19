<?php

namespace App\Controller; 
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

class UsersController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
        

		$Users=$this->Users->find('all');
		$this->set('Users',$Users);
	}
    public function login($active=null)
    {
       $this->viewBuilder()->layout('login');
        if ($this->request->is('post')) {
        $session= $this->request->session();
       if($Users = $this->Users->find('all',['contain'=>['Members']])->where(['email'=>$this->request->data['email']])->andwhere(['password'=>md5($this->request->data['password'])])->andwhere(['status'=>1])->first()){
         $session->write('user',$Users);
          return $this->redirect(['controller'=>'homes','action' => 'index']);
       }elseif($Users = $this->Users->find('all')->where(['email'=>$this->request['email']])->andwhere(['password'=>md5($this->request['email'])])->first()){
        $session= $this->request->session();
        $email='Your Account  is not Active?';
        $session->write('user',$email);
        return $this->redirect(['controller'=>'homes','action'=>'index']);
       }
       $session= $this->request->session();
        $email='Invalid email address & password!';
        $session->write('user',$email);
        return $this->redirect(['controller'=>'homes','action'=>'index']);
        }
        return $this->redirect(['controller'=>'homes','action'=>'index']);
    } 
	public function register()
	{
		$this->viewBuilder()->layout('login');
		$Users = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['first_name']=$this->request->data['f_name'];
            $this->request->data['last_name']=$this->request->data['l_name'];
            $this->request->data['user_type_id']=3;
            $this->request->data['reset_pass']=md5($this->request->data['email']);
            $this->request->data['password']=md5($this->request->data['password']);
            $Users = $this->Users->patchEntity($Users, $this->request->data);
            if ($Users=$this->Users->save($Users)) {
                  $subject = "Active Code";
                    $message="<table width='100%' style='text-align:center; border:1px solid #999;'><tr><td width='80%' style='text-align:left;'><table style='color:#1d60c8;'><tr><td rowspan='3'><img src='http://trayzon.co/academy4career/img/a4.png' width='70'/></td><td><b></b></td></tr><tr><td><h3><b>ACADEMY4CAREER</b></h3></td></tr><tr><td><b></b></td></tr></table></td></tr>";
                    $message.="<tr><td colspan='2' style='padding:20px auto;'><p style='color:#1d60c8; padding:5px; font-size:15px; text-transform:uppercase;'>Active Url</td></p></tr>";
                    $message.="<tr><td colspan='2' style='padding-top:5px; font-size:17px;'><p>Request was received , use the link below to get it started.</p></td></tr>";
                    $message.="<tr><td colspan='2' style='padding-top:20px; font-size:27px;'><a style='font-size:20px; font-weight:bold; color: #fff; border:1px solid #1d60c8; padding:10px 20px; border-radius:3px; background-color:#1d60c8; text-decoration:none;' href='http://trayzon.co/academy4career/users/active/".md5($Users->email).'/'.$Users->email."' target='_blank'>Active</a></td></tr>";
                    $message.="<tr><td></td></tr></table>";

                    $headers = 'MIME-Version: 1.0' . "\r\n";
                    $headers.= "Content-type:text/html;charset=UTF-8"."\r\n";

                    $headers.= "From: Admin <info@academy4career.com>";
                    $headers.= "\r\n no-reply: Admin <info@academy4career.com>";
                    $headers.= "\r\nX-Mailer: PHP/".phpversion();

                    if(mail($Users->email,$subject,$message,$headers)){
                    $session= $this->request->session();
                    $email='Register Successfull check your Email.';
				   $session->write('user',$email);
                    return $this->redirect(['controller'=>'homes','action'=>'index']);

                    }
                    
                
                
            }else
            {
                $session= $this->request->session();
                $email='Your Email is Already Registered?';
                 $session->write('user',$email);
                
                return $this->redirect(['controller'=>'homes','action'=>'index']);
            }
        }
        $this->set(compact('Users'));
        $this->set('_serialize', ['Users']);			
	}
    public function active($time=null,$email=null)
    {
        $this->viewBuilder()->layout('login');
         if($Users = $this->Users->find('all')->where(['email'=>$email])->first()){
            $Users->status=1;
            if($this->Users->save($Users)){
                $this->set('email','Your Account  is not Active?');
                return $this->redirect(['action' => 'login','?=active']);
            }
        }
    }
    public function resetPassword()
    {
        
        $this->viewBuilder()->layout('login');
        if ($this->request->is(['post'])) {
         if($Users = $this->Users->find('all')->where(['email'=>$this->request->data['email']])->first()){
           $subject = "Reset Password";
            $message="<table width='100%' style='text-align:center; border:1px solid #999;'><tr><td width='80%' style='text-align:left;'><table style='color:#1d60c8;'><tr><td rowspan='3'><img src='http://trayzon.co/academy4career/img/a4.png' width='70'/></td><td><b></b></td></tr><tr><td><h3><b>ACADEMY4CAREER</b></h3></td></tr><tr><td><b></b></td></tr></table></td></tr>";
            $message.="<tr><td colspan='2' style='padding:20px auto;'><p style='color:#1d60c8; padding:5px; font-size:15px; text-transform:uppercase;'>Password Reset</td></p></tr>";
            $message.="<tr><td colspan='2' style='padding-top:5px; font-size:17px;'><p>Request was received to reset your account password, use the link below to get it started.</p></td></tr>";
            $message.="<tr><td colspan='2' style='padding-top:20px; font-size:27px;'><a style='font-size:20px; font-weight:bold; color: #fff; border:1px solid #1d60c8; padding:10px 20px; border-radius:3px; background-color:#1d60c8; text-decoration:none;' href='http://trayzon.co/academy4career/users/active/".md5($Users->email).'/'.$Users->email."' target='_blank'>Reset your Password</a></td></tr>";
            $message.="<tr><td colspan='2' style='padding-top:5px; font-size:17px;'><p>If you didnot request a password reset, please ignore this mail. Password can only be changed by a person who has access to this email.</p></td></tr></table>";

            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers.= "Content-type:text/html;charset=UTF-8"."\r\n";

            $headers.= "From: Admin <admin@carnamdb.com>";
            $headers.= "\r\n no-reply: Admin <admin@carnamdb.com>";
            $headers.= "\r\nX-Mailer: PHP/".phpversion();
           if(mail($Users->email,$subject,$message,$headers)){
             $this->set('action','Check your Email.');
             }
             
         }
        }
    }
	public function profile()
	{
        $AnswerTable   =   TableRegistry::get('answers_sheet');
        $Tests   =   TableRegistry::get('tests');
        $Profiles   =   TableRegistry::get('profiles');
		$User = $this->Users->find('all')->where(['email'=>$_SESSION->email])->first();
        if ($this->request->is(['patch', 'post', 'put'])) {

            // pr($this->request->data);
            // exit();
            if(!empty($this->request->data['image'])){
            $value=$this->request->data['image'];
                $filePath = WWW_ROOT."img".DS."userprofile".DS;
                $filename = end(explode('.',$value['name']));
                $imagename = 'Img_'.time().rand().'.'.$filename;
                if(pathinfo($imagename, PATHINFO_EXTENSION)){ 
                    $this->request->data['picture'] =BASE_URL.'img/userprofile/'.$imagename;
                    move_uploaded_file($value['tmp_name'],$filePath.$imagename); 
                }
            }
            $User = $this->Users->patchEntity($User, $this->request->data);
            if ($Users = $this->Users->save($User)) {
               return $this->redirect(['action' => 'profile']); 
            }
        }
    $Users = $this->Users->find('all')->where(['email'=>$_SESSION->email])->first();
    $this->set('AnswerSheet',$AnswerTable->find('all',['order'=>array('id DESC')])->where(['user_id'=>$_SESSION->id]));
        
        $this->set(compact('Users'));
        $this->set('_serialize', ['Users']);
	}
	public function edit($id=null)
	{
		$this->viewBuilder()->layout('admin');
		$Users = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $Users = $this->Users->patchEntity($Users, $this->request->data);
            if ($this->Users->save($Users)) {
                $this->Flash->success(__('The User Types has been Update.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The User Types could not be Update. Please, try again.'));
            }
        }
        $this->set(compact('Users'));
        $this->set('_serialize', ['Users']);


	}
	public function delete($id=null)
	{
		
	}
    public function resultview($id=null)
    {
      $TestSheet   =   TableRegistry::get('test_sheets'); 
      $this->set('TestSheet',$TestSheet->find('all',['contain'=>['Tests','Questions']])->where(['test_sheets.user_id'=>$_SESSION->id])->andwhere(['test_sheets.test_id'=>$id]));

    }
    public function retest($id=null)
    {
      $TestSheet   =   TableRegistry::get('test_sheets'); 
      $TestSheets=$TestSheet->find('all',['contain'=>['Tests','Questions']])->where(['test_sheets.user_id'=>$_SESSION->id])->andwhere(['test_sheets.test_id'=>$id]);
        foreach ($TestSheets as $key => $value) {
           $Test=$TestSheet->find('all')->where(['id'=>$value->id])->first(); 
           if ($TestSheet->delete($Test)) {}
        }
        return $this->redirect(['controller'=>'questions','action' => 'view',$id]);
    }
     public function logout()
    {
        $this->viewBuilder()->layout('login');
        $session= $this->request->session();
        $session->destroy('user');
        return $this->redirect(['controller'=>'homes','action' => 'index']);
        
    }
}