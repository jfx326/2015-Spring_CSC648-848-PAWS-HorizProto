<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PAWS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
    <!-- dropdown button -->
    <div class="dropdown-button">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-default dropdown-toggle pull-right"
                data-toggle="dropdown">
                Hello, USER! <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#"><strike>Account Information</strike></a></li>
                <li><a href="messages.html">Messages</a></li>
                <li><a href="yourpets.html">Your Pets</a></li>
                <li class="divider"></li>
                <li><a href="#">Sign Out</a></li>
            </ul>
        </div>
    </div>
    <!-- end of dropdown button -->
    
    <br>

    <div class="brand">PAWS</div>
    <div class="address-bar">SFSU Software Engineering </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="adoptionpage.html">Adopt A Pet</a>
                    </li>
                    <li>
                        <a href="pet-registration.html">Find Home For A Pet</a>
                    </li>
                    <li>
                        <a href="#">Pet Care</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                
                <!---leftside, filter -->
                <div class="col-lg-6">
                    <div class="filters">
                        <h2 class="brand-before">
                        <small>Filters</small>
                    </h2>
                        <h5><strong>Species</strong></h5>
                        <form action="">
                            <input type="radio" name="species" value="cat">Cat 
                            <input type="radio" name="species" value="dog">Dog
                        </form>
                        
                        <br>
                        
                        <h5><strong>Color</strong></h5>
                        <input list="hosting-plan" type="text">
 
                            <datalist id="hosting-plan">
                                    <option value="black"></option>
                                    <option value="brown"></option>
                                    <option value="white"></option>
                            </datalist>
                        
                        <br>
                        
                        
                        <h5><strong>temp1</strong></h5>
                        <input list="hosting-plan" type="text">
 
                            <datalist id="hosting-plan">
                                    <option value="temp"></option>
                                    <option value="temp"></option>
                                    <option value="temp"></option>
                            </datalist>
                        
                        <br>
                        
                        
                        <h5><strong>temp2</strong></h5>
                        <input list="hosting-plan" type="text">
 
                            <datalist id="hosting-plan">
                                    <option value="temp"></option>
                                    <option value="temp"></option>
                                    <option value="temp"></option>
                            </datalist>
                        
                        <br>
                        
                        
                        
                        <h5><strong>temp3</strong></h5>
                        <input list="hosting-plan" type="text">
 
                            <datalist id="hosting-plan">
                                    <option value="temp"></option>
                                    <option value="temp"></option>
                                    <option value="temp"></option>
                            </datalist>
                        
                        <br>
                        
                        
                        
                        <h5><strong>temp4</strong></h5>
                        <input list="hosting-plan" type="text">
 
                            <datalist id="hosting-plan">
                                    <option value="temp"></option>
                                    <option value="temp"></option>
                                    <option value="temp"></option>
                            </datalist>
                        
                        <br>
                        <p>temp</p>
                    </div>
                </div>
                
                <!---rightside,petlistings---> 
                <div class="row">
                    <div class="col-lg-6">
                        <!---petlisting 1--->
                        <div class="col-lg-2">
                            <a href="#">
                                <img src="#">
                                <p>name</p>
                            </a>
                        </div>

                        <!---petlisting 2--->
                        <div class="col-lg-2">
                            <a href="#">
                                <img src="#">
                                <p>name</p>
                            </a>
                        </div>

                        <!---petlisting 3--->
                        <div class="col-lg-2">
                            <a href="#">
                                <img src="#">
                                <p>name</p>
                            </a>
                        </div>
                    
                    </div>
               
                
                    
                    
                    <!---------------------------------->
                    <div class="row">
                        <div class="col-lg-6">
                            
                            
                        <!---petlisting 1--->
                        <div class="col-lg-2">
                            <a href="#">
                                <img src="#">
                                <p>name</p>
                            </a>
                        </div>

                        <!---petlisting 2--->
                        <div class="col-lg-2">
                            <a href="#">
                                <img src="#">
                                <p>name</p>
                            </a>
                        </div>

                        <!---petlisting 3--->
                        <div class="col-lg-2">
                            <a href="#">
                                <img src="#">
                                <p>name</p>
                            </a>
                        </div>
                    </div>
                </div>
                    
                    
                    
                
              
                        
                        
                        
                    
                    
                </div>
            </div>
        </div>
    </div>

        
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; 2015. SFSU/FAU/Fulda Software Engineering Project, Spring 2015. For Demonstration Only.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    

</body>

</html>
