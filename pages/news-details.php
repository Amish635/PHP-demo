<?php  

$slug=$_GET['slug'];
if($slug===null){
   header('Location:'.base_url());
}

$sql="SELECT * FROM news WHERE slug='$slug'";
$res=mysqli_query($conn,$sql);
$news=mysqli_fetch_assoc($res);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Details</title>
</head>
<body>
    
</body>
</html>