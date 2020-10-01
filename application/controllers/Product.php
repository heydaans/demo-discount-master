<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("product_model");
	}

	public function index()
	{

		$dataprod['product_list']  = $this->product_model->getProduct()->result_array();
		$this->template->load('layout/template', 'admin/product_view',$dataprod);
	}

	public function transaksi($id_product = null)
	{

		if (!isset($id_product)) 
		{
			redirect('product');
		}
		$value['dataprod']       = $this->product_model->getByid($id_product)->Row();
		if (!$value['dataprod']) 
		{
			show_404();
		}
		$this->template->load('layout/template', 'admin/transaction',$value);
	}

}

