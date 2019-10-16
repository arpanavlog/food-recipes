<?php 

include './classes/image_class.php';

$obj_image = new Image();

if(@$_POST['Submit'])
{
 $obj_image->dish_name=str_replace("'", "''", $_POST['txt_dish_name']);

 $obj_image->ingredients=str_replace("'", "''", $_POST['txt_ingredients']);

 $obj_image->how_to_make=str_replace("'", "''", $_POST['txt_how_to_make']);

 $obj_image->image=str_replace("'", "''", $_POST['txt_image']);

  $obj_image->Insert_into_image();

  $data_image=$obj_image->get_all_image_list();
 $row=mysql_num_rows($data_image);
}

?>

<!DOCTYPE html>
<html>
<head>
 <title>image</title>
</head>
<body>
 <CENTER><H1>Indian Traditional Food Recipes</H1></CENTER>
 <CENTER><H2>Upload Your Recipe...</H2></CENTER>

  <CENTER>
  <form method="post" enctype="multipart/form-data">
   <table border="1" width="80%">
    <tr>
     <th width="50%">Dish Name:</th>
     <td width="50%"><input type="text" name="txt_dish_name" id="Dish Name"></input></td>
    </tr>
    <tr>
     <th width="50%">Ingredients:</th>
     <td width="50%"><textarea name="txt_ingredients" type="text" rows="20" cols="60" id="Ingredients"></textarea>
    </td>
    </tr>
    <tr>
     <th width="50%">How to make:</th>
     <td width="50%"><textarea name="txt_how_to_make" rows="20" cols="60" id="How to make"></textarea></td>
    </tr>
    <tr>
     <th width="50%">Upload Image:</th>
     <td width="50%"><input type="file" name="txt_image" id="Upload Image"></input></td>
    </tr>
    <tr>
     <td></td>
     <td width="50%"><input type="submit" name="Submit" value="Submit"></input></td>
    </tr>
   </table>
  </form>
 </CENTER>

  <?php 
  if($row!=0)
  {
  ?>
  <center>
   <table width="100%" border="1"> 
   <?php
    $icount = 1;
    while($data= mysql_fetch_assoc($data_image))
    {
     ?>
     <tr>
      <td><?php echo $icount; ?></td>
      <td><?php echo $data['txt_dish_name']?></td>
      <td><?php echo $data['txt_ingredients']?></td>
      <td><?php echo $data['txt_how_to_make']?></td>
      <td><img src="images/<?php echo $data['image']; ?>" width="400px" height="200px"></td>
     </tr>
     <?php
     $count++;
     }
     ?>
   </table>
  </center>
  <?php
 }

  ?>
</body>
</html>


