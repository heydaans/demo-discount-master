<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getProduct()
    {
        $this->db->select('a.id_product,a.sku,a.product_name,a.price,b.id_disc,b.qty_disc,b.minimal_product');
        $this->db->from('master_product a');
        $this->db->join('master_discount b', 'a.id_product=b.id_product','left');

        $query = $this->db->get();
        return $query;
    }

    public function getByid($id_product)
    {
        $this->db->select('a.*,b.id_disc,b.qty_disc,b.minimal_product');
        $this->db->from('master_product a');
        $this->db->join('master_discount b', 'a.id_product=b.id_product','left');
        $this->db->where('a.id_product', $id_product);

        $query = $this->db->get();
        return $query;
    }

}
