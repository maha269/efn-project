<?php include './components/header.php'; ?>
<div class="container">
    <div class="top-section">
        <img class="cover-img" src="img/monthly cover.PNG"><br><br><br><br><br>
        <!-- <img class="cover-img" src="img/weekly cover.PNG"><br><br><br><br><br> -->
    </div>
    <ul class="nav nav-tabs weeks-nav ">
        <li class="active"><a data-toggle="tab" href="#week1" class="text-center week-link responsive-p active">Week
                1</a></li>
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
                    <div class="col col-md-6 col-lg-6 col-sm-6">
                        <h3>TOTAL PRICE : 200 $</h3>
                    </div>
                    <div class="col col-md-6 col-lg-6 col-sm-6">
                        <h3>CALORIES: 2000 KC</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <h2 class="green font-weight-bold"> nutrition facts </h2>
                        <p></p>
                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <!-- <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button> -->
                        <div class="dropdown" style="float:right;">
                            <a class="btn btn-outline-success dropdown-toggle" href="#" role="button"
                               id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Repeat first week meals
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">for week 2</a>
                                <a class="dropdown-item" href="#">for week 3</a>
                                <a class="dropdown-item" href="#">for week 4</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                        <h5>TOTAL PROTEIN : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                        <h5>TOTAL CARBS : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                        <h5>TOTAL FATS : 200 G</h5>
                    </div>
                </div>
            </div>

            <div class=" card days-card">
                <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Sunday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                            <br>
                            <div class=" bg-light-grey">

                                <div class="row">
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Sunday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <br><div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Monday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Tuesday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Wednesday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Thursday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Friday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                    <div class="col col-md-6 col-lg-6 col-sm-6">
                        <h3>TOTAL PRICE : 200 $</h3>
                    </div>
                    <div class="col col-md-6 col-lg-6 col-sm-6">
                        <h3>CALORIES: 2000 KC</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="green font-weight-bold">Second week nutrition facts </h2>
                        <p></p>
                    </div>
                    <div class="col">
                        <div class="dropdown" style="float:right;">
                            <a class="btn btn-outline-success dropdown-toggle" href="#" role="button"
                               id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Repeat second week meals
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">for week 1</a>
                                <a class="dropdown-item" href="#">for week 3</a>
                                <a class="dropdown-item" href="#">for week 4</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                        <h5>TOTAL PROTEIN : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                        <h5>TOTAL CARBS : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Sunday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Monday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Tuesday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Wednesday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Thursday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Friday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                    <div class="col col-md-6 col-lg-6 col-sm-6">
                        <h3>TOTAL PRICE : 200 $</h3>
                    </div>
                    <div class="col col-md-6 col-lg-6 col-sm-6">
                        <h3>CALORIES: 2000 KC</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="green font-weight-bold">Third week nutrition facts </h2>
                        <p></p>
                    </div>
                    <div class="col">
                        <!-- <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button> -->
                        <div class="dropdown" style="float:right;">
                            <a class="btn btn-outline-success dropdown-toggle" href="#" role="button"
                               id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Repeat third week meals
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">for week 1</a>
                                <a class="dropdown-item" href="#">for week 2</a>
                                <a class="dropdown-item" href="#">for week 4</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                        <h5>TOTAL PROTEIN : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                        <h5>TOTAL CARBS : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Sunday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Monday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Tuesday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Wednesday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Thursday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Friday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                    <div class="col col-md-6 col-lg-6 col-sm-6">
                        <h3>TOTAL PRICE : 200 $</h3>
                    </div>
                    <div class="col col-md-6 col-lg-6 col-sm-6">
                        <h3>CALORIES: 2000 KC</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 class="green font-weight-bold">Fourth week nutrition facts </h2>
                        <p></p>
                    </div>
                    <div class="col">
                        <!-- <button class="btn repeat-week-btn" data-toggle="modal" data-target="#repeatModal">Repeat </button> -->
                        <div class="dropdown" style="float:right;">
                            <a class="btn btn-outline-success dropdown-toggle" href="#" role="button"
                               id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                        <h5>TOTAL PROTEIN : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                        <h5>TOTAL CARBS : 200 G</h5>
                    </div>
                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Sunday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Monday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Tuesday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Wednesday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>TOTAL PRICE : 200 $</h3>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6">
                                        <h3>CALORIES: 2000 KC</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Thursday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                    <div class="col">
                                        <button class="btn repeat-week-btn" data-toggle="modal"
                                                data-target="#repeatModal">Repeat
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                                    <div class="col col-md-6 col-lg-6 col-sm-6 ">
                                        <h4>TOTAL PRICE : 200 $</h4>
                                    </div>
                                    <div class="col col-md-6 col-lg-6 col-sm-6 ">
                                        <h4>CALORIES: 2000 KC</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h2 class="green font-weight-bold">Friday nutrition facts </h2>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="row">
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL PROTEIN : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL CARBS : 200 G</h5>
                                    </div>
                                    <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                        <h5>TOTAL FATS : 200 G</h5>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="container-fluid">
                                <div class="meal row" id="profile-grid">

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="meal 1" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/8.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
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
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded"
                                                         data-toggle="modal" data-target=".modal-profile-lg"
                                                         style="border: 1Px solid #DDD7D7;">
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
                            <h2 class="green font-weight-bold">first week nutrition facts </h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col col-md-6 col-lg-6 col-sm-6 ">
                            <h3>TOTAL PRICE : 200 $</h3>
                        </div>
                        <div class="col col-md-6 col-lg-6 col-sm-6 ">
                            <h3>CALORIES: 2000 KC</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-4 col-lg-4 col-sm-4 ">
                            <h5 class="font-weight-bold">TOTAL PROTEIN : 200 G</h5>
                        </div>
                        <div class="col col-md-4 col-lg-4 col-sm-4 ">
                            <h5  class="font-weight-bold">TOTAL CARBS : 200 G</h5>
                        </div>
                        <div class="col col-md-4 col-lg-4 col-sm-4 ">
                            <h5 class="font-weight-bold">TOTAL FATS : 200 G</h5>
                        </div>
                    </div>
                </div>
                <div class="row acordion">
                    <div class="col">
                        <h2></h2>
                        <div class="tabs">
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck1">
                                <label class="tab-label" for="chck1">protein </label>
                                <div class="tab-content row">
                                    <div id="protein" class="tab-pane in active single-source">
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
<!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
<!--                                                        <input type="checkbox" id="_checkbox">-->
<!--                                                        <label for="_checkbox">-->
<!--                                                            <div id="tick_mark"></div>-->
<!--                                                        </label>-->
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">
                                                        <!-- <div class="input-group-prepend">
                                                        </div> -->
                                                        <!-- <select class="custom-select" id="inputGroupSelect01">
                                                            <option value="1" selected>100 G</option>
                                                            <option value="2">200 G</option>
                                                            <option value="3">300 G</option>
                                                        </select> -->
                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
<!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_protein_1" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="protein" data-meal="1">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="protein" data-meal="1">
<!--                                                                   onclick="plus(this)"-->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-h4">Roasted salmon</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/14.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
<!--                                                                choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
<!--                                                        <input type="checkbox" id="_checkbox">-->
<!--                                                        <label for="_checkbox">-->
<!--                                                            <div id="tick_mark"></div>-->
<!--                                                        </label>-->
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">
                                                        <!-- <div class="input-group-prepend">
                                                        </div> -->
                                                        <!-- <select class="custom-select" id="inputGroupSelect01">
                                                            <option value="1" selected>100 G</option>
                                                            <option value="2">200 G</option>
                                                            <option value="3">300 G</option>
                                                        </select> -->
                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
<!--                                you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_protein_2" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="protein" data-meal="2">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="protein" data-meal="2">
                                                            <!--                                                                   onclick="plus(this)"-->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-p">Roasted chicken</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/2.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
<!--                                                        <input type="checkbox" id="_checkbox">-->
<!--                                                        <label for="_checkbox">-->
<!--                                                            <div id="tick_mark"></div>-->
<!--                                                        </label>-->
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
<!--                                                                choose-->
                                                                <input type="checkbox" class ="custom-checkbox"  id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">
                                                        <!-- <div class="input-group-prepend">
                                                        </div> -->
                                                        <!-- <select class="custom-select" id="inputGroupSelect01">
                                                            <option value="1" selected>100 G</option>
                                                            <option value="2">200 G</option>
                                                            <option value="3">300 G</option>
                                                        </select> -->
                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                <!--                                you need to change data-source and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_protein_3" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="protein" data-meal="3">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="protein" data-meal="3">
                                                            <!--                                                                   onclick="plus(this)"-->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-p">dish 3</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/13.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck2">
                                <label class="tab-label" for="chck2">carbohydrates </label>
                                <div class="tab-content row">
                                    <div id="protein" class="tab-pane in active single-source">
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
        <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_carb_1" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="carb" data-meal="1">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="carb" data-meal="1">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-h4">carb dish 1</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/14.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
   <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_carb_2" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="carb" data-meal="2">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="carb" data-meal="2">
                                                            <!--                                                                   onclick="plus(this)"-->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-h4">carb dish 2</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/14.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck3">
                                <label class="tab-label" for="chck3">vegetables </label>
                                <div class="tab-content row">
                                    <div id="protein" class="tab-pane in active single-source">
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_veg_1" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="veg" data-meal="1">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="veg" data-meal="1">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-h4">Roasted salmon</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/14.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
         <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_veg_2" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="veg" data-meal="2">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="veg" data-meal="2">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-h4">Roasted salmon</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/14.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck4">
                                <label class="tab-label" for="chck4">drinks </label>
                                <div class="tab-content row">
                                    <div id="protein" class="tab-pane in active single-source">
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_drink_1" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="drink" data-meal="1">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="drink" data-meal="1">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-h4">Drink 1</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/14.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_drink_2" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="drink" data-meal="2">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="drink" data-meal="2">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-h4">drink 2</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/14.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck5">
                                <label class="tab-label" for="chck5">sauces </label>
                                <div class="tab-content row">
                                    <div id="protein" class="tab-pane in active single-source">
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_sauce_1" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="sauce" data-meal="1">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="sauce" data-meal="1">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-h4">sauce 1</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/14.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_sauce_2" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="sauce" data-meal="2">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="sauce" data-meal="2">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-h4">sauce 2</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/14.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck6">
                                <label class="tab-label" for="chck6">snack </label>
                                <div class="tab-content row">
                                    <div id="protein" class="tab-pane in active single-source">
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_snack_1" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="snack" data-meal="1">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="snack" data-meal="1">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-h4">snack 1</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/14.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row single-dish" style="margin-top: 2%;flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 check-meal">
                                                        <div class="checkbox">


                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-md-6">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <input type="text"
                                                                   class="dish-input-check col form-control weight_value"
                                                                   style="" value="50" id="count_snack_2" >
                                                            <input type="button"
                                                                   class="dish-input-check minus-weight form-control col"
                                                                   value="-" id="moins" data-msource="snack" data-meal="2">
                                                            <input type="button"
                                                                   class="dish-input-check plus-weight form-control col"
                                                                   style="" value="+" id="plus" data-msource="snack" data-meal="2">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-md-6 order-1">
                                                        <h4 class="responsive-h4">snack 2</h4>
                                                    </div>
                                                    <div class=" col-12 col-md-6 order-0 order-md-2">
                                                        <img src="img/14.jpg">
                                                    </div>
                                                </div>

                                            </div>
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

    <div class="modal fade" id="repeatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="false">
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    $('.plus-weight').click(function(){
        var meal = $(this).data().meal;
        var dishSource = $(this).data().msource;
        var countEl = $("#count_"+ dishSource +"_" + meal);
        console.log("count_"+ dishSource +"_" + meal);
        $count = parseInt($("#count_" + dishSource +"_" + meal).val());
        $count += 50;
        $("#count_" + dishSource +"_" + meal).val($count);
    });
    $('.minus-weight').click(function(){
        var meal = $(this).data().meal;
        var dishSource = $(this).data().msource;
        var countEl = $("#count_"+ dishSource +"_" + meal);
        console.log("count_"+ dishSource +"_" + meal);
        $count = parseInt($("#count_" + dishSource +"_" + meal).val());
        if ($count > 50) {
            $count -= 50;
            $("#count_" + dishSource + "_" + meal).val($count);
        }
    });
    function plus(event) {
        var meal = event.data;
        console.log(meal);
        count += 50;
        // countEl.value = count;
    }

    function minus() {
        if (count > 50) {
            count -= 50;
            countEl.value = count;
        }
    }

    $(document).ready(function () {


        /* show lightbox when clicking a thumbnail */
        $('a.thumb').click(function (event) {
            event.preventDefault();
            var content = $('.modal-body');
            content.empty();
            var title = $(this).attr("title");
            $('.modal-title').html(title);
            // content.html($(this).html());
            $(".modal-profile").modal({show: true});
        });

        // change content of modal body after click on source
        $('.source-tab ').click(function (event) {
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
        var data = ev.dataTransfer.getData("text/html");
        /* If you use DOM manipulation functions, their default behaviour it not to
           copy but to alter and move elements. By appending a ".cloneNode(true)",
           you will not move the original element, but create a copy. */
        var nodeCopy = document.getElementById(data).cloneNode(true);
        nodeCopy.id = "newId"; /* We cannot use the same ID */
        ev.target.appendChild(nodeCopy);
    }
</script>

<?php include './components/footer.php'; ?>