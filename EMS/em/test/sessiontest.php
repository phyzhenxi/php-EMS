<?php
Session_start();
header("Content-type:text/html;charset=utf-8");
//$_SESSION["name"]= "这是一个session案例";
echo $_SESSION["sessionCode"];
