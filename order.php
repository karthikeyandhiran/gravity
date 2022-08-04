<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Preorder</title>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
  </head>
<body>

    <nav class="navbar  sticky-top navbar-expand-lg navbar-dark  " style="background-color: #3b5249;">
        <a class="navbar-brand" href="#"> Pre-Order
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                
            

                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="gallery.html">Gallery</a>
                </li>

                <li class="nav-item dropdown active ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      Products
                    </a>
                    <div class="dropdown-menu   " aria-labelledby="navbarDropdown">
                      <a class="dropdown-item " href="writercorner.html">Student's Corner</a>
                      <a class="dropdown-item " href="artistcorner.html">Teacher's Corner</a>
                      <a class="dropdown-item " href="essentials.html">Others</a>
                    </div>
                  </li>



        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4><b>Order details</b>
                            
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="save.php" method="POST">
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    
                                
                                    <div class="form-group mb-2">
                                            <label for=""><b>Name</b></label>
                                            <input type="text" name="fname[]" class="form-control" required placeholder="Enter Name">
                                        </div>


                                    <div class="form-group mb-2">
                                            <label for=""><b>Email</b></label>
                                            <input type="email" name="mail[]" class="form-control" required placeholder="Enter Email id">
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for=""><b>Phone number</b></label>
                                            <input type="text" name="num[]" class="form-control" required placeholder="Enter Number">
                                         </div>

                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for=""><b>Item name</b></label>
                                            <input type="text" name="name[]" class="form-control" required placeholder="Enter Items Name">
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for=""><b>Quantity</b></label>
                                            <input type="text" name="phone[]" class="form-control" required placeholder="Enter the Quantity in numbers">
                                            <br>
                                        </div>
                                    </div>

                                    

                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <a href="javascript:void(0)" style="color: white;" class="add-more-form float-end btn btn-primary">ADD MORE</a>
                                        </div>
                                    </div>


                                 


                                </div>
                            </div>

                            <div class="paste-new-forms"></div>

                            <button type="submit" name="save_multiple_data" class="btn btn-primary">Place Order</button>
                            <br>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
    



    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for=""><b>Item name</b></label>\
                                            <input type="text" name="name[]" class="form-control" required placeholder="Enter Items Name">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for=""><b>Quantity</b></label>\
                                            <input type="text" name="phone[]" class="form-control" required placeholder="Enter the Quantity in numbers">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
    </script>


</body>
</html>