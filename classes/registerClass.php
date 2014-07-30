<?php

class registerClass{



//********will return all profiles.  Will need this to work with projects. Do not need it right now********


// public function getProfile(){
// //getting all sales and ordering them by id
//    $db = Database::getDB();
//       $query = "SELECT * FROM profile ORDER BY userID";
//       $allProfile =$db->query($query);
//       return $allProfile;
// }

//*****************USER PROFILE (REGISTER FORM ON REGISTER.PHP)*********************

public function addProfile($name, $city, $email, $aspnet,$cSharp,$visualbasic,$xhtml,$html5,$javascript,$jquery,$php,$css,$css3,$frontend,$backend,$projectmanage,$preference,$team_number,$weekly_hours,$weekly,$other,$pdev,$duration){
       $db= Database::getDB();

       $query = "INSERT INTO GETTABLENAME 
       (name, city,email,aspnet,cSharp,visualbasic,xhtml,html5,javascript,jquery,php,css,css3,frontend,backend,projectmanage,preference,team_number,weekly_hours,weekly,other,pdev,duration)
       VALUES
       (:name,:city,:email,:aspnet,:cSharp,:visualbasic,:xhtml,:html5,:javascript,:jquery,:php,:css,:css3,:frontend,:backend,:projectmanage,:preference,:team_number,:weekly_hours,:weekly,:other,:pdev,:duration)";  // this is similar to ado.net , the @placeholders in the class files.  
       $stm = $db->prepare($query);
       //prepare prepares the query for execution.  

       $stm->bindParam(':name', $name);
       $stm->bindParam(':city', $city);
       $stm->bindParam(':email', $email);
       $stm->bindParam(':aspnet', $aspnet);
       $stm->bindParam(':cSharp', $cSharp);
       $stm->bindParam(':visualbasic', $visualbasic);
       $stm->bindParam(':xhtml', $xhtml);     
       $stm->bindParam(':html5', $html5); 
       $stm->bindParam(':javascript', $javascript);
       $stm->bindParam(':jquery', $jquery);
       $stm->bindParam(':php', $php);
       $stm->bindParam(':css', $css);
       $stm->bindParam(':css3', $css3);  
       $stm->bindParam(':frontend',$frontend);
       $stm->bindParam(':backend',$backend);
       $stm->bindParam(':projectmanage',$projectmanage);
       $stm->bindParam(':preference',$preference);
       $stm->bindParam(':team_number',$team_number);
       $stm->bindParam(':weekly_hours',$weekly_hours);
       $stm->bindParam(':other',$other);//MAKE SURE THERE IS FIELD FOR THIS IS DATABASE***************
       $stm->bindParam(':pdev',$pdev);
       $stm->bindParam(':duration',$duration);  
       $row =  $stm->execute(); //row actually has a value of just 1 or 0
       return $row;
   }

public function updateProfile($name, $city, $email, $aspnet,$cSharp,$visualbasic,$xhtml,$html5,$javascript,$jquery,$php,$css,$css3,$frontend,$backend,$projectmanage,$preference,$team_number,$weekly_hours,$weekly,$other,$pdev,$duration)
{
    $db = Database::getDB();
//UPDATE EXAMPLE FROM PHP PROJECT-- use to make update here.
     // $query = "UPDATE sales SET item_name = :item_name, username = :username, category = :category, sale_price = :sale_price, reg_price = :reg_price, start_date = :start_date, end_date = :end_date, store = :store WHERE saleID = '$saleID'";

    $stm = $db->prepare($query);

   $stm->bindParam(':name', $name);
       $stm->bindParam(':city', $city);
       $stm->bindParam(':email', $email);
       $stm->bindParam(':aspnet', $aspnet);
       $stm->bindParam(':cSharp', $cSharp);
       $stm->bindParam(':visualbasic', $visualbasic);
       $stm->bindParam(':xhtml', $xhtml);     
       $stm->bindParam(':html5', $html5); 
       $stm->bindParam(':javascript', $javascript);
       $stm->bindParam(':jquery', $jquery);
       $stm->bindParam(':php', $php);
       $stm->bindParam(':css', $css);
       $stm->bindParam(':css3', $css3);  
       $stm->bindParam(':frontend',$frontend);
       $stm->bindParam(':backend',$backend);
       $stm->bindParam(':projectmanage',$projectmanage);
       $stm->bindParam(':preference',$preference);
       $stm->bindParam(':team_number',$team_number);
       $stm->bindParam(':weekly_hours',$weekly_hours);
       $stm->bindParam(':other',$other);//MAKE SURE THERE IS FIELD FOR THIS IS DATABASE***************
       $stm->bindParam(':pdev',$pdev);
       $stm->bindParam(':duration',$duration); 

   $row = $stm->execute();
           return $row;
}
//calling ID to delete row

//****************MAY NOT NEED THIS-- JUST HAVE IN CASE**********
   // public function deleteUser($userID){
   //     $db=Database::getDB();
       
   //      $query = "DELETE FROM GETTABLENAME WHERE userID = :userID ";       
   //      $stm = $db->prepare($query);
   //      $stm->bindParam(':userID', $userID);
   //      $row = $stm->execute();//executing
   //      return $row; 
   // }


//**************TO RETURN ONE USER (MAY BE USEFUL TO HAVE)******************

 // public function getOneUser($userID){
       // $db=Database::getDB();
       // $query = "SELECT * FROM GETTABLENAME WHERE userID = '$userID'";       
       // $oneUser =$db->query($query);
       // return $oneUser;//returns one user
   //}
 

?>