# Coach
Coach is a ci(codeigniter) router plugins,It can allow you router mapping to files, not controler and method.

# How to use
1. Download Coach
2. open config/config.php, edit : "$config['subclass_prefix'] = 'COACH_';"
2.2. open config/routes.php, append a line code : "$route['.*'] = $route['default_controller'];"
2.3. open controllers/Welcome.php, the class's super class modify to COACH_Controller
3. go to "actions" folder, root.php is default home (also is 404 controller), if you URI is /user/info then action file is actions/root/user/info.php

# APIs
$this->view('template_file',$template_data);

$this->model('model_name'); //this functin return loaded model object value

$this->getUri(); //return request uri

$this->getArgs(1~n); //return array index value by uri use "/" explode