<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php 
        session_start();
        include 'connect.php';
        if(!isset($_SESSION['login'])){
            header("Location: login.php");
        }
    ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">My shop</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Products<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="select_product.php">List products</a>
                                </li>
                                <li>
                                    <a href="add_product.php">Add productss</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="select.php">List users</a>
                                </li>
                                <li>
                                    <a href="add.php">Add users</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php include 'connect.php'; ?>
<?php 
	
	

	$sqlSelectProduct    = "SELECT products.id, products.name, products.description, products.price, products.created, products.image, categories.name as category_name FROM products INNER JOIN categories
	ON products.category_id = categories.id";
	$resultSelectProduct = $conn_php09_basic->query($sqlSelectProduct);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Select Product</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css" media="screen">
		th,td {
			text-align: center;
		}

		
	</style>
</head>
<body>

	<div class="container">
	<h1 style="text-align: center;">List products</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Image</th>
					<th>Category</th>
					<th>Created</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if(mysqli_num_rows($resultSelectProduct) > 0){

					//show list users
					$i = 1;
					while($elementProduct = mysqli_fetch_assoc($resultSelectProduct)) {
						$image  = $elementProduct['image'];
						$id     = $elementProduct['id'];
						echo "<div class='container'";
						
							echo "<tr>";
								echo "<td>".$i."</td>";
								echo "<td>".$elementProduct['name']."</td>";
								echo "<td>".$elementProduct['description']."</td>";
								echo "<td>".$elementProduct['price']."</td>";
								echo "<td>"."<img src='uploads/products/$image' width=100px height = 150px>"."</td>";
								echo "<td>".$elementProduct['category_name']."</td>";
								echo "<td>".$elementProduct['created']."</td>";
								echo "<td><a href='buy_product.php?id=$id'><img width='50px' src='tải xuống.png'></a></td>";
							echo "</tr>";
						
						echo "</div>";
						$i++;	
					}

				
				?>

			</tbody>
		</table>
		<?php }else{
			echo "No product"."<br>";
			
		}
			

	//var_dump($resultSelectUser);exit();
	?>
	</div>
</body>
</html>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/raphael.min.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
