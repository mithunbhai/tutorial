<?php

 function leapYear($year)
	 //$year = range (2000,2020); 

{
   for($year=2000;$year<=2020;$year++)
	   
  if((($year % 4) == 0) && (($year % 100) != 0)) 
   {
     echo $year. " is a leap year <br> ";
          
    }

	 elseif ($year%400 == 0)
	 {
	 
	    echo $year. " is a leap year <br> ";
	 
	 }
     else
     {
        echo $year. " is not a leap year <br> ";
         
        }

}

leapYear('$year');

?>


