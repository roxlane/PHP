<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class panel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('oturumac')){
			redirect(base_url());
		}
	}


	public function index(){
		$viewdata=array(
			"uyeler"=>$this->common_model->getAll([],'uyeler')
		);

		$this->load->view('panel',$viewdata);
	}

	public function listelesil(){
		$viewdata=array(
			"uyeler"=>$this->common_model->getAll([],'uyeler')
		);
		$this->load->view('cokluverisil_view',$viewdata);
	}

	public function listelesildata(){
		if($this->input->method()=="post"){

			$sil=$this->input->post('üye');
			$birlestir = implode(',',$sil);
			$this->db->query("DELETE FROM uyeler WHERE id IN($birlestir)");


			if($sil){
				redirect('panel');
			}
			else{
				echo "hata";
			}

		}
	}




	public function registerdata(){

		$viewdata=array(
			"uyeler"=>$this->common_model->getAll([],'uyeler')
		);
		$this->load->view('veriekle',$viewdata);

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
					redirect('panel');

				}else {echo "hata oluştu";}



			}
		}
	}







	public function listeleduzenle(){
		$viewdata=array(
			"uyeler"=>$this->common_model->getAll([],'uyeler')
		);
		$this->load->view('cokluveriduzenle_view',$viewdata);
	}

	public function listeleduzenledata(){
		if($this->input->method()=="post"){
			$viewdata=array(
				"duzenlenenler"=>$this->db->where_in('id',$this->input->post('kullanici[]'))->get('uyeler')->result()

			);
			$this->load->view('cokluduzenleformu_view',$viewdata);
		}
	}
	public function listeleduzenledb(){
		if($this->input->method()=="post"){
			$veriid=$this->input->post('id',true);
			$kadi=$this->input->post('kadi',true);
			$eposta=$this->input->post('eposta',true);
			$sifre=$this->input->post('sifre',true);


			for($i=0; $i<count(array($veriid));$i++){
				$guncelle=$this->Common_model->update(['id'=>$veriid[$i],'kadi'=>$kadi[$i],'eposta'=>$eposta[$i],'sifre'=>$sifre[$i]],'uyeler');
			}
			if($guncelle){
				echo "secilen veriler güncellendi";
				redirect('panel');
			}else{
				echo "hata";
			}

		}

	}
	public function cikis(){
		session_destroy();
		redirect('login');
	}




}
