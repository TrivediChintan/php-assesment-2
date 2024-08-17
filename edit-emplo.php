<?php
// include("controller.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <div class="container my-5">
        <a href="view-emplo" class="btn btn-secondary">Back</a>
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div>
                    <h1>Edit Employee</h1>
                </div>
                    <form method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $fetch_where->employee_fname; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Last Name</label>
                            <input type="text" name="lname" class="form-control" id="exampleInputPassword1" value="<?php echo $fetch_where->employee_lname; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $fetch_where->employee_email; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mobile</label>
                            <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" value="<?php echo $fetch_where->employee_mobile; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"><?php echo $fetch_where->employee_address; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1">Gender</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gen" value="Male" <?php if($fetch_where->employee_gender == 'Male'){echo "checked"; } ?>>
                            <label class="form-check-label" for="flexRadioDefault1" >
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gen" value="Female" <?php if($fetch_where->employee_gender == 'Female'){echo "checked"; } ?>>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" id="pass" aria-describedby="emailHelp" value="<?php echo $fetch_where->employee_password; ?>">
                        </div>
                        <button type="submit" name="Update" class="btn btn-primary">Update</button>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>