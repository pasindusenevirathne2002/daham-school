<?php

include("dbase.php");

$ds =$_POST["vals"];
$val1 =explode(":",$ds);
if($val1[0]=="edit")
{
    $str1 ="SELECT * from student where indexno = $val1[0]";
    $rs1 =$bdd->query($str1) or die("error on $str1");
    $row1=$rs1->fetch();

    $strdes="<script type='text/javascript'>";
    $strdes .="$('#name').val('$row1[1]');";
    $strdes .="$('#dob').val('$row1[2]');";
    $strdes .="$('#gname').val('$row1[3]');";
    $strdes .="$('#telno').val('$row1[4]');";
    $strdes .="$('#address').val('$row1[5]');";
    $strdes .="$('#grade').val('$row1[6]');";
    $strdes .="$('#year').val('$row1[7]');";
  
    $strdes .= "</script>";

    echo $strdes;
}

if($val1[0]=="del"){
    $str1 = "DELETE FROM student WHERE indexno = '$val1[0]'";
    $rs1 =$bdd->query($str1);

    if($rs1){
        echo '<script>show_alert("succ","Successfully Deleted!");reload();</script>';
    }else{
        echo '<script>show_alert("err","Delete Failed!");reload();</script>';
    }

}


?>