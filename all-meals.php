<?php include './components/header.php'; ?>	
<div class="container">
    <div class="top-section">
    <img class="cover-img" src="img/monthly cover.PNG"><br><br><br><br><br>
    <!-- <img class="cover-img" src="img/weekly cover.PNG"><br><br><br><br><br> -->
    </div>
    <ul class="nav nav-tabs weeks-nav ">
        <li class="active"><a data-toggle="tab" href="#week1" class="text-center week-link responsive-p active">Week 1</a></li>
        <li class=""><a data-toggle="tab" href="#week2" class="text-center week-link responsive-p">Week 2</a></li>
        <li class=""><a data-toggle="tab" href="#week3" class="text-center week-link responsive-p">Week 3</a></li>
        <li class=""><a data-toggle="tab" href="#week4" class="text-center week-link responsive-p">Week 4</a></li>
    </ul>

    <div class="tab-content">
        <!-- ------------------------------- week 1------------------------------------------ -->
        <div id="week1" class="tab-pane in active">
            <br>
            <div class=" bg-dark-grey">
                <div class="row">
                    <div class="col col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <h3>First week nutrition facts </h3>
                        <p></p>
                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
                         <!-- <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button> -->
                         <div class="dropdown" style="float:right;">
                            <a class="btn btn-outline-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Repeat first week meals
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">for week 2</a>
                                <a class="dropdown-item" href="#">for week 3</a>
                                <a class="dropdown-item" href="#">for week 4</a>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                        <h5>TOTAL PRICE : 200 $</h5>
                    </div>
                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                        <h5>CALORIES: 2000 KC</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL PROTEIN : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL CARBS : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL FATS : 200 G</h5>
                    </div>
                </div>
            </div>
            
            <div class=" card days-card">
                <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)" >
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Sunday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Sunday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                         <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a href="#" title="meal 1" class="thumb content">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                            <h3 class="content-title">MEAL 1</h3>  
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <!-- <h4 class="profile-name">Meal 1</h4> -->
                                            <!-- <p>simple description of image 1</p> -->
                                        </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a href="#" title="meal 2" class="thumb content">
                                            <!-- <div class="content-overlay"></div> -->
                                            <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                            data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                            <!-- <h3 class="content-title"></h3>   -->
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <h4 class="profile-name"></h4>
                                            <p></p>
                                        </div>
                                        </div>
                                    </div>

                                

                                
                                </div>
                            </div>
		                        </div>

                    </div>
<!--                    <div class="test">-->
<!---->
<!--                    </div>-->
                </div>

            </div>

            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Monday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Monday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                         <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a href="#" title="meal 1" class="thumb content">
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                            <h3 class="content-title">MEAL 1</h3>  
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <!-- <h4 class="profile-name">Meal 1</h4> -->
                                            <!-- <p>simple description of image 1</p> -->
                                        </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a href="#" title="meal 2" class="thumb content">
                                            <!-- <div class="content-overlay"></div> -->
                                            <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                            data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                            <!-- <h3 class="content-title"></h3>   -->
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <h4 class="profile-name"></h4>
                                            <p></p>
                                        </div>
                                        </div>
                                    </div>

                                

                                
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Tuesday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Tuesday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                         <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>


            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Wednesday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Wednesday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                         <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Thursday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Thursday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Friday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Friday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
        </div>


<!-- ----------------------------------- week 2-------------------------------------- -->


<div id="week2" class="tab-pane ">
            <br>
            <div class=" bg-dark-grey">
                <div class="row">
                    <div class="col">
                        <h3>Second week nutrition facts </h3>
                        <p></p>
                    </div>
                    <div class="col">
                    <div class="dropdown" style="float:right;">
                            <a class="btn btn-outline-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Repeat second week meals
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">for week 1</a>
                                <a class="dropdown-item" href="#">for week 3</a>
                                <a class="dropdown-item" href="#">for week 4</a>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                        <h5>TOTAL PRICE : 200 $</h5>
                    </div>
                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                        <h5>CALORIES: 2000 KC</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL PROTEIN : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL CARBS : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL FATS : 200 G</h5>
                    </div>
                </div>
            </div>
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Sunday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Sunday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>

            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Monday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Monday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Tuesday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Tuesday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Wednesday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Wednesday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Thursday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Thursday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Friday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Friday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>


<!-- ----------------------------------------------- week 3 -------------------------------- -->
            
<div id="week3" class="tab-pane ">
            <br>
            <div class=" bg-dark-grey">
                <div class="row">
                    <div class="col">
                        <h3>Third week nutrition facts </h3>
                        <p></p>
                    </div>
                    <div class="col">
                     <!-- <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button> -->
                        <div class="dropdown" style="float:right;">
                            <a class="btn btn-outline-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Repeat third week meals
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">for week 1</a>
                                <a class="dropdown-item" href="#">for week 2</a>
                                <a class="dropdown-item" href="#">for week 4</a>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                        <h5>TOTAL PRICE : 200 $</h5>
                    </div>
                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                        <h5>CALORIES: 2000 KC</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL PROTEIN : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL CARBS : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL FATS : 200 G</h5>
                    </div>
                </div>
            </div>
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Sunday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Sunday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>

            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Monday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Monday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Tuesday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Tuesday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Wednesday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Wednesday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Thursday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Thursday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Friday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Friday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
        </div>


     <!-- --------------------------------- week 4 --------------------------------------------------- -->


     <div id="week4" class="tab-pane ">
            <br>
            <div class=" bg-dark-grey">
                <div class="row">
                    <div class="col">
                        <h3>Fourth week nutrition facts </h3>
                        <p></p>
                    </div>
                    <div class="col">
                     <!-- <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button> -->
                        <div class="dropdown" style="float:right;">
                            <a class="btn btn-outline-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Repeat fourth week meals
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">for week 1</a>
                                <a class="dropdown-item" href="#">for week 2</a>
                                <a class="dropdown-item" href="#">for week 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                        <h5>TOTAL PRICE : 200 $</h5>
                    </div>
                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                        <h5>CALORIES: 2000 KC</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL PROTEIN : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL CARBS : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                        <h5>TOTAL FATS : 200 G</h5>
                    </div>
                </div>
            </div>
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Sunday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Sunday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>

            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Monday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Monday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Tuesday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Tuesday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Wednesday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Wednesday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Thursday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Thursday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                     <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button>
                                    </div>
                                </div><br>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
            
            
            <div class=" card days-card">
                <div class="card-body">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Friday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                        <br>
                            <div class=" bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Friday nutrition facts </h3>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                           
                           <div class="container-fluid">
                                <div class="meal row" id="profile-grid">
                                
                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                <div class="content-overlay"></div>
                                                <img class="content-image" src="img/8.jpg" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                                <h3 class="content-title">MEAL 1</h3>  
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 2" class="thumb content">
                                                <img class="content-image" src="img/plus.PNG" class="img-responsive img-rounded" 
                                                data-toggle="modal" data-target=".modal-profile-lg" style="border: 1Px solid #DDD7D7;">
                                                </a>
                                            </div>
                                            <div class="panel-body">
                                                <h4 class="profile-name"></h4>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="meal-detail.php" class="add"><span>+</span></a> -->
                        </div>

                    </div>
                </div>
            </div>


            
        </div>
    </div>
    
	<!-- .modal- edit meal -->
	<div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">
            <!-- <div class="center-meals">
                <img src="img/protein.png" />
                <img src="img/drinks.png"  />
                <img src="img/vegetables.png"  />
                <img src="img/carbs.png" />
                <img src="img/snack.png"  />
                <img src="img/salade.png" />
                                            
            </div> -->
            <!-- <ul class="nav modal-tabs sorces-nav ">
                <li class="active"><a data-toggle="tab" href="#week1" class="text-center week-link responsive-p active">Week 1</a></li>
                <li class=""><a data-toggle="tab" href="#week2" class="text-center week-link responsive-p">Week 2</a></li>
                <li class=""><a data-toggle="tab" href="#week3" class="text-center week-link responsive-p">Week 3</a></li>
                <li class=""><a data-toggle="tab" href="#week4" class="text-center week-link responsive-p">Week 4</a></li>
            </ul>   -->
            
            <div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" type="button" data-dismiss="modal">×</button>
						<h3 class="modal-title"></h3>
                    </div>
                    <div class="modal-facts bg-light-grey">
                                <div class="row">
                                    <div class="col">
                                        <h3>Nutrition facts </h3>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>TOTAL PRICE : 200 $</h5>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 text-center">
                                        <h5>CALORIES: 2000 KC</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 text-center">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div><br>
                    <ul class="nav modal-tabs sorces-nav ">
                        <li class="source-tab active"><a href="#protein" class="text-center week-link responsive-p active" data-toggle="tab">
                            <img class="source-tab-img" src="img/protein.png"  />
                            </a></li>
                        <li class="source-tab "><a href="#carbs" class="text-center week-link responsive-p" data-toggle="tab">
                        <img class="source-tab-img" src="img/carbs.png"  />
                        </a></li>
                        <li class="source-tab "><a href="#vegetables" class="text-center week-link responsive-p" data-toggle="tab">
                            <img class="source-tab-img" src="img/vegetables.png" />
                            </a></li>
                            <li class="source-tab "><a href="#salade" class="text-center week-link responsive-p" data-toggle="tab">
                        <img class="source-tab-img" src="img/salade.png" />
                        </a></li>
                        <li class="source-tab "><a href="#drinks" class="text-center week-link responsive-p" data-toggle="tab">
                            <img class="source-tab-img" src="img/drinks.png" />
                        </a></li>
                        <li class="source-tab "><a href="#snack" class="text-center week-link responsive-p" data-toggle="tab">
                            <img class="source-tab-img" src="img/snack.png"  />
                            </a></li>

                    </ul> 
                    <div class="tab-content">
                        <div id="protein" class="tab-pane in active single-source">
                            <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/14.jpg">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">Roasted salmon</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox" checked>
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1" selected>100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3">300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/2.jpg">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">Roasted chicken</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox">
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3" >300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <hr>
                            <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/5.jpg">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">sheesh tawwoq</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox">
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3" >300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                        <div id="carbs" class="tab-pane single-source">
                        <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/4.jpg">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">pizza</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox" checked>
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1" selected>100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3">300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/8.jpg">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">Sandwich</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox">
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3" >300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        <div id="vegetables" class="tab-pane single-source">
                        <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/3.jpg">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">mix</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox" checked>
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1" selected>100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3">300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="salade" class="tab-pane single-source">
                        <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/salade.PNG">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">green salade</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox" checked>
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1" selected>100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3">300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/3.jpg">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">fruit salade</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox">
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3" >300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <hr>
                            
                        </div>
                        <div id="drinks" class="tab-pane single-source">
                        <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/food.PNG">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">drink 1</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox" checked>
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">quantity</label>
                                                </div>
                                                <input type="text" aria-label="quantity" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/food.PNG">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">drink 2</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox">
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3" >300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        <div id="snack" class="tab-pane single-source">
                        <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/14.jpg">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">snack 1</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox" checked>
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1" selected>100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3">300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <hr>
                            <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/2.jpg">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">snack 2</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox">
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3" >300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <hr>
                            <div class="row single-dish">
                                <div class="col col-sm-4 col-xs-4 col-md-4">
                                    <img src="img/5.jpg">
                                </div>
                                <div class="col  col-sm-8 col-xs-8 col-md-8">
                                    <div class = "row" style="margin-top: 2%;">
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <h4 class="">snack 3</h4>
                                        </div>
                                        <div class="col col-sm-2 col-xs-2 col-md-2">
                                            <input type="checkbox">
                                        </div>
                                        <div class="col col-sm-5 col-xs-5 col-md-5">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">Weight</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Choose...</option>
                                                    <option value="1">100 G</option>
                                                    <option value="2">200 G</option>
                                                    <option value="3" >300 G</option>
                                                </select>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
					<div class="modal-body">
                        
					</div>
					<div class="modal-footer">
						<button class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-success" data-dismiss="modal">Save</button>
					</div>
				</div>
        
			</div>
		</div>
	<!-- //.modal edit meal -->
    <!-- repeat meals Modal -->

    <div class="modal fade" id="repeatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Repeat meals ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to repeat this day's meals for the rest of the week ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br><br>




<!--<div id="div1" ondrop="drop(event)"-->
<!--     ondragover="allowDrop(event)" style="background-color:yellow;width:2000px;height:300px;">-->
<!---->
<!--</div>-->
<!---->
<!--<img id="drag1" src="https://aklmama.000webhostapp.com/first-two-pages/img/logo.png" draggable="true"-->
<!--     ondragstart="drag(event)" width="336" height="169">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

    $(document).ready(function() {
        
        // $('.center-meals').slick({
        // centerMode: true,
        // centerPadding: '60px',
        // slidesToShow: 3,
        // responsive: [
        //     {
        //     breakpoint: 768,
        //     settings: {
        //         arrows: false,
        //         centerMode: true,
        //         centerPadding: '40px',
        //         slidesToShow: 3
        //     }
        //     },
        //     {
        //     breakpoint: 480,
        //     settings: {
        //         arrows: false,
        //         centerMode: true,
        //         centerPadding: '40px',
        //         slidesToShow: 1
        //     }
        //     }
        // ]
        // });
	

    /* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
            event.preventDefault();
            var content = $('.modal-body');
            content.empty();
            var title = $(this).attr("title");
            $('.modal-title').html(title);      	
            // content.html($(this).html());
            $(".modal-profile").modal({show:true});
        });
        
        // change content of modal body after click on source
        $('.source-tab ').click(function(event){
            // event.preventDefault();
            $('.source-tab').removeClass('active');
            $(this).addClass('active');
            
        });

  });
    function allowDrop(ev) {
        /* The default handling is to not allow dropping elements. */
        /* Here we allow it by preventing the default behaviour. */
        ev.preventDefault();
    }

    function drag(ev) {
        /* Here is specified what should be dragged. */
        /* This data will be dropped at the place where the mouse button is released */
        /* Here, we want to drag the element itself, so we set it's ID. */
        ev.dataTransfer.setData("text/html", ev.target.id);
    }
    function drop(ev) {
        ev.preventDefault();
        var data=ev.dataTransfer.getData("text/html");
        /* If you use DOM manipulation functions, their default behaviour it not to
           copy but to alter and move elements. By appending a ".cloneNode(true)",
           you will not move the original element, but create a copy. */
        var nodeCopy = document.getElementById(data).cloneNode(true);
        nodeCopy.id = "newId"; /* We cannot use the same ID */
        ev.target.appendChild(nodeCopy);
    }
</script>
<?php include './components/footer.php'; ?>	