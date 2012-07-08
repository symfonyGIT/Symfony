<?php
class HelloController extends AppController{
function index(){
$this->set( 'test', "Hello World!");
}
}
?>