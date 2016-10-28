<?php

 function leapYear($year)
	 //$year = range (2000,2020); 

{

  if((($year % 4) == 0) && (($year % 100) != 0)) 
   {
     echo $year. " is leap year <br> ";
          
    }

	 elseif ($year%400 == 0)
	 {
	 
	    echo $year. " is leap year <br> ";
	 
	 }
     else
     {
        echo $year. " is not a leap year <br> ";
         
        }

}

leapYear(2008);
leapYear(2010);
leapYear(2012);
leapYear(2014);

?>


