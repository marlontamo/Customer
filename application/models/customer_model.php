<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model {
    private $dbtable = 'customers';
	public function __construct()
	{  
		parent::__construct();
		//$this->load->database();
		//$this->load->helper('url','form');
	}
	
	Public function insert($data)
	{    
		
	    return $this->db->insert_batch($this->dbtable, $data);
		
	}
	Public function edit($id)
	{
		return $this->db->get_where($this->dbtable ,array('id'=>$id))->result();
	}
	Public function view($id)
	{
		return $this->db->get_where($this->dbtable,array('id'=>$id))->result();
	}

    public function get_user_by_id($id)

    {
    	$data = $this->db->get_where($this->dbtable,array('id'=>$id))->result();
    	return $data[0]->username;
    }
	Public function update($id,$data)
	{
        $this->db->where('id',$id);
        $this->db->update($this->dbtable, $data); 
    }
   
	Public function delete($data)
	{
	    for ($i=0; $i <count($data) ; $i++) { 
			$this->db->delete('items',array('id' => $data[$i]->id));
		}
		return true;
		
    }
    Public function destroy($id){
          $this->db->where('id', $id);
         $this->db->delete($this->dbtable);

    }
	//api for getting all store
	Public function get_data()
	{
		return $this->db->get($this->dbtable)->result();
	}
     
    //function for getting all store list
    public function get_all_store()
    {
       return $this->db->get($this->dbtable)->result();
    }
     public function get_username_by_id($id)
     {
    	$data = $this->db->get_where('users' ,array('user_id'=>$id))->result();
    	return $data[0]->username;
    }
    public function get_storename_by_id($id)
     {
    	$store = $this->db->get_where('store' ,array('store_id'=>$id))->result();
    	return $store[0]->store_name;
    }
}

