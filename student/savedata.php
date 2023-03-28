<!-- <?php
//     include("dbase.php");
// $ds =$_POST["vals"];

// if(!empty($ds[0]) && !empty($ds[1]) && !empty($ds[2]) && !empty($ds[3]) && !empty($ds[4]) && !empty($ds[5]) && !empty($ds[6]) ){
//     $str2="DELETE FROM student WHERE indexno =$ds[0] ";
//     $rs2 =$bdd->query($str2);

//     if($rs2){
//         $str1 ="INSERT INTO stdent 
//         values('$ds[0]','$ds[1]','$ds[2]',$ds[3],'$ds[4]',$ds[5],$ds[6])" ;

//         $rs1 =$bdd->query($str1) or die("error on $str1");
//         if($rs1){
//             echo "Successfully Saved!";
//         } else{
//             echo "Save Failed!";
//         }
//     }else{
//         echo 'Somthing Went Wrong!';
//     }
// } else {
//     echo "All Fields are Required!";
// }
?> -->
<?php
 include "dbase.php";
$ds =$_POST["vals"];

$str1 ="INSERT INTO student (name,dob,gname,telno,address,grade,year)
values('$ds[0]','$ds[1]','$ds[2]',$ds[3],'$ds[4]',$ds[5],$ds[6])" ;

$rs1 =$bdd->query($str1) or die("error on $str1");
echo "Send data";

?>