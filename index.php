<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];


//This is the first menu screen

if ( $text == "" ) {
  $response  = "CON Hi welcome, I can help you with Event Reservation \n";
  $response .= "1. Enter 1 to continue";
}


// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen

else if ($text == "1") {
  $response  = "CON  Pick a table for reservation below \n";
  $response .= "1. Table for 2 \n";
  $response .= "2. Table for 4 \n";
  $response .= "3. Table for 6 \n";
  $response .= "4. Table for 8 \n";
}


//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
  $response = "CON You are about to book a table for 2 \n";
  $response .= "Please Enter 1 to confirm \n";
}

else if ($text == "1*1*1") {
  $response = "CON Table for 2 cost -N- 50,000.00 \n";
  $response .= "Enter 1 to continue \n";
  $response .= "Enter 0 to cancel";
}

else if ($text == "1*1*1*1") {
  $response = "END Your Table reservation for 2 has been booked";
}


else if ($text == "1*1*1*0") {
  $response = "END Your Table reservation for 2 has been canceled";
}

// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2") {
  $response = "CON You are about to book a table for 4 \n";
  $response .= "Please Enter 1 to confirm \n";
}

// Menu for a user who selects "1" from the fourth menu screen
else if ($text == "1*2*1") {
  $response = "CON Table for 4 cost -N- 150,000.00 \n";
  $response .= "Enter 1 to continue \n";
  $response .= "Enter 0 to cancel";
}
        
else if ($text == "1*2*1*1") {
  $response = "END Your Table reservation for 4 has been booked";
}
    
else if ($text == "1*2*1*0") {
  $response = "END Your Table reservation for 4 has been canceled";
}

// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen
else if ($text == "1*3") {
  $response = "CON You are about to book a table for 6 \n";
  $response .= "Please Enter 1 to confirm \n";
}

// Menu for a user who enters "1" from the fifth menu
else if ($text == "1*3*1") {
  $response = "CON Table for 6 cost -N- 250,000.00 \n";
  $response .= "Enter 1 to continue \n";
  $response .= "Enter 0 to cancel";
}

else if ($text == "1*3*1*1") {
  $response = "END Your Table reservation for 6 has been booked";
}
        
else if ($text == "1*3*1*0") {
  $response = "END Your Table reservation for 6 has been canceled";
}

// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "1*4") {
  $response = "CON You are about to book a table for 8 \n";
  $response .= "Please Enter 1 to confirm \n";
}

// Menu for a user who enters "1" from the sixth menu
else if ($text == "1*4*1") {
  $response = "CON Table for 8 cost -N- 250,000.00 \n";
  $response .= "Enter 1 to continue \n";
  $response .= "Enter 0 to cancel";
}
                       
else if ($text == "1*4*1*1") {
  $response = "END Your Table reservation for 8 has been booked";
}
            
else if ($text == "1*4*1*0") {
  $response = "END Your Table reservation for 8 has been canceled";
}


//echo response

header('Content-type: text/plain');
echo $response


?>