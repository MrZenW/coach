# Coach

**Coach is a ci(codeigniter) router plugins,It can allow you router mapping to files, not controller class and method.**

# How to use
1. **Download Coach**
2. **Modify config**
    * open file "config/config.php", edit : "$config['subclass_prefix'] = 'COACH_';"
    
	* open file "config/routes.php", append a line of code to the end of the file : "$route['.*'] = $route['default_controller'];"
	
	* open controllers/Welcome.php, the superclass of controller class changed to COACH_Controller
3. **Write action file** 
    * Go to "actions" folder,  inside the root.php is default home (is also 404 controller), if you request URI is "/user/info" then action file is "actions/root/user/info.php"

# APIs
####$this->view('template_file',$template_data);

####$this->model('model_name'); 
	this functin return loaded model object value

####$this->getUri(); 
	return request uri

####$this->getArgs(1~n); 
	return array index value by uri use "/" explode