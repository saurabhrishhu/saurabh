<?php
class trick
{
      function doit()
      {
                echo __FUNCTION__;
      }
      function doitagain()
      {
                echo __METHOD__;
      }
}
$obj=new trick();
echo " Name of the function returned by ( __FUNCTION__ ) ==>      ";
$obj->doit();
//output will be ----  doit 
echo "<br/>";
echo " Name of the function and class  returned by ( __METHOD__ ) ==>   ";
$obj->doitagain();
//output will be ----- trick::doitagain

echo "<br/><br/><br/>";
echo "Return full directory path ( __DIR__ ) <br/><br/>";
echo __DIR__ ;
echo "<br/><br/><br/>";

echo "<br/><br/><br/>";
echo "Return full file path ( __FILE__ ) <br/><br/>";
echo __FILE__ ;
echo "<br/><br/><br/>";

echo "<br/><br/><br/>";
echo "Return the line of code  ( __LINE__ ) <br/><br/>";
echo __LINE__ ;
echo "<br/><br/><br/>";

class clsusers{
	function demo(){
			echo __CLASS__ ;
	}
	 
	
}
$obja  =new clsusers;

echo "<br/><br/><br/>";
	echo "Return the   class name ( __CLASS__ ) <br/><br/>";
	$obja->demo();
echo "<br/><br/><br/>";		

echo "<br/><br/><br/>";
echo "same as __DIR__   dirname(__FILE__) <br/><br/>";
echo dirname(__FILE__) ;
echo "<br/><br/><br/>";


?>