<?php
         $dbhost = 'localhost';
         $dbname = 'blood_bank';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

 




?>


<html lang="en">

<head>
    <link href="Create-account/index.php">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrzzzity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood_Bank</title>


</head>

<body>
    <div class="container-fluid">
        <div class="row bg-light p-5">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 p-5 bg-white">
                <form method="get">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" name="fname" class="form-control form-control-lg"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Second Name</label>
                                <input type="text" name="sname" class="form-control form-control-lg"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg"
                            id="exampleInputPassword1">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>



                <?php 
               
                  if(isset($_GET['submit'])){
                    $fname=$_GET['fname'];
                    $lname=$_GET['sname'];
                    $password=$_GET['password'];

                    $query="INSERT INTO login (first_name, email, password) VALUES ('$fname','$lname','$password')";
                    if($conn->query($query)){
                      echo "New record created successfully";
                    }
                    else{
                      echo $conn->error;
                    }
                   
                  }
                  ?>

            </div>
            <div class="col-sm-4"></div>
        </div>


        <div class="row bg-light p-5">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="index.php" method="get">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" name="firstname1" class="form-control form-control-lg"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Second Name</label>
                                <input type="text" name="secondname1" class="form-control form-control-lg"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password1" class="form-control form-control-lg"
                            id="exampleInputPassword1">
                    </div>

                    <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
                </form>

                <div class="row">
                    <div class="col-sm-12">


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">second name</th>
                                    <th scope="col">first name</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query="SELECT * FROM login ";
                                $result=$conn->query($query);
                                 if($result->num_rows>0){
                                 while($row=$result->fetch_assoc()){ 
?>
                                <tr>
                                    <td scope='col'><?php echo $row['email'] ?></td>
                                    <td scope='col'><?php echo $row['first_name'] ?></td>
                                </tr>

                              <?php                              }
                                }

                                ?>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
  
    </div>

</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

</html>