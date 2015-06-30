<?php

if(count($this->getArgs())>0){

	die('404');

}
$this->view('index');