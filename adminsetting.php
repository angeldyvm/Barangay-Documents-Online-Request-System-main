<?php include ('adminserver.php'); 

	// fetch the record to be updated
	if (isset($_GET['edit'])){
		$edit_state = true;
		$rec = mysqli_query($db, "SELECT * FROM admin WHERE Username='$admin_check'");
		$record = mysqli_fetch_array($rec);
		$uname = $record['Username'];
		$pwd = $record['Password'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
	<script src="https://kit.fontawesome.com/b0811c54d0.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"charset="utf-8"></script>
    
	<!-- My CSS -->
	

	<title>AdminHub</title>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

a {
	text-decoration: none;
}

li {
	list-style: none;
}

:root {
	--poppins: 'Poppins', sans-serif;
	--lato: 'Lato', sans-serif;

	--light: #F9F9F9;
	--blue: #3C91E6;
	--light-blue: #CFE8FF;
	--grey: #eee;
	--dark-grey: #AAAAAA;
	--dark: #342E37;
	--red: #DB504A;
	--yellow: #FFCE26;
	--light-yellow: #FFF2C6;
	--orange: #FD7238;
	--light-orange: #FFE0D3;
}

html {
	overflow-x: hidden;
}

body.dark {
	--light: #0C0C1E;
	--grey: #060714;
	--dark: #FBFBFB;
}

body {
	background: var(--grey);
	overflow-x: hidden;
}





/* SIDEBAR */
#sidebar {
	position: fixed;
	top: 0;
	left: 0;
	width: 280px;
	height: 100%;
	background: var(--light);
	z-index: 2000;
	font-family: var(--lato);
	transition: .3s ease;
	overflow-x: hidden;
	scrollbar-width: none;
}

#sidebar.hide {
	width: 60px;
}
#sidebar .brand {
	font-size: 24px;
	font-weight: 900;
	height: 56px;
	display: flex;
	align-items: center;
	color: #96B6C5;
	position: sticky;
	top: 0;
	left: 0;
	z-index: 500;
	padding-bottom: 20px;
	box-sizing: content-box;
    margin-left: 15px;
    text-transform: uppercase;
    
}
#sidebar .brand h3 span {
    color: #FD7238;

}
#sidebar .side-menu {
	width: 100%;
	margin-top: 48px;
}
#sidebar .side-menu li {
	height: 48px;
	background: transparent;
	margin-left: 6px;
	border-radius: 48px 0 0 48px;
	padding: 4px;
}


#sidebar .side-menu li.active {
	background: var(--grey);
	position: relative;
}
#sidebar .side-menu li.active::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	top: -40px;
	right: 0;
	box-shadow: 20px 20px 0 var(--grey);
	z-index: -1;
}
#sidebar .side-menu li.active::after {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	bottom: -40px;
	right: 0;
	box-shadow: 20px -20px 0 var(--grey);
	z-index: -1;
}


#sidebar .side-menu li a {
	width: 100%;
	height: 100%;
	background: var(--light);
	display: flex;
	align-items: center;
	border-radius: 48px;
	font-size: 16px;
	color: var(--dark);
	white-space: nowrap;
	overflow-x: hidden;
    text-align: right;
}
#sidebar .side-menu.top li.active a {
	color: var(--blue);
}
#sidebar .side-menu li.active a {
	color: var(--blue);
}
#sidebar.hide .side-menu li a {
	width: calc(48px - (4px * 2));
	transition: width .3s ease;
}
#sidebar .side-menu li a.logout {
	color: var(--red);
}
#sidebar .side-menu.top li a:hover {
	color: var(--blue);
}
#sidebar .side-menu li a:hover {
	color: var(--blue);
}
#sidebar .side-menu li a .bi {
	min-width: calc(60px  - ((4px + 6px) * 2));
	display: flex;
	justify-content: center;
}

#sidebar .side-menu li a .bx {
	min-width: calc(60px  - ((4px + 6px) * 2));
	display: flex;
	justify-content: center;
}
/* SIDEBAR */





/* CONTENT */
#content {
	position: relative;
	width: calc(100% - 280px);
	left: 280px;
	transition: .3s ease;
}
#sidebar.hide ~ #content {
	width: calc(100% - 60px);
	left: 60px;
}

.content1 {
	width: (100% - 200px);
	margin-top: 60px;
	align-items: center;
	padding: 50px;
	margin-left: 150px;
	background: transparent;
	background-size: cover;
	height: 60vh;
	transition: 0.5s;
	border-radius: 20px;
	border: 1px solid black;

}

#check:checked ~ .content1 {
	margin-left: 60px;
}

table {
    background: #fff;
    width: 50%;
    text-align: center;
	margin: 10px auto 0 auto;
	font-size: 16px;
	border: 1px solid #bbbbbb;
	border-radius: 5px;
	border-collapse: collapse;
}

tr {
	border-bottom: 1px solid #cbcbcb;
	width: 100px;
}
	
th, td {
	border: none;
	height: 43px;
	padding: 10px;
}


.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin-top: 20px;
}

.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}

.btn {
    margin-top: 10px;
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #ff8c00;
	border: none;
	border-radius: 5px;
	transition: 0.5s;
	position: center;
}

.btn:hover {
    background-color: #4d84e2;
}

.edit_btn{
	text-decoration: none;
	font-size: 17px;
	padding: 2px 5px;
	background: blue;
	color: white; 
	border-radius: 3px;
	transition: 0.5s;
}

.edit_btn:hover{
    background-color: #4d84e2;
}

.del_btn {
	text-decoration: none;
	padding: 2px 5px;
	color: white;
	border-radius: 3px;
	background: #800000;
}

.msg {
	margin: 30px auto; 
	padding: 10px; 
	border-radius: 5px; 
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	width: 50%;
	text-align: center;
}




/* NAVBAR */
#content nav {
	height: 56px;
	background: var(--light);
	padding: 0 24px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
	font-family: var(--lato);
	position: sticky;
	top: 0;
	left: 0;
	z-index: 1000;
}
#content nav::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	bottom: -40px;
	left: 0;
	border-radius: 50%;
	box-shadow: -20px -20px 0 var(--light);
}
#content nav a {
	color: var(--dark);
}
#content nav .bx.bx-menu {
	cursor: pointer;
	color: var(--dark);
}
#content nav .nav-link {
	font-size: 16px;
	transition: .3s ease;
}
#content nav .nav-link:hover {
	color: var(--blue);
}
#content nav form {
	max-width: 400px;
	width: 100%;
	margin-right: auto;
}
#content nav form .form-input {
	display: flex;
	align-items: center;
	height: 36px;
}
#content nav form .form-input input {
	flex-grow: 1;
	padding: 0 16px;
	height: 100%;
	border: none;
	background: var(--grey);
	border-radius: 36px 0 0 36px;
	outline: none;
	width: 100%;
	color: var(--dark);
}
#content nav form .form-input button {
	width: 36px;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	background: var(--blue);
	color: var(--light);
	font-size: 18px;
	border: none;
	outline: none;
	border-radius: 0 36px 36px 0;
	cursor: pointer;
}
#content nav .notification {
	font-size: 20px;
	position: relative;
}
#content nav .notification .num {
	position: absolute;
	top: -6px;
	right: -6px;
	width: 20px;
	height: 20px;
	border-radius: 50%;
	border: 2px solid var(--light);
	background: var(--red);
	color: var(--light);
	font-weight: 700;
	font-size: 12px;
	display: flex;
	justify-content: center;
	align-items: center;
}
#content nav .profile img {
	width: 36px;
	height: 36px;
	object-fit: cover;
	border-radius: 50%;
}
#content nav .switch-mode {
	display: block;
	min-width: 50px;
	height: 25px;
	border-radius: 25px;
	background: var(--grey);
	cursor: pointer;
	position: relative;
}
#content nav .switch-mode::before {
	content: '';
	position: absolute;
	top: 2px;
	left: 2px;
	bottom: 2px;
	width: calc(25px - 4px);
	background: var(--blue);
	border-radius: 50%;
	transition: all .3s ease;
}
#content nav #switch-mode:checked + .switch-mode::before {
	left: calc(100% - (25px - 4px) - 2px);
}
/* NAVBAR */





/* MAIN */
#content main {
	width: 100%;
	padding: 36px 24px;
	font-family: var(--poppins);
	max-height: calc(100vh - 56px);
	overflow-y: auto;
}
#content main .head-title {
	display: flex;
	align-items: center;
	justify-content: space-between;
	grid-gap: 16px;
	flex-wrap: wrap;
}
#content main .head-title .left h1 {
	font-size: 36px;
	font-weight: 600;
	margin-bottom: 10px;
	color: var(--dark);
}
#content main .head-title .left .breadcrumb {
	display: flex;
	align-items: center;
	grid-gap: 16px;
}
#content main .head-title .left .breadcrumb li {
	color: var(--dark);
}
#content main .head-title .left .breadcrumb li a {
	color: var(--dark-grey);
	pointer-events: none;
}
#content main .head-title .left .breadcrumb li a.active {
	color: var(--blue);
	pointer-events: unset;
}




#content main .box-info {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	grid-gap: 24px;
	margin-top: 36px;
}
#content main .box-info li {
	padding: 24px;
	background: var(--light);
	border-radius: 20px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
}


#content main .box-info li .bi {
	width: 80px;
	height: 80px;
	border-radius: 10px;
	font-size: 36px;
	display: flex;
	justify-content: center;
	align-items: center;
}

#content main .box-info li:nth-child(1) .bi {
	background: var(--light-blue);
	color: var(--blue);
}

#content main .box-info li:nth-child(2) .bi {
	background: lightgreen;
	color: green;
}

#content main .box-info li:nth-child(3) .bi {
	background: var(--light-orange);
	color: var(--orange);
}
#content main .box-info li .text h3 {
	font-size: 24px;
	font-weight: 600;
	color: var(--dark);
}
#content main .box-info li .text p {
	color: var(--dark);	
}





#content main .table-data {
	display: flex;
	flex-wrap: wrap;
	grid-gap: 24px;
	margin-top: 24px;
	width: 100%;
	color: var(--dark);
}
#content main .table-data > div {
	border-radius: 20px;
	background: var(--light);
	padding: 24px;
	overflow-x: auto;
}
#content main .table-data .head {
	display: flex;
	align-items: center;
	grid-gap: 16px;
	margin-bottom: 24px;
}
#content main .table-data .head h3 {
	margin-right: auto;
	font-size: 24px;
	font-weight: 600;
}
#content main .table-data .head .bx {
	cursor: pointer;
}

#content main .table-data .order {
	flex-grow: 1;
	flex-basis: 500px;
}
#content main .table-data .order table {
	width: 100%;
	border-collapse: collapse;
}
#content main .table-data .order table th {
	padding-bottom: 12px;
	font-size: 13px;
	text-align: left;
	border-bottom: 1px solid var(--grey);
}
#content main .table-data .order table td {
	padding: 16px 0;
}
#content main .table-data .order table tr td:first-child {
	display: flex;
	align-items: center;
	grid-gap: 12px;
	padding-left: 6px;
}
#content main .table-data .order table td img {
	width: 36px;
	height: 36px;
	border-radius: 50%;
	object-fit: cover;
}
#content main .table-data .order table tbody tr:hover {
	background: var(--grey);
}
#content main .table-data .order table tr td .status {
	font-size: 10px;
	padding: 6px 16px;
	color: var(--light);
	border-radius: 20px;
	font-weight: 700;
}
#content main .table-data .order table tr td .status.completed {
	background: var(--blue);
}
#content main .table-data .order table tr td .status.process {
	background: var(--yellow);
}
#content main .table-data .order table tr td .status.pending {
	background: var(--orange);
}


#content main .table-data .todo {
	flex-grow: 1;
	flex-basis: 300px;
}
#content main .table-data .todo .todo-list {
	width: 100%;
}
#content main .table-data .todo .todo-list li {
	width: 100%;
	margin-bottom: 16px;
	background: var(--grey);
	border-radius: 10px;
	padding: 14px 20px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
#content main .table-data .todo .todo-list li .bx {
	cursor: pointer;
}
#content main .table-data .todo .todo-list li.completed {
	border-left: 10px solid var(--blue);
}
#content main .table-data .todo .todo-list li.not-completed {
	border-left: 10px solid var(--orange);
}
#content main .table-data .todo .todo-list li:last-child {
	margin-bottom: 0;
}
/* MAIN */
/* CONTENT */

@media screen and (max-width: 576px) {
	#content nav form .form-input input {
		display: none;
	}

	#content nav form .form-input button {
		width: auto;
		height: auto;
		background: transparent;
		border-radius: none;
		color: var(--dark);
	}

	#content nav form.show .form-input input {
		display: block;
		width: 100%;
	}
	#content nav form.show .form-input button {
		width: 36px;
		height: 100%;
		border-radius: 0 36px 36px 0;
		color: var(--light);
		background: var(--red);
	}

	#content nav form.show ~ .notification,
	#content nav form.show ~ .profile {
		display: none;
	}

	#content main .box-info {
		grid-template-columns: 1fr;
	}

	#content main .table-data .head {
		min-width: 420px;
	}
	#content main .table-data .order table {
		min-width: 420px;
	}
	#content main .table-data .todo .todo-list {
		min-width: 420px;
	}
}
</style>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<h3  class="text">
                Barangay
                <span>171</span>
            
            </h3>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="adminportal.php">
                    <i class="bi bi-windows"></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="adminallusers.php">
                    <i class="bi bi-people-fill"></i>
					<span class="text">All Users</span>
				</a>
			</li>
			<li>
				<a href="adminpendingrequest.php">
                    <i class="bi bi-file-earmark-text-fill"></i>
					<span class="text">Pending Request</span>
				</a>
			</li>
			<li class>
				<a href="adminpendingrequest.php">
				<i class="bi bi-check2-circle"></i>
					<span class="text">Approved Request</span>
				</a>
			</li>
			<li class>
				<a href="admincomreq.php">
                <i class="bi bi-send-check-fill"></i>
					<span class="text">Completed Request</span>
				</a>
			</li>
			<li class>
				<a href="admindenreq.php">
                <i class="bi bi-trash"></i>
					<span class="text">Denied Request</span>
				</a>
			</li>
			
			
		</ul>
		<ul class="side-menu">
			<li class="active">
				<a href="adminsetting.php">
                    <i class="bi bi-gear"></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="adminlogout.php" class="logout">
                    <i class="bi bi-box-arrow-left"></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/user.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="adminportal.php">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="adminsetting.php">Settings</a>
						</li>
					</ul>
				</div>
				
			</div>

			<div class="content1">
  <?php while ($row = mysqli_fetch_array($results)) { ?>
		<table>
		<tr bgcolor='#00FF00' style="color:white;">
			<th>Username</th>
			<th>Password</th>
			<th></th>
		</tr>
		<tr>
			<td><?php echo $row['Username'];?>	</td>
			<td><?php echo $row['Password']; ?>	</td>
			<td><a class ="edit_btn" href="adminsetting.php?edit=<?php echo $row['id']; ?>"><i class="far fa-edit"></i></a></td>
		</tr>
		</table>
	<?php } ?>
	
  <form method="post" action="adminserver.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="Username" value="<?php echo $uname; ?>" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text"  name="Password" value="<?php echo $pwd; ?>" required>
		</div>
		<div class="input-group">
		<?php if ($edit_state == false): ?>
			<button class="btn" type="submit" name="update" >Update</button>
		<?php else: ?>
			<button class="btn" type="submit" onclick="return confirm('Are you sure to change your information?');" name="update" >Update</button>
		<?php endif ?>
		</div>
	</form>
	</div>

			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>