# Coach

**Coach is a ci(codeigniter) router plugins,It can allow you router mapping to files, not controller class and method.**

# How to use
1. **Download Coach**
2. **Modify config**
    1. open file "config/config.php", edit : 
	    >**$config['subclass_prefix'] = 'COACH_';**
    
	2. open file "config/routes.php", append a line of code to the end of the file : 
		>**$route['.*'] = $route['default_controller'];**
	
	3. open controllers/Welcome.php, the superclass of controller class changed to **COACH_Controller**
3. **Write action file** 
    * Go to "actions" folder,  inside the root.php is default home (is also 404 controller), if you request URI is "/user/info" then action file is "actions/root/user/info.php"

# APIs

#### _application_init function
>The function is empty at coach, but subclass (e.g. Welcome controller) can to realize it.
>each http request will do call the function to initialization system, so you can write code in the function do your want do some jobs

####$this->view('template_file',$template_data);
>**!:This is coach's template render function, it isn't ci's one.**

####$this->model('model_name'); 
>This function return "$ci->load->model" loaded's model object

####$this->getUri(); 
>This function return request uri

####$this->getArgs(1~n); 
>This function return array index value by uri use "/" explode
