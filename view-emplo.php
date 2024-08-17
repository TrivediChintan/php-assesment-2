<?php
// include("controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="fontawesome-free-6.1.0-web/css/all.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col">
                <a href="index.php" class="btn btn-secondary">Back</a>
            <table class="table">
            <h1 class="my-5" style="margin-left: 25vw;">All Employee Details</h1>
  <thead>
    <tr>
      <th scope="col">Employee ID</th>
      <th scope="col">Employee FirstName</th>
      <th scope="col">Employee LasttName</th>
      <th scope="col">Employee Email</th>
      <th scope="col">Employee Mobile</th>
      <th scope="col">Employee Address</th>
      <th scope="col">Employee Gender</th>
      <th scope="col">Employee Password</th>
      <th scope="col">Actions</th>
  
      
    </tr>
  </thead>
  <tbody>
    <?php 
foreach($sel as $fetch)
{
    ?>
    <tr>
      <th scope="row"><?php echo $fetch->employee_id; ?></th>
      <td scope="row"><?php echo $fetch->employee_fname; ?></td>
      <td scope="row"><?php echo $fetch->employee_lname; ?></td>
      <td scope="row"><?php echo $fetch->employee_email; ?></td>
      <td scope="row"><?php echo $fetch->employee_mobile; ?></td>
      <td scope="row"><?php echo $fetch->employee_address; ?></td>
      <td scope="row"><?php echo $fetch->employee_gender; ?></td>
      <td scope="row"><?php echo $fetch->employee_password; ?></td>
      <td>
      <a href="single-emplo?singleid=<?php echo $fetch->employee_id; ?>" class="btn btn-warning"><i class="fa-solid fa-users-viewfinder"></i></a></td>
       <td> <a href="edit-emplo?editid=<?php echo $fetch->employee_id; ?>" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a></td>
       <td> <a href="delete-emplo?delid=<?php echo $fetch->employee_id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>
            </div>
        </div>
    </div>
    
</body>
</html>