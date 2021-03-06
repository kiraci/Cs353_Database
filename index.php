<!DOCTYPE html>
<html>
<head>
	<title>Cs353 Database</title>

	<style type="text/css">
		body{
			background-color: #e6cbcb;
			font-family: 'Roboto', sans-serif;
			line-height: 2.5rem;
		}
		div{
			margin: 5%;
		}
	</style>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>

<div>

<div style="text-align: center">
	<h1>Cs353 Term Project </h1>
	<h2>Proposal Report</h2>
	<h2>Group - 26</h2>
	<h2>Hospital Management System</h2>
</div>


   <h3>Group Members</h3>

<ul style="font-size: 1.3rem;">
	<li>Osman Buğra Aydın - 21704100</li>
	<li>Ertuğrul Aktaş - 21802801</li>
	<li>Muhammed Doğancan Yılmazoğlu - 21801804</li>
	<li>Yahya Mahmoud Ahmed Elnouby Mohamed - 21801332</li>
</ul>




<ol style="border: 4px solid green;width: 40rem;">
	<li><h3>Introduction</h3></li>
	<li><h3>Project Description</h3></li>
	<li>
		<h3>Requirements</h3>
		<ol>
			<li><h3>Functional Requirements</h3></li>
			<li><h3>Non-Functional Requirements</h3></li>
			<li><h3>Constraints</h3></li>
		</ol>

	</li>
	<li><h3>Limitations</h3></li>
	<li><h3>Entity-Relationship Model</h3></li>
	<li><h3>WebPage Address</h3></li>
</ol>






<h3>1. Introduction</h3>
<p>
	This proposal is made for the course CS353 Database Managements Systems to demonstrate a hospital system database with its full components such as doctors, patients, clinics, etc. <br>
The following heading, “Project Description” emphasizes the contents of the project and the motive behind using a database system for an environment such as a hospital. <br>
The title “Requirements” discusses the system’s fundamental requirements regarding interactions between entities and subtle requirements such as the system’s capabilities. Lastly, the section talks about the constraints on the project pre-determined by the course that must be fulfilled. <br>
The following section, which is “Limitations”, talks about the possible limits that could come up in the later stages of the project concerning the actual implementation and architectural design. <br>
Lastly, the part “Entity-Relationship Model” shows a brief description of the system’s entities’ relationships using the ER Model. However, this model is a starting point for the project that could remain unchanged or modified later. <br>
</p>


<h3>2. Project Description</h3>
<p>
	Our project aims to design a hospital management system through a website by using a database system. The system will contain the fundamental components of a simple hospital such as doctors, nurses, patients, laboratorians, departments that will deal with tests, diagnoses, prescriptions and treatments. <br>
	Everyone involved in the hospital including the doctors and patients can use the system by registering to the hospital website where they can set up their account as a patient or an employee of the hospital. After that point, patients could set an appointment with their choice of doctors at a choice of their time if the doctor’s available. When the appointment is completed, the doctor could require a test from the patient for a more accurate diagnosis where the laboratory performs the test for the patient. When the test results come out, the doctor can use the database to compare the patient’s results with the normality values in the system. Lastly, the doctor could end up prescribing the patient depending on the diagnosis. <br>
	The users on the system will have the opportunity to change their information using the website and the system manager will have the permission to check and modify every single piece of information on the system. <br>
</p>

<h3>3. Requirements</h3>

<h4>3.1	Functional Requirements</h4>

<ol>
	<li>A patient can book an appointment with a particular doctor on a particular date and time</li>
	<li>A doctor can request a test for the patient</li>
	<li>A doctor can diagnose a patient</li>
	<li>A doctor can write a patient history</li>
	<li>A doctor can view the patient’s history</li>
	<li>A doctor can prescribe a treatment for the patient</li>
	<li>A doctor can view the test results of the patient</li>
	<li>A doctor can view patient appointments.</li>
	<li>A labrotorian can perform a test to a patient</li>
	<li>A nurse can update a patient's height, temperature, weight and blood pressure.</li>
	<li>A user could specify his/her username, password, birthday, phone number and zip.</li>
	<li>A user can update the information specified above.</li>
</ol>







<h4>3.2	Non-Functional Requirements</h4>

<ol>
	<li>The system must be able to withhold up to 1000 users.</li>
	<li>The system must be able to be used by at least 100 users at the same time.</li>
	<li>A query request must not take no longer than 1 second. </li>
	<li>The system must be open to additional departments and installments such as pharmacy, canteen, in-patient department.</li>
	<li>The data kept on the server must be encrypted to secure patient information.</li>
	<li>Other than the admin no personnel should be able to view user data.</li>
	<li>The appointment table for patients must refresh every 0.5 seconds to prevent overlapping with concurrent users.</li>
	<li>The system will contain no more than 4 buttons and input field to make it simple for the user.</li>
</ol>



<h4>3.3	Constraints</h4>

<ul>
	<li>MySQL for the database management system</li>
	<li>PHP for the backend</li>
	<li>HTML, CSS, BootStrap, JavaScript for the frontend</li>
</ul>


<h3>4. Limitations</h3>

<ul>
	<li>A doctor can’t take more than one patient at the same time</li>
	<li>A patient can’t book an appointment when the doctor is booked.</li>
	<li>A nurse can assist exactly one doctor</li>
	<li>A doctor can have exactly one nurse</li>
	<li>Only a doctor can request a test for the patient</li>
	<li>Only a labrotorian can update test results</li>
	<li>Only the doctor can update the patient's history and diagnosis.</li>
	<li>Only the doctor can prescribe a treatment to the patient.</li>
	<li>A patient can only view his information.</li>
</ul>




<h3>5. Entity Relationship Model</h3>
<div style="background-color: white;border-radius: 20%;">
	<img src="diagram.png" style="width:100%">
</div>

<h3>6. WebPage Address</h3>
	
	<a href="https://kiraci.github.io/Cs353_Database/">https://kiraci.github.io/Cs353_Database/</a>


</div>
</body>
</html>
