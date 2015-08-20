<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/***************************************************************************************
NAME        : Class Product Model
PURPOSE     : functions for product list queries
REVISION    : -
***************************************************************************************/

Class Product_model extends CI_Model {
    
    function getItem($product, $category, $limit, $offset) {
        $this->db->select('*');
        $this->db->from('tb_item');
        $this->db->where('product_id', $product);
        if ($category !== null) {
            $this->db->where('category_id', $category);
        }
        if ($limit > 0) {
            $this->db->limit($limit, $offset);
        }
        
        return $this->db->get();
    }
}