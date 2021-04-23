<?php
if(isset($_POST['submit'])):
$invesmet=$_POST['invesmet'];
$annualRate=$_POST['return_rate'];
$monthlyRate=$annualRate/12/100;
$years=$_POST['year'];
$months=$years*12;
$futureValue=0;
$futureValue=$invesmet*((pow(1+$monthlyRate,$months)-1)/$monthlyRate)*(1+$monthlyRate);
$invesmet_amonut=$invesmet*12*$years;
$est_rtn=$futureValue-$invesmet_amonut;
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIP Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Asset Building</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="gold.html">Gold <span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="Banking.html">Saving Account <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="fd.html">FD<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="IndexFunds.html">IndexFunds<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="insurance.html">Insurance<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="GovSec.html">Govt. Security<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="RealEstate.html">Real Estate<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="stock.html">Stock<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="calculator.php">SIP Calculator<span class="sr-only"></span></a>

                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="liveprices.php">Live Prices<span class="sr-only"></span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="gold.html">Gold <span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="Banking.html">Saving Account <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="fd.html">FD<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="IndexFunds.html">IndexFunds<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="insurance.html">Insurance<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="GovSec.html">Govt. Security<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="RealEstate.html">Real Estate<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="stock.html">Stock<span class="sr-only"></span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="calculator.php" >SIP Calculator<span class="sr-only"></span></a>
                   
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto py-5">
			<div class="card">
 	<div class="card-header bg-primary text-white text-center font-weight-bold">
 		SIP Calculator
 	</div>
 	<div class="card-body">
 		<form action="" method="post">
 			<div class="form-group">
 				<input type="number" name="invesmet" placeholder="Monthly Investment" required="" class="form-control" value="<?php if(!empty($invesmet)):echo $invesmet; endif;?>">
 			</div>
 			<div class="form-group">
 				<input type="number" name="return_rate" placeholder="Expected Return Rate" required="" class="form-control" value="<?php if(!empty($annualRate)):echo $annualRate; endif;?>">
 			</div>
 			<div class="form-group">
 				<input type="number" name="year" placeholder="Time Period" required="" class="form-control" value="<?php if(!empty($years)):echo $years; endif;?>">
 			</div>
 			<div class="form-group text-center">
 				<input type="submit" name="submit" class="btn btn-success" value="Calculate">
 			</div>
 		</form>
 	</div>
 	<div class="card-footer bg-white">
 		<table class="table table-bordered table-hover">
 			<tr>
 				<th>Invested Amount</th>
 				<th>&#8377; <?php echo number_format(@$futureValue);?></th>
 			</tr>
 			<tr>
 				<th>Est. Returns</th>
 				<th>&#8377; <?php echo number_format(@$est_rtn);?></th>
 			</tr>
 			<tr>
 				<th>Total Value</th>
 				<th>&#8377; <?php echo number_format(@$futureValue);?></th>
 			</tr>
 		</table>
 	</div>
 </div>
		</div>
	</div>
 
</div>
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>