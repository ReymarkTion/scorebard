<?php 
  include 'includes/dbh.inc.php';
  include 'includes/scoreboard.inc.php'; 
  session_start();

  $obj = new scoreboard();
  $foul_home = $obj->getFoulHome();
  $foul_guest = $obj->getFoulGuest();

 ?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/theme.css" type="text/css">
  <link rel="stylesheet" type="css/mod.css" href="">
</head>
<body>






<div class="container">
  <div class="row justify-content-center">
    
    <div class="col-sm-0.5"></div>

    <div class="col-sm-4">
      <div class="card my-4 shadow">
         <div class="card-header bg-secondary">
          <h5 class="mb-0 text-left text-info color-white"> <strong>Ebarle Street CDOD</strong> </h5>
        </div>
      </div>
    </div>

    <div class="col-sm-1"></div>

    <div class="col-sm-1">
      <div class="card my-4">
        <div class="card-header bg-light">
          <h5 class="text-center vs-font font-weight-bold">VS</h5>
        </div>
      </div>
    </div>

     <div class="col-sm-1"></div>

    <div class="col-sm-4">
      <div class="card my-4 shadow">
         <div class="card-header bg-secondary">
          <h5 class="mb-0 text-left text-info color-white"> <strong>Vicente Roa Street CDOC</strong> </h5>
        </div>
      </div>
    </div>

    <div class="col-sm-0.5"></div>

  </div>
</div>



<div class="container margin-bottom">
  <div class="row">
    <div class="col-sm-1"></div>

    <!-- foul home -->
    <div class="col-sm-2">
      <a href="#">
      <div class="card my-4 shadow">
        <div class="card-body">
          <p class="card-text">
            <div class="container">
                <div class="row">
                  <div class="col-md-12">
                      <h1 class="text-center h1"><?php echo $foul_home; ?></h1>

                      <button id="MyButton">Click Me!</button>

                      <script>
                        $("#MyButton").click( function(){
                          $.post("somefile.php");
                          
                        });
                      </script>


                  </div>
                </div>
            </div>
          </p>
        </div>
      </div>
      </a>
    </div>

    <div class="col-sm-1"></div>

    <div class="col-sm-4">
      <div class="card my-1 shadow">
        <div class="card-header bg-primary">
          <h5 class="mb-0 text-center"> <strong>GAME TIME</strong> </h5>
        </div>
        <div class="card-body">
          <p class="card-text">
            <div class="container">
                <div class="row">
                  <div class="col-md-12">
                      <h1 class="text-center gametime-font font-weight-bold">50m : 60s : 9ms</h1>
                  </div>
                </div>
            </div>
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-1"></div>
    
    <!-- Foul Guest-->
    <div class="col-sm-2">
      <a href="#">
        <div class="card my-4 shadow">
          <div class="card-body">
            <p class="card-text">
              <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center  h1"><?php echo $foul_guest; ?></h1>
                    </div>
                  </div>
              </div>
            </p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-sm-1"></div>
  </div>
</div>





<div class="container">
  <div class="row">





    <div class="col-sm-4">
      <div class="card my-2 shadow">
        <!--  div class="card-header bg-primary">
          <h5 class="mb-0 text-center">Score Home</h5>
        </div-->
        <div class="card-body">
          <p class="card-text">
            <div class="container">
                <div class="row">
                  <div class="col-md-12">
                      <h1 class="text-center score-font font-weight-bold">100</h1>
                  </div>
                </div>
            </div>
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-1"></div>

    <div class="col-sm-2">
      <div class="card my-1 shadow">
        <div class="card-header bg-primary">
          <h5 class="mb-0 text-center"> <strong>Shot Clock</strong> </h5>
        </div>
        <div class="card-body">
          <p class="card-text">
            <div class="container">
                <div class="row">
                  <div class="col-md-12">
                      <h1 class="text-center  h1">24</h1>
                  </div>
                </div>
            </div>
          </p>
        </div>
      </div>
    </div>
    
    <div class="col-sm-1"></div>

    <div class="col-sm-4">
      <div class="card my-2 shadow">
        <div class="card-body">
          <p class="card-text">
            <div class="container">
                <div class="row">
                  <div class="col-md-12">
                      <h1 class="text-center score-font font-weight-bold">103</h1>
                  </div>
                </div>
            </div>
          </p>
        </div>
      </div>
    </div>

  </div>
</div>



<div class="container">
  <div class="row">

    <div class="col-sm-5"></div>



    <div class="col-sm-2">
      <div class="card my-1 shadow">
        <div class="card-header bg-info ">
          <h5 class="mb-0 text-center"> <strong>Period</strong> </h5>
        </div>
        <div class="card-body">
          <p class="card-text">
             <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="text-center  h1">1 </h1>
                  </div>
                </div>
            </div>
          </p>
        </div>
      </div>
    </div>
  </div>




  <div class="col-sm-5"></div>
  
</div>








	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>