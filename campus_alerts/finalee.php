
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />

    <title>Teacher Interface of Campus Alerts</title>
    <link rel="stylesheet" href="last3.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
 
     
    <style>
      
.form-box {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
}
.wrapper {
	display: flex;
	justify-content: center;
	align-items: center;
	background: #fff;
	padding: 20px;
	width: 900px;
	height: 600px;
	border-radius: 10px;
	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
}
.img-area {
	flex: 1;
	padding: 20px;
	text-align: center;
}
.img-area img {
	max-width: 100%;
	height: auto;
}
.form-area {
	flex: 1;
	padding: 10px;
	background-color: #fff;
	text-align: center;
	display: inline-flex;
	flex-direction: column;
	justify-content: center;
}
.form-area h3 {
	font-size: 22px;
	margin-bottom: 9px;
}
.single-form {
	margin-bottom: 9px;
}
input[type="text"], input[type="password"] {
	width: 100%;
	padding: 10px;
	border: 1px solid #ccc;
	border-radius: 5px;
}
input[type="submit"] {
	background-color: #007BFF;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}
    @media (max-width: 768px) {
	   .wrapper {
		   flex-direction: column;
		   text-align: center;
		   height: auto;
		   width: auto;
	    }
	    .img-area, .form-area {
		   flex: none;
	    }
	    .img-area {
	   	margin-bottom: 20px;
	   }
     }
     
     .logout-button {
            font-size: 24px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .logout-button:hover {
            background-color: #0056b3;
        }
      /* This code assumes you already have styles for .about-row, .about-column, and .about-card. */
      table{
        width: 1000px;
        box-shadow: -1px 12px 12px -6px rgba(0,0,0,0.5);
      }
      table, td, th{
        padding: 20px;
        border: 1px solid lightgray;
        border-collapse: collapse;
        text-align: center;
        cursor: pointer;
      }
      td{
        font-size: 18px;
      }
      th{
        background-color: blue;
        color: white;
      }
      /* Center the content */
      .about-row {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
      }

      .about-column {
        width: calc(33.33% - 16px); /* 33.33% width with some spacing */
        margin: 8px;
      }

      /* For responsiveness */
      @media screen and (max-width: 768px) {
        .about-row {
          flex-direction: column-reverse;
        }

        .about-column {
          width: 100%; /* Full width on small screens */
        }
      }

      .about-column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
        margin-left: 80px;
      }

      .about-card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
      }
      #abouth1 {
        color: white;
      }
      .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
        justify-content: space-between;
      }

      .about-container {
        padding: 0 16px;
      }

      .about-container::after,
      .about-row::after {
        content: "";
        clear: both;
        display: table;
      }

      .title {
        color: grey;
      }

      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
      }

      .button:hover {
        background-color: #555;
      }
      footer {
        padding: 1px;
        text-align: center;
        background-color: #333;
        color: white;
        outline: 0;
      }

      .alldivs {
        position: relative;
        top: 2%;
        left: 0;
        height: 640px;
        width: 100%;
        overflow: visible;
        z-index: 5;
        display: none;
      }
      .content {
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        
      }
      /*academic section*/
      #academicsbuttonContainer {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .academics-hidden {
            display: none;
        }

        #academicssendMessageBtn, #academicsviewMessageBtn {
            background-color: #3498db; /* Blue color for the buttons */
            color: #fff; /* White text color */
            padding: 15px 30px; /* Increase button size */
            border: none;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
        }

        #academicssendMessageBtn:hover, #academicsviewMessageBtn:hover {
            background-color: #2980b9; /* Darker blue for button hover */
        }
        .academics-container {
            border: 8px solid black;
            border-radius: 10px;
            width: 40%;
            
            margin-left:100px;
            
        
        }

        .academics-highlight {
            background-color: yellow;
            text-align: center;
        }

        .academics-row {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .academics-column {
            flex: 1;
            margin-left: 99px;
            text-align: left;
        }

        .academics-column label {
            display: block;
            margin-bottom: 5px;
        }

        .academics-column input[type="text"],
        .academics-column select,
        .academics-column textarea {
            width: 50%;
            padding: 5px;
        }

        .academics-submit-button {
            text-align: center;
            margin-left: 150px;
        }
        .academics-img{
           
            max-width:fit-content;
            height: auto;
            border: 3px solid #4a4040;
            border-radius:2px;
            padding: 1px;
            display:block;
            width:100%;
            position:relative;
            margin-left:700px;
            margin-top:100px;
            
           
        }
        .academics-text{
            position:absolute;
            top:210px;
            left:880px;

            font-size:35px;
        }
        /*notification*/
        #notifybuttonContainer {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .notify-hidden {
            display: none;
        }

        #notifysendMessageBtn, #notifyviewMessageBtn {
            background-color: #3498db; /* Blue color for the buttons */
            color: #fff; /* White text color */
            padding: 15px 30px; /* Increase button size */
            border: none;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
        }

        #notifysendMessageBtn:hover, #notifyviewMessageBtn:hover {
            background-color: #2980b9; /* Darker blue for button hover */
        }
        
        .notify-img{
           
            max-width:fit-content;
            height: auto;
          /*  border: 3px solid #4a4040;*/
            border-radius:2px;
            padding: 1px;
            display:flex;
            width:100%;
            position:relative;
            margin-left:840px;
            margin-top:100px;
            
           
        }
        .notify-text{
            position:absolute;
            top:100px;
            left:880px;
            font-size:35px;
        }
       
        .info-notify{
            
            margin-top:-550px;
            margin-right: 900px;
        
        }
        #notify{
            margin-left: 160px;
          }
          /*meaasge*/
          .messageformcontainer {
            border: 8px solid black;
            border-radius: 10px;
            width: 40%;
            margin-top: -420px;
            margin-bottom: 100px;
            margin-left: 20px;
            padding: 20px;
        }

        .mhighlight {
            background-color: yellow;
            text-align: center;
        }

        .mrow {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .mcolumn {
            flex: 1;
            margin-left: 99px;
            text-align: left;
        }

        .mcolumn label {
            display: block;
            margin-bottom: 5px;
        }

        .mcolumn input[type="text"],
        .mcolumn select,
        .mcolumn textarea {
            width: 80%;
            padding: 5px;
        }

        .msubmit-button {
            text-align: center;
            margin-left: 150px;
        }
        #hsendmessageBtn, #hviewMessageBtn {
            background-color: #3498db; /* Blue color for the buttons */
            color: #fff; /* White text color */
            padding: 15px 30px; /* Increase button size */
            border: none;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
        }

        #hsendmessageBtn:hover, #hviewMessageBtn:hover {
            background-color: #2980b9; /* Darker blue for button hover */
        }
        #msendMessageBtn, #mviewMessageBtn {
            background-color: #3498db; /* Blue color for the buttons */
            color: #fff; /* White text color */
            padding: 15px 30px; /* Increase button size */
            border: none;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
        }
        

        #msendmessageBtn:hover, #mviewMessageBtn:hover {
            background-color: #2980b9; /* Darker blue for button hover */
        }

        #nsendMessageBtn,#nviewMessageBtn {
            background-color: #3498db; /* Blue color for the buttons */
            color: #fff; /* White text color */
            padding: 15px 30px; /* Increase button size */
            border: none;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
        }

        #nsendmessageBtn:hover, #nviewMessageBtn:hover {
            background-color: #2980b9; /* Darker blue for button hover */
        }

        
       
       
    </style>
  </head>
  <body>
    <div class="btn">
      <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
      <div class="text">Campus Alerts</div>
      <ul>
        <li>
          <a href="#" onclick="displayhome()"
            ><i class="fas fa-home"></i>&nbsp;Home</a
          >
        </li>
        <li>
          <a href="#" onclick="displaynotification()"
            ><i class="fas fa-bell"></i>&nbsp;Notifications</a
          >
        </li>
        <li>
          <a href="#" class="feat-btn"
            ><i class="fas fa-th"></i>&nbsp;Sections
            <span class="fas fa-caret-down first"></span>
          </a>
          <ul class="feat-show">
            <li>
              <a href="#" onclick="displayacademics()"
                ><i class="fas fa-graduation-cap"></i>&nbsp;Academics</a
              >
            </li>
            <li>
              <a href="#" onclick="displayscholarship()"
                ><i class="fas fa-money-bill-wave"></i>&nbsp;Scholarship</a
              >
            </li>
            <li>
              <a href="#" onclick="displaygames()"
                ><i class="fas fa-futbol"></i>&nbsp;Games&Sports</a
              >
            </li>
            <li>
              <a href="#" onclick="displayevents()"
                ><i class="fas fa-calendar-alt"></i>&nbsp;Events</a
              >
            </li>
            <li>
              <a href="#" onclick="displayhostel()"
                ><i class="fas fa-hotel"></i>&nbsp;Hostel</a
              >
            </li>
            <li>
              <a href="#" onclick="displaymess()"
                ><i class="fas fa-utensils"></i>&nbsp;Mess</a
              >
            </li>
          </ul>
        </li>
        <li>
          <a href="#" class="serv-btn" onclick="displaycontact()"
            ><i class="fas fa-envelope"></i>&nbsp;Contact
          </a>
        </li>
        <li>
          <a href="#" onclick="displayservices()"
            ><i class="fas fa-wrench"></i>&nbsp;Services</a
          >
        </li>
        <li>
          <a href="#" onclick="displayaboutus()"
            ><i class="fas fa-info-circle"></i>&nbsp;About us</a
          >
        </li>
        <li>
          <a href="#" onclick="displayprofile()"
            ><i class="fas fa-user-circle"></i>&nbsp;Profile</a
          >
        </li>
        <li>
          <a href="#" onclick="displaylogout()"
            ><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a
          >
        </li>
      </ul>
    </nav>
    <main class=""></main>
    <div class="content">
      <!-- home -->
      <div id="home-div" class="alldivs" style="display: block">
        
        <h2
          style="
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande',
              'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: 500;
            font-size: 60px;
            margin-left:-600px;margin-top:30px;
          "
        >
          CAMPUS ALERTS
        </h2>
        <h1 class="king">Stay alert,<br />Stay informed...</h1>
        <img
          src="college.jpeg"
          style="
            height: 500px;
            width: 700px;
            margin-left: 700px;
            margin-top: -300px;
          "
        />
        <div class="quote">--Be The First One To Know</div>
        <div class="paragraphhomepage">
          Our Web application empowers the college community through seamless
          connectivity and timely notifications, bridging students and staff for
          an elevated college experience. Stay informed, engaged, and connected
          with the latest updates, events,and information all in one place.
        </div>
      </div>
      <!-- notifications -->
      <div id="notification-div" class="alldivs">
       <!-- <h3>You Can View all Categories messages here....</h3>-->
         <div id="notifybuttonContainer">
       <button id="nsendMessageBtn">About Notification Category</button>
        <button id="nviewMessageBtn" onclick="function fetchDataFromEndpoint(endpoint) {
  $.ajax({
    url: endpoint,
    method: 'GET',
    dataType: 'json',
    success: function (data) {
      updateTable(data);
    },
    error: function (error) {
      console.error('Error fetching data from', endpoint, ':', error);
    }
  });
}

// Call the function for each retrieve file
fetchDataFromEndpoint('retreive.php');
fetchDataFromEndpoint('retreive1.php');
fetchDataFromEndpoint('retreive2.php');
fetchDataFromEndpoint('retreive3.php');
fetchDataFromEndpoint('retreive4.php');
fetchDataFromEndpoint('retreive5.php');
fetchDataFromEndpoint('retreive6.php');


    // Function to update the table with the received data
    function updateTable(data) {
      var table = $('#myTablemain');

      // Iterate over the data and append rows to the table
      $.each(data, function(index, item) {
        var row = $('<tr>');
        row.append($('<td>').text(item.category));
        row.append($('<td>').text(item.sender));
        row.append($('<td>').text(item.to));
        row.append($('<td>').text(item.message));
        row.append($('<td>').text(item.time));

        table.append(row);
      });
    }

    // Call the function to fetch data and update the table
    fetchDataAndUpdateTable();

        ">View all Notifications</button>
      </div>
      
      <div id="nsendMessage" style="display:block;">
        
       
        <div class="notify-img">
         <!-- <img src="https://img.freepik.com/premium-vector/smartphone-with-notification-new-email-message-phone-alert-message-notification-concept-new-message-other-notice-unread-email-danger-error-alerts-virus-insecure-messaging-spam_435184-1049.jpg?size=626&ext=jpg&ga=GA1.1.386372595.1698364800&semt=ais" alt="Notification Image" width="100%">-->
          <img src="https://img.freepik.com/premium-vector/new-message-notification-concept-3d-mail-letter-message-chat-speak-dialog-post-icon-sign-symbol_659151-724.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699488000&semt=sph"style="margin-top:20px;">
        </div>
        <div class="notify-text">NOTIFICATIONS UPDATES</div>
        <div class="info-notify">
           
            <div id="carouselExample" class="carousel slide" data-ride="carousel" style="width: 800px;margin-left:5%;margin-top:25px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="academicimage.jpg" class="d-block w-100 mx-auto" alt="Image 1"style="width:700px;margin-left:17%;margin-top:100px;">
                    </div>
                    <div class="carousel-item">
                        <img src="eventfinalimage.jpg" class="d-block w-100 mx-auto" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="hostelimage2.jpg" class="d-block w-100 mx-auto" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="scholarshipimage2.jpg" class="d-block w-100 mx-auto" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="messfinal.jpg" class="d-block w-100 mx-auto" alt="">
                    </div>
                     <div class="carousel-item">
                        <img src="sportsimagefinal.jpg" class="d-block w-100 mx-auto" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
      </div></div>
      
      <div id="nviewMessage" class="notify-hidden">
        <h1>You can view all the Notifications here...</h1>
       <p>This is the message you want to view.</p>
       <table style="margin-left:14%;" id="myTablemain">
    <tr>
        <th>Category</th>
        <th>Sender</th>

		<th>To</th>

		<th>Message</th>

		<th>Time</th>
    </tr>

    
</table>
      </div>
      
      </div>
      <!-- academics  -->
      <div id="academic-div" class="alldivs">
       <div id="academicsbuttonContainer">
        <button id="academicssendMessageBtn">Send a Message</button>
        <button id="academicsviewMessageBtn" onclick="
          function fetchDataAndUpdateTable() {
           $.ajax({
             url: 'retreive.php', // Replace with your actual API endpoint
             method: 'GET',
              dataType: 'json',
              success: function(data) {
          updateTable(data);
                  },
            error: function(error) {
              console.error('Error fetching data:', error);
              }
           });
         }

    // Function to update the table with the received data
    function updateTable(data) {
      var table = $('#myTable');

      // Iterate over the data and append rows to the table
      $.each(data, function(index, item) {
        var row = $('<tr>');
        row.append($('<td>').text(item.category));
        row.append($('<td>').text(item.sender));
        row.append($('<td>').text(item.to));
        row.append($('<td>').text(item.message));
        row.append($('<td>').text(item.time));
        table.append(row);
      });
    }

    // Call the function to fetch data and update the table
    fetchDataAndUpdateTable();
    
    ">View a Message</button>
    </div>
    
    <div id="academics-sendMessage" class="academics-hidden" style="display: block;">
        <h1>Send a Message</h1>
        <p>Compose your message here...</p>
        <div class="academics-img">
            <img src="academicimage.jpg" alt="image" width="700px"height="400px">
        </div>
        <div class="academics-text">ACADEMICS UPDATES</div>
        <div class="messageformcontainer">
              <h1 class="mhighlight">Send a Message to Students</h1>
    <form id="messageForm" method="post" > 
        <!-- Question 0 - Category -->
        <div class="mrow">
            <div class="mcolumn">
                <label for="category">Category:</label>
                <select id="category" name="category" >
                            <option value="academics">ACADEMICS</option>
                            <option value="scholarship">SCHOLARSHIP</option>
                            <option value="gamesandsports">GAMES AND SPORTS</option>
                            <option value="events">EVENTS</option>
                            <option value="hostel">HOSTEL</option>
                            <option value="mess">MESS</option>
                        </select>
            </div>
        </div>

        <!-- Question 1 - Sender -->
        <div class="mrow">
            <div class="mcolumn">
                <label for="from">FROM:</label>
                <input type="text" id="from" name="from">
            </div>
        </div>

        <!-- Question 2 - Recipients -->
        <div class="mrow">
            <div class="mcolumn">
                <label for="to">TO:</label>
                <select id="to" name="to" onchange="handleToSelection()">
                    <option value="none">None</option>
                    <option value="all">All</option>
                    <option value="PUC">PUC</option>
                    <option value="engineering">ENGINEERING</option>
                </select>
            </div>
        </div>

        <!-- Question 2.1 - PUC GROUP -->
        <div class="mrow" id="pucGroupQuestion" style="display: none;">
            <div class="mcolumn">
                <label for="pucGroup">PUC GROUP:</label>
                <select id="pucGroup" name="pucGroup" onchange="handlePUCGroup()">
                    <option value="allPUC">ALL PUC STUDENTS</option>
                    <option value="PUC1">PUC - 1</option>
                    <option value="PUC2">PUC - 2</option>
                </select>
            </div>
        </div>

        <!-- Question 2.2 - PUC SECTIONS -->
        <div class="mrow" id="pucSectionQuestion" style="display: none;">
            <div class="mcolumn">
                <label for="pucSection">PUC SECTIONS:</label>
                <select id="pucSection" name="pucSection">
                    <option value="allSections">ALL SECTIONS</option>
                    <option value="section1">SECTION 1</option>
                    <option value="section2">SECTION 2</option>
                    <option value="section3">SECTION 3</option>
                    <option value="section4">SECTION 4</option>
                </select>
            </div>
        </div>

        <!-- Question 2.3 - ENGINEERING YEAR -->
        <div class="mrow" id="engineeringYearQuestion" style="display: none;">
            <div class="mcolumn">
                <label for="engineeringYear">YEAR:</label>
                <select id="engineeringYear" name="engineeringYear" onchange="handleEngineeringYear()">
                    <option value="allEngineering">ALL ENGINEERING STUDENTS</option>
                    <option value="E1">E1</option>
                    <option value="E2">E2</option>
                    <option value="E3">E3</option>
                    <option value="E4">E4</option>
                </select>
            </div>
        </div>

        <!-- Question 2.4 - ENGINEERING BRANCH -->
        <div class="mrow" id="engineeringBranchQuestion" style="display: none;">
            <div class="mcolumn">
                <label for="engineeringBranch">BRANCH:</label>
                <select id="engineeringBranch" name="engineeringBranch" onchange="handleEngineeringBranch()">
                    <option value="allBranches">ALL BRANCHES</option>
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="civil">CIVIL</option>
                    <option value="mech">MECH</option>
                </select>
            </div>
        </div>

        <!-- Question 2.5 - ENGINEERING SECTIONS -->
        <div class="mrow" id="engineeringSectionQuestion" style="display: none;">
            <div class="mcolumn">
                <label for="engineeringSection">ENGINEERING SECTIONS:</label>
                <select id="engineeringSection" name="engineeringSection">
                    <option value="allSections">ALL SECTIONS</option>
                    <option value="section1">SECTION 1</option>
                    <option value="section2">SECTION 2</option>
                    <option value="section3">SECTION 3</option>
                    <option value="section4">SECTION 4</option>
                </select>
            </div>
        </div>

        <!-- Question 3 - Message -->
        <div class="mrow">
            <div class="mcolumn">
                <label for="message">MESSAGE:</label>
                <textarea id="message" name="message" rows="2" cols="30"></textarea>
            </div>
        </div>

        

        <!-- Date and Time Stamp -->
        <div class="mrow">
            <div class="mcolumn">
                
                <span id="dateTime"></span>
            </div>
        </div>

        <!-- Question 5 - Submit Button -->
        <div class="mrow msubmit-button">
            <input type="submit" value="SUBMIT">
        </div>
    </form>
        </div>
       
    </div>
   

    <div id="academics-viewMessage" class="academics-hidden">
        <h1>View a Message</h1>
        <p>This is the message you want to view.</p>
        <table style="margin-left:14%;" id="myTable">
        <tr>
          <th>Category</th>
          <th>Sender</th>
          <th>To</th>
          <th>Message</th>
          <th>Time</th>
        </tr>
      </table>

    </div></div>
      <!--scholarship-->
      <div id="scholarship-div" class="alldivs">
        
       <div id="scholarbuttonContainer">
        <button id="scholarsendMessageBtn">Send a Message</button>
        <button id="scholarviewMessageBtn" onclick="
          function fetchDataAndUpdateTable() {
      $.ajax({
        url: 'retreive2.php', // Replace with your actual API endpoint
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          updateTable(data);
        },
        error: function(error) {
          console.error('Error fetching data:', error);
        }
      });
    }

    // Function to update the table with the received data
    function updateTable(data) {
      var table = $('#myTable2');

      // Iterate over the data and append rows to the table
      $.each(data, function(index, item) {
        var row = $('<tr>');
        row.append($('<td>').text(item.category));
        row.append($('<td>').text(item.sender));
        row.append($('<td>').text(item.to));
        row.append($('<td>').text(item.message));
        row.append($('<td>').text(item.time));
        table.append(row);
      });
    }

    // Call the function to fetch data and update the table
    fetchDataAndUpdateTable();
    
    ">View a Message</button>
    </div>
    
    <div id="scholar-sendMessage" class="scholar-hidden" style="display: block;">
        <h1>Send a Message</h1>
        <p>Compose your message here...</p>
        <div class="scholar-img">
            <img src="scholarshipimage2.jpg" alt="image" width="700px"height="400px">
        </div>
        <div class="scholar-text">SCHOLARSHIP UPDATES</div>
        <div class="scholar-container">
           
            <h1 class="scholar-highlight">Send a Message to Students</h1>
         
            <form id="scholar-messageForm" method="post" >
                <!-- Question 0 - Category -->
                <div class="scholar-row">
                    <div class="scholar-column">
                        <label for="category">Category:</label>
                        <select id="category" name="category" >
                          <option value="scholarship">SCHOLARSHIP</option>
                            <option value="academics">ACADEMICS</option>
                            <option value="gamesandsports">GAMES AND SPORTS</option>
                            <option value="events">EVENTS</option>
                            <option value="hostel">HOSTEL</option>
                            <option value="mess">MESS</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 1 - Sender -->
                <div class="scholar-row">
                    <div class="scholar-column">
                        <label for="scholar-from">FROM:</label>
                        <input type="text" id="scholar-from" name="scholar-from">
                    </div>
                </div>
        
                <!-- Question 2 - Recipients -->
                <div class="scholar-row">
                    <div class="scholar-column">
                        <label for="scholar-to">TO:</label>
                        <select id="scholar-to" name="scholar-to" onchange="scholarhandleToSelection()">
                            <option value="none">None</option>
                            <option value="all">All</option>
                            <option value="PUC">PUC</option>
                            <option value="engineering">ENGINEERING</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.1 - PUC GROUP -->
                <div class="scholar-row" id="scholarpucGroupQuestion" style="display: none;">
                    <div class="scholar-column">
                        <label for="scholarpucGroup">PUC GROUP:</label>
                        <select id="scholarpucGroup" name="scholarpucGroup" onchange="scholarhandlePUCGroup()">
                            <option value="allPUC">ALL PUC STUDENTS</option>
                            <option value="PUC1">PUC - 1</option>
                            <option value="PUC2">PUC - 2</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.2 - PUC SECTIONS -->
                <div class="scholar-row" id="scholarpucSectionQuestion" style="display: none;">
                    <div class="scholar-column">
                        <label for="scholarpucSection">PUC SECTIONS:</label>
                        <select id="scholarpucSection" name="scholarpucSection">
                            <option value="allSections">ALL SECTIONS</option>
                            <option value="section1">SECTION 1</option>
                            <option value="section2">SECTION 2</option>
                            <option value="section3">SECTION 3</option>
                            <option value="section4">SECTION 4</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.3 - ENGINEERING YEAR -->
                <div class="scholar-row" id="scholarengineeringYearQuestion" style="display: none;">
                    <div class="scholar-column">
                        <label for="scholarengineeringYear">YEAR:</label>
                        <select id="scholarengineeringYear" name="scholarengineeringYear" onchange="scholarhandleEngineeringYear()">
                            <option value="allEngineering">ALL ENGINEERING STUDENTS</option>
                            <option value="E1">E1</option>
                            <option value="E2">E2</option>
                            <option value="E3">E3</option>
                            <option value="E4">E4</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.4 - ENGINEERING BRANCH -->
                <div class="scholar-row" id="scholarengineeringBranchQuestion" style="display: none;">
                    <div class="scholar-column">
                        <label for="scholarengineeringBranch">BRANCH:</label>
                        <select id="scholarengineeringBranch" name="scholarengineeringBranch" onchange="scholarhandleEngineeringBranch()">
                            <option value="allBranches">ALL BRANCHES</option>
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                            <option value="EEE">EEE</option>
                            <option value="civil">CIVIL</option>
                            <option value="mech">MECH</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.5 - ENGINEERING SECTIONS -->
                <div class="scholar-row" id="scholarengineeringSectionQuestion" style="display: none;">
                    <div class="scholar-column">
                        <label for="scholarengineeringSection">ENGINEERING SECTIONS:</label>
                        <select id="scholarengineeringSection" name="scholarengineeringSection">
                            <option value="allSections">ALL SECTIONS</option>
                            <option value="section1">SECTION 1</option>
                            <option value="section2">SECTION 2</option>
                            <option value="section3">SECTION 3</option>
                            <option value="section4">SECTION 4</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 3 - Message -->
                <div class="scholar-row">
                    <div class="scholar-column">
                        <label for="scholar-message">MESSAGE:</label>
                        <textarea id="scholar-message" name="scholar-message" rows="4" cols="50"></textarea>
                    </div>
                </div>
        
                <!-- Question 4 - Attachments -->
                
                <!-- Date and Time Stamp -->
                <div class="scholar-row">
                    <div class="scholar-column">
                        
                        <span id="scholardateTime"></span>
                    </div>
                </div>
        
                <!-- Question 5 - Submit Button -->
                <div class="scholar-row scholar-submit-button">
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </div>
       
    </div>
   

    <div id="scholar-viewMessage" class="scholar-hidden">
        <h1>View a Message</h1>
        <p>This is the message you want to view.</p>
        <table style="margin-left:14%;" id="myTable2">
        <tr>
          <th>Category</th>
          <th>Sender</th>
          <th>To</th>
          <th>Message</th>
          <th>Time</th>
        </tr>
      </table>
    </div></div>
      <!--games and sports-->
      <div id="games-div" class="alldivs">
       <div id="gamesAsportsbuttonContainer">
        <button id="gamesAsportssendMessageBtn">Send a Message</button>
        <button id="gamesAsportsviewMessageBtn" onclick="
          function fetchDataAndUpdateTable() {
      $.ajax({
        url: 'retreive3.php', // Replace with your actual API endpoint
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          updateTable(data);
        },
        error: function(error) {
          console.error('Error fetching data:', error);
        }
      });
    }

    // Function to update the table with the received data
    function updateTable(data) {
      var table = $('#myTable3');

      // Iterate over the data and append rows to the table
      $.each(data, function(index, item) {
        var row = $('<tr>');
        row.append($('<td>').text(item.category));
        row.append($('<td>').text(item.sender));
        row.append($('<td>').text(item.to));
        row.append($('<td>').text(item.message));
        row.append($('<td>').text(item.time));
        table.append(row);
      });
    }

    // Call the function to fetch data and update the table
    fetchDataAndUpdateTable();
    
    ">View a Message</button>
    </div>
    
    <div id="gamesAsports-sendMessage" class="gamesAsports-hidden" style="display: block;">
        <h1>Send a Message</h1>
        <p>Compose your message here...</p>
        <div class="gamesAsports-img">
            <img src="sportsimagefinal.jpg" alt="image" width="700px"height="400px">
        </div>
        <div class="gamesAsports-text">GAMES&SPORTS UPDATES</div>
        <div class="gamesAsports-container">
           
            <h1 class="gamesAsports-highlight">Send a Message to Students</h1>
         
            <form id="gamesAsports-messageForm" method="post" >
                <!-- Question 0 - Category -->
                <div class="gamesAsports-row">
                    <div class="gamesAsports-column">
                        <label for="category">Category:</label>
                        <select id="category" name="category" >
                          <option value="gamesandsports">GAMES AND SPORTS</option>
                          <option value="scholarship">SCHOLARSHIP</option>
                            <option value="academics">ACADEMICS</option>
                            <option value="events">EVENTS</option>
                            <option value="hostel">HOSTEL</option>
                            <option value="mess">MESS</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 1 - Sender -->
                <div class="gamesAsports-row">
                    <div class="gamesAsports-column">
                        <label for="gamesAsports-from">FROM:</label>
                        <input type="text" id="gamesAsports-from" name="gamesAsports-from">
                    </div>
                </div>
        
                <!-- Question 2 - Recipients -->
                <div class="gamesAsports-row">
                    <div class="gamesAsports-column">
                        <label for="gamesAsports-to">TO:</label>
                        <select id="gamesAsports-to" name="gamesAsports-to" onchange="gamesAsportshandleToSelection()">
                            <option value="none">None</option>
                            <option value="all">All</option>
                            <option value="PUC">PUC</option>
                            <option value="engineering">ENGINEERING</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.1 - PUC GROUP -->
                <div class="gamesAsports-row" id="gamesAsportspucGroupQuestion" style="display: none;">
                    <div class="gamesAsports-column">
                        <label for="gamesAsportspucGroup">PUC GROUP:</label>
                        <select id="gamesAsportspucGroup" name="gamesAsportspucGroup" onchange="gamesAsportshandlePUCGroup()">
                            <option value="allPUC">ALL PUC STUDENTS</option>
                            <option value="PUC1">PUC - 1</option>
                            <option value="PUC2">PUC - 2</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.2 - PUC SECTIONS -->
                <div class="gamesAsports-row" id="gamesAsportspucSectionQuestion" style="display: none;">
                    <div class="gamesAsports-column">
                        <label for="gamesAsportspucSection">PUC SECTIONS:</label>
                        <select id="gamesAsportspucSection" name="gamesAsportspucSection">
                            <option value="allSections">ALL SECTIONS</option>
                            <option value="section1">SECTION 1</option>
                            <option value="section2">SECTION 2</option>
                            <option value="section3">SECTION 3</option>
                            <option value="section4">SECTION 4</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.3 - ENGINEERING YEAR -->
                <div class="gamesAsports-row" id="gamesAsportsengineeringYearQuestion" style="display: none;">
                    <div class="gamesAsports-column">
                        <label for="gamesAsportsengineeringYear">YEAR:</label>
                        <select id="gamesAsportsengineeringYear" name="gamesAsportsengineeringYear" onchange="gamesAsportshandleEngineeringYear()">
                            <option value="allEngineering">ALL ENGINEERING STUDENTS</option>
                            <option value="E1">E1</option>
                            <option value="E2">E2</option>
                            <option value="E3">E3</option>
                            <option value="E4">E4</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.4 - ENGINEERING BRANCH -->
                <div class="gamesAsports-row" id="gamesAsportsengineeringBranchQuestion" style="display: none;">
                    <div class="gamesAsports-column">
                        <label for="gamesAsportsengineeringBranch">BRANCH:</label>
                        <select id="gamesAsportsengineeringBranch" name="gamesAsportsengineeringBranch" onchange="gamesAsportshandleEngineeringBranch()">
                            <option value="allBranches">ALL BRANCHES</option>
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                            <option value="EEE">EEE</option>
                            <option value="civil">CIVIL</option>
                            <option value="mech">MECH</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.5 - ENGINEERING SECTIONS -->
                <div class="gamesAsports-row" id="gamesAsportsengineeringSectionQuestion" style="display: none;">
                    <div class="gamesAsports-column">
                        <label for="gamesAsportsengineeringSection">ENGINEERING SECTIONS:</label>
                        <select id="gamesAsportsengineeringSection" name="gamesAsportsengineeringSection">
                            <option value="allSections">ALL SECTIONS</option>
                            <option value="section1">SECTION 1</option>
                            <option value="section2">SECTION 2</option>
                            <option value="section3">SECTION 3</option>
                            <option value="section4">SECTION 4</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 3 - Message -->
                <div class="gamesAsports-row">
                    <div class="gamesAsports-column">
                        <label for="gamesAsports-message">MESSAGE:</label>
                        <textarea id="gamesAsports-message" name="gamesAsports-message" rows="4" cols="50"></textarea>
                    </div>
                </div>
        
                <!-- Question 4 - Attachments -->
                
        
                <!-- Date and Time Stamp -->
                <div class="gamesAsports-row">
                    <div class="gamesAsports-column">
                        
                        <span id="gamesAsportsdateTime"></span>
                    </div>
                </div>
        
                <!-- Question 5 - Submit Button -->
                <div class="gamesAsports-row gamesAsports-submit-button">
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </div>
       
    </div>
   

    <div id="gamesAsports-viewMessage" class="gamesAsports-hidden">
        <h1>View a Message</h1>
        <p>This is the message you want to view.</p>
        <table style="margin-left:14%;" id="myTable3">
        <tr>
          <th>Category</th>
          <th>Sender</th>
          <th>To</th>
          <th>Message</th>
          <th>Time</th>
        </tr>
      </table>
    </div>
    </div>
      <!--events-->
      <div id="event-div" class="alldivs">
       <div id="eventbuttonContainer">
        <button id="eventsendMessageBtn">Send a Message</button>
        <button id="eventviewMessageBtn"  onclick="
          function fetchDataAndUpdateTable() {
      $.ajax({
        url: 'retreive4.php', // Replace with your actual API endpoint
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          updateTable(data);
        },
        error: function(error) {
          console.error('Error fetching data:', error);
        }
      });
    }

    // Function to update the table with the received data
    function updateTable(data) {
      var table = $('#myTable4');

      // Iterate over the data and append rows to the table
      $.each(data, function(index, item) {
        var row = $('<tr>');
        row.append($('<td>').text(item.category));
        row.append($('<td>').text(item.sender));
        row.append($('<td>').text(item.to));
        row.append($('<td>').text(item.message));
        row.append($('<td>').text(item.time));
        table.append(row);
      });
    }

    // Call the function to fetch data and update the table
    fetchDataAndUpdateTable();
    
    ">View a Message</button>
    </div>
    
    <div id="event-sendMessage" class="event-hidden" style="display: block;">
        <h1>Send a Message</h1>
        <p>Compose your message here...</p>
        <div class="event-img">
            <img src="./eventfinalimage.jpg" alt="image" width="700px"height="400px">
        </div>
        <div class="event-text">EVENT UPDATES</div>
        <div class="event-container">
           
            <h1 class="event-highlight">Send a Message to Students</h1>
         
            <form id="event-messageForm" method="post">
                <!-- Question 0 - Category -->
                <div class="event-row">
                    <div class="event-column">
                        <label for="category">Category:</label>
                        <select id="category" name="category" >
                          <option value="events">EVENTS</option>
                          <option value="gamesandsports">GAMES AND SPORTS</option>
                          <option value="scholarship">SCHOLARSHIP</option>
                            <option value="academics">ACADEMICS</option>
                            <option value="hostel">HOSTEL</option>
                            <option value="mess">MESS</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 1 - Sender -->
                <div class="event-row">
                    <div class="event-column">
                        <label for="event-from">FROM:</label>
                        <input type="text" id="event-from" name="event-from">
                    </div>
                </div>
        
                <!-- Question 2 - Recipients -->
                <div class="event-row">
                    <div class="event-column">
                        <label for="event-to">TO:</label>
                        <select id="event-to" name="event-to" onchange="eventhandleToSelection()">
                            <option value="none">None</option>
                            <option value="all">All</option>
                            <option value="PUC">PUC</option>
                            <option value="engineering">ENGINEERING</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.1 - PUC GROUP -->
                <div class="event-row" id="eventpucGroupQuestion" style="display: none;">
                    <div class="event-column">
                        <label for="eventpucGroup">PUC GROUP:</label>
                        <select id="eventpucGroup" name="eventpucGroup" onchange="eventhandlePUCGroup()">
                            <option value="allPUC">ALL PUC STUDENTS</option>
                            <option value="PUC1">PUC - 1</option>
                            <option value="PUC2">PUC - 2</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.2 - PUC SECTIONS -->
                <div class="event-row" id="eventpucSectionQuestion" style="display: none;">
                    <div class="event-column">
                        <label for="eventpucSection">PUC SECTIONS:</label>
                        <select id="eventpucSection" name="eventpucSection">
                            <option value="allSections">ALL SECTIONS</option>
                            <option value="section1">SECTION 1</option>
                            <option value="section2">SECTION 2</option>
                            <option value="section3">SECTION 3</option>
                            <option value="section4">SECTION 4</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.3 - ENGINEERING YEAR -->
                <div class="event-row" id="eventengineeringYearQuestion" style="display: none;">
                    <div class="event-column">
                        <label for="eventengineeringYear">YEAR:</label>
                        <select id="eventengineeringYear" name="eventengineeringYear" onchange="eventhandleEngineeringYear()">
                            <option value="allEngineering">ALL ENGINEERING STUDENTS</option>
                            <option value="E1">E1</option>
                            <option value="E2">E2</option>
                            <option value="E3">E3</option>
                            <option value="E4">E4</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.4 - ENGINEERING BRANCH -->
                <div class="event-row" id="eventengineeringBranchQuestion" style="display: none;">
                    <div class="event-column">
                        <label for="eventengineeringBranch">BRANCH:</label>
                        <select id="eventengineeringBranch" name="eventengineeringBranch" onchange="eventhandleEngineeringBranch()">
                            <option value="allBranches">ALL BRANCHES</option>
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                            <option value="EEE">EEE</option>
                            <option value="civil">CIVIL</option>
                            <option value="mech">MECH</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.5 - ENGINEERING SECTIONS -->
                <div class="event-row" id="eventengineeringSectionQuestion" style="display: none;">
                    <div class="event-column">
                        <label for="eventengineeringSection">ENGINEERING SECTIONS:</label>
                        <select id="eventengineeringSection" name="eventengineeringSection">
                            <option value="allSections">ALL SECTIONS</option>
                            <option value="section1">SECTION 1</option>
                            <option value="section2">SECTION 2</option>
                            <option value="section3">SECTION 3</option>
                            <option value="section4">SECTION 4</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 3 - Message -->
                <div class="event-row">
                    <div class="event-column">
                        <label for="event-message">MESSAGE:</label>
                        <textarea id="event-message" name="event-message" rows="4" cols="50"></textarea>
                    </div>
                </div>    
                <!-- Date and Time Stamp -->
                <div class="event-row">
                    <div class="event-column">
                        
                        <span id="eventdateTime"></span>
                    </div>
                </div>
        
                <!-- Question 5 - Submit Button -->
                <div class="event-row event-submit-button">
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </div>
       
    </div>
   

    <div id="event-viewMessage" class="event-hidden">
        <h1>View a Message</h1>
        <p>This is the message you want to view.</p>
        <table style="margin-left:14%;" id="myTable4">
        <tr>
          <th>Category</th>
          <th>Sender</th>
          <th>To</th>
          <th>Message</th>
          <th>Time</th>
        </tr>
      </table>
    </div>
  </div>
      <!--hostel-->
      <div id="hostel-div" class="alldivs">
      
       <div id="hostelbuttonContainer">
        <button id="hsendmessageBtn">Send a Message</button>
        <button id="hviewMessageBtn" onclick="
          function fetchDataAndUpdateTable() {
      $.ajax({
        url: 'retreive5.php', // Replace with your actual API endpoint
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          updateTable(data);
        },
        error: function(error) {
          console.error('Error fetching data:', error);
        }
      });
    }

    // Function to update the table with the received data
    function updateTable(data) {
      var table = $('#myTable5');

      // Iterate over the data and append rows to the table
      $.each(data, function(index, item) {
        var row = $('<tr>');
        row.append($('<td>').text(item.category));
        row.append($('<td>').text(item.sender));
        row.append($('<td>').text(item.to));
        row.append($('<td>').text(item.message));
        row.append($('<td>').text(item.time));
        table.append(row);
      });
    }

    // Call the function to fetch data and update the table
    fetchDataAndUpdateTable();
    
    ">View a Message</button>
    </div>
    
    <div id="hsendMessage" class="hostelhidden" style="display: block;">
        <h1>Send a Message</h1>
        <p>Compose your message here...</p>
        <div class="hostel-img">
            <img src="hostelimage2.jpg" alt="image" width="600px"height="400px">
        </div>
        <div class="hostel-text">HOSTEL UPDATES</div>
        <div class="hostelcontainer">
           
            <h1 class="hostelhighlight">Send a Message to Students</h1>
         
            <form id="hostelmessageForm" method="post"  >
            <input type="hidden" id="recipientLevel1" name="recipientLevel1">
                <input type="hidden" id="recipientLevel2" name="recipientLevel2">
                <input type="hidden" id="recipientLevel3" name="recipientLevel3">
                <input type="hidden" id="recipientLevel4" name="recipientLevel4">
                <input type="hidden" id="recipientLevel5" name="recipientLevel5">
                <input type="hidden" id="recipientLevel6" name="recipientLevel6">
                <input type="hidden" id="recipientLevel7" name="recipientLevel7">
            

            

            <!-- Question 0 - Category -->
                <div class="hostelrow">
                    <div class="hostelcolumn">
                        <label for="category">Category:</label>
                        <select id="category" name="category" required>
                            <option value="hostel">HOSTEL</option>
                            <option value="scholarship">SCHOLARSHIP</option>
                            <option value="academics">ACADEMICS</option>
                            <option value="gamesandsports">GAMES AND SPORTS</option>
                            <option value="events">EVENTS</option>
                            <option value="mess">MESS</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 1 - Sender -->
                <div class="hostelrow">
                    <div class="hostelcolumn">
                        <label for="hostelfrom">FROM:</label>
                        <input type="text" id="hostelfrom" name="hostelfrom" required>
                    </div>
                </div>
        
                <!-- Question 2 - Recipients -->
                <div class="hostelrow">
                    <div class="hostelcolumn">
                        <label for="hostelto">TO:</label>
                        <select id="hostelto" name="hostelto" onchange="change()">
                            <option value="none">None</option>
                            <option value="all">All</option>
                            <option value="BOYS">BOYS</option>
                            <option value="GIRLS">GIRLS</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.1 - PUC GROUP -->
                <div class="hostelrow" id="boysBlocksQuestion" style="display: none;">
                    <div class="hostelcolumn">
                        <label for="boysBlock">BLOCKS:</label>
                        <select id="boysBlock" name="boysBlock" onchange="hostelBoysblock()">
                            <option value="allboysblocks">ALL BLOCKS</option>
                            <option value="Block C">C</option>
                            <option value="Block I">I</option>
                            <option value="Block J">J</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.2 - PUC SECTIONS -->
                <div class="hostelrow" id="boysFloorQuestion" style="display:none;">
                    <div class="hostelcolumn">
                        <label for="boysFloor">FLOOR:</label>
                        <select id="boysFloor" name="boysFloor" onchange="handleBoysfloor()">
                            <option value="allboysfloors">ALL FLOORS</option>
                            <option value="Floor 1"> 1</option>
                            <option value="Floor 2">2</option>
                            <option value="Floor 3">3</option>
                            <option value="Floor 4">4</option>
                        </select>
                    </div>
                </div>
                
                <div class="hostelrow" id="boysRoomQuestion" style="display: none;">
                    <div class="hostelcolumn">
                        <label for="boysRoom">ROOM NO:</label>
                        <select id="boysRoom" name="boysRoom">
                            <option value="allboysrooms">ALL ROOMS</option>
                            <option value="Room 1">01</option>
                            <option value="Room 2">02</option>
                            <option value="Room 3">03</option>
                            <option value="Room 4">04</option>
                            <option value="Room 5">05</option>
                            <option value="Room 6">06</option>
                            <option value="Room 7">07</option>
                            <option value="Room 8">08</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.3 - ENGINEERING YEAR -->
                <div class="hostelrow" id="girlsBlockQuestion" style="display: none;">
                    <div class="hostelcolumn">
                        <label for="girlsBlock">BLOCKS:</label>
                        <select id="girlsBlock" name="girlsBlock" onchange="girlsBlocks()">
                            <option value="allgirlsblocks">ALL BLOCKS</option>
                            <option value="Block A">A</option>
                            <option value="Block B">B</option>
                            <option value="Block D">D</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.4 - ENGINEERING BRANCH -->
                <div class="hostelrow" id="girlsFloorQuestion" style="display: none;">
                    <div class="hostelcolumn">
                        <label for="girlsFloor">FLOORS:</label>
                        <select id="girlsFloor" name="girlsFloor" onchange="girlsFloors()">
                            <option value="allgirlsfloors">ALL FLOORS</option>
                            <option value="Floor 1">01</option>
                            <option value="Floor 2">02</option>
                            <option value="Floor 3">03</option>
                            <option value="Floor 4">04</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 2.5 - ENGINEERING SECTIONS -->
                <div class="hostelrow" id="girlsRoomQuestion" style="display: none;">
                    <div class="hostelcolumn">
                        <label for="girlsRoom">ROOM NO:</label>
                        <select id="girlsRoom" name="girlsRoom">
                            <option value="allgirlsrooms">ALL ROOMS</option>
                            <option value="Room 1">01</option>
                            <option value="Room 2">02</option>
                            <option value="Room 3">03</option>
                            <option value="Room 4">04</option>
                            <option value="Room 5">05</option>
                            <option value="Room 6">06</option>
                            <option value="Room 7">07</option>
                            <option value="Room 8">08</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 3 - Message -->
                <div class="hostelrow">
                    <div class="hostelcolumn">
                        <label for="hostelmessage">MESSAGE:</label>
                        <textarea id="hostelmessage" name="hostelmessage" rows="4" cols="50" required></textarea>
                    </div>
                </div>
                <!-- Date and Time Stamp -->
                <div class="hostelrow">
                    <div class="hostelcolumn">
                        
                        <span id="hosteldateTime"></span>
                    </div>
                </div>
        
                <!-- Question 5 - Submit Button -->
                <div class="hostelrow hostelsubmit-button">
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </div>
       
    </div>
   
   

    <div id="hviewMessage" class="hostelhidden">
        <h1>View a Message</h1>
        <p>This is the message you want to view.</p>
        <table style="margin-left:14%;" id="myTable5">
        <tr>
          <th>Category</th>
          <th>Sender</th>
          <th>To</th>
          <th>Message</th>
          <th>Time</th>
        </tr>
      </table>
    </div>
    </div>
      <!--mess-->
      <div id="mess-div" class="alldivs">
      <div id="mess-buttonContainer">
        <button id="msendMessageBtn">Send a Message</button>
        <button id="mviewMessageBtn" onclick="
          function fetchDataAndUpdateTable() {
      $.ajax({
        url: 'retreive6.php', // Replace with your actual API endpoint
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          updateTable(data);
        },
        error: function(error) {
          console.error('Error fetching data:', error);
        }
      });
    }

    // Function to update the table with the received data
    function updateTable(data) {
      var table = $('#myTable6');

      // Iterate over the data and append rows to the table
      $.each(data, function(index, item) {
        var row = $('<tr>');
        row.append($('<td>').text(item.category));
        row.append($('<td>').text(item.sender));
        row.append($('<td>').text(item.to));
        row.append($('<td>').text(item.message));
        row.append($('<td>').text(item.time));
        table.append(row);
      });
    }

    // Call the function to fetch data and update the table
    fetchDataAndUpdateTable();
    
    ">View a Message</button>
    </div>
    
    <div id="msendMessage" class="mess-hidden" style="display: block;">
        <h1>Send a Message</h1>
        <p>Compose your mess-message here...</p>
        <div class="mess-img">
            <img src="./messfinal.jpg" alt="image" width="700px"height="400px">
        </div>
        <div class="mess-text">MESS UPDATES</div>
        <div class="mess-container">
           
            <h1 class="mess-highlight">Send a Message to Students</h1>
         
            <form id="mess-messageForm" method="post" action="pp6.php" >
                <!-- Question 0 - Category -->
                <div class="mess-row">
                    <div class="mess-column">
                        <label for="category">Category:</label>
                        <select id="category" name="category" >
                            <option value="mess">MESS</option>
                            <option value="scholarship">SCHOLARSHIP</option>
                            <option value="academics">ACADEMICS</option>
                            <option value="gamesandsports">GAMES AND SPORTS</option>
                            <option value="events">EVENTS</option>
                            <option value="hostel">HOSTEL</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 1 - Sender -->
                <div class="mess-row">
                    <div class="mess-column">
                        <label for="messfrom">FROM:</label>
                        <input type="text" id="messfrom" name="messfrom">
                    </div>
                </div>
        
                <!-- Question 2 - Recipients -->
                <div class="mess-row">
                    <div class="mess-column">
                        <label for="messto">TO:</label>
                        <select id="messto" name="messto" >
                            <option value="none">None</option>
                            <option value="Both Mess">BOTH BOYS AND GIRLS MESS</option>
                            <option value="Boys Mess">BOYS MESS</option>
                            <option value="Girls Mess">GIRLS MESS</option>
                        </select>
                    </div>
                </div>
        
                <!-- Question 3 - Message -->
                <div class="mess-row">
                    <div class="mess-column">
                        <label for="mess-message">MESSAGE:</label>
                        <textarea id="mess-message" name="mess-message" rows="4" cols="50"></textarea>
                    </div>
                </div>
        
                <!-- Question 4 - Attachments -->
                
                <!-- Date and Time Stamp -->
                <div class="mess-row">
                    <div class="mess-column">
                        
                        <span id="messdateTime"></span>
                    </div>
                </div>
        
                <!-- Question 5 - Submit Button -->
                <div class="mess-row mess-submit-button">
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </div>
       
    </div>
   

    <div id="mviewMessage" class="mess-hidden">
        <h1>View a Message</h1>
        <p>This is the message you want to view.</p>
        <table style="margin-left:14%;" id="myTable6">
    <tr>
        <th>Category</th>
        <th>Sender</th>

		<th>To</th>

		<th>Message</th>

		<th>Time</th>
    </tr>
        </table>
    </div>
       
   </div>
      <!--contact us-->
      <div id="contact-div" class="alldivs">
        <div class="hello">
          <h1>Contact Us</h1>
          <p>
            If you have any questions or feedback, please don't hesitate to get
            in touch with us using the form below:
          </p>
          <form action="https://formspree.io/f/mdorjoll" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required />

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Submit" />
          </form>
          <div class="contact-info">
            <p>For immediate assistance, you can also reach us at:</p>
            <p>
              Email: <a href="mailto:contact@example.com">team12@gmail.com</a>
            </p>
            <p>Phone: <a href="tel:+123456789">+123 456 789</a></p>
          </div>
        </div>
      </div>
      <div id="services-div" class="alldivs">
        
        <div class="servicecontainer">
          <h2
            style="
              font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande',
                'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
              font-weight: 300;
              font-size: 60px;
            "
          >
            Our services
          </h2>
          <section class="services">
            <div class="severvicecard">
              <div class="servicecontent">
                <div class="icon"><i class="fa fa-bullhorn"></i></div>
                <div class="title">Announcements</div>
                <p>
                  Enable administrators or faculty to post announcements, and
                  new updates to all the students on the campus.
                </p>
              </div>
            </div>
            <div class="severvicecard">
              <div class="servicecontent">
                <div class="icon"><i class="fa fa-calendar"></i></div>
                <div class="title">Event Reminders</div>
                <p>
                  Allow students to set reminders for campus events,or important
                  dates.Every ongoing event notifications can be seen.
                </p>
              </div>
            </div>
            <div class="severvicecard">
              <div class="servicecontent">
                <div class="icon"><i class="fa fa-mobile"></i></div>
                <div class="title">App Integration</div>
                <p>
                  If the Campus has a dedicated mobile app,integrate
                  notifications within the app to provide a seamless user
                  experience.
                </p>
              </div>
            </div>

            <div class="severvicecard">
              <div class="servicecontent">
                <div class="icon"><i class="fa fa-laptop"></i></div>
                <div class="title">Multi-Channel Support</div>
                <p>
                  Support multiple communication channels,including
                  email,WhatsApp,to reach students through their preferred
                  means.
                </p>
              </div>
            </div>
            <div class="severvicecard">
              <div class="servicecontent">
                <div class="icon"><i class="fa fa-lock"></i></div>
                <div class="title">Security</div>
                <p>
                  Implement Robust security measures to protect student data and
                  ensure integrity of the notification system and also provide
                  scalability.
                </p>
              </div>
            </div>
            <div class="severvicecard">
              <div class="servicecontent">
                <div class="icon"><i class="fa fa-key"></i></div>
                <div class="title">User Authentication</div>
                <p>
                  Implement secure user authentication to prevent unauthorized
                  access to the notification system.
                </p>
              </div>
            </div>
          </section>
          
        </div>
      </div>
      <div id="about-div" class="alldivs">
        <div class="about-section">
          <h1 style="color: #000">About Us</h1>
          <p>Thank you for visiting our "About Us" page.</p>
          <p>
            We invite you to explore our website further to learn more about our
            services, projects, and the incredible team that makes it all
            possible..
          </p>
          <p></p>
        </div>

        <h2 style="text-align: center">Our Team</h2>
        <div class="about-row">
          <div class="about-column">
            <div class="about-card">
              <img
                src="./Male-avatar-1.jpg"
                alt="Suresh"
                style="width: 20%; height: 10%;border-radius:50%"
              />
              <div class="about-container">
                <h2>Suresh</h2>
                <p class="title">Team Leader</p>
                <p>Suresh is a web developer and java developer</p>
                <p>Suresh626@gmail.com</p>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>

          <div class="about-column">
            <div class="about-card">
              <img
                src="./women-avatar.avif"
                alt="Naseema"
                style="width: 30%; height: 17%"
              />
              <div class="about-container">
                <h2>Naseema</h2>
                <p class="title">Coder</p>
                <p>Naseema is a web developer.</p>
                <p>Nasee126@gmail.com</p>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>

          <div class="about-column">
            <div class="about-card">
              <img
                src="./women-avatar.avif"
                alt="Sirisha"
                style="width: 30%; height: 17%"
              />
              <div class="about-container">
                <h2>Sirisha</h2>
                <p class="title">Coder</p>
                <p>Sirisha is a web developer.</p>
                <p>Siri52@gmail.com</p>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>

          <div class="about-column">
            <div class="about-card">
              <img
                src="./women-avatar.avif"
                alt="Rupa"
                style="width: 30%; height: 17%"
              />
              <div class="about-container">
                <h2>Rupa</h2>
                <p class="title">Documentator</p>
                <p>Rupa is a web developer.</p>
                <p>bhanu.rupa23@gmail.com</p>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>

          <div class="about-column">
            <div class="about-card">
              <img
                src="./Male-avatar-1.jpg"
                alt="Janakiram"
                style="width: 20%; height: 10%;border-radius:50%"
              />
              <div class="about-container">
                <h2>Janaki Ramayya</h2>
                <p class="title">Documentator</p>
                <p>Janaki ramayya is a web developer.</p>
                <p>Janakiram129@gmail.com</p>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>
        </div>
        <footer>
          <p>© 2023 RGUKT Ongole. All Rights Reserved.</p>
        </footer>
      </div>
      <div id="profile-div" style="display: none" class="alldivs">
      <div class="form-box" style="font-family: poppins;
	background: #88a9f0;*{margin: 0;
	padding: 0;
	box-sizing: border-box;}">
        <div class="wrapper">
            <div class="img-area">
                <img src="Male-avatar-1.jpg" alt="" width=200 height=200 style="border-radius:50%">
            </div>
            <div class="form-area">
                <h3>Profile</h3>
            <form>
                <div class="single-form">
                    <input type="text" placeholder="username" />
                </div>
                <div class="single-form">
                    <input type="text" placeholder="email" />
                </div>
                  
               
               
            </form>
            </div>
        </div>
    </div></div>
      <div id="log-out-div" class="alldivs">
      <div class="text-in-all-categories"style="margin-top:200px;font-size:25px;margin-left:100px;"> Tap the Logout button for Logout >>> </div>
      <button class="logout-button" onclick="showConfirmation()"style="margin-top:100px;margin-left:100px;">Logout</button>           
      </div>
    </div>

    <script src="last2.js"></script>
    <script src="bootstrap.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#messageForm').submit(function (e) {
            // Prevent the default form submission
            e.preventDefault();

            // Perform an AJAX request
            $.ajax({
                type: 'POST',
                url: './pp.php', // Update with your processing script
                data: $(this).serialize(),
                success: function (response) {
                  alert("succesfully sent")
                },
                error: function (xhr, status, error) {
                    // Handle errors if needed
                    // console.error(xhr.responseText);
                }
            });
            $('#messageForm')[0].reset();
        });
    });

    //scholarship
    $(document).ready(function () {
        $('#scholar-messageForm').submit(function (e) {
            // Prevent the default form submission
            e.preventDefault();

            // Perform an AJAX request
            $.ajax({
                type: 'POST',
                url: './tp2.php', // Update with your processing script
                data: $(this).serialize(),
                success: function (response) {
                  alert(" succesfully sent");
                },
                error: function (xhr, status, error) {
                    // Handle errors if needed
                    // console.error(xhr.responseText);
                }
            });
            $('#scholar-messageForm')[0].reset();
        });
    });

    //games and sports
    $(document).ready(function () {
        $('#gamesAsports-messageForm').submit(function (e) {
            // Prevent the default form submission
            e.preventDefault();

            // Perform an AJAX request
            $.ajax({
                type: 'POST',
                url: './tp3.php', // Update with your processing script
                data: $(this).serialize(),
                success: function (response) {
                  alert(" succesfully sent");
                },
                error: function (xhr, status, error) {
                    // Handle errors if needed
                    // console.error(xhr.responseText);
                }
            });
            $('#gamesAsports-messageForm')[0].reset();
        });
    });

    //events
    $(document).ready(function () {
        $('#event-messageForm').submit(function (e) {
            // Prevent the default form submission
            e.preventDefault();

            // Perform an AJAX request
            $.ajax({
                type: 'POST',
                url: './tp4.php', // Update with your processing script
                data: $(this).serialize(),
                success: function (response) {
                  alert(" succesfully sent");
                },
                error: function (xhr, status, error) {
                    // Handle errors if needed
                    // console.error(xhr.responseText);
                }
            });
            $('#event-messageForm')[0].reset();
        });
    });
    //hostel
    $(document).ready(function () {
        $('#hostelmessageForm').submit(function (e) {
            // Prevent the default form submission
            e.preventDefault();

            // Perform an AJAX request
            $.ajax({
                type: 'POST',
                url: './tp5.php', // Update with your processing script
                data: $(this).serialize(),
                success: function (response) {
                  alert(" succesfully sent");
                },
                error: function (xhr, status, error) {
                    // Handle errors if needed
                    // console.error(xhr.responseText);
                }
            });
            $('#hostelmessageForm')[0].reset();
        });
    });
    //mess
    $(document).ready(function () {
        $('#mess-messageForm').submit(function (e) {
            // Prevent the default form submission
            e.preventDefault();

            // Perform an AJAX request
            $.ajax({
                type: 'POST',
                url: './tp6.php', // Update with your processing script
                data: $(this).serialize(),
                success: function (response) {
                  alert(" succesfully sent");
                },
                error: function (xhr, status, error) {
                    // Handle errors if needed
                    // console.error(xhr.responseText);
                }
            });
            $('#mess-messageForm')[0].reset();
        });
    });
    function showConfirmation() {
            if (confirm("Are you sure want to logout?")) {
                // Redirect to another page if 'OK' is pressed
                window.location.href = 'start.php';
            } else {
                // Redirect to the same page if 'Cancel' is pressed
                // You can change this URL to the actual page URL you want to redirect to
                window.location.href = 'finalee.php';
            }
        }

    </script>
       <script type="text/javascript"> 

        const msendMessageBtn = document.getElementById('msendMessageBtn');
        const mviewMessageBtn = document.getElementById('mviewMessageBtn');
        const msendMessageDiv = document.getElementById('msendMessage');
        const mviewMessageDiv = document.getElementById('mviewMessage');

        msendMessageBtn.addEventListener('click', () => {
            msendMessageDiv.style.display = 'block';
            mviewMessageDiv.style.display = 'none';
        });

        mviewMessageBtn.addEventListener('click', () => {
            mviewMessageDiv.style.display = 'block';
            msendMessageDiv.style.display = 'none';
        });  

    function updateDateTime() {
        const dateTimeElement = document.getElementById('messdateTime');
        const currentDate = new Date();
        const formattedDate = currentDate.toDateString();
        const formattedTime = currentDate.toLocaleTimeString();
        const dateTimeString = `Date: ${formattedDate} - Time: ${formattedTime}`;
        dateTimeElement.textContent = dateTimeString;
    }

    // Update the date and time every second
    setInterval(updateDateTime, 1000);

    // Initial update
    updateDateTime();


        const hsendmessageBtn = document.getElementById('hsendmessageBtn');
        const hviewMessageBtn = document.getElementById('hviewMessageBtn');
        const hsendMessageDiv = document.getElementById('hsendMessage');
        const hviewMessageDiv = document.getElementById('hviewMessage');

        hsendmessageBtn.addEventListener('click', () => {
      hsendMessageDiv.style.display = 'block';
            hviewMessageDiv.style.display = 'none';
        });

        hviewMessageBtn.addEventListener('click', () => {
            hviewMessageDiv.style.display = 'block';
            hsendMessageDiv.style.display = 'none';
        });
        function change() {
            var selectedOption = document.getElementById("hostelto").value;
            
            // Hide all question rows initially
            hostelhideAllQuestions();

            if (selectedOption === "BOYS") {
                document.getElementById("boysBlocksQuestion").style.display = "block";
            }
            else if (selectedOption === "GIRLS") {
                document.getElementById("girlsBlockQuestion").style.display = "block";
            }
        }
        function hostelBoysblock() {
            var selectedOption = document.getElementById("boysBlock").value;
           
            if (selectedOption !== "allboysblocks") {
                document.getElementById("boysFloorQuestion").style.display = "block";
            }
            else{
                document.getElementById("boysFloorQuestion").style.display = "none";
                document.getElementById("boysRoomQuestion").style.display = "none";
            }
        }

        function handleBoysfloor() {
            var selectedOption = document.getElementById("boysFloor").value;

            if (selectedOption !== "allboysfloors") {
                document.getElementById("boysRoomQuestion").style.display = "block";
            }
            else{
                document.getElementById("boysRoomQuestion").style.display = "none";
           
            }
        }

        function girlsBlocks() {
            var selectedOption = document.getElementById("girlsBlock").value;

            if (selectedOption !== "allgirlsblocks") {
                document.getElementById("girlsFloorQuestion").style.display = "block";
            }
            else{
                document.getElementById("girlsFloorQuestion").style.display = "none";
                document.getElementById("girlsRoomQuestion").style.display = "none";
            }
        }

        function girlsFloors() {
            var selectedOption = document.getElementById("girlsFloor").value;

            if (selectedOption !== "allgirlsfloors") {
                document.getElementById("girlsRoomQuestion").style.display = "block";
            }
            else{
                document.getElementById("girlsRoomQuestion").style.display = "none";
            }
        }
       
        function hostelhideAllQuestions() {
            document.getElementById("boysBlocksQuestion").style.display = "none";
            document.getElementById("boysFloorQuestion").style.display = "none";
            document.getElementById("boysRoomQuestion").style.display="none";
            document.getElementById("girlsBlockQuestion").style.display = "none";
            document.getElementById("girlsFloorQuestion").style.display = "none";
            document.getElementById("girlsRoomQuestion").style.display = "none";
        }
        function updateRecipient() {
    const selectedRecipientLevel1 = document.getElementById('hostelto').value;
    const selectedRecipientLevel2 = document.getElementById('boysBlock').value;
    const selectedRecipientLevel3 = document.getElementById('boysFloor').value;
    const selectedRecipientLevel4 = document.getElementById('boysRoom').value;
    const selectedRecipientLevel5 = document.getElementById('girlsBlock').value;
    const selectedRecipientLevel6 = document.getElementById('girlsFloor').value;
    const selectedRecipientLevel7 = document.getElementById('girlsRoom').value;

    // Update the hidden input fields
    document.getElementById('recipientLevel1').value = selectedRecipientLevel1;
    document.getElementById('recipientLevel2').value = selectedRecipientLevel2;
    document.getElementById('recipientLevel3').value = selectedRecipientLevel3;
    document.getElementById('recipientLevel4').value = selectedRecipientLevel4;
    document.getElementById('recipientLevel5').value = selectedRecipientLevel5;
    document.getElementById('recipientLevel6').value = selectedRecipientLevel5;
    document.getElementById('recipientLevel7').value = selectedRecipientLevel5;

}

// Add event listeners for each dropdown
document.getElementById('hostelto').addEventListener('change', updateRecipient);
document.getElementById('boysBlock').addEventListener('change', updateRecipient);
document.getElementById('boysFloor').addEventListener('change', updateRecipient);
document.getElementById('boysRoom').addEventListener('change', updateRecipient);
document.getElementById('girlsBlock').addEventListener('change', updateRecipient);
document.getElementById('girlsFloor').addEventListener('change', updateRecipient);
document.getElementById('girlsRoom').addEventListener('change', updateRecipient);

//notification

const nsendMessageBtn = document.getElementById('nsendMessageBtn');
    const nviewMessageBtn = document.getElementById('nviewMessageBtn');
    const nsendMessageDiv = document.getElementById('nsendMessage');
    const nviewMessageDiv = document.getElementById('nviewMessage');

    nsendMessageBtn.addEventListener('click', () => {
        nsendMessageDiv.style.display = 'block';
        nviewMessageDiv.style.display = 'none';
    });

    nviewMessageBtn.addEventListener('click', () => {
        nsendMessageDiv.style.display = 'none';
        nviewMessageDiv.style.display = 'block';
    });
    </script>
  </body>
</html>




