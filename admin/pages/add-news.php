
<?php
 $cSql="SELECT * FROM category";
 $catData = mysqli_query($conn,$cSql);

 if(!empty($_POST)){
    $catId= $_POST['category_id'];
    $titel=$_POST['title'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $image="";
    if(!empty($_FILES['image']['name'])){
        $name=$_FILES['image']['name'];
        $ext= pathinfo($name, PATHINFO_EXTENSION);
        $imageName=md5(time().rand(1000,9999)).'.'.$ext;
        $tmp=$_FILES['image']['tmp_name'];
        $uploadPath='../public/news/'.$imageName;
        if(move_uploaded_file($tmp, $uploadPath)){
            $image=$imageName;
        }
    }
    $nSql="INSERT INTO news (category_id, title, slug, image, description)
    VALUES ('$catId', '$titel', '$slug', '$image', '$description')";
    if(mysqli_query($conn, $nSql)){
        $_SESSION['success'] = "News added successfully";
        redirect('admin/news');
    }else{
        $_SESSION['error'] = "Failed to add news";
        header("Location:index.php?page=add-news"); 
    }
}
?>


<form action="" method="post" enctype="multipart/form-data">
<div class="form-group mb-2">
        <label for="category_id">Select Category</label>
        <select name="category_id" id="category_id" class="form-control" required>
            <option value="" selected readonly>---Select Category----</option>
            <?php foreach($catData as $cat) : ?>        
           <option value="<?=$cat['id'];?>"><?=$cat['name'];?></option>
           <?php endforeach; ?>
        </select>
    </div>





    <div class="form-group mb-2">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="title">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" required>
    </div>

<div class="form-group mb-2">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" required></textarea>
    </div>
    
    <div class="form-group mb-2">
        <button class="btn btn-success w-100">Add News</button>
    </div>
</form>