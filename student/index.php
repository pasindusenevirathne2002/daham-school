<?php
    include("dbase.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student</title>
    <!-- Bootstrap Lib's css  -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-2 text-center">
      <h2>ශිෂ්‍යයන් ලියාපදිංචිය</h2>
      <!-- <p class="lead">Some Description Here.</p> -->
    </div>

    <div class="row">
      <div class="col-md col-lg mb-4">
        <!-- <h4 class="mb-3">Some Form Titile Here</h4> -->
        <div class="needs-validation" method="POST" novalidate >
          
          <div class="row g-3">
           
          <div class="col-12">
              <label for="name" class="form-label">සම්පූර්ණ නම :</label>
              <div class="input-group has-validation">
                <!--<span class="input-group-text">@</span>-->
                <input type="text" class="form-control" id="name"placeholder="" required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
                </div>
              </div>
            </div>

            <div class="col-12">
             

              <div class="row g-3">
              <div class="col-12">
                  <label for="dob" class="form-label">උපන් දිනය  </label>
                  <input type="date" class="form-control" id="dob"placeholder="" required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="gname" class="form-label">භාරකරුගෙ නම </label>
              <input type="text" class="form-control" id="gname" placeholder="" value="" required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
              </div>
                </div>
                <div class="col-12">
                  <div class="col-sm-6">
                    <label for="telno" class="form-label">දුරකථන අංකය </label>
                    <input type="number" class="form-control" id="telno" placeholder="" value="" required>
                    <div class="invalid-feedback">
                    කරුණාකර තොරතුරු ඇතුලත් කරන්න.
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="address" class="form-label">ලිපිනය</label>
                    <input type="text" class="form-control" id="address" placeholder="" value="" required>
                    <div class="invalid-feedback">
                    කරුණාකර තොරතුරු ඇතුලත් කරන්න.
                    </div>
                  </div>


              </div>

              <div class="col-sm-6">
              <label for="grade" class="form-label">ඇතුලත් වූ ශ්‍රේණිය:</label>
              <input type="number" class="form-control" id="grade" placeholder="" required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="year" class="form-label">ඇතුලත් වූ වර්ශය  :<span class="text-muted"></span></label>
              <input type="number" class="form-control" id="year" placeholder="" required>
              <div class="invalid-feedback">
              කරුණාකර තොරතුරු ඇතුලත් කරන්න.
              </div>
            </div>


            
          </div>
          <div id="saved"> ....</div>
          <hr class="my-4">

          <button class="w-100 btn btn-success btn-lg" onclick ="adddata()" >SAVE</button>
        </div>
      </div>
    </div>
  </main>
</div>





<div class="container">
        <main class="card mt-5 mb-5">

            <div class="card-header">
                <h4 class="text-center">ශිෂ්‍යය තොරතුරු </h4>
                <!-- <h6 class="text-center">Some Description Here.</h6> -->
            </div>

            <?php
                include "dbase.php";
            ?>
            <div class="card-body scroll-enable">
            
                <table class="table table-bordered table-striped">
                    <!-- Table Headings -->
                    <thead>
                        <!-- Table Heading 1st Row -->
                        <tr>
                            <!-- Table Heading Items -->
                            <th ><center>ඇතුලත්වීමේ අංකය </center></th>
                            <th ><center>සම්පූර්ණ නම </center></th>
                            <th ><center>උපන් දිනය  </center></th>
                            <th ><center>භාරකරුගේ නම </center></th>
                            <th ><center>දුරකතන අංකය </center>  </th>
                            <th ><center>ලිපිනය </center> </th>
                            <th ><center>ශ්‍රේණිය </center> </th>
                            <th ><center>වර්ෂය </center> </th>
                            <th ><center>Options</center></th>
                        </tr>
                        
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        <!-- Table Body 1st Row. You can use this 1st row for loop -->
                        <!-- <?php
                            // $str1="SELECT * from student";
                            // $rs1=$bdd->query($str1) or die ("Error");
                            // $i=10101;
                            // while ($row1=$rs1->fetch()){
                            //   $edit = "edit:$row1[0]";
                            //   $del = "del:$row1[0]";
                            //   $i++;
                      ?>                               -->


                        <!-- <tr>
                            <td><center><?php echo $i ?></center></td>
                            <td><center><?php echo $row1[1] ?></center></td>
                            <td><center><?php echo $row1[2] ?></center></td>
                            <td><center><?php echo $row1[3] ?></center></td>
                            <td><center><?php echo $row1[4] ?></center></td>
                            <td><center><?php echo $row1[5] ?></center></td>
                            <td><center><?php echo $row1[6] ?></center></td>
                            <td><center><?php echo $row1[7] ?></center></td>
                            
                            
                            <td>
                            <button class ='btn btn-warning btn-sm' id='$edit' onclick='editdel(this.id)'>EDIT</button>
                            <button class ='btn btn-danger btn-sm' id='$del' onclick='editdel(this.id)'>DELETE</button>
                                                
                            </td>
                           
                        </tr>     -->
                        <?php
   include "dbase.php";
    $str1="SELECT * from student";
    $rs1=$bdd->query($str1) or die ("Error");
    $i=10101;
    while ($row1=$rs1->fetch()){
        $edit = "edit:$row1[0]";
        $del = "del:$row1[0]";

        echo "
        <tr>
            <td><center>$i</center></td>
            <td><center>$row1[1]</center></td>
            <td><center>$row1[2]</center></td>
            <td><center>$row1[3]</center></td>
            <td><center>$row1[4]</center></td>
            <td><center>$row1[5]</center></td>
            <td><center>$row1[6]</center></td>
            <td><center>$row1[7]</center></td>
          
            <td>
                <button class ='btn btn-warning btn-sm' id='$edit' onclick='editdel(this.id)'>EDIT</button>
         
                
            </td>                
        </tr>";
$i++;

 } ?>

                        </tbody>
                </table>
            </div>
        </main>
    </div>

 
      
 
  <!-- //Bootstrap Lib's Javascript -->

  <script src="js/form-validation.js"></script>
      <script src="jquery/jquery.min.js"></script>
	  <script type="text/javascript" src="myfun.js"> </script>
  </body>
  </body>

  <script type="text/javascript">  
 

 function adddata(){
  var d1 =currval();
  $.ajax({
     url:'savedata.php',
     type:'POST',
     data:{vals:d1},
     success:function(json){
       // console.log(json);
        $("#saved").html(json);
        window.location.reload()
       }
   })
}
function editdel(ids){
  var opt=ids.split(":");
  if(opt[0]=="del"){
    if(confirm("Do you want delete!")==false){
      return false;
    }

  }
  $.ajax({
      url:'deleditdata.php',
      type:'POST',
      data:{vals:ids},
      success:function(json){
          $("#saved").html(json);
        }
    })
    getdata();
  }




</script>

</html>
