<?php include_once('Tarot.php');?>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="section-1-container section-container">
    <div class="container">
        <div class="row heading ">
            <div class="col section-1 section-description">
                <style>
					h1 {text-align: center;}
					h2 {text-align: center;}
					p {text-align: center;}
					div {text-align: center;}
				</style>
					<h1>Tarot Reader</h1>
					<h2>Yes/No<h2>
				<div class="divider-1"><span></span></div>
					
            </div>
        </div>
		<div class="row spread">
            <div class="col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
				
                <div class="card">
					
                    <div class="front">
						<style><?php echo $cards->reverse();?></style>
						<p><img src="<?php echo $cards->selectRandcard();?>" width="300" height="518"></p>
					</div>
					<div class="back">
						<p><img src="Card_Back/RWS.JPG" width="300" height="518"></p>
					</div>	
                </div>
 
            </div>
		</div>
    </div>
</div>

</body>

</html>
