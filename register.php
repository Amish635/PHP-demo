<?php require_once  __DIR__ ."/database.php";
require_once __DIR__ ."/config.php";


$errors=[
    "name"=>"",
    "email"=>"",
    "password"=>"",
    "confirm_password"=>"",
    "gender"=>"",
];


$old=[
    "name"=>"",
    "email"=>"",
    "gender"=>""
];

if(!empty($_POST)

){
    foreach($_POST as $key => $value){
      if(empty($value)){
$errors[$key]='this field is required';
      }else{
        $old[$key]=htmlspecialchars($value);
      }
}
$name=$_POST['name'];
$email=$_POST['email'];
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['email']='Invalid email format';
}
$password=md5($_POST['password']);
$confirm_password=md5($_POST['confirm_password']);
if($password!== $confirm_password){
    $errors['confirm_password']='Password does not match';
}
$gender=$_POST['gender'];

if(!array_filter($errors)){
$sql="INSERT INTO users(name,email,password,gender) VALUES('$name', '$email', '$password', '$gender')";
$res=mysqli_query($conn,$sql);

if($res){
    $_SESSION['success']='User added successfully';
  redirect('login.php');
}
}


}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New Users</h1>
                <?= messages()?>

            </div>
        </div>
        <div class="row">
            <div class="col md-12">
                <form action=""  method="post">
                    <div class="form-groups">
                        <label for="name">Name:

                            <span class="text-danger"><?= !empty($errors['name']) ? $errors['name'] : '' ?></span>
                        </label>
                        <input type="text" name="name" id="name" class="form-control" value="<?= $old['name'] ?>">
                    </div>
                    <div class="form-groups mb-2">
                        <label for="email">Email:
                            <span class="text-danger"><?= !empty($errors['email']) ? $errors['email'] : '' ?></span>
                        </label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $old['email'] ?>" >
                    </div>
                  
                    
                    <div class="row">
                        <div class="col-md-6"><div class="form-groups mb-2">
                        <label for="password">Password:
                            <span class="text-danger"><?= $errors['password']; ?></span>
                        </label>
                        <input type="password" name="password" id="password" class="form-control" >
                    </div></div>
                    <div class="col-md-6">
                    <div class="form-groups mb-2">
                        <label for="password">Confirm Password:
                            <span class="text-danger"><?= $errors['confirm_password']; ?></span>
                        </label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" >
                    </div>
                    </div>
                    </div>
                    <div class="form-groups mb-2">
                        <label for="gender">Gender:
                            <span class="text-danger"><?= $errors['gender']; ?></span>
                        </label>
                        <select name="gender" id="gender" class="form-control" >
                            <option value="" selected>---Select---</option>
                            <option value="male" <?=$old['gender']=='male' ? "selected" :"" ?>>male</option>
                            <option value="female" <?= $old['gender']=='female' ?"selected" :"" ?>>female</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-success w-100">Add Users</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>