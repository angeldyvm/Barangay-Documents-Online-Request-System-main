<?php include('usersession.php'); ?>

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
  


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
 
	

	<title>userportal</title>
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
	color: #FF9209;
}
#sidebar .side-menu li.active a {
	color: #FF9209;
}
#sidebar.hide .side-menu li a {
	width: calc(48px - (4px * 2));
	transition: width .3s ease;
}
#sidebar .side-menu li a.logout {
	color: var(--red);
}
#sidebar .side-menu.top li a:hover {
	color: #FF9209;
}
#sidebar .side-menu li a:hover {
	color: #FF9209;
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

/* LOOB */

.content1 {
	
	width: 900px;
	margin-top: 60px;
	padding: 5px;
	margin-left: 200px;
	background: #fff;
	background-size: cover;
	height: auto;
	transition: 0.5s;
	border-radius: 10px;
	border: 1px solid #000;
}

.ui-datepicker select.ui-datepicker-year {
        width: 100px; /* Adjust the width as needed */
    }

/* Form Design */
.form1 {
	background: #fff;
	width: 60%;
	height: auto;
	margin: 10px auto 0 auto;
	text-align: left;
	padding: 25px; 
	border: 1px solid orange; 
	border-radius: 5px;
	box-shadow: #000;
} 

.welcome p {
    font-size: 25px;
    text-align: center;
    margin-top: 15px;
	padding-bottom: 9px;
	color: #000;
	font-weight: 600;
}

.input-group label, p {
	display: block;
	text-align: left;
	margin-top: 10px;
}

.identification {
    border-top: 3px solid #ccc;
    display: block;
	text-align: left;
	margin-top: 30px;
	padding-top: 5px;
}

.identification h1 {
    font-size: 12px;
	color: gray;
	display: block;
	text-align: left;
	margin-top: 10px;
	margin-bottom: 3px;
}

.identification select {
    width: 35%;
	padding: 12px 20px;
	margin-top: 1px;
	margin-bottom: 7px;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

.mics {
    border-top: 3px solid #ccc;
    display: block;
	text-align: left;
	margin-top: 7px;
	padding-top: 5px;
}

.mics h1 {
    font-size: 12px;
	color: gray;
	display: block;
	text-align: left;
	margin-top: 3px;
	margin-bottom: 3px;
}

.mics select {
    width: 35%;
	padding: 12px 20px;
	margin-top: 1px;
	margin-bottom: 7px;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

input {
	width: 100%;
}

input[type=text], select{
	width: 100%;
	padding: 12px 20px;
	margin-top: 1px;
	margin-bottom: 7px;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

input[type=file]{
    width: 100%;
	padding-bottom: 10px;
	border: none;
	box-sizing: border-box;
}

input[type=submit] {
	width: 100%;
	background-color: #FF9209;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: #4d84e2;
}
  
#check:checked ~ .content {
	margin-left: 60px;
}

#check:checked ~ .sidebar .profile_info {
	display: none;
}

#check {
	display: none;
}

.mobile_nav {
	display: none;	
}






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
	background: #FF9209;
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
	background: #FF9209;
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
	color: #FF9209;
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
</style>

<?php
// Initialize variables to store address components
$street = $district = $barangay = $postalCode = $city = '';
?>

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
				<a href="userportal.php">
                    <i class="bi bi-windows"></i>
					<span class="text">User Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="userreq_doc.php">
                    <i class="bi bi-people-fill"></i>
					<span class="text">Request Documents</span>
				</a>
			</li>
			<li>
				<a href="userrequest.php">
                    <i class="bi bi-file-earmark-text-fill"></i>
					<span class="text">Pending Request</span>
				</a>
			</li>
			<li class>
				<a href="userapvreq.php">
				<i class="bi bi-check2-circle"></i>
					<span class="text">Approved Request</span>
				</a>
			</li>
			<li class>
				<a href="usercomreq.php">
				<i class="bi bi-send-check-fill"></i>
					<span class="text">Complete Request</span>
				</a>
			</li>
			<li class>
				<a href="userdenreq.php">
				<i class="bi bi-trash"></i>
					<span class="text">Denied Request</span>
				</a>
			</li>
			
			
		</ul>
		<ul class="side-menu">
			<li>
				<a href="usersetting.php">
                    <i class="bi bi-gear"></i>
					<span class="text">User Settings</span>
				</a>
			</li>
			<li>
				<a href="login.php" class="logout">
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
							<a href="userportal.php">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="userreq_doc.php">User Request Documents</a>
						</li>
					</ul>
				</div>
				
			</div>

			<div class="content1">
    <div class="welcome">
        <p>REQUEST DOCUMENT</p>
    </div>
    <div class="form1">                     
    <form action="req_doc_sql.php" method="POST" autocomplete="off" >
	<div class="input-group">
        <label for="requestingfor">Requesting for:</label>
        <select id="requestingfor" name="requestingfor" onchange="showRelationField(this)" required>
            <option disabled selected>Please Select</option>
            <option value="Myself">Myself</option>
            <option value="other">Another Person</option>
        </select>

		<div id="relation_field" style="display:none;">
        <label for="relation">Relation to the person:</label>
        <input type="text" name="relation" id="relation">

	

    </div>
	  </div>

	<div class="input-group">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Enter your firstname " required>
      </div>

	<div class="input-group">
        <label for="middlename">Middle Name</label>
        <input type="text" id="middlename" name="middlename" placeholder="Enter your middlename " required>
      </div>

	<div class="input-group">
        <label for="surname">Surname</label>
        <input type="text" id="surname" name="surname" placeholder="Enter your surname " required>
      </div>

	 
	  
	  <div class="input-group">
        <label for="birthdate">Date of Birth</label>
        <input type="text" id="birth" name="birthdate" placeholder="Enter your birthday" class="datepicker1" required>
	  </div>
	  
	  <div class="input-group">
        <label for="age">Age</label>
        <input type="text" id="age" name="age" placeholder="Enter your age" readonly required>
	  </div>
	   
      <div class="input-group">
        <label for="gender">Select Gender</label>
        <select id="gender" name="gender" required>
            <option disabled selected>Please Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
	  </div>
	  
	  <div class="input-group">
	  <label for="street">Street:</label>
<input type="text" name="street" id="street" value="<?php echo htmlspecialchars($street); ?>" oninput="updateAddress()" placeholder="e.g. BLDG 1A5U11 MRH SITE 4 TALA" required><br>

      </div>
	  <div class="input-group">
	  <label for="district">District:</label>
<input type="text" name="district" id="district" value="<?php echo htmlspecialchars($district); ?>" oninput="updateAddress()" placeholder="e.g. Bagumbong District 1" required>
<br>

	  </div>

	  <div class="input-group">
	  <label for="barangay">Barangay:</label>
<input type="text" name="barangay" id="barangay" value="<?php echo htmlspecialchars($barangay); ?>" oninput="updateAddress()" placeholder="e.g. Barangay 171" required>
<br>
	  </div>
	  
	  <div class="input-group">
	  <label for="postalCode">Postal Code:</label>
<input type="text" name="postalCode" id="postalCode" value="<?php echo htmlspecialchars($postalCode); ?>" oninput="updateAddress()" placeholder="e.g. 1421" required>
<br>


	  </div>

	  <div class="input-group">
	  <label for="city">City:</label>
<input type="text" name="city" id="city" value="<?php echo htmlspecialchars($city); ?>" oninput="updateAddress()" placeholder="e.g. Caloocan City" required>
<br> 
	  </div>
		
      <div class="input-group">
        <label for="add">Home Address</label>
        <input type="text" id="add" name="homeadd" placeholder="Home Address" readonly required>
      </div>
	  
	  <div class="input-group">
        <label for="number">Contact Number</label>
        <input type="text" id="contact" name="contact" placeholder="Enter your active contact number" required>
      </div>
	  
   	  <div class="input-group">
        <p>Date of Request<input type="text" id="datepicker" name="datepicker" required></p>
      </div>
	  
	  <div class="input-group">
        <label for="purposes">Purpose</label>
		<select id="purposes" name="purposes" placeholder=" Your Purpose" required>
            <option disabled selected>Please Select</option>
            <option >Financial Assistance</option>
            <option >Proof of Indigency</option>
            <option >Employment Requirements</option>
			<option >Business Permits</option>
			<option >Residency Verification</option>
			<option >Legal Transactions</option>
			<option >School Enrollment</option>
			<option >Travel and Passport Applications</option>
			<option >Community Services</option>
			<option >Legal Proceedings</option>
        </select>

      </div>
	  


	  <div class="input-group">
        <label for="document">Documents</label>
        <select id="document" name="documents" required>
            <option disabled selected>Please Select</option>
            <option value="Barangay Clearance" name="barangay clearance">Barangay Clearance</option>
            <option value="Certificate of Indigency" name="certificate of indigency">Certificate of Indigency</option>
            <option value="Barangay ID" name="barangay id">Barangay ID</option>
			<option value="Community Tax Return" name="community tax return">Community Tax Return (Cedula)</option>
			<option value ="certificate of residency">Certificate of Residency</option>
			<option value="business permit">Barangay Business Permit</option>
			<option value="health clearance">Barangay Health Clearance</option>
			<option value="building permit">Barangay Building Permit</option>
			<option value="legal matters">Barangay Certification for Legal Matters</option>
			<option value="travel clearance">Barangay Travel Clearance</option>
			<option value="birth or marriage">Barangay Birth or Marriage Certificate</option>
			<option value="community programs">Barangay Certificates for Community Programs</option>
			<option value="barangay assitance">Barangay Assistance Request Form</option>
			<option value="for special transaction">Barangay Clearance for Special Transactions</option>
			
        </select>
	   </div>

	   
	   

	    <br>
		<label for="fee" class="fee">Fee</label>
	  	<div class="input-group" id="fee" name="fee" style="border-bottom: 2px solid black; width: 100px; margin-bottom: 20px;"><br>

	<script>
			$fee = $(document).on("change", "#document", function(){

			var document = $(this).val();
			
			if(document == 'Barangay Clearance'){
				$("#fee").text('75 Pesos');
			} else if(document == 'Certificate of Indigency'){
				$("#fee").text('100 Pesos');
			} else if(document == 'Barangay ID'){
				$("#fee").text('50 Pesos');
			} else if(document == 'Community Tax Return'){
				$("#fee").text('20 Pesos');
			} else if(document == 'certificate of residency'){
				$("#fee").text('20 Pesos');
			} else if(document == 'business permit'){
				$("#fee").text('20 Pesos');
			} else if(document == 'health clearance'){
				$("#fee").text('20 Pesos');
			} else if(document == 'birth or marriage'){
				$("#fee").text('20 Pesos');
			} else if(document == 'community programs'){
				$("#fee").text('20 Pesos');
			} else if(document == 'barangay assitance'){
				$("#fee").text('20 Pesos');
			} else if(document == 'for special transaction'){
				$("#fee").text('20 Pesos');
			} 
			})
	</script>
    </div>
	
	  
	<div class="input-group">
        <label for="fee">Please Confirm your Requested Document</label>
        <select id="fee" name="fee" required>
            <option disabled selected>Please Select</option>
            <option  name="barangay clearance">Barangay Clearance</option>
            <option  name="certificate of indigency">Certificate of Indigency </option>
            <option  name="barangay id">Barangay ID</option>
			<option  name="community tax return">Community Tax Return (Cedula)</option>
			<option  name="certificate of residency">Certificate of Residency</option>
			<option  name="business permit">Barangay Business Permit</option>
			<option  name="health clearance">Barangay Health Clearance</option>
			<option  name="building permit">Barangay Building Permit</option>
			<option  name="legal matters">Barangay Certification for Legal Matters</option>
			<option  name="travel clearance">Barangay Travel Clearance</option>
			<option  name="birth or marriage">Barangay Birth or Marriage Certificate</option>
			<option  name="community programs">Barangay Certificates for Community Programs</option>
			<option  name="barangay assitance">Barangay Assistance Request Form</option>
			<option  name="for special transaction">Barangay Clearance for Special Transactions</option>



		
        </select>
	   </div>
	   
    
      <div class="identification">
        <p><label for="image">Upload Valid IDs</label></p>
		<h1>Select Primary IDs</h1>
		
        <select id="ID" name="ValidID" required>
            <option value=""></option>
            <option value="School ID">School ID</option>
			<option value="Barangay ID">Barangay ID</option>
            <option value="Voter's ID">Voter's ID</option>
            <option value="Senior Citizen ID">Senior Citizen ID</option>
            <option value="PWD ID">PWD ID</option>
			<option value="PRC I">PRC ID</option>
            <option value="PhilHealth ID">PhilHealth ID</option>
            <option value="Passport">Passport</option>
			<option value="Driver's Licence">Driver's Licence</option>
            <option value="SSS Card">SSS Card</option>
            <option value="UMID Card">UMID Card</option>
			<option value="Other">Other</option>
        </select> 
		
		<h1><li>Please upload the FRONT pic of ID</li></h1>
		<input type="file" accept="image/*" name="FrontID" id="file" onchange="loadFile(event)" style="display: moz-box; cursor: pointer;" required>

		<h1><li>Please upload the BACK pic of ID</li></h1>
		<input type="file" accept="image/*" name="BackID" id="file" onchange="loadFile(event)" style="display: moz-box; cursor: pointer; margin-bottom: 15px;" required>

        <script>
            var loadFile = function(event) {
                var image = document.getElementById('output');
                image.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>
		</div>
	
	
	

	  <div class="mics">
	  <div class="input-group">
	  <label>Payment Option</label>
	  <h1><li>Please Select Your Payment</li></h1>
	  <select id="payment" name="payment" required>
            <option value=""></option>
            <option value="COD">Cash on Delivery (COD)</option>
       </select> 
	   </div>
	   
	  <div class="input-group">
	  <label>Service Option</label>
	  <h1><li>Please Select Your Service</li></h1>
	  <select id="service" name="service" required>
            <option value=""></option>
            <option value="For Pickup">For Pickup</option>
        </select> 
	   </div>
	   
	  </div>

	  
	<div class="input-group">
	  <input type="hidden" id="status" name="status">
		<script type="text/javascript"> 
		document.getElementById("status").setAttribute('value','Pending for Approval');
		</script>
	</div>
	


    <input type="submit" value="Submit" onclick="return confirm('Are you sure you want to place this request?');" style="margin-top: 25px;">
		
	  </div>
    </form>
    </div>
    </div>


			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script>
        function updateAddress() {
            // Retrieve values from the form
            var street = document.getElementById('street').value;
            var district = document.getElementById('district').value;
            var barangay = document.getElementById('barangay').value;
            var postalCode = document.getElementById('postalCode').value;
            var city = document.getElementById('city').value;

            // Combine address components into a single text box
            var fullAddress = street + ', ' + district + ', ' + barangay + ', ' + postalCode + ', ' + city;

            // Display the result
            document.getElementById('add').value = fullAddress;
        }
    </script>



	<script src="script.js"></script>
	<script>
  $(document).ready(function() {
	$( "#datepicker" ).datepicker({
		minDate: 0
	});
  
});
  </script>

 <script>
        $(function () {
            // Datepicker initialization
            $("#birth").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0", // Adjust the year range as needed
                onSelect: function (selectedDate) {
                    calculateAge(selectedDate);
                }
            });

            // Function to calculate age
            function calculateAge(birthdate) {
                var today = new Date();
                var birthDate = new Date(birthdate);
                var age = today.getFullYear() - birthDate.getFullYear();
                var m = today.getMonth() - birthDate.getMonth();

                if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }

                $("#age").val(age);
            }

            // Show/hide relation field based on the selected value
            $("#requestingfor").change(function () {
                if ($(this).val() === "other") {
                    $("#relation_field").show();
                } else {
                    $("#relation_field").hide();
                }
            });

            // Fee calculation based on selected document
            $("#document").change(function () {
                var document = $(this).val();
                var feeElement = $("#fee");

                switch (document) {
                    case 'Barangay Clearance':
                        feeElement.text('75 Pesos');
                        break;
                    case 'Certificate of Indigency':
                        feeElement.text('100 Pesos');
                        break;
                    case 'Barangay ID':
                        feeElement.text('50 Pesos');
                        break;
                    case 'Community Tax Return':
                    case 'certificate of residency':
                    case 'business permit':
                    case 'health clearance':
					case 'building permit':
					case 'legal matters':
					case 'travel clearance':	
                    case 'birth or marriage':
                    case 'community programs':
                    case 'barangay assitance':
                    case 'for special transaction':
                        feeElement.text('20 Pesos');
                        break;
                    default:
                        feeElement.text('');
                        break;
                }
            });
        });
    </script>
<script>
    function showRelationField(selectElement) {
        var relationField = document.getElementById('relation_field');
        if (selectElement.value === 'other') {
            relationField.style.display = 'block';
        } else {
            relationField.style.display = 'none';
        }
    }
</script>
	
</body>
</html>