<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

	public function index()
	{
		$this->load->model("chart_model");
		$data["ch_laki"] = $this->chart_model->getJmlJenis("0");
		$data["ch_pr"] = $this->chart_model->getJmlJenis("1");
		$data["ch_ct"] = $this->chart_model->getMhsCuti("0");
		$data["ch_all"] = $this->chart_model->getJmlMhs();
		// $data["pr_laki"] = $this->chart_model->getPresentase("0");
		// $data["pr_prmp"] = $this->chart_model->getPresentase("1");
		$this->load->view('charts',$data);
	}
}