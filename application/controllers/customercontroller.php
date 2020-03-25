<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CustomerController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('session'));
        //$this->load->helper('url', 'form');
        $this->load->model('home_model','home');
        $this->load->model('Customer_model', 'customer');
		if($_SESSION['logged_in'] == null){
		 	redirect(base_url('login')); 
		 }  
		
	}

	public function add_customer(){
                 $config['upload_path']  = './uploads/customers';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 2000;
                $config['max_width'] = 1500;
                $config['max_height'] = 1500;

           $this->load->library('upload', $config);

           if( $this->upload->do_upload('image')){
            $file = $this->upload->data('file_name');  
            
            echo "<img src=".base_url('uploads/customers/').$file." width=100>";
          }else{
            $error = array('error' => $this->upload->display_errors());

             var_dump( $error);
          }
                
                
        $data['customer_info'] = array(
        'lastname' => $this->input->post('lastname'),
        'firstname' => $this->input->post('firstname'),
        'email' => $this->input->post('email'),
        'city' => $this->input->post('city'),
        'country' => $this->input->post('country'),
        'image'=> $this->upload->data('file_name')

        );
        //var_dump($data);
        $this->customer->insert($data);
    }
    public function customeredit($id){
        //$id= 2;
        $edit['customer_edit'] = $this->customer->edit($id);
         var_dump($edit);
    }
    public function customersview(){
        $customers['customers']= $this->customer->get_data();
        $this->load->view('user/Admin_lte_theme/Admin_lte_header');
		$this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
		$this->load->view('Customer/customer_list',$customers);
		$this->load->view('user/Admin_lte_theme/Admin_lte_rightsidebar');
		$this->load->view('user/Admin_lte_theme/Admin_lte_footer');

    }
    public function customer_view($id){
        $customer['customer'] = $this->customer->edit($id);
        $this->load->view('user/Admin_lte_theme/Admin_lte_header');
		$this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
		$this->load->view('Customer/customer_profile',$customer);
		$this->load->view('user/Admin_lte_theme/Admin_lte_rightsidebar');
		$this->load->view('user/Admin_lte_theme/Admin_lte_footer');
    }
    public function modify($id= null)
    {     if($id ==null){
            return;
          }else{
          $data['customer'] = $this->customer->view($id);
          $this->load->view('user/Admin_lte_theme/Admin_lte_header');
		  $this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
		  $this->load->view('Customer/customer_edit_profile',$data);
		  $this->load->view('user/Admin_lte_theme/Admin_lte_rightsidebar');
		  $this->load->view('user/Admin_lte_theme/Admin_lte_footer');
          }
    } 
    public function update_customer()
    {
        $data['firstname'] = $this->input->post('firstname');
		$data['lastname'] = $this->input->post('lastname');
        $data['email'] = $this->input->post('email');
        $data['city'] = $this->input->post('city');
        $data['country'] = $this->input->post('country');
         $hidden_id = $this->input->post('cust_id');
        $this->customer->update($hidden_id,$data);
    } 
    
     
	 public function template(){
		$this->load->view('user/Admin_lte_theme/Admin_lte_header');
		$this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
		$this->load->view('user/Admin_lte_theme/Admin_lte_addcustomerform');
		$this->load->view('user/Admin_lte_theme/Admin_lte_rightsidebar');
		$this->load->view('user/Admin_lte_theme/Admin_lte_footer');
     }
     public function cust_add_edit_page($id){
        // echo $id;
        $last = $this->uri->total_segments();
        $action = $this->uri->segment($last);
        $customer['customers'] = $this->customer->edit($id);
         if($action ==="insert"){
            $this->load->view('user/Admin_lte_theme/Admin_lte_header');
            $this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
            $this->load->view('user/Admin_lte_theme/Admin_lte_addcustomerform');
            $this->load->view('user/Admin_lte_theme/Admin_lte_rightsidebar');
		     $this->load->view('user/Admin_lte_theme/Admin_lte_footer');
              
         }elseif($action ==="edit"){
            $this->load->view('user/Admin_lte_theme/Admin_lte_header');
            $this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
           $this->load->view('Customer/customer_edit_form',$customer);
            $this->load->view('user/Admin_lte_theme/Admin_lte_rightsidebar');
		    $this->load->view('user/Admin_lte_theme/Admin_lte_footer');
         }
     }
    
    public function destroy($id)
    {
        $this->customer->destroy($id);
    }
    public function profile($id)
    {   $customer['customer'] = $this->customer->edit($id);
        // //if($customer[0]== null){
        //     echo "<h1>no record found</h1>";
        // }
            $this->load->view('user/Admin_lte_theme/Admin_lte_header');
            $this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
            $this->load->view('Customer/user_profile', $customer);
            //echo "<h1>".$id."</h1>";
            $this->load->view('user/Admin_lte_theme/Admin_lte_rightsidebar');
		     $this->load->view('user/Admin_lte_theme/Admin_lte_footer');
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
	


/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>