
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />

    <title>S I</title>
    <link rel="stylesheet" href="studentfinale2.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="bootstrap.min.css"
    >

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style>
      /* This code assumes you already have styles for .about-row, .about-column, and .about-card. */
         
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
/* notifications*/
#notificationsbuttonContainer {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.notifications-hidden {
  display: none;
}

#notificationssendMessageBtn, #notificationsviewMessageBtn {
  background-color: #3498db; /* Blue color for the buttons */
  color: #fff; /* White text color */
  padding: 15px 30px; /* Increase button size */
  border: none;
  border-radius: 5px;
  margin: 10px;
  cursor: pointer;
}

#notificationssendMessageBtn:hover, #notificationsviewMessageBtn:hover {
  background-color: #2980b9; /* Darker blue for button hover */
}

.notifications-img{
 
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
.notifications-text{
  position:absolute;
  top:120px;
  left:900px;

  font-size:35px;
}
.info-notifications{
  
  margin-top: -480px;
  margin-right:700px;


}
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
      <div id="notification-div" class="alldivs">
       
        <div id="notificationsbuttonContainer">
          <button id="notificationssendMessageBtn">About notifications Category</button>
          <button id="notificationsviewMessageBtn" onclick="
          function fetchDataFromEndpoint(endpoint) {
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

        ">View notifications Messages</button>
        </div>

        <div
          id="notifications-sendMessage"
          class="notifications-hidden"
          style="display: block"
        >
         
          
          <div class="notifications-img">
          <img src="https://img.freepik.com/premium-vector/new-message-notification-concept-3d-mail-letter-message-chat-speak-dialog-post-icon-sign-symbol_659151-724.jpg?size=626&ext=jpg&ga=GA1.1.1880011253.1699488000&semt=sph">

          </div>
          <div class="notifications-text">NOTIFICATION UPDATES</div>
          <div class="info-notifications">
          <div id="carouselExample" class="carousel slide" data-ride="carousel" style="width: 800px; margin: auto; margin-left:2%">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="academicimage.jpg" class="d-block w-100 mx-auto" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="messfinal.jpg" class="d-block w-100 mx-auto" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="hostelimage2.jpg" class="d-block w-100 mx-auto" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                        <img src="eventfinalimage.jpg" class="d-block w-100 mx-auto" alt="Image 4">
                    </div>
                    <div class="carousel-item">
                        <img src="scholarshipimage2.jpg" class="d-block w-100 mx-auto" alt="Image 5">
                    </div>
                     <div class="carousel-item">
                        <img src="sportsimagefinal.jpg" class="d-block w-100 mx-auto" alt="Image 5">
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

        <div id="notifications-viewMessage" class="notifications-hidden">
          <h1>View Messages in notifications Category</h1>
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
      <div id="academic-div" class="alldivs">
        

        <div id="academicsbuttonContainer">
          <button id="academicssendMessageBtn">About Academics Category</button>
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

        ">View Academics Messages</button>
        </div>

        <div
          id="academics-sendMessage"
          class="academics-hidden"
          style="display: block"
        >
          <h1>ACADEMICS CATEGORY</h1>
          <h2><p>Information about Academics Category....</p></h2>
          <div class="academics-img">
            <img
              src="academicimage.jpg"
              alt="image"
              width="700px"
              height="400px"
            />
          </div>
          <div class="academics-text">ACADEMICS UPDATES</div>
          <div class="info-academic">
            Tap the "View Academics Messages" Button<br /><br />
            to see the latest Academic updates....
          </div>
        </div>

        <div id="academics-viewMessage" class="academics-hidden">
          <h1>View Messages in Academics Category</h1>
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
        </div>
      </div>
      <div id="scholarship-div" class="alldivs">
        <div id="scholarbuttonContainer">
          <button id="scholarsendMessageBtn">About Scholarship Renewals Category</button>
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

        ">View Scholarship Messages </button>
      </div>
      
      <div id="scholar-sendMessage" class="scholar-hidden" style="display: block;">
          <h1>SCHOLARSHIP  CATEGORY</h1>
          <h2><p>Information about Scholarship Category....</p></h2>
          <div class="scholar-img">
              <img src="scholarshipimage2.jpg" alt="image" width="700px"height="400px">
          </div>
          <div class="scholar-text">SCHOLARSHIP UPDATES</div>
         <div class="info-scholar">
          Tap the "View Scholarship Messages" Button<br><br> to see the latest Scholarship updates....
  
         </div>
         
      </div>
     
  
      <div id="scholar-viewMessage" class="scholar-hidden">
          <h1>View  Messages in Scholarship Category</h1>
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
      </div>
  
  
      </div>
      <div id="games-div" class="alldivs">
        <div id="gamesAsportsbuttonContainer">
          <button id="gamesAsportssendMessageBtn">About Games & Sports  Category</button>
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

        ">View Games & Sports Messages </button>
      </div>
      
      <div id="gamesAsports-sendMessage" class="gamesAsports-hidden" style="display: block;">
          <h1>GAMES & SPORTS  CATEGORY</h1>
          <h2><p>Information about Games & Sports Category....</p></h2>
          <div class="gamesAsports-img">
              <img src="sportsimagefinal.jpg" alt="image" width="700px"height="400px">
          </div>
          <div class="gamesAsports-text">GAMES & SPORTS  UPDATES</div>
         <div class="info-gamesAsports">
          Tap the "View Games & Sports Messages" Button<br><br> to see the latest Games & Sports updates....
  
         </div>
         
      </div>
     
  
      <div id="gamesAsports-viewMessage" class="gamesAsports-hidden">
          <h1>View  Messages in Games & Sports Category</h1>
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
      <div id="event-div" class="alldivs">
        <div id="eventsbuttonContainer">
          <button id="eventssendMessageBtn">About Event Category</button>
          <button id="eventsviewMessageBtn" onclick="
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

        ">View Event Messages </button>
      </div>
      
      <div id="events-sendMessage" class="events-hidden" style="display: block;">
          <h1>EVENT  CATEGORY</h1>
          <h2><p>Information about Event Category....</p></h2>
          <div class="events-img">
              <img src="./eventfinalimage.jpg" alt="image" width="700px"height="400px">
          </div>
          <div class="events-text">EVENT UPDATES</div>
         <div class="info-events">
          Tap the "View Event Messages" Button<br><br> to see the latest Event updates....
  
         </div>
         
      </div>
     
  
      <div id="events-viewMessage" class="events-hidden">
          <h1>View  Messages in Event Category</h1>
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
      <div id="hostel-div" class="alldivs">
        <div id="hostelbuttonContainer">
          <button id="hostelsendMessageBtn">About Hostel Category</button>
          <button id="hostelviewMessageBtn" onclick="
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

        ">View Hostel Messages </button>
      </div>
      
      <div id="hostel-sendMessage" class="hostel-hidden" style="display: block;">
          <h1>HOSTEL CATEGORY</h1>
          <h2><p>Information about Hostel Category....</p></h2>
          <div class="hostel-img">
              <img src="hostelimage2.jpg" alt="image" width="700px"height="400px">
          </div>
          <div class="hostel-text">HOSTEL UPDATES</div>
         <div class="info-hostel">
          Tap the "View Hostel Messages" Button <br><br> to see the latest Hostel updates....
  
         </div>
         
      </div>
     
  
      <div id="hostel-viewMessage" class="hostel-hidden">
          <h1>View  Messages in Hostel Category</h1>
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
      <div id="mess-div" class="alldivs">
        <div id="messbuttonContainer">
          <button id="messsendMessageBtn">About Mess Category</button>
          <button id="messviewMessageBtn" onclick="
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

        ">View Mess Messages </button>
      </div>
      
      <div id="mess-sendMessage" class="mess-hidden" style="display: block;">
          <h1>MESS CATEGORY</h1>
          <h2><p>Information about Mess Category....</p></h2>
          <div class="mess-img">
              <img src="messfinal.jpg" alt="image" width="700px"height="400px">
          </div>
          <div class="mess-text">MESS FOOD UPDATES</div>
         <div class="info-mess">
          Tap the "View Mess Messages" Button<br><br> to see the latest Mess updates....
  
         </div>
         
      </div>
     
  
      <div id="mess-viewMessage" class="mess-hidden">
          <h1>View  Messages in Mess Category</h1>
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
      <div id="contact-div" class="alldivs">
        
        <div class="hello">
          <h1>Contact Us</h1>
          <p>
            If you have any questions or feedback, please don't hesitate to get
            in touch with us using the form below:
          </p>
          <form action="process_form.php" method="post">
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
          <a href="readmore.html" class="servicebutton">Read More...</a>
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
                src="Male-avatar-1.jpg"
                alt="Suresh"
                style="width: 30%; height: 20%;border-radius:50%"
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
                src="women-avatar.avif"
                alt="Naseema"
                style="width: 40%; height: 50%"
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
                src="women-avatar.avif"
                alt="Naseema"
                style="width: 40%; height: 50%"
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
                src="women-avatar.avif"
                alt="Naseema"
                style="width: 40%; height: 50%"
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
                src="Male-avatar-1.jpg"
                alt="Suresh"
                style="width: 30%; height: 20%;border-radius:50%"
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
                <img src="Male-avatar-1.jpg" alt="" width=200 height=200>
            </div>
            <div class="form-area">
                <h3>Profile</h3>
            <form>
                <div class="single-form">
                    <input type="text" placeholder="Student Id" />
                </div>
                <div class="single-form">
                    <input type="text" placeholder="Year" />
                </div>
                  <div class="single-form">
                    <input type="text" placeholder="Branch" />
                </div>
                  <div class="single-form">
                    <input type="text" placeholder="Section" />
                </div>
                  <div class="single-form">
                    <input type="text" placeholder="HostelBlock" />
                </div>
                  <div class="single-form">
                    <input type="text" placeholder="Floor" />
                </div>
                  <div class="single-form">
                    <input type="text" placeholder="RoomNo" />
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
    <script src="bootstrap.min.js"></script>
    <script type="text/javascript" src="studentfinale.js"></script>
    <script >
      
const notificationssendMessageBtn = document.getElementById('notificationssendMessageBtn');
const notificationsviewMessageBtn = document.getElementById('notificationsviewMessageBtn');
const notificationssendMessageDiv = document.getElementById('notifications-sendMessage');
const notificationsviewMessageDiv = document.getElementById('notifications-viewMessage');

notificationssendMessageBtn.addEventListener('click', () => {
    notificationssendMessageDiv.style.display = 'block';
    notificationsviewMessageDiv.style.display = 'none';
});

notificationsviewMessageBtn.addEventListener('click', () => {
    notificationsviewMessageDiv.style.display = 'block';
    notificationssendMessageDiv.style.display = 'none';
});

function showConfirmation() {
            if (confirm("Are you sure want to logout?")) {
                // Redirect to another page if 'OK' is pressed
                window.location.href = 'start.php';
            } else {
                // Redirect to the same page if 'Cancel' is pressed
                // You can change this URL to the actual page URL you want to redirect to
                window.location.href = 'studentfinale.php';
            }
        }
    </script>
  </body>
</html>
