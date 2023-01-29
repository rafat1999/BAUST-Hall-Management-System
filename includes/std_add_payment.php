<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style.css">

	<title>Hall Management System</title>
	<script>
	var subjectObject = {
	  "Abbas Uddin Ahmed Hall": {
	    "Bkash": ["For Seat Allocation", "Monthly Payment"],
	    "Trust Bank":["For Seat Allocation", "Monthly Payment"]    
	  },
	  "Bir Protiki Taramon Bibi Hall": {
	    "Bkash": ["For Seat Allocation", "Monthly Payment"],
	    "Trust Bank":["For Seat Allocation", "Monthly Payment"] 
	  },
	  "New Hall": {
	    "Bkash": ["For Seat Allocation", "Monthly Payment"],
	    "Trust Bank":["For Seat Allocation", "Monthly Payment"] 
	  }
	}
	window.onload = function() {
	  var subjectSel = document.getElementById("hall_name");
	  var topicSel = document.getElementById("payment_method");
	  var chapterSel = document.getElementById("perpose");
	  for (var x in subjectObject) {
	    subjectSel.options[subjectSel.options.length] = new Option(x, x);
	  }
	  subjectSel.onchange = function() {
	//empty Chapters- and Topics- dropdowns
	 chapterSel.length = 1;
	 topicSel.length = 1;
	    //display correct values
	    for (var y in subjectObject[this.value]) {
	      topicSel.options[topicSel.options.length] = new Option(y, y);
	    }
	  }
	  topicSel.onchange = function() {
	  chapterSel.length = 1;
	    //display correct values
	    var z = subjectObject[subjectSel.value][this.value];
	    for (var i = 0; i < z.length; i++) {
	      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
	    }
	  }
	}
</script>
<style type="text/css">

th, td {
  padding: 10px;
  border-radius: 10px;
}
</style>
<style>
th, td {
  border: 1px solid black;
  border-radius: 10px;
}
</style>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='fas fa-school'></i>
			<span class="text">BAUST Hall Management System</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="table_format.php">
					<i class='bx bxs-circle bx-burst' ></i>
					<span class="text">Student Admission</span>
				</a>
			</li>
			<li>
				<a href="Std_addmition.php">
					<i class='bx bxs-circle bx-burst' ></i>
					<span class="text">Student List</span>
				</a>
			</li>
			<li>
				<a href="new.php">
					<i class='bx bxs-doughnut-chart bx-burst' ></i>
					<span class="text">Student payment</span>
				</a>
			</li>
			<li>
				<a href="attendence test.php">
					<i class='bx bxs-group bx-burst' ></i>
					<span class="text">Student Attendence</span>
				</a>
			</li>
			<li>
				<a href="chk_attendance.php">
					<i class='bx bxs-group bx-burst' ></i>
					<span class="text">Check Attendence</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag bx-burst' ></i>
					<span class="text">Meal Management</span>

				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group bx-burst' ></i>
					<span class="text">Employee Management</span>
					
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag bx-burst' ></i>
					<span class="text">Bill Management</span>
					
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="insert.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Notice Board</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
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
			<a href="About hall.html" class="nav-link">About BAUST Hall</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="Mess bill.pdf" class="notification">Notice
				<i class='bx bxs-bell' ></i>
				<span class="num">1</span>
			</a>
			<a href="BAUST web.html" class="profile">
				<img src="img/people.jpeg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<br><br>
			<center><font face="Times New Roman"><i><b><h2>Add Student Details</h2></b></i></font></center><br>
			<br><br>
			<form name="form1" id="form1" action="../connection/connection.php" method="POST">
				<center>
					  <table align="center">
					  	<tr>
					  		<td>Name:</td>
					  		<td><input type="text" name="name"></td>
					  		<td>Student ID:</td>
					  		<td><input type="number" name="std_id"></td>
					  	</tr>
					  	<tr>
					  		<td>Department:</td>
					  		<td><select id="department" name="department">
					  			<option>Select Department</option>
					  			<option value="CSE">Department of CSE</option>
					  			<option value="EEE">Department of EEE</option>
					  			<option value="ME">Department of ME</option>
					  			<option value="IPE">Deparmtnet of IPE</option>
					  			<option value="CE">Department of CE</option>
					  			<option value="BBA">Deparment of BBA</option>
					  			<option value="English">Department of English</option>
					  		</select></td>
					  		<td>Batch:</td>
					  		<td>
					  			<select id="batch" name="batch">
					  			<option>Select Batch</option>
					  			<option value="8th">8th</option>
					  			<option value="9th">9th</option>
					  			<option value="10th">10th</option>
					  			<option value="11th">11th</option>
					  			<option value="12th">12th</option>
					  			<option value="13th">13th</option>
					  			<option value="14th">14th</option>
					  			<option value="15th">15th</option>
					  			<option value="16th">16th</option>
					  			<option value="17th">17th</option>
					  			<option value="18th">18th</option>
					  			<option value="19th">19th</option>
					  			<option value="20th">20th</option>
					  		</select>
					  		</td>
					  	</tr>
					  	<tr>
					  		<td>Student Phone No:</td>
					  		<td><input type="number" name="mobile"></td>
					  		<td>Student National ID:</td>
					  		<td><input type="number" name="nid"></td>
					  	</tr>
					  	<tr>
					  		<td>Guardian Name: </td>
					  		<td><input type="text" name="g_name"></td>
					  		<td>Guardian Mobile No: </td>
					  		<td><input type="number" name="g_mobile"></td>
					  		
					  	</tr>
					  	<tr>
					  		<td>Relation With Student:</td>
					  		<td>
					  			<select id="relation" name="relation">
					  				<option value="">Select Relation</option>
					  				<option value="Father">Father</option>
					  				<option value="Mother">Mother</option>
					  				<option value="Brother">Brother</option>
					  			</select>
					  		</td>
					  		<td>Guardian National ID: </td>
					  		<td><input type="number" name="g_nid"></td>

					  	</tr>
					  	<tr>
					  		<td>Address:</td>
					  		<td><input type="text" name="address"></td>
					  		<td>Hall Entry Date:</td>
					  		<td><input type="date" name="date"></td>

					  	</tr>

					  	<tr>
					  		<td>Room:</td>
					  		<td><select id="room" name="room">
					  			<option value="101">101</option>
					  			<option value="102">102</option>
					  			<option value="103">103</option>
					  			<option value="104">104</option>
					  			<option value="105">105</option>
					  			<option value="106">106</option>
					  			<option value="107">107</option>
					  			<option value="108">108</option>
					  			<option value="109">109</option>
					  			<option value="110">110</option>
					  			<option value="111">111</option>
					  			<option value="112">112</option>
					  			<option value="113">113</option>
					  			<option value="114">114</option>
					  			<option value="115">115</option>
					  			<option value="116">116</option>
					  			<option value="117">117</option>
					  			<option value="118">118</option>
					  			<option value="119">119</option>
					  			<option value="120">120</option>
					  			<option value="121">121</option>
					  			<option value="122">122</option>
					  			<option value="123">123</option>
					  			<option value="201">201</option>
					  			<option value="202">202</option>
					  			<option value="203">203</option>
					  			<option value="204">204</option>
					  			<option value="205">205</option>
					  			<option value="206">206</option>
					  			<option value="207">207</option>
					  			<option value="208">208</option>
					  			<option value="209">209</option>
					  			<option value="210">210</option>
					  			<option value="211">211</option>
					  			<option value="212">212</option>
					  			<option value="213">213</option>
					  			<option value="214">214</option>
					  			<option value="215">215</option>
					  			<option value="216">216</option>
					  			<option value="217">217</option>
					  			<option value="218">218</option>
					  			<option value="219">219</option>
					  			<option value="220">220</option>
					  			<option value="221">221</option>
					  			<option value="222">222</option>
					  			<option value="223">223</option>
					  			<option value="224">224</option>
					  			<option value="225">225</option>
					  			<option value="226">226</option>
					  			<option value="227">227</option>
					  			<option value="228">228</option>
					  			<option value="301">301</option>
					  			<option value="302">302</option>
					  			<option value="303">303</option>
					  			<option value="204">304</option>
					  			<option value="305">305</option>
					  			<option value="306">306</option>
					  			<option value="307">307</option>
					  			<option value="308">308</option>
					  			<option value="309">309</option>
					  			<option value="310">310</option>
					  			<option value="311">311</option>
					  			<option value="312">312</option>
					  			<option value="313">313</option>
					  			<option value="314">314</option>
					  			<option value="315">315</option>
					  			<option value="316">316</option>
					  			<option value="317">317</option>
					  			<option value="318">318</option>
					  			<option value="319">319</option>
					  			<option value="320">320</option>
					  			<option value="321">321</option>
					  			<option value="322">222</option>
					  			<option value="323">323</option>
					  			<option value="324">324</option>
					  			<option value="325">325</option>
					  			<option value="326">326</option>
					  			<option value="327">327</option>
					  			<option value="328">328</option>
					  			<option value="401">401</option>
					  			<option value="402">402</option>
					  			<option value="403">403</option>
					  			<option value="404">404</option>
					  			<option value="405">405</option>
					  			<option value="406">406</option>
					  			<option value="407">407</option>
					  			<option value="408">408</option>
					  			<option value="409">409</option>
					  			<option value="410">410</option>
					  			<option value="411">411</option>
					  			<option value="412">412</option>
					  			<option value="413">413</option>
					  			<option value="414">414</option>
					  			<option value="415">415</option>
					  			<option value="416">416</option>
					  			<option value="417">417</option>
					  			<option value="418">418</option>
					  			<option value="419">419</option>
					  			<option value="420">420</option>
					  			<option value="421">421</option>
					  			<option value="422">422</option>
					  			<option value="423">423</option>
					  			<option value="424">424</option>
					  			<option value="425">425</option>
					  			<option value="426">426</option>
					  			<option value="427">427</option>
					  			<option value="428">428</option>
					  			<option value="501">501</option>
					  			<option value="502">502</option>
					  			<option value="503">503</option>
					  			<option value="504">504</option>
					  			<option value="505">505</option>
					  			<option value="506">506</option>
					  			<option value="507">507</option>
					  			<option value="508">508</option>
					  			<option value="509">509</option>
					  			<option value="510">510</option>
					  			<option value="511">511</option>
					  			<option value="512">512</option>
					  			<option value="513">513</option>
					  			<option value="514">514</option>
					  			<option value="515">515</option>
					  			<option value="516">516</option>
					  			<option value="517">517</option>
					  			<option value="518">518</option>
					  			<option value="519">519</option>
					  			<option value="520">520</option>
					  			<option value="521">521</option>
					  			<option value="522">522</option>
					  			<option value="523">523</option>
					  			<option value="524">524</option>
					  			<option value="525">525</option>
					  			<option value="526">526</option>
					  			<option value="527">527</option>
					  			<option value="528">528</option>
					  		</select></td>
					  		<td>Hall Name: </td>
					  		<td><select name="hall_name" id="hall_name">
					    <option value="" selected="selected">Select Hall Name</option>
					  </select></td>
					  	</tr>
					  	<tr>
					  		<td>Payment Method: </td>
					  		<td><select name="payment_method" id="payment_method">
					    <option value="" selected="selected">Please select Hall Name Frist</option>
					  </select></td>
					  <td>Perpose:</td>
						<td>
						  	<select name="perpose" id="perpose">
						    <option value="" selected="selected">Please select Payment first</option>
						  </select>
						</td>
					  	</tr>
					  	<tr>
					  		<td>TXN ID: </td>
					  		<td><input type="text" name="txn_id" placeholder="EX: TXN-123456"></td>
					  		<td>Amount</td>
					  		<td><input type="number" name="amount"></td>
					  	</tr>
					  </table>
					  <br><br>
					  <input type="submit" value="Allowcate Seat"> 
				</center> 
			</form>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>