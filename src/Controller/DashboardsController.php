<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

class DashboardsController extends AppController
{
	public function index()
	{
		$this->viewBuilder()->layout('admin');
		$UserTable   =   TableRegistry::get('users');
		$BlogsTable   =   TableRegistry::get('blogs');
		$TestsTable   =   TableRegistry::get('tests');
		$A4cmagazineTable   =   TableRegistry::get('a4cmagazine');
		$EntranceTable   =   TableRegistry::get('entrance');
		$ImportantTable   =   TableRegistry::get('important_links');
		$ScholarshipTable   =   TableRegistry::get('scholarship');
		$QuotesTable   =   TableRegistry::get('quotes_of_the_day');
		$NotificationsTable   =   TableRegistry::get('notifications');
		$TestimonialsTable   =   TableRegistry::get('testimonials');
		$this->set('Notifications',$NotificationsTable->find('all')->count('*'));
		$this->set('Users',$UserTable->find('all')->count('*'));
		$this->set('Quotes',$QuotesTable->find('all')->count('*'));
		$this->set('Scholarship',$ScholarshipTable->find('all')->count('*'));
		$this->set('Entrance',$EntranceTable->find('all')->count('*'));
		$this->set('Blogs',$BlogsTable->find('all')->count('*'));
		$this->set('Important',$ImportantTable->find('all')->count('*'));
		$this->set('Tests',$TestsTable->find('all')->count('*'));
		$this->set('A4cmagazine',$A4cmagazineTable->find('all')->count('*'));
		$this->set('Testimonials',$TestimonialsTable->find('all')->count('*'));
		$this->set('Members',$UserTable->find('all')->where(['plan_id'=>true])->count());
		



	}
}