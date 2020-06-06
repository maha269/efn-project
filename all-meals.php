<?php include './components/header.php'; ?>
<?php $daysArray = ['sunday','monday','tuesday','wednesday','thursday'];?>

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

        <!-- ----------------------------------------------------------------------------------------------------------------------------- -->
        <!-- --------------------------------------------------------- week 1 ------------------------------------------------------------ -->
        <!-- ----------------------------------------------------------------------------------------------------------------------------- -->
        <div id="week1" class="tab-pane in active">
            <br>
            <div class=" bg-dark-grey">

                <div class="row">
                    <div class="col-6">
                        <h2 class="responsive-p text-center h4-p" style="float:left;">TOTAL PRICE : <span class="green">200 $</span></h2>
                    </div>
                    <div class="col-6">
                        <div class="dropdown" style="float:right;">
                            <a class="btn repeat-week-btn dropdown-toggle" href="#" role="button"
                               id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Repeat
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">for week 2</a>
                                <a class="dropdown-item" href="#">for week 3</a>
                                <a class="dropdown-item" href="#">for week 4</a>
                            </div>
                        </div>
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
                                    <div class="col-12">
                                        <h2 class="responsive-p text-center">TOTAL PRICE : <span class="green">200 $</span></h2>
                                    </div>
<!--                                    <div class="col col-md-6 col-lg-6 col-sm-6">-->
<!--                                        <h2 class="responsive-p "> CALORIES: <span class="green">2000 KC</span></h2>-->
<!--                                    </div>-->
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h2 class=" responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                    <div class="col-6">
                                        <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h3>TOTAL FATS :<span class="green">200 G</span></h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>TOTAL CALORIES :<span class="green">200 G</span></h3>
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
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3
" class="thumb content">

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

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/plus.png"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
<!--                                                    <h3 class="content-title">MEAL 2</h3>-->
                                                </a>
                                            </div>
                                            <div class="panel-body">

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
                <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Monday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                            <br>
                            <div class=" bg-light-grey">

                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="responsive-p text-center">TOTAL PRICE : <span class="green">200 $</span></h2>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h2 class=" responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                    <div class="col-6">
                                        <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h3>TOTAL FATS :<span class="green">200 G</span></h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>TOTAL CALORIES :<span class="green">200 G</span></h3>
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
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
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

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/15.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
                                                    <h3 class="content-title">MEAL 2</h3>
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
                <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Tuesday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                            <br>
                            <div class=" bg-light-grey">

                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="responsive-p text-center">TOTAL PRICE : <span class="green">200 $</span></h2>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h2 class=" responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                    <div class="col-6">
                                        <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h3>TOTAL FATS :<span class="green">200 G</span></h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>TOTAL CALORIES :<span class="green">200 G</span></h3>
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
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
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

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/5.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
                                                    <h3 class="content-title">MEAL 2</h3>
                                                </a>
                                            </div>
                                            <div class="panel-body">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/7.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
                                                    <h3 class="content-title">MEAL 3</h3>
                                                </a>
                                            </div>
                                            <div class="panel-body">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/15.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
                                                    <h3 class="content-title">MEAL 4</h3>
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
                <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Wednesday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                            <br>
                            <div class=" bg-light-grey">

                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="responsive-p text-center">TOTAL PRICE : <span class="green">200 $</span></h2>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h2 class=" responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                    <div class="col-6">
                                        <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h3>TOTAL FATS :<span class="green">200 G</span></h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>TOTAL CALORIES :<span class="green">200 G</span></h3>
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
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
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
 <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/7.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
                                                    <h3 class="content-title">MEAL 2</h3>
                                                </a>
                                            </div>
                                            <div class="panel-body">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/15.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
                                                    <h3 class="content-title">MEAL 3</h3>
                                                </a>
                                            </div>
                                            <div class="panel-body">

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/11.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
                                                    <h3 class="content-title">MEAL 4</h3>
                                                </a>
                                            </div>
                                            <div class="panel-body">

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/10.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
                                                    <h3 class="content-title">MEAL 5</h3>
                                                </a>
                                            </div>
                                            <div class="panel-body">

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/6.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
                                                    <h3 class="content-title">MEAL 6</h3>
                                                </a>
                                            </div>
                                            <div class="panel-body">

                                            </div>
                                        </div>
                                    </div>

<!--                                    <div class="col-sm-4 col-xs-12 profile" draggable="true" ondragstart="drag(event)">-->
<!--                                        <div class="panel panel-default">-->
<!--                                            <div class="panel-thumbnail">-->
<!--                                                <a href="#" title="meal 2" class="thumb content">-->
<!--                                                    <img class="content-image" src="img/9.JPG"-->
<!--                                                         class="img-responsive img-rounded"-->
<!--                                                         data-toggle="modal" data-target=".modal-profile-lg"-->
<!--                                                         style="border: 1Px solid #DDD7D7;">-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                            <div class="panel-body">-->
<!--                                                <h4 class="profile-name"></h4>-->
<!--                                                <p></p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->


                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class=" card days-card">
                <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <ul class="nav nav-tabs days-nav">
                        <li class="active"><a class="text-center day-link responsive-p active">Thursday</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sun" class="tab-pane in active">
                            <br>
                            <div class=" bg-light-grey">

                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="responsive-p text-center">TOTAL PRICE : <span class="green">200 $</span></h2>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h2 class=" responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                    <div class="col-6">
                                        <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h3>TOTAL FATS :<span class="green">200 G</span></h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>TOTAL CALORIES :<span class="green">200 G</span></h3>
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
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
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

                                    <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                         ondragstart="drag(event)">
                                        <div class="panel panel-default">
                                            <div class="panel-thumbnail">
                                                <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                    <div class="content-overlay"></div>
                                                    <img class="content-image" src="img/15.jpg"
                                                         class="img-responsive img-rounded" data-toggle="modal"
                                                         data-target=".modal-profile-lg">
                                                    <h3 class="content-title">MEAL 2</h3>
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


        </div>

        <!-- ----------------------------------------------------------------------------------------------------------------------------- -->
        <!-- --------------------------------------------------------- week 2 ---------------------------------------------------- -->
        <!-- ----------------------------------------------------------------------------------------------------------------------------- -->

        <div id="week2" class="tab-pane in fade">
                <br>
            <div class=" bg-dark-grey">

                <div class="row">
                    <div class="col-6">
                        <h2 class="responsive-p text-center h4-p" style="float:left;">TOTAL PRICE : <span class="green">200 $</span></h2>
                    </div>
                    <div class="col-6">
                        <div class="dropdown" style="float:right;">
                            <a class="btn repeat-week-btn dropdown-toggle" href="#" role="button"
                               id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Repeat
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">for week 1</a>
                                <a class="dropdown-item" href="#">for week 3</a>
                                <a class="dropdown-item" href="#">for week 4</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <?php for($i = 0 ; $i  < count($daysArray) ; $i++){ ?>
                    <div class=" card days-card">
                        <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                                <ul class="nav nav-tabs days-nav">
                                    <li class="active"><a class="text-center day-link responsive-p active">    <?php echo $daysArray[$i];?> </a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="sun" class="tab-pane in active">
                                        <br>
                                        <div class=" bg-light-grey">

                                            <div class="row">
                                                <div class="col-12">
                                                    <h2 class="responsive-p text-center">TOTAL PRICE : <span class="green">200 $</span></h2>
                                                </div>

                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <h2 class=" responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                                <div class="col-6">
                                                    <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                                </div>
                                                <div class="col-6">
                                                    <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <h3>TOTAL FATS :<span class="green">200 G</span></h3>
                                                </div>
                                                <div class="col-6">
                                                    <h3>TOTAL CALORIES :<span class="green">200 G</span></h3>
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
                                                            <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
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

                                               <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                                     ondragstart="drag(event)">
                                                    <div class="panel panel-default">
                                                        <div class="panel-thumbnail">
                                                            <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                                <div class="content-overlay"></div>
                                                                <img class="content-image" src="img/15.jpg"
                                                                     class="img-responsive img-rounded" data-toggle="modal"
                                                                     data-target=".modal-profile-lg">
                                                                <h3 class="content-title">MEAL 2</h3>
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
                <?php }?>

            </div>

        <!-- ----------------------------------------------------------------------------------------------------------------------------- -->
        <!-- --------------------------------------------------------- week 3 ---------------------------------------------------- -->
        <!-- ----------------------------------------------------------------------------------------------------------------------------- -->

            <div id="week3" class="tab-pane in fade">
                <br>
                <div class=" bg-dark-grey">

                    <div class="row">
                        <div class="col-6">
                            <h2 class="responsive-p text-center h4-p" style="float:left;">TOTAL PRICE : <span class="green">200 $</span></h2>
                        </div>
                        <div class="col-6">
                            <div class="dropdown" style="float:right;">
                                <a class="btn repeat-week-btn dropdown-toggle" href="#" role="button"
                                   id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Repeat
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">for week 1</a>
                                    <a class="dropdown-item" href="#">for week 2</a>
                                    <a class="dropdown-item" href="#">for week 4</a>
                                </div>
                            </div>
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
                                        <div class="col-12">
                                            <h2 class="responsive-p text-center">TOTAL PRICE : <span class="green">200 $</span></h2>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <h2 class=" responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                        <div class="col-6">
                                            <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                        </div>
                                        <div class="col-6">
                                            <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3>TOTAL FATS :<span class="green">200 G</span></h3>
                                        </div>
                                        <div class="col-6">
                                            <h3>TOTAL CALORIES :<span class="green">200 G</span></h3>
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
                                                    <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
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

                                        <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                             ondragstart="drag(event)">
                                            <div class="panel panel-default">
                                                <div class="panel-thumbnail">
                                                    <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                        <div class="content-overlay"></div>
                                                        <img class="content-image" src="img/15.jpg"
                                                             class="img-responsive img-rounded" data-toggle="modal"
                                                             data-target=".modal-profile-lg">
                                                        <h3 class="content-title">MEAL 2</h3>
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
                    <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <ul class="nav nav-tabs days-nav">
                            <li class="active"><a class="text-center day-link responsive-p active">Monday</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="sun" class="tab-pane in active">
                                <br>
                                <div class=" bg-light-grey">

                                    <div class="row">
                                        <div class="col col-md-6 col-lg-6 col-sm-6">
                                            <h2 class=" text-center">PRICE : <span class="green">200 $</span></h2>
                                        </div>
                                        <div class="col col-md-6 col-lg-6 col-sm-6">
                                            <h2 class=" "> CALORIES: <span class="green">2000 KC</span></h2>
                                        </div>
                                    </div><hr>
                                    <div class="row">
                                        <div class="col">
                                            <h2 class=" responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                            <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                        </div>
                                        <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                            <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                        </div>
                                        <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                            <h3>TOTAL FATS :<span class="green">200 G</span></h3>
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
                                                    <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
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

                                        <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                             ondragstart="drag(event)">
                                            <div class="panel panel-default">
                                                <div class="panel-thumbnail">
                                                    <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                        <div class="content-overlay"></div>
                                                        <img class="content-image" src="img/15.jpg"
                                                             class="img-responsive img-rounded" data-toggle="modal"
                                                             data-target=".modal-profile-lg">
                                                        <h3 class="content-title">MEAL 2</h3>
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
                    <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <ul class="nav nav-tabs days-nav">
                            <li class="active"><a class="text-center day-link responsive-p active">Tuesday</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="sun" class="tab-pane in active">
                                <br>
                                <div class=" bg-light-grey">

                                    <div class="row">
                                        <div class="col col-md-6 col-lg-6 col-sm-6">
                                            <h2 class=" text-center">PRICE : <span class="green">200 $</span></h2>
                                        </div>
                                        <div class="col col-md-6 col-lg-6 col-sm-6">
                                            <h2 class=" "> CALORIES: <span class="green">2000 KC</span></h2>
                                        </div>
                                    </div><hr>
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                            <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                        </div>
                                        <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                            <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                        </div>
                                        <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                            <h3>TOTAL FATS :<span class="green">200 G</span></h3>
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
                                                    <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
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

                                        <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                             ondragstart="drag(event)">
                                            <div class="panel panel-default">
                                                <div class="panel-thumbnail">
                                                    <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                        <div class="content-overlay"></div>
                                                        <img class="content-image" src="img/15.jpg"
                                                             class="img-responsive img-rounded" data-toggle="modal"
                                                             data-target=".modal-profile-lg">
                                                        <h3 class="content-title">MEAL 2</h3>
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
                    <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <ul class="nav nav-tabs days-nav">
                            <li class="active"><a class="text-center day-link responsive-p active">Wednesday</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="sun" class="tab-pane in active">
                                <br>
                                <div class=" bg-light-grey">

                                    <div class="row">
                                        <div class="col col-md-6 col-lg-6 col-sm-6">
                                            <h2 class=" text-center">PRICE : <span class="green">200 $</span></h2>
                                        </div>
                                        <div class="col col-md-6 col-lg-6 col-sm-6">
                                            <h2 class=" "> CALORIES: <span class="green">2000 KC</span></h2>
                                        </div>
                                    </div><hr>
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                            <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                        </div>
                                        <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                            <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                        </div>
                                        <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                            <h3>TOTAL FATS :<span class="green">200 G</span></h3>
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
                                                    <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
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

                                        <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                             ondragstart="drag(event)">
                                            <div class="panel panel-default">
                                                <div class="panel-thumbnail">
                                                    <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                        <div class="content-overlay"></div>
                                                        <img class="content-image" src="img/15.jpg"
                                                             class="img-responsive img-rounded" data-toggle="modal"
                                                             data-target=".modal-profile-lg">
                                                        <h3 class="content-title">MEAL 2</h3>
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
                    <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <ul class="nav nav-tabs days-nav">
                            <li class="active"><a class="text-center day-link responsive-p active">Thursday</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="sun" class="tab-pane in active">
                                <br>
                                <div class=" bg-light-grey">

                                    <div class="row">
                                        <div class="col col-md-6 col-lg-6 col-sm-6">
                                            <h2 class=" text-center">PRICE : <span class="green">200 $</span></h2>
                                        </div>
                                        <div class="col col-md-6 col-lg-6 col-sm-6">
                                            <h2 class=" "> CALORIES: <span class="green">2000 KC</span></h2>
                                        </div>
                                    </div><hr>
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                            <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                        </div>
                                        <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                            <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                        </div>
                                        <div class="col col-md-4 col-lg-4 col-sm-4 ">
                                            <h3>TOTAL FATS :<span class="green">200 G</span></h3>
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
                                                    <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
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

                                        <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                             ondragstart="drag(event)">
                                            <div class="panel panel-default">
                                                <div class="panel-thumbnail">
                                                    <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                        <div class="content-overlay"></div>
                                                        <img class="content-image" src="img/15.jpg"
                                                             class="img-responsive img-rounded" data-toggle="modal"
                                                             data-target=".modal-profile-lg">
                                                        <h3 class="content-title">MEAL 2</h3>
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


            </div>

        <!-- ----------------------------------------------------------------------------------------------------------------------------- -->
        <!-- --------------------------------------------------------- week 4 ---------------------------------------------------- -->
        <!-- ----------------------------------------------------------------------------------------------------------------------------- -->

        <div id="week4" class="tab-pane in fade">
                <br>
            <div class=" bg-dark-grey">

                <div class="row">
                    <div class="col-6">
                        <h2 class="responsive-p text-center h4-p" style="float:left;">TOTAL PRICE : <span class="green">200 $</span></h2>
                    </div>
                    <div class="col-6">
                        <div class="dropdown" style="float:right;">
                            <a class="btn repeat-week-btn dropdown-toggle" href="#" role="button"
                               id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Repeat
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">for week 1</a>
                                <a class="dropdown-item" href="#">for week 2</a>
                                <a class="dropdown-item" href="#">for week 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php for($i = 0 ; $i  < count($daysArray) ; $i++){ ?>
                    <div class=" card days-card">
                        <div class="card-body" ondrop="drop(event)" ondragover="allowDrop(event)">
                                <ul class="nav nav-tabs days-nav">
                                    <li class="active"><a class="text-center day-link responsive-p active">    <?php echo $daysArray[$i];?> </a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="sun" class="tab-pane in active">
                                        <br>
                                        <div class=" bg-light-grey">

                                            <div class="row">
                                                <div class="col-12">
                                                    <h2 class="responsive-p text-center">TOTAL PRICE : <span class="green">200 $</span></h2>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <h2 class=" responsive-p green font-weight-bold"> Nutrition facts </h2>
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
                                                <div class="col-6">
                                                    <h3>TOTAL PROTEIN : <span class="green">200 G</span></h3>
                                                </div>
                                                <div class="col-6">
                                                    <h3>TOTAL CARBS :<span class="green">200 G</span></h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <h3>TOTAL FATS :<span class="green">200 G</span></h3>
                                                </div>
                                                <div class="col-6">
                                                    <h3>TOTAL CALORIES :<span class="green">200 G</span></h3>
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
                                                            <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
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

                                               <div class="col-sm-4 col-xs-12 profile img-hover-zoom" draggable="true"
                                                     ondragstart="drag(event)">
                                                    <div class="panel panel-default">
                                                        <div class="panel-thumbnail">
                                                            <a href="#" title="roasted salmon : 2
orange juice : 2
salad : 3" class="thumb content">
                                                                <div class="content-overlay"></div>
                                                                <img class="content-image" src="img/15.jpg"
                                                                     class="img-responsive img-rounded" data-toggle="modal"
                                                                     data-target=".modal-profile-lg">
                                                                <h3 class="content-title">MEAL 2</h3>
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
                <?php }?>

            </div>

    </div>

    <!-- ----------------------------------------------------------------------------------------------------------------------------- -->
    <!-- ---------------------------------------------------------modal- edit meal ---------------------------------------------- -->
    <!-- ----------------------------------------------------------------------------------------------------------------------------- -->

    <div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">×</button>
                    <h3 class="modal-title"></h3>
                </div>
                <div class="modal-facts bg-light-grey">
                    <div class="row">
                        <div class="col-12">
                            <h2 class=" text-center">TOTAL PRICE : <span class="green">200 $</span></h2>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col">
                            <h2 class="responsive-p green font-weight-bold">Nutrition facts </h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-6">
                            <h3 class=" font-weight-bold">TOTAL PROTEIN : <span class="green">200 G</span> </h3>
                        </div>
                        <div class="col-6">
                            <h3  class=" font-weight-bold">TOTAL CARBS :<span class="green">200 G</span> </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h3 class=" font-weight-bold">TOTAL FATS : <span class="green">200 G</span> </h3>
                        </div>
                        <div class="col-6">
                            <h3 class=" font-weight-bold">CALORIES : <span class="green">200 KC</span> </h3>
                        </div>
                    </div>
                </div>
                <div class="row acordion">
                    <div class="col">
                        <h2></h2>
                        <div class="tabs">
        <!-- --------------------------------------------------------- protein ---------------------------------------------------- -->
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck1">
                                <label class="tab-label" for="chck1">protein </label>
                                <div class="tab-content row">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <h5 class="green source-info">select ONE <span class="text-danger">free</span> dish</h5>
                                    <div id="protein" class="tab-pane in active single-source">
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6 check-meal">
                                                            <div class="checkbox">
                                                                <label for="checkmeout">
                                                                    <input type="checkbox" class ="custom-checkbox" id="checkmeout">
                                                                    <span class="check-square"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mb-3 col-12 col-lg-6 ">

                                                            <div class="input_div">
                                                                <label class="input-group-text"
                                                                       for="inputGroupSelect01">Weight</label>
        <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <div class="row">
                                                                    <input type="button"
                                                                           class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                           value="-" id="moins" data-msource="protein" data-meal="1">
                                                                    <input type="text"
                                                                           class="dish-input-check col-6 form-control "
                                                                           style="" value="50" id="count_protein_1" >

                                                                    <input type="button"
                                                                           class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                           style="" value="+" id="plus" data-msource="protein" data-meal="1">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=" col-6 image-name">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                            <h4 class=" text-center">Roasted salmon</h4>
                                                        </div>
                                                        <div class=" col-12 col-lg-6 order-1">
                                                            <img src="img/14.jpg">
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <div class="row">
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="protein" data-meal="2">
                                                                <input type="text"
                                                                       class="dish-input-check col-6 form-control weight_value"
                                                                       style="" value="50" id="count_protein_2" >

                                                                <input type="button"
                                                                       class="dish-input-check plus-weight weight-btn form-control col-3"
                                                                       style="" value="+" id="plus" data-msource="protein" data-meal="2">
                                                                <!--                                                                   onclick="plus(this)"-->

                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">Roasted chicken</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/12.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>

                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                            <div class="row">
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="protein" data-meal="3">
                                                                <input type="text"
                                                                       class="dish-input-check col-6 form-control weight_value"
                                                                       style="" value="50" id="count_protein_3" >

                                                                <input type="button"
                                                                       class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                       style="" value="+" id="plus" data-msource="protein" data-meal="3">
                                                                <!--                                                                   onclick="plus(this)"-->

                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">dish 3</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/3.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        <!-- ---------------------------------------------------------carbohydrates---------------------------------------------------- -->
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck2">
                                <label class="tab-label" for="chck2">carbohydrates </label>
                                <div class="tab-content row">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <h5 class="green source-info">select TWO <span class="text-danger">free</span> dishes</h5>
                                    <div id="carb" class="tab-pane in active single-source">
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">
                                                                <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="carb" data-meal="1">
                                                                <input type="text"
                                                                       class="dish-input-check col-6 form-control weight_value"
                                                                       style="" value="50" id="count_carb_1" >

                                                                <input type="button"
                                                                       class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                       style="" value="+" id="plus" data-msource="carb" data-meal="1">
                                                                <!--                                                                   onclick="plus(this)"-->

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">carb dish1</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/11.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">
                                                                <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="carb" data-meal="2">
                                                                <input type="text"
                                                                       class="dish-input-check col-6 form-control weight_value"
                                                                       style="" value="50" id="count_carb_2" >

                                                                <input type="button"
                                                                       class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                       style="" value="+" id="plus" data-msource="carb" data-meal="2">
                                                                <!--                                                                   onclick="plus(this)"-->

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">carb dish2</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/7.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="carb" data-meal="3">
                                                                <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="50" id="count_carb_3" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="carb" data-meal="3">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">carb dish3</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/8.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        <!-- --------------------------------------------------------- vegetables --------------------------------------------------- -->
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck3">
                                <label class="tab-label" for="chck3">vegetables </label>
                                <div class="tab-content row">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <h5 class="green source-info">select THREE <span class="text-danger">free</span> dishes</h5>
                                    <div id="veg" class="tab-pane in active single-source">
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="veg" data-meal="1">
                                                                <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="50" id="count_veg_1" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="veg" data-meal="1">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">veg dish1</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/14.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="veg" data-meal="2">
                                                                <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="50" id="count_veg_2" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="veg" data-meal="2">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">veg dish2</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/14.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="veg" data-meal="3">
                                                                <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="50" id="count_veg_3" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="veg" data-meal="3">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">veg dish3</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/3.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
        <!-- --------------------------------------------------------- drinks ---------------------------------------------------- -->
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck4">
                                <label class="tab-label" for="chck4">drinks </label>
                                <div class="tab-content row">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <h5 class="green source-info">select THREE <span class="text-danger">free</span> drinks</h5>
                                    <div id="drinks" class="tab-pane in active single-source">
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Quantity</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-quantity form-control col-3"
                                                                       value="-" id="moins" data-msource="drinks" data-meal="1">
                                                                <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="1" id="count_drinks_1" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-quantity form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="drinks" data-meal="1">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">drink 1</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/10.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Quantity</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-quantity form-control col-3"
                                                                       value="-" id="moins" data-msource="drinks" data-meal="2">
                                                            <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="1" id="count_drinks_2" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-quantity form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="drinks" data-meal="2">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">drink 2</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/14.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Quantity</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-quantity form-control col-3"
                                                                       value="-" id="moins" data-msource="drinks" data-meal="3">
                                                            <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="1" id="count_drinks_3" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-quantity form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="drinks" data-meal="3">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">drink 3</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/3.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        <!-- --------------------------------------------------------- sauces ---------------------------------------------------- -->
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck5">
                                <label class="tab-label" for="chck5">sauces </label>
                                <div class="tab-content row">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <h5 class="green source-info">select ONE <span class="text-danger">free</span> sauces</h5>
                                    <div id="sauces" class="tab-pane in active single-source">
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="sauces" data-meal="1">
                                                            <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="50" id="count_sauces_1" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="sauces" data-meal="1">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">sauce 1</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/13.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="sauces" data-meal="2">
                                                            <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="50" id="count_sauces_2" >
                                                           
                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="sauces" data-meal="2">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">sauce 2</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/14.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="sauces" data-meal="3">
                                                            <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="50" id="count_sauces_3" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="sauces" data-meal="3">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">sauce 3</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/8.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        <!-- ---------------------------------------------------------snack ---------------------------------------------------- -->
                            <div class="tab">
                                <input class="hidden_input" type="checkbox" id="chck6">
                                <label class="tab-label" for="chck6">snack </label>
                                <div class="tab-content row">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <h5 class="green source-info">select ONE <span class="text-danger">free</span> snack</h5>
                                    <div id="snack" class="tab-pane in active single-source">
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check weight-btn minus-weight form-control col-3"
                                                                       value="-" id="moins" data-msource="snack" data-meal="1">
                                                            <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="50" id="count_snack_1" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="snack" data-meal="1">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">snack 1</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/11.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check minus-weight weight-btn form-control col-3"
                                                                       value="-" id="moins" data-msource="snack" data-meal="2">
                                                            <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="50" id="count_snack_2" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="snack" data-meal="2">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">snack 2</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/13.jpg">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        </div>
                                        <div class="single-dish-wrapper">
                                            <div class="row single-dish" style="flex-wrap: nowrap;">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 check-meal">
                                                        <div class="checkbox">
                                                            <label for="checkmeout">
                                                                <!--                                                                 choose-->
                                                                <input type="checkbox" class ="custom-checkbox" id="checkmeout">

                                                                <span class="check-square"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-3 col-12 col-lg-6 ">

                                                        <div class="input_div">
                                                            <label class="input-group-text"
                                                                   for="inputGroupSelect01">Weight</label>
                                                            <div class="row">

                                                            <!--                              you need to change data-msource and data-meal and id attributes in the next three inputs-->
                                                                <input type="button"
                                                                       class="dish-input-check minus-weight weight-btn form-control col-3"
                                                                       value="-" id="moins" data-msource="snack" data-meal="3">
                                                            <input type="text"
                                                                   class="dish-input-check col-6 form-control weight_value"
                                                                   style="" value="50" id="count_snack_3" >

                                                            <input type="button"
                                                                   class="dish-input-check weight-btn plus-weight form-control col-3"
                                                                   style="" value="+" id="plus" data-msource="snack" data-meal="3">
                                                            <!--                                                                   onclick="plus(this)"-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-6 image-name">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 order-2 order-lg-0">
                                                        <h4 class=" text-center">snack 3</h4>
                                                    </div>
                                                    <div class=" col-12 col-lg-6 order-1">
                                                        <img src="img/5.jpg">
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

<?php include './components/footer.php'; ?>