<?php
 include 'db/db.php' ;

  class Image{

   var 
   $image_id,
   $dish_name,
   $ingredients,
   $how_to_make,
   $image;
  
  function Insert_into_image(){
   if(isset($_FILES['txt_image']))
   {
        $tempname = $_FILES['txt_image']['tmp_name'];
        $originalname =$_FILES['txt_image']['name'];
        $size =($_FILES['txt_image']['size']/5242888). "MB<br>";
        $type=$_FILES['txt_image']['type'];
        $image=$_FILES['txt_image']['name'];
        move_uploaded_file($_FILES['txt_image']['tmp_name'],"images/".$_FILES['txt_image']['name']);
      }
  

    $query = "Insert into t_image_upload
    (
     dish_name,
     ingredients,
     how_to_make,
     image
    )
    values
    (
     '$this->dish_name',
     '$this->ingredients',
     '$this->how_to_make',
     '$image'
    )";
    if(mysql_query($query)){
     echo "Insert success";
    }
    else
    {
     echo "Insert not success";
    }
  }

   function get_all_image_list(){
   $query = "select *from t_image_upload";
   $result = mysql_query($query);
   return $result;
  }

}
?>

