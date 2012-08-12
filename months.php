#!/usr/bin/php
<?php
date_default_timezone_set('Asia/Calcutta');	//sets the default timezone used by all date/time functions

$year = $argv[1];		//arguments passed at command line. Refer Makefile
$option = $argv[2];
$header = $argv[3];
$textcolor = $argv[4];
$nextyear=$year+1;

//setlocale(LC_ALL,$lang.'.UTF8');
require('pun.php');
require('quotation.php');

$file=fopen('month.tex','w');				// creates the file month.tex in writable mode
function lines($l)					// func. for no. of horizontal blank lines.
	{       
		global $file;
		for($baz=0;$baz<$l;$baz++)
		{                                                                                                               
		fwrite($file,"\\noindent\\hrulefill"."\n"."\n");
		}
                
	}

require($header.'.php');

while($year<=$nextyear)	
{
 for($month=1;$month<=12;$month++)
 {
  $firstday=strtotime("$month/1/$year 12:00:00");
	
   for($day=1;$day<=date('t',$firstday);$day++)		//'t' prints total no. of days in a month
    {			
	$thisday=strtotime("$month/$day/$year 12:00:00");
        $month_h=strftime('%B',$thisday);		//'%B' writes full name of month 
        $n_day=strftime('%A',$thisday); 		//'%A' writes full name of day
        $date=date('d',$thisday);			//'d' writes date in a format like 01
        $punjabi=strftime('%u',$thisday);		//'%u' gives value of from 1 to 7 for Monday to Sunday
                       
        //$dates[] = $date." ".$month_h." ".$year;	//Array which get the date in the format: 01 January 2013
	$dates[] = $date;
	$months[] = $month_h;
	$yr[] = $year;
        $days[] = $n_day;				//Array which get the name of Day: Monday
        $punj[] = $punjabi;				//Array with name of Day in Punjabi lang.

	   if($day==31 and $month_h=="December")	/*condition for including some days of next year */

	    $year++;
	    if($day==14 and $month_h=="January" and $year==$nextyear)
	    break;
    }
 }
}
	
require($option.'.php');
fclose($file);
?>  
