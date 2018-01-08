var rangers = ["Trinity", "Monira", "Suzie", "Andrew", "Jamie", "Luxury", 
               "Elliot", "Tedajah", "Kevin", "Jasmine", "Shauntia", "Kera", 
               "Billy", "Jenna", "Tim", "Caleb", "Tray", 
	    	   "Lucas", "Breanna", "Brandon", "Jordan", "Leah", 
               "Danny", "Xavier", "Yatin", "Ellie"];

var cuse	= ["Jamie", "Tony", "Brady", "Jonah", "Mert", "Matt", "Emily", "John", "Savion", "Andy",
               "Evan", "Kennedy", "Dustin", "Ashley", "Lauren", "Ryan", "Jaiden", "Dom", "Roberto", 
               "James", "Travis", "Maroon", "Nya", "Zane", "Tyler"];

var sabres	= ["Orion", "Jeremy", "Stan", "Chaniyah", "Alyssa", "Austin", "Kyle", "Ryanna", "Zach",
              "Mikayla", "Alexa", "Albert", "Truc", "Anjan", "Kennedy", "Mikie", "Maddie", "Claire", "Isaiah",
              "Sydney", "Elisabeth", "Brittany", "Alexis", "Eddie", "Sydney", "Michael", "Oznur"];

var celtics = ["Sunny", "LaJhonte", "Zach", "Rosie", "Brooke", "Reynier",  
	    	   "Ellie", "Derek", "Meagan", "K'Vaun", "Victor", "Crystal", 
	           "Tayllor", "Emma", "Jon", "Lucas", "Nick", "Anthony", 
	           "Jake", "Alex", "Jade", "Alissa", "Ashley", 
	           "Mishaila"];

var yanks	= ["Anas", "Jarvis", "Johammsonn", "Jayden", "Cam", "Elysa", "Hayley", "Seth", "Connor", 
               "James", "Nicole", "Jamaria", "Alexus", "Starasia", "Anthony", "Jeannie", 
               "Monet", "Kiana", "Eric", "Kiet", "Christine", "Leah", "Gavin"];

// NOTE: FOR ALL CODE BELOW, studentDivNumber REFERS TO THE ARRAY ELEMENT # + 1
// i.e., IF THE STUDENT HAD A CLASS ID #, THE LIST WOULD BEGIN AT 1, NOT 0

var classes = [rangers, cuse, sabres, celtics, yanks];

var colors = ["#FF4747", "#FF9933", "yellow", "#00CC0", "#6699FF"];

var classChosen = [];

var nameSelected = "";

var normalFontSize = "20px";
var highlightedFontSize = "24px";


function displayNames (form) {
	// remove all divs from "studentCol"
	var myNode = document.getElementById("studentCol");
	while (myNode.firstChild) {
        myNode.removeChild(myNode.firstChild);
    }	
	// get all the form elements with the name classes
	var formClasses = form["classes"];
	
	// loop through the 5 class radio buttons
	for (var i = 0; i < classes.length; i++){
		// create a variable to store the current radio button for easy reference
		var radio = formClasses[i];
		
		if (radio.checked) {
			// set the checked radio button to the array for the corresponding class 
			classChosen = classes[i];
			}
	}	
	// display the students" names
	for (var j = 0; j < classChosen.length; j++) {
		var newDiv = document.createElement("div");
		newDiv.setAttribute("class", "col-xs-2 student");
		var studentDivNumber = "studentDivNumber" + (j + 1);
		newDiv.setAttribute("id", studentDivNumber);
		document.getElementById("studentCol").appendChild(newDiv);
		newDiv.innerHTML = classChosen[j];
	}
}

// choose a student and display/highlight name
function randomName (form) {
    
    resetDivs();
    
    // highlightSelectedStudent();
	
	setTimeout(function() {highlightSelectedStudent()}, 600);
    // $("#randomStudent").css("background-color", "green");

    return false;
}


function clearRandomNameDiv () {
    
    $("#randomStudent").css("background-color", "transparent");
    
    return false;
}

function resetDivs () {
    
    // reset all divs to uniform text color and background color
    for (var k = 0; k < classChosen.length; k++) {
        studentDivNumber = "studentDivNumber" + (k + 1);
        
        document.getElementById(studentDivNumber).style.backgroundColor = "#337ab7"; // boostrap"s primary button color
        document.getElementById(studentDivNumber).style.color = "white";
        document.getElementById(studentDivNumber).style.fontStyle = "normal";
        // document.getElementById(studentDivNumber).style.fontWeight = "normal";
        // document.getElementById(divIdOfStudentSelected).style.fontSize = normalFontSize;
    }
}

function highlightSelectedStudent () {
    
    var from = 1;
	var to = classChosen.length;
	
	/**
     * Returns a random integer between min (inclusive) and max (inclusive)
     * Using Math.round() will give you a non-uniform distribution!
     */
	
	var r = Math.floor(Math.random() * (to - from + 1)) + from;
	
	// highlight name in list of students
	var divIdOfStudentSelected = "studentDivNumber" + r;
	document.getElementById(divIdOfStudentSelected).style.backgroundColor = "#00B057"; // koding"s logo green
	document.getElementById(divIdOfStudentSelected).style.color = "white";
	document.getElementById(divIdOfStudentSelected).style.fontStyle = "italic";
    document.getElementById(divIdOfStudentSelected).style.fontWeight = "bold";
    // document.getElementById(divIdOfStudentSelected).style.fontSize = highlightedFontSize;
	
	return false;
}