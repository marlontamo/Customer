<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('session','cart'));
		$this->load->helper(array('url'));
		$this->load->model('home_model','home');
		$this->load->helper('form');
		if($_SESSION['logged_in'] == null){
		 	redirect(base_url('login')); 
		 }  
		
	}

	Public function index()
	{
		$data = array(
			array(
					'id'      => 'sku_123ABC',
					'qty'     => 1,
					'price'   => 39.95,
					'name'    => 'T-Shirt',
					'options' => array('Size' => 'L', 'Color' => 'Red')
			),
			array(
					'id'      => 'sku_567ZYX',
					'qty'     => 1,
					'price'   => 9.95,
					'name'    => 'Coffee Mug'
			),
			array(
					'id'      => 'sku_965QRS',
					'qty'     => 1,
					'price'   => 29.95,
					'name'    => 'Shot Glass'
			),
			array(
				'id'      => 'sku_123ABC',
				'qty'     => 1,
				'price'   => 39.95,
				'name'    => 'T-Shirt',
				'options' => array('Size' => 'L', 'Color' => 'Red')
		),
		array(
				'id'      => 'sku_567ZYX',
				'qty'     => 1,
				'price'   => 9.95,
				'name'    => 'Coffee Mug'
		),
		array(
				'id'      => 'sku_965QRS',
				'qty'     => 1,
				'price'   => 29.95,
				'name'    => 'Shot Glass'
		)
);
	if($this->cart->insert($data)){
		echo "<a href=".base_url('view').">view cart</a>";
	}
	}
	public function view_cart(){
		$cart= $this->cart->contents();
		var_dump($cart);
		$total= $this->cart->total();
		echo "<b>total:".$total."</b>";
		$items = $this->cart->total_items();
		echo "<h1>items: ".$items."</h1>";
		echo "<a href=".base_url('index').">add items to cart</a><br/>";
		echo "<a href=".base_url('clear').">clear cart</a>";
	}
	public function clear_cart(){
		$this->cart->destroy();
		if($this->cart->total() == 0){
			echo "your cart is empty";
		}
	}

	Public function insert()
	{
		
		echo $this->home->insert();
	}
	Public function update($id)
	{
		
		echo $this->home->update($id);
	}
	Public function edit($id)
	{
		$data = $this->home->edit($id);
		echo json_encode($data);

	}
	public function delete()
	{
		$data = json_decode(file_get_contents("php://input"));   	             
		echo $this->home->delete($data);
		
	}
	Public function get_data()
	{
		$data = array();
		$data = $this->home->get_data();
		echo json_encode($data);

	}
	public function test(){
		echo "<h1>working test</h1>";
	}
    public function Add_product(){

    	 $this->load->view('user/Admin_lte_theme/Admin_lte_header');
    	  $this->load->view('user/store/Admin_lte_add_product_to_store');
    	 $this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
    	 $this->load->view('user/Admin_lte_theme/Admin_lte_footer');
    	$this->load->view('user/Admin_lte_theme/Admin_lte_rightsidebar');
    }

     public function login(){

     	 $this->load->view('user/login/Admin_lte_header');
     	 $this->load->view('user/login/Admin_lte_login_form');
     	 $this->load->view('user/login/Admin_lte_footer');
     }
     public function validate(){
     	return;
     }
     public function list_products(){
     	$this->load->view('user/login/Admin_lte_header');
		 $this->load->view('user/Admin_lte_theme/Admin_lte_main');
     	$this->load->view('user/login/Admin_lte_footer');
	 }
	//  public function template(){
	// 	$this->load->view('user/Admin_lte_theme/Admin_lte_header');
	// 	$this->load->view('user/Admin_lte_theme/Admin_lte_leftsidebar');
	// 	$this->load->view('user/Admin_lte_theme/Admin_lte_addcustomerform');
	// 	$this->load->view('user/Admin_lte_theme/Admin_lte_rightsidebar');
	// 	$this->load->view('user/Admin_lte_theme/Admin_lte_footer');
	//  }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
	


/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>