<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body class=" ">
<?php
    $forName= $forEmail = $forPhone = $forAddress ="";
    if(isset($_POST['btn'])){
        $name = $_POST['name']; 
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        
        if($name == null || $name == '' ||  empty($name)){
            $forName = "Please fill your name";
        }else{
            $name;
        }
        if($email == null || $email == '' ||  empty($email)){
            $forEmail = "Please fill your email";
        }else{
            $email;
        }
        if($phone == null || $phone == '' ||  empty($phone)){
            $forPhone = "Please fill your phone";
        }else{
            $phone;
        }
        if($address == null || $address == '' ||  empty($address)){
            $forAddress = "Please fill your address";
        }else{
            $address;
        }

        if($name != "" && $email != "" && $phone != "" && $address != ""){
            echo $name . '<br>';
            echo $email . '<br>';
            echo $phone . '<br>';
            echo $address . '<br>';
        } 
    }
    ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 offset-3 shadow ">
                <form action="" method='POST'> 
                    <div class="py-2 px-5" >
                        <label for="name">Name</label>
                        <input type="text" name='name' class='form-control' placeholder='Enter Name'>
                        <small class=' text-danger'><?php echo $forName ?></small>
                    </div>
                    <div class="py-2 px-5" >
                        <label for="email">Email</label>
                        <input type="email" name='email' class='form-control' placeholder='eg-example@gmail.com'>
                        <small class='text-danger'><?php echo $forEmail ?></small>
                    </div> 
                    <div class="py-2 px-5" >
                        <label for="phone">Phone</label>
                        <input type="number" name='phone' class='form-control' placeholder='eg-09.........'>
                        <small class='text-danger'><?php echo $forPhone ?></small>
                    </div>
                    <div class="py-2 px-5" >
                        <label for="address">Address </label>
                        <textarea name="address" class='form-control' id="" cols="30" rows="10" placeholder="Enter Address"></textarea>
                        <small class='text-danger'><?php echo $forAddress ?></small>
                    </div>
                    <div class="py-2 px-5 float-end" >
                        <input type="submit" value="Save" class='btn btn-danger text-white' name='btn'>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>