<?php

function magic8Ball()
{
  echo "\nTell me... What is your question?\n";  
  $question = readline(">");  
  echo "\nHmm I see... Your question is $question... I understand why this weighs on you... I have consulted the spirit world.\nHere is your answer: "; 
  $choice = rand(0, 6);
  echo $choice;

  switch ($choice) {
    case 0:
        echo "\nIt is certain.\n";
        break;
    case 1:
        echo "\nIt is decidedly so.\n";
        break;
    case 2:
        echo "\nWithout a doubt.\n";
        break;
    case 3:
        echo "\nYes-definately\n";
        break;
    case 4:
        echo "\nYou may rely on it\n";
        break;
    case 5:
        echo "\nah I see it,yes\n";
        break;
    case 6:
        echo "\nMost Likely\n";
        break;
    default:
      echo "\ninvalid answer\n";
  }
}

magic8Ball();
magic8Ball();
magic8Ball();

