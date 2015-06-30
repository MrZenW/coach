<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class COACH_Controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->benchmark->mark('GWT_START');
		if(empty($this->router->routes[".*"])){
			die('Please insert config item:" $route[\'.*\'] = $route[\'default_controller\']; ", into your router config in file config/routes.php');
		}
		// $this->radius
		// $this->db_radius = $boss->load->database('radius',true);
		// $this->db = 
	}
	public function index()
	{
		$boss = $this;
		//var_dump($this->db);die();
    	$actionFile = $this->getActionFile();
		$this->_init();
		// echo 'homepadddge';
		// var_dump($this->_buildAction(null,APPPATH.'actions','root'));
		$this->doActionFile($actionFile);
		// $action = $this->getActionFile();
		// if(!!$action){
		// 	include($action);
		// }else{
		// 	show_404();
		// }

		// var_dump($_SERVER);
		//$this->load->view('welcome_message');
	}
	private function _init(){
		
		
		$this->_application_init();
	}

	protected function _application_init(){

	}

	public function model($name,$aliasName=null,$args=null){
    	if(!!$aliasName){
    		$modelName = $aliasName;
    	}else{
			$modelName = $name.'_model';
		}
		if(!method_exists($this,$modelName)){
			$this->load->model(ucfirst($name).'_model',$modelName,$args);
		}
		return $this->$modelName;

	}

	public function view($tpl,$data=array(),$return=false){
		if(!isset($data['_site_info'])){
			$data['_site_info'] = array();
		}
		foreach ($data as $key => $value) {
			$$key = $value;
		}
		return include VIEWPATH.'/'.$tpl.'.tpl.php';
		// return $this->load->view($tpl,$data,$return);
	}

	//返回数组化后的uri
	function getUri($index=NULL){
        if($index===NULL){//获得全部参数
            return $this->_uri_array;
        }
		if($index==0){//获得原始参数
			return $this->_route_ori;
		}

        if(isset($this->_uri_array[$index-1])){
            return $this->_uri_array[$index-1];
        }else{
            return NULL;
        }	
	}

    function getRoute(){
        return $this->_route;
    }

    function getArgs($index=NULL){
        if($index===NULL){//获得全部参数
            return $this->_args;
        }
		if($index==0){//获得原始参数
			return $this->_route_ori;
		}

        if(isset($this->_args[$index-1])){
            return $this->_args[$index-1];
        }else{
            return NULL;
        }
    }
    function action($route=NULL,$base_dir=NULL,$root_name=NULL){
    	$actionFile = $this->getActionFile($route,$base_dir,$root_name);
    	$this->doActionFile($actionFile);
    }
    function doActionFile($actionFile){
    	$boss = $this;
    	if(!!$actionFile){
    		include $actionFile;
    	}else{
    		show_404();
    	}	
    }
	function getActionFile($route=NULL,$base_dir=NULL,$root_name=NULL){
		if(is_null($route))$route = $_SERVER['REQUEST_URI'];
		list($route) = explode('?',$route);
        $this->_route_ori = $this->_route = trim($route,'/');

        if(empty($root_name))$root_name = $this->config->item('action_root_name');
        if(empty($root_name))$root_name = 'root';
        // var_dump($this->config->item('action_base_dir'));die();
        if(empty($base_dir))$base_dir = $this->config->item('action_base_dir');
        if(empty($base_dir))$base_dir = APPPATH.'actions';
        
        $base_dir = realpath(rtrim($base_dir,'/'));

		$this->_uri_array = explode('/',$this->_route);
        $routeArray = explode('/',$this->_route);
        $nowRouth = $base_dir.'/'.$root_name;
        $now_arg = NULL;
		$this->_args = array();

        do{

            $tmp_ROUTE = strtolower(implode('/',$routeArray));

            $this->_route = $tmp_ROUTE;

            $tmpFilePath = $nowRouth . '/'.$tmp_ROUTE;
            $tmpFilePath = rtrim(strtolower($tmpFilePath),'/');

            if(!is_null($now_arg))array_unshift($this->_args,$now_arg);

			$tmpFilePath = realpath($tmpFilePath.'.php');
            if($now_arg{0}!='.' AND is_file($tmpFilePath)){
				if(strpos($tmpFilePath,$base_dir)!==0){//文件路径不是以base_dir里的路径开始的就返回查找不到
					return NULL;
				}
                $this->_route_file = $tmpFilePath;
                return $this->_route_file;
            }
            
        }while($now_arg = array_pop($routeArray));

        return NULL;
	}
}
