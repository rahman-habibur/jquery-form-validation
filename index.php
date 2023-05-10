<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $jtitle = $_POST['jtitle'];
    $country = $_POST['country'];
    $btype = $_POST['btype'];
    $comment = $_POST['comment'];

    // print_r($fname);

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">Let's Start a Conversation</h1>
    <div class="row">
        <div class="col-6">
            <div class="ms-5">
                <h2 class="lead">Points of Contact</h2>
                <h4>U.S| TUNE</h4>
                <p>Lorem ipsum dolor sit amet.</p>
                <p class="mb-2">Lorem ipsum dolor.</p>
            </div>



        </div>
        <div class="col-6">
            <div class="me-5">
                <form class="mx-3" action="" method="POST">
                    <div class="form-group row">
                        <label for="fname">First name:</label><br>
                        <input class="form-control-sm form-control" type="text" id="fname" name="fname" value="" placeholder="Enter your firstname"><br>

                        <label for="lname">Last Name:</label><br>
                        <input class="form-control-sm form-control" type="text" id="lname" name="lname" value="" placeholder="Enter your lastname"><br>

                        <label for="cname">Company Name:</label><br>
                        <input class="form-control-sm form-control" type="text" id="cname" name="cname" value="" placeholder="Enter your companyname"><br>

                        <label for="cemail">Company Email:</label><br>
                        <input class="form-control-sm form-control" type="text" id="cemail" name="cemail" value="" placeholder="Enter your companyemail"><br>

                        <label for="jtitle">Job Title:</label><br>
                        <input class="form-control-sm form-control" type="text" id="jtitle" name="jtitle" value="" placeholder="Enter your job title"><br>

                        <label for="country">Country:</label><br>
                        <input class="form-control-sm form-control" type="text" id="country" name="country" value="" placeholder="Enter your country"><br>

                        <label for="btype">Business Type:</label><br>
                        <input class="form-control-sm form-control" type="text" id="btype" name="btype" value="" placeholder="Enter your business type"><br>

                        <label for="comment">Comment:</label><br>
                        <input class="form-control-sm form-control" type="text" id="comment" name="comment" value="" placeholder="Enter your comment"><br>

                        <br><br>


                        <input type="submit" value="SEND MESSAGE" name="submit">


                    </div>
                </form>
            </div>
        </div>
    </div>




    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Company Name</th>
                <th scope="col">Company Email</th>
                <th scope="col">Job Title</th>
                <th scope="col">Country</th>
                <th scope="col">Business Type</th>
                <th scope="col">Comment</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?php echo $fname ?></td>
                <td><?php echo $lname ?></td>
                <td><?php echo $cname ?></td>
                <td><?php echo $cemail ?></td>
                <td><?php echo $jtitle ?></td>
                <td><?php echo $country ?></td>
                <td><?php echo $btype ?></td>
                <td><?php echo $comment ?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>