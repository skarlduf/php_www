<?php 

// 자동으로 require 해주는 기능
//

spl_autoload-register(function($classname){

    echo $classname;
    require "../Moudule/Database/".$classname.".php";
});