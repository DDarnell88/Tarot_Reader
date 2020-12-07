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
        <div class="row">
            <div class="col section-1 section-description">
                <style>
					h1 {text-align: center;}
					p {text-align: center;}
					div {text-align: center;}
				</style>
					<h1>Tarot Reader</h1>
	<div class="divider-1"><span></span></div>
				<div style="position:relative; top:40px;"><h2>Yes/No</h2></div>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
 
                <div class="div-to-align">
                    <p><img src="Deck\"<?php echo $cards->selectRandcard();?>"></p>
                </div>
 
            </div>
        </div>
    </div>
</div>

</body>

</html>