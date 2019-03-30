<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/form.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <title>Event Registration</title>
</head>
<body>
    <div class="container">
        <br>
        <h1 class="h1 text-center">Accomodation Form</h1>
        <br>
        <div class="row">
            <div class="col-md-6 m-auto">
                <form class="" action="form.php" method="post">
                    <div class="alert alert-info" role="alert">
                        Accomodation Cost will be Rs. 450 per night.
                        Payment to be done in cash at college itself.
                    </div>
                    <div class="form-group">
                        <label for="rname">Representative Name:</label>
                        <input class="form-control" type="text" name="rname" placeholder="Representative Name">
                    </div>
                    <div class="form-group">
                        <label for="uni">University:</label>
                        <input class="form-control" type="text" name="uni" placeholder="University">
                    </div>
                    <div class="form-group">
                        <label for="phone">Representative Mobile Number:</label>
                        <input class="form-control" type="number" name="phone" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                        <label for="email">Representative Email:</label>
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="event">Event Registered:</label>
                        <input class="form-control" type="text" name="event" placeholder="Event">
                    </div>
                    <div class="form-group">
                        <label for="days">Required Days of Accomodation: </label>
                        <input type="number" class="form-control" name="days" value="0">
                    </div>
                    <input class="btn btn-dark btn-block mt-5" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <br><br><br>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
