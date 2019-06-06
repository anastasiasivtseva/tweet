<!DOCTYPE html>
<html>
<head>
	<title>qwerty</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light ">
	
	<div class="container-fluid bg-white">
		<div class="container">
			<div class="row">
				<div class="col-4 d-flex">
					<div>
						<img src="img/icons8-home-50.png">
						<a href="#">dfafsfg asd</a>
					</div>
					<div>
						<img src="img/icons8-home-50.png">
						<a href="#">dfafsfg</a>
					</div>
					<div>
						<img src="img/icons8-home-50.png">
						<a href="#">dfafsfg</a>
					</div>
				</div>

				<div class="col-4"></div>
				<div class="col-4"></div>

			</div>
		</div>
	</div>

	<div class="container">

		<div class="row">
			<!--левая колонка-->
			<div class="col-3">

				<div class="bg-white mt-2 rounded">
					<div>
						<img src="img/background.jpg" class="w-100">
					</div>

					<div class="row">
						<div class="col-4">
							<img src="img/avatar.jpg" class="rounded-circle">
						</div>
						<div class="col-8">
							<div>
								<a href="#">wertyuidf cvbnml</a>
							</div>
							<div>
								<a href="#">@wertyuidf0cvbnml</a>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-6">
							<div>
								<h6><a href="">qwrqr</a></h6>
								<h6><a href="">346</a></h6>
							</div>
						</div>
						<div class="col-6">
							<div>
								<h6><a href="">asdasd</a></h6>
								<h6><a href="">346</a></h6>
							</div>
						</div>
					</div>

				</div>
				<!--topics-->

				<div class="bg-white rounded ">
					<?php $connect = mysqli_connect('127.0.0.1', 'root','','anastasia_ch_16');
				    $que = mysqli_query($connect, 'SELECT * FROM leftcol');
				    $topics = $que->fetch_assoc();
					?>

					<h3 class="mb-2 mt-2">sdfg ertyui</h3>

					<?php for($i = 0; $i < $que->num_rows ; $i++) { ?>
						<p class="mb-0"><a href="#" class="text-primary"><?php  echo $topics['name']?></a></p>
						<p><a href="#" class="text-secondary"><?php echo $topics['tweets'] ?></a></p>
					<?php } ?>
				</div>

			</div>
			<!---middle колонка--->
			<div class="col-6">
				<div class="row">

					<div class="col-2">
						<img src="img/avatar.jpg" class="rounded-circle">

					</div>

					<!--input-->
					<div class="col-10">
						<form method="POST" action="asd.php">
							<input type="" name="text">
							<button type="submit" class="btn btn-primary">ok</button>
						</form>
					</div>

				</div>
				<div class="row">
					<!--posts begin-->
					<?php
			        $query = mysqli_query($connect, 'SELECT * FROM tweet ORDER BY id DESC');
					?>

					<?php for($i = 0; $i < $query->num_rows; $i++) { ?>

			            <div class="col-2">
			              <a href="#" class="rounded-circle" > <?php $logo = $query->fetch_assoc(); echo '<img src="img/' . $logo['logo'] . '">'; ?></a>
			            </div>
			            <div class="col-10">
			              	<div class="row">
			                	<h5>
			                 	 	<a href="#" class="text-dark"><?php echo $logo['title'] ?></a>
			                	</h5>
			              	</div>
			              	<div>
			                	<p><?php echo $logo['text'] ?></p>
			              	</div>
			              	<div>
				                <?php echo '<img src="img/' . $logo['img'] . '" class="w-100 rounded">'; ?>
				                <img src="" class="w-100 rounded"></a>
			              	</div>

			              	<form method="POST" action="delete.php">
			              		<input type="hidden" name="id" value=" <?php echo $logo['id'] ?> ">
			              		<button>delete</button>
			              	</form>

			              	<form method="POST" action="update.php">
			              		<input type="hidden" name="id" value=" <?php echo $logo['id'] ?> ">
			              		<input type="" name="text" value=" <?php echo $logo['text'] ?> ">
			              		<button>change</button>
			              	</form>
			              	<div class="row">
				                <div class="col-3">
				                	<img src="img/like.png">
				                </div>
				                <div class="col-3">
				                	<img src="img/comment.png">
				                </div>
				                <div class="col-3">
				                	<img src="img/envelope.png">
				                </div>
				                <div class="col-3">
				                	<img src="img/retweet.png">
				                </div>
			              	</div>
			            </div>
			           <?php } ?>
					<!--post 1 ends-->
				</div>
			</div>

			<!---right колонка--->
			<div class="col-3">
				<div class="bg-white rounded">
					<div class="row ml-2">
						<h5>asdadfd</h5>
						<P>
							.<a href="#">dgsdgsd</a>.<a href="#">sdf</a>
						</P>
					</div>
					<div class="row">
						<div class="col-4">
							<img src="img/1.jpg" class="rounded-circle">
						</div>
						<div class="col-8">
							<h4>ert fghjkl</h4>
							<p class="text-secondary">@sdfgsdfghj</p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-4">
							<img src="img/1.jpg" class="rounded-circle">
						</div>
						<div class="col-8">
							<h4>ert fghjkl</h4>
							<p class="text-secondary">@sdfgsdfghj</p>
						</div>
					</div>
				</div>
				<div class="col-12 bg-white mt-1 rounded">
					Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				</div>
			</div>
		</div>
	</div>

</body>
</html>