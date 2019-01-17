<?php

public function index()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$randcap  = $this->input->post('randcaptcha');
		$capthcha = $this->input->post('captcha');
		if($randcap != $capthcha){
			$dataa['cpt']=$this->mmenu->generatecapta();
			$this->load->view('login',$dataa);
		}else{
			$hasil= $this->mmenu->validate($username,$password);
			if($hasil==true){
				$this->dashboard();
			}else{
				$dataa['cpt']=$this->mmenu->generatecapta();
				$this->load->view('login',$dataa);
			}
		}
	}
	
?>