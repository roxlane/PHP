<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {


	public function index()
	{
		$this->load->view('kayitol');
	}
	public function registerdata(){

		if($this->input->method()=="post"){
			$this->form_validation->set_rules('kadi','kullanıcı adınız', 'trim|required');
			$this->form_validation->set_rules('sifre','şifreniz', 'trim|required');
			$this->form_validation->set_rules('eposta','eposta adresiniz', 'trim|required|is_unique[uyeler.eposta]|valid_email');

			if($this->form_validation->run()==false){
				echo validation_errors();
			}else{
				$data=array(
					"kadi"=>strip_tags(trim($this->input->post('kadi',true))),
					"eposta"=>strip_tags(trim($this->input->post('eposta',true))),
					"sifre"=>sha1(md5(strip_tags(trim($this->input->post('sifre',true)))))
				);
				$ekle=$this->common_model->addata('uyeler',$data);
				if($ekle){
					echo "üyelik oluşturuldu";
					redirect('login');
				}else {echo "hata oluştu";}



					}
               }
		}

}
