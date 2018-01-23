function clickme() {
    // This line alerts with a prompt.
    alert("Clicked!");
}

function changeColor() {
	var textbox_id = "textColor";
	var textbox = document.getElementById(textbox_id);
	var div_id = "div1";
	var div = document.getElementById(div_id);

	var color = textbox.value
	div.style.backgroundColor = color;
}

function prove_button() {
    // This line prompts the user to type in his name.
    var name = window.prompt("Please enter your name:");

    // Create a personalized greeting for the user. Pretty sure I won't be original, but 
    //I am unable to resist.
    var greeting = "Hello " + name + ".  My name is Inigo Montoya. You killed my father,"
    + " prepare to die!";

    // The next line causes the computer to display
    // a greeting to the user in a popup window.
    window.alert(greeting);
}