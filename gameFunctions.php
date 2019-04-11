
<?php

//asking for user input and storing it in variable
//echo 'Type in R, S or P'."\n";
 $userChoice = $_REQUEST["choice"];
 

//this takes letter and returns word
function playerOne($letter) {
    if($letter == 'R')
    {return "Rock";}
    
    else if ($letter == 'S'){
    return "Scissors";}
                           
    else if ($letter == 'P'){
    return "Paper";}
}

//Show what user has chosen
$myResult = playerOne($userChoice);
echo "You chose $myResult"."<br>";

//generate random number between 0 and 2
$computerNumber = rand (0, 2);

//call the random value and assign a word to the number
function playerTwo($randomNumber) {
if ($randomNumber == 0) 
{return "Rock";}
else if ($randomNumber == 1) 
{
return "Scissors";}
else if ($randomNumber == 2) 
{
return "Paper";}}

//puts result of previous function into a variable
$CompResult = playerTwo($computerNumber);
echo "The computer chose $CompResult"."<br>";


//initiates the whowon function and pulls in results of the player and the computer into a winner statement
echo whoWon ($myResult,$CompResult);

//generates a winner statement by comparing word against word
function whoWon ($Me,$Comp) {
    if ($Me == $Comp ){
    echo "Its a Draw!";
   } else if ($Me == 'Paper' && $Comp == 'Rock'){
       echo "Computer is the Winner!";
  } else if ($Me == 'Rock' && $Comp == 'Paper'){
  echo "Computer is the winner!";
  } else if ($Me == 'Rock' && $Comp == 'Scissors'){
  echo "You are the Winner!";}
  else if ($Me == 'Scissors' && $Comp == 'Rock'){
       echo "Computer is the Winner!";
  } else if ($Me == 'Scissors' && $Comp == 'Paper'){
  echo "You are the Winner!";
  } else if ($Me == 'Paper' && $Comp == 'Scissors'){
  echo "Computer is the Winner!";}
}


    