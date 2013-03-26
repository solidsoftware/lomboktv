<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @class  Security_auth
 * @desc   Class to handle security module
 * @author putera kahfi
 * @depend Model_core_user
 */
class Solid_auth{

	private $_ci ;


	function __construct(){
		$this->_ci = &get_instance();
		$this->_ci->load->model('core_user/model_core_user');
	}


	/**
	 * method login
	 * @access public
	 * @return mixed
	 */
	public function login($username, $password){
		$login_data = $this->_ci->model_core_user->get_login_info($username, $password);
		var_dump($login_data);
	}

	public function logout(){

	}


}
