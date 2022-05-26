<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

public function index(){

    $this->load->view('login_view');

}
public function logindata()
{
	if ($this->input->method() == "post") {

		$this->form_validation->set_rules('eposta', 'eposta adresiniz', 'trim|required|valid_email');
		$this->form_validation->set_rules('sifre', 'şifreniz', 'trim|required');


		if ($this->form_validation->run() == false) {

			echo validation_errors();
		}else{

			$query = $this ->common_model->get([
				'eposta'=>strip_tags(trim($this->input->post('eposta', true))),
				'sifre'=>sha1(md5(strip_tags(trim($this->input->post('sifre',true)))))
			],'uyeler');

			if ($query){
@
				$this->session->set_userdata([
					'oturumac' => true,
					'id' => $query->id,
					'kadi' => $query->kadi,
					'eposta' => $query->eposta,
				]);

				redirect(base_url('panel'));

			}else{
				echo "Bilgileri Yanlış Girdiniz !";
			}

		}

	}

}






}
