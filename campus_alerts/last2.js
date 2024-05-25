
// main javascript fot the code
//toggle  js
$('.btn').click(function(){
    $(this).toggleClass("click");
    $('.sidebar').toggleClass("show");
    });
    $('.feat-btn').click(function(){
    $('nav ul .feat-show').toggleClass("show");
    $('nav ul .first').toggleClass("rotate");
    });
    $('.serv-btn').click(function(){
    $('nav ul .serv-show').toggleClass("show1");
    $('nav ul .second').toggleClass("rotate");
    });
    $('nav ul li').click(function(){
    $(this).addClass("active").siblings().removeClass("active");
    });
    
// code to display only home division
function displayhome(){
    document.getElementById('home-div').style.display="block";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="none";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="none";
    document.getElementById('log-out-div').style.display="none";

}
//notification division 
function displaynotification(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="block";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="none";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="none";
    document.getElementById('log-out-div').style.display="none";
}
//academics division
function displayacademics(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="block";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="none";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="none";
    document.getElementById('log-out-div').style.display="none";
}
//scholarship division
function displayscholarship(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="block";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="none";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="none"
    document.getElementById('log-out-div').style.display="none";
}
//games division
function displaygames(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="block";
    document.getElementById('event-div').style.display="none";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="none";
    document.getElementById('log-out-div').style.display="none";
}
    //events division
function displayevents(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="block";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="none";
    document.getElementById('log-out-div').style.display="none";
}
//hostel division
function displayhostel(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="none";
    document.getElementById('hostel-div').style.display="block";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="none";
    document.getElementById('log-out-div').style.display="none";
}
//mess division
function displaymess(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="block";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="none";
    document.getElementById('log-out-div').style.display="none";
}
//contact division
function displaycontact(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="block";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="none";
    document.getElementById('log-out-div').style.display="none";
}
//services division
function displayservices(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="block";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="none";
    document.getElementById('log-out-div').style.display="none";
}
//aboutus division
function displayaboutus(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="block";
    document.getElementById('profile-div').style.display="none";
    document.getElementById('log-out-div').style.display="none";
}
//profile division
function displayprofile(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="block";
    document.getElementById('log-out-div').style.display="none";
}
//log out division
function displaylogout(){
    document.getElementById('home-div').style.display="none";
    document.getElementById('notification-div').style.display="none";
    document.getElementById('services-div').style.display="none";
    document.getElementById('academic-div').style.display="none";
    document.getElementById('scholarship-div').style.display="none";
    document.getElementById('games-div').style.display="none";
    document.getElementById('event-div').style.display="";
    document.getElementById('hostel-div').style.display="none";
    document.getElementById('mess-div').style.display="none";
    document.getElementById('contact-div').style.display="none";
    document.getElementById('about-div').style.display="none";
    document.getElementById('profile-div').style.display="none";
    document.getElementById('log-out-div').style.display="block";
}


// academics form js
const academicssendMessageBtn = document.getElementById('academicssendMessageBtn');
const academicsviewMessageBtn = document.getElementById('academicsviewMessageBtn');
const academicsendMessageDiv = document.getElementById('academics-sendMessage');
const academicsviewMessageDiv = document.getElementById('academics-viewMessage');

academicssendMessageBtn.addEventListener('click', () => {
    academicsendMessageDiv.style.display = 'block';
    academicsviewMessageDiv.style.display = 'none';
});

academicsviewMessageBtn.addEventListener('click', () => {
    academicsviewMessageDiv.style.display = 'block';
    academicsendMessageDiv.style.display = 'none';
});
function academicshandleToSelection() {
    var selectedOption = document.getElementById("academics-to").value;
    
    // Hide all question rows initially
    academicshideAllQuestions();

    if (selectedOption === "PUC") {
        document.getElementById("academicspucGroupQuestion").style.display = "block";
    }
    else if (selectedOption === "engineering") {
        document.getElementById("academicsengineeringYearQuestion").style.display = "block";
    }
}

function academicshandlePUCGroup() {
    var selectedOption = document.getElementById("academicspucGroup").value;

    if (selectedOption !== "allPUC") {
        document.getElementById("academicspucSectionQuestion").style.display = "block";
    }
    else{
        document.getElementById("academicspucSectionQuestion").style.display="none"
    }
}

function academicshandleEngineeringYear() {
    var selectedOption = document.getElementById("academicsengineeringYear").value;

    if (selectedOption !== "allEngineering") {
        document.getElementById("academicsengineeringBranchQuestion").style.display = "block";
    }else{
        document.getElementById("academicsengineeringBranchQuestion").style.display = "none";
        document.getElementById("academicsengineeringSectionQuestion").style.display = "none";
    }
}

function academicshandleEngineeringBranch() {
    var selectedOption = document.getElementById("academicsengineeringBranch").value;

    if (selectedOption !== "allBranches") {
        document.getElementById("academicsengineeringSectionQuestion").style.display = "block";
    }else{
        document.getElementById("academicsengineeringSectionQuestion").style.display = "none";
    }
}

function academicshideAllQuestions() {
    document.getElementById("academicspucGroupQuestion").style.display = "none";
    document.getElementById("academicspucSectionQuestion").style.display = "none";
    document.getElementById("academicsengineeringYearQuestion").style.display = "none";
    document.getElementById("academicsengineeringBranchQuestion").style.display = "none";
    document.getElementById("academicsengineeringSectionQuestion").style.display = "none";
}
function validateForm() {
const fromInput = document.getElementById("academics-from");
const messageInput = document.getElementById("academics-message");
const toInput = document.getElementById("academics-to");

if (fromInput.value.trim() === "" || messageInput.value.trim() === "" || toInput.value === "none") {
    alert("Fill in all required fields and select a recipient.");
    return false;
}

// Get current date and time and display it
const dateTimeStamp = document.getElementById("academicsdateTime");
const currentDateTime = new Date();
const formattedDateTime = currentDateTime.toLocaleString();
dateTimeStamp.textContent = "Date and Time Stamp: " + formattedDateTime;

// Clear form fields
document.getElementById("academics-messageForm").reset();

 // Show a success academics-message
 alert("Message sent successfully!");


return false;
}

function updateDateTime() {
const dateTimeElement = document.getElementById('academicsdateTime');
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


//scholarship form 

        const scholarsendMessageBtn = document.getElementById('scholarsendMessageBtn');
        const scholarviewMessageBtn = document.getElementById('scholarviewMessageBtn');
        const scholarsendMessageDiv = document.getElementById('scholar-sendMessage');
        const scholarviewMessageDiv = document.getElementById('scholar-viewMessage');

        scholarsendMessageBtn.addEventListener('click', () => {
            scholarsendMessageDiv.style.display = 'block';
            scholarviewMessageDiv.style.display = 'none';
        });

        scholarviewMessageBtn.addEventListener('click', () => {
            scholarviewMessageDiv.style.display = 'block';
            scholarsendMessageDiv.style.display = 'none';
        });
        function scholarhandleToSelection() {
            var selectedOption = document.getElementById("scholar-to").value;
            
            // Hide all question rows initially
            scholarhideAllQuestions();

            if (selectedOption === "PUC") {
                document.getElementById("scholarpucGroupQuestion").style.display = "block";
            }
            else if (selectedOption === "engineering") {
                document.getElementById("scholarengineeringYearQuestion").style.display = "block";
            }
        }

        function scholarhandlePUCGroup() {
            var selectedOption = document.getElementById("scholarpucGroup").value;

            if (selectedOption !== "allPUC") {
                document.getElementById("scholarpucSectionQuestion").style.display = "block";
            }
            else{
                document.getElementById("scholarpucSectionQuestion").style.display="none"
            }
        }

        function scholarhandleEngineeringYear() {
            var selectedOption = document.getElementById("scholarengineeringYear").value;

            if (selectedOption !== "allEngineering") {
                document.getElementById("scholarengineeringBranchQuestion").style.display = "block";
            }else{
                document.getElementById("scholarengineeringBranchQuestion").style.display = "none";
                document.getElementById("scholarengineeringSectionQuestion").style.display = "none";
            }
        }

        function scholarhandleEngineeringBranch() {
            var selectedOption = document.getElementById("scholarengineeringBranch").value;

            if (selectedOption !== "allBranches") {
                document.getElementById("scholarengineeringSectionQuestion").style.display = "block";
            }else{
                document.getElementById("scholarengineeringSectionQuestion").style.display = "none";
            }
        }

        function scholarhideAllQuestions() {
            document.getElementById("scholarpucGroupQuestion").style.display = "none";
            document.getElementById("scholarpucSectionQuestion").style.display = "none";
            document.getElementById("scholarengineeringYearQuestion").style.display = "none";
            document.getElementById("scholarengineeringBranchQuestion").style.display = "none";
            document.getElementById("scholarengineeringSectionQuestion").style.display = "none";
        }
        function validateForm() {
        const fromInput = document.getElementById("scholar-from");
        const messageInput = document.getElementById("scholar-message");
        const toInput = document.getElementById("scholar-to");

        if (fromInput.value.trim() === "" || messageInput.value.trim() === "" || toInput.value === "none") {
            alert("Fill in all required fields and select a recipient.");
            return false;
        }

        // Get current date and time and display it
        const dateTimeStamp = document.getElementById("scholardateTime");
        const currentDateTime = new Date();
        const formattedDateTime = currentDateTime.toLocaleString();
        dateTimeStamp.textContent = "Date and Time Stamp: " + formattedDateTime;

        // Clear form fields
        document.getElementById("scholar-messageForm").reset();

         // Show a success scholar-message
         alert("Message sent successfully!");


        return false;
    }

    function updateDateTime() {
        const dateTimeElement = document.getElementById('scholardateTime');
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
// games and sports js
const gamesAsportssendMessageBtn = document.getElementById('gamesAsportssendMessageBtn');
        const gamesAsportsviewMessageBtn = document.getElementById('gamesAsportsviewMessageBtn');
        const gamesAsportssendMessageDiv = document.getElementById('gamesAsports-sendMessage');
        const gamesAsportsviewMessageDiv = document.getElementById('gamesAsports-viewMessage');

        gamesAsportssendMessageBtn.addEventListener('click', () => {
            gamesAsportssendMessageDiv.style.display = 'block';
            gamesAsportsviewMessageDiv.style.display = 'none';
        });

        gamesAsportsviewMessageBtn.addEventListener('click', () => {
            gamesAsportsviewMessageDiv.style.display = 'block';
            gamesAsportssendMessageDiv.style.display = 'none';
        });
        function gamesAsportshandleToSelection() {
            var selectedOption = document.getElementById("gamesAsports-to").value;
            
            // Hide all question rows initially
            gamesAsportshideAllQuestions();

            if (selectedOption === "PUC") {
                document.getElementById("gamesAsportspucGroupQuestion").style.display = "block";
            }
            else if (selectedOption === "engineering") {
                document.getElementById("gamesAsportsengineeringYearQuestion").style.display = "block";
            }
        }

        function gamesAsportshandlePUCGroup() {
            var selectedOption = document.getElementById("gamesAsportspucGroup").value;

            if (selectedOption !== "allPUC") {
                document.getElementById("gamesAsportspucSectionQuestion").style.display = "block";
            }
            else{
                document.getElementById("gamesAsportspucSectionQuestion").style.display="none"
            }
        }

        function gamesAsportshandleEngineeringYear() {
            var selectedOption = document.getElementById("gamesAsportsengineeringYear").value;

            if (selectedOption !== "allEngineering") {
                document.getElementById("gamesAsportsengineeringBranchQuestion").style.display = "block";
            }else{
                document.getElementById("gamesAsportsengineeringBranchQuestion").style.display = "none";
                document.getElementById("gamesAsportsengineeringSectionQuestion").style.display = "none";
            }
        }

        function gamesAsportshandleEngineeringBranch() {
            var selectedOption = document.getElementById("gamesAsportsengineeringBranch").value;

            if (selectedOption !== "allBranches") {
                document.getElementById("gamesAsportsengineeringSectionQuestion").style.display = "block";
            }else{
                document.getElementById("gamesAsportsengineeringSectionQuestion").style.display = "none";
            }
        }

        function gamesAsportshideAllQuestions() {
            document.getElementById("gamesAsportspucGroupQuestion").style.display = "none";
            document.getElementById("gamesAsportspucSectionQuestion").style.display = "none";
            document.getElementById("gamesAsportsengineeringYearQuestion").style.display = "none";
            document.getElementById("gamesAsportsengineeringBranchQuestion").style.display = "none";
            document.getElementById("gamesAsportsengineeringSectionQuestion").style.display = "none";
        }
        function validateForm() {
        const fromInput = document.getElementById("gamesAsports-from");
        const messageInput = document.getElementById("gamesAsports-message");
        const toInput = document.getElementById("gamesAsports-to");

        if (fromInput.value.trim() === "" || messageInput.value.trim() === "" || toInput.value === "none") {
            alert("Fill in all required fields and select a recipient.");
            return false;
        }

        // Get current date and time and display it
        const dateTimeStamp = document.getElementById("gamesAsportsdateTime");
        const currentDateTime = new Date();
        const formattedDateTime = currentDateTime.toLocaleString();
        dateTimeStamp.textContent = "Date and Time Stamp: " + formattedDateTime;

        // Clear form fields
        document.getElementById("gamesAsports-messageForm").reset();

         // Show a success gamesAsports-message
         alert("Message sent successfully!");


        return false;
    }

    function updateDateTime() {
        const dateTimeElement = document.getElementById('gamesAsportsdateTime');
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
//events js

const eventsendMessageBtn = document.getElementById('eventsendMessageBtn');
const eventviewMessageBtn = document.getElementById('eventviewMessageBtn');
const eventssendMessageDiv = document.getElementById('event-sendMessage');
const eventsviewMessageDiv = document.getElementById('event-viewMessage');

eventsendMessageBtn.addEventListener('click', () => {
    eventssendMessageDiv.style.display = 'block';
    eventsviewMessageDiv.style.display = 'none';
});

eventviewMessageBtn.addEventListener('click', () => {
    eventsviewMessageDiv.style.display = 'block';
    eventssendMessageDiv.style.display = 'none';
});
function eventhandleToSelection() {
    var selectedOption = document.getElementById("event-to").value;
    
    // Hide all question rows initially
    eventhideAllQuestions();

    if (selectedOption === "PUC") {
        document.getElementById("eventpucGroupQuestion").style.display = "block";
    }
    else if (selectedOption === "engineering") {
        document.getElementById("eventengineeringYearQuestion").style.display = "block";
    }
}

function eventhandlePUCGroup() {
    var selectedOption = document.getElementById("eventpucGroup").value;

    if (selectedOption !== "allPUC") {
        document.getElementById("eventpucSectionQuestion").style.display = "block";
    }
    else{
        document.getElementById("eventpucSectionQuestion").style.display="none"
    }
}

function eventhandleEngineeringYear() {
    var selectedOption = document.getElementById("eventengineeringYear").value;

    if (selectedOption !== "allEngineering") {
        document.getElementById("eventengineeringBranchQuestion").style.display = "block";
    }else{
        document.getElementById("eventengineeringBranchQuestion").style.display = "none";
        document.getElementById("eventengineeringSectionQuestion").style.display = "none";
    }
}

function eventhandleEngineeringBranch() {
    var selectedOption = document.getElementById("eventengineeringBranch").value;

    if (selectedOption !== "allBranches") {
        document.getElementById("eventengineeringSectionQuestion").style.display = "block";
    }else{
        document.getElementById("eventengineeringSectionQuestion").style.display = "none";
    }
}

function eventhideAllQuestions() {
    document.getElementById("eventpucGroupQuestion").style.display = "none";
    document.getElementById("eventpucSectionQuestion").style.display = "none";
    document.getElementById("eventengineeringYearQuestion").style.display = "none";
    document.getElementById("eventengineeringBranchQuestion").style.display = "none";
    document.getElementById("eventengineeringSectionQuestion").style.display = "none";
}
function validateForm() {
const fromInput = document.getElementById("event-from");
const messageInput = document.getElementById("event-message");
const toInput = document.getElementById("event-to");

if (fromInput.value.trim() === "" || messageInput.value.trim() === "" || toInput.value === "none") {
    alert("Fill in all required fields and select a recipient.");
    return false;
}

// Get current date and time and display it
const dateTimeStamp = document.getElementById("eventdateTime");
const currentDateTime = new Date();
const formattedDateTime = currentDateTime.toLocaleString();
dateTimeStamp.textContent = "Date and Time Stamp: " + formattedDateTime;

// Clear form fields
document.getElementById("event-messageForm").reset();

 // Show a success event-message
 alert("Message sent successfully!");


return false;
}

function updateDateTime() {
const dateTimeElement = document.getElementById('eventdateTime');
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

    
     function handleToSelection() {
        var selectedOption = document.getElementById("to").value;

        // Hide all question rows initially
        hideAllQuestions();

        if (selectedOption === "PUC") {
            document.getElementById("pucGroupQuestion").style.display = "block";
        } else if (selectedOption === "engineering") {
            document.getElementById("engineeringYearQuestion").style.display = "block";
        }
    }

    function handlePUCGroup() {
        var selectedOption = document.getElementById("pucGroup").value;

        if (selectedOption !== "allPUC") {
            document.getElementById("pucSectionQuestion").style.display = "block";
        }
    }

    function handleEngineeringYear() {
        var selectedOption = document.getElementById("engineeringYear").value;

        if (selectedOption !== "allEngineering") {
            document.getElementById("engineeringBranchQuestion").style.display = "block";
        }
    }

    function handleEngineeringBranch() {
        var selectedOption = document.getElementById("engineeringBranch").value;

        if (selectedOption !== "allBranches") {
            document.getElementById("engineeringSectionQuestion").style.display = "block";
        }
    }

    function hideAllQuestions() {
        document.getElementById("pucGroupQuestion").style.display = "none";
        document.getElementById("pucSectionQuestion").style.display = "none";
        document.getElementById("engineeringYearQuestion").style.display = "none";
        document.getElementById("engineeringBranchQuestion").style.display = "none";
        document.getElementById("engineeringSectionQuestion").style.display = "none";
    }

    function validateForm() {
        const fromInput = document.getElementById("from");
        const messageInput = document.getElementById("message");
        const toInput = document.getElementById("to");

        if (fromInput.value.trim() === "" || messageInput.value.trim() === "" || toInput.value === "none") {
            alert("Fill in all required fields and select a recipient.");
            return false;
        }

        // Get current date and time and display it
        const dateTimeStamp = document.getElementById("dateTime");
        const currentDateTime = new Date();
        const formattedDateTime = currentDateTime.toLocaleString();
        dateTimeStamp.textContent = "Date and Time Stamp: " + formattedDateTime;

        // Clear form fields
        document.getElementById("messageForm").reset();

        // Show a success message
        alert("Message sent successfully!");


        return false;
    }

    function updateDateTime() {
        const dateTimeElement = document.getElementById('dateTime');
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
