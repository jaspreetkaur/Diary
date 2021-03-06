<?php

function headfirst()              // header with logo
{
 global $file;
 global $n;
 global $dates;
 global $months;
 global $yr;
 global $punj;
 global $days;
 global $lang;
 global $textcolor;
	fwrite($file,'\noindent'.'\colorbox[HTML]{3399FF}{'."\n");
        fwrite($file,'\begin{minipage}{1.6in}'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$days[$n].'}'.'\newline'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$lang[$punj[$n]].'}'."\n");
        fwrite($file,'\end{minipage}'."\n");
        fwrite($file,'\begin{minipage}{2.6in}'."\n");
	fwrite($file,'\begin{center}'."\n");
	fwrite($file,'\includegraphics[scale=0.1]{logo.png}'."\n");
	fwrite($file,'\end{center}'."\n");
	fwrite($file,'\end{minipage}'."\n");
        fwrite($file,'\begin{minipage}{1.8in}'."\n");
	fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$dates[$n]." ".$months[$n]." ".$yr[$n].'}'."\n");
        fwrite($file,'\end{minipage}}'."\n");
	fwrite($file,'\vspace{0.4cm}'."\n");
}

function headend()		// header without logo
{
 global $file;
 global $n;
 global $dates;
 global $months;
 global $yr;
 global $punj;
 global $days;
 global $lang;
 global $textcolor;
	fwrite($file,'\vspace{0.5cm}'."\n");
	fwrite($file,'\noindent'.'\colorbox[HTML]{3399FF}{'."\n");
        fwrite($file,'\begin{minipage}{4.32in}'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$days[$n].'}'.'\newline'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$lang[$punj[$n]].'}'."\n");
        fwrite($file,'\end{minipage}\hfill'."\n");
        fwrite($file,'\begin{minipage}{1.8in}'."\n");
	fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$dates[$n]." ".$months[$n]." ".$yr[$n].'}'."\n");
        fwrite($file,'\end{minipage}}'."\n");
	fwrite($file,'\vspace{0.4cm}'."\n");
}

function headsun()		// header for sun and saturday
{
 global $file;
 global $n;
 global $dates;
 global $months;
 global $yr;
 global $punj;
 global $days;
 global $lang;
 global $textcolor;
	fwrite($file,'\noindent'.'\colorbox[HTML]{3399FF}{'."\n");
        fwrite($file,'\begin{minipage}{1.06in}'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$days[$n].'}'.'\newline'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$lang[$punj[$n]].'}'."\n");
        fwrite($file,'\end{minipage}'."\n");
        fwrite($file,'\begin{minipage}{1.8in}'."\n");
	fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$dates[$n]." ".$months[$n]." ".$yr[$n].'}'."\n");
        fwrite($file,'\end{minipage}}'."\n");
}

?>
