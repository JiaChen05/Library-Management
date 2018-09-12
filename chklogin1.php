<?php
session_start();
$A_name=$_POST[username];          //½ÓÊÕ±íµ¥Ìá½»µÄÓÃ»§Ãû
$A_pwd=$_POST[userkey];            //½ÓÊÕ±íµ¥Ìá½»µÄÃÜÂë

class chkinput{                //¶¨ÒåÀà
   var $name; 
   var $pwd;

   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput(){
     include("conn/conn.php");   		  //Á¬½ÓÊý¾ÝÔ´    
     $sql=mysql_query("select * from user where name='".$this->name."' and pwd='".$this->pwd."'",$conn);
     $info=mysql_fetch_array($sql);       //¼ìË÷¹ÜÀíÔ±Ãû³ÆºÍÃÜÂëÊÇ·ñÕýÈ·
     if($info==false){                    //
          echo "<script language='javascript'>alert('sorry!!');history.back();</script>";
          exit;
       }
      else{                              
          echo "<script>alert('¹ÜÀíÔ±µÇÂ¼³É¹¦!');window.location='index1.php';</script>";
		 $_SESSION[admin_name]=$info[name];
		 $_SESSION[pwd]=$info[pwd];
   }
 }
}
    $obj=new chkinput(trim($A_name),trim($A_pwd));      //´´½¨¶ÔÏó
    $obj->checkinput();          				    //µ÷ÓÃÀà
?>
