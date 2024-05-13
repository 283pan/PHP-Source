<?php 
class Home extends Controller{
    function displayIntroduction(){
        echo "Hello";
    }

    function displayUser(){
        echo "Wecome N";
    }
    function displayIndex(){
    $this->view("master", ["Page"=>"home"]);
}
}
?>