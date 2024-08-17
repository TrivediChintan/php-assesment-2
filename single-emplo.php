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
            <div class="col justify-content-center">
                <a href="view-emplo" class="btn btn-secondary">Back</a>
                <h1 class="my-5" style="margin-left: 32vw;">Employee Details</h1>
                <div class="card" style="width: 18rem;margin: auto;">
                    <div class="card-body"> <h5 class="card-title"><u>Employee Id</u> :-<u><?php echo $fetch_where->employee_id; ?></u></h5>
                            <p class="card-text"><b>Employee FirstName :-</b><?php echo $fetch_where->employee_fname; ?></p>
                            <p class="card-text"><b>Employee LastName :-</b><?php echo $fetch_where->employee_lname; ?></p>
                            <p class="card-text"><b>Employee Email :-</b><?php echo $fetch_where->employee_email; ?></p>
                            <p class="card-text"><b>Employee Mobile :-</b><?php echo $fetch_where->employee_mobile; ?></p>
                            <p class="card-text"><b>Employee Address :-</b><?php echo $fetch_where->employee_address; ?></p>
                            <p class="card-text"><b>Employee Gender :-</b><?php echo $fetch_where->employee_gender; ?></p>
                            <p class="card-text"><b>Employee Password :-</b> <?php echo $fetch_where->employee_password; ?></p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>