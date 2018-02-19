<?php

namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

class HomesController extends AppController
{
	public function index()
	{
		$StudyMaterials   =   TableRegistry::get('study_material');
		$Testimonials   =   TableRegistry::get('testimonials');
       	$StudyMaterials = $StudyMaterials->find('all',['limit'=>6,'order'=>array('study_material_id DESC')]);
       	$Testimonials = $Testimonials->find('all',['limit'=>3,'order'=>array('testimonial_id DESC')]);
       	$this->set('StudyMaterials',$StudyMaterials);
       	$this->set('Testimonials',$Testimonials);
	}
	public function policy()
	{


	}
}