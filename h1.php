<?php

function headfirst()              // header with logo
{
 global $file;
 global $n;
 global $dates;
 global $punj;
 global $days;
 global $lang;
 global $textcolor;
	fwrite($file,'\noindent'.'\colorbox[HTML]{3399FF}{'."\n");
        fwrite($file,'\begin{minipage}{1.0in}'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$days[$n].'}'.'\newline'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$lang[$punj[$n]].'}'."\n");
        fwrite($file,'\end{minipage}'."\n");
        fwrite($file,'\begin{minipage}{3.21in}'."\n");
	fwrite($file,'\begin{center}'."\n");
	fwrite($file,'\includegraphics[scale=0.031]{logo.png}'."\n");
	fwrite($file,'\end{center}'."\n");
	fwrite($file,'\end{minipage}'."\n");
        fwrite($file,'\begin{minipage}{1.8in}'."\n");
	fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$dates[$n].'}'."\n");
        fwrite($file,'\end{minipage}}'."\n");
}

function headend()		// header without logo
{
 global $file;
 global $n;
 global $dates;
 global $punj;
 global $days;
 global $lang;
 global $textcolor;
	fwrite($file,'\vspace{0.4cm}'."\n");
	fwrite($file,'\noindent'.'\colorbox[HTML]{3399FF}{'."\n");
        fwrite($file,'\begin{minipage}{4.32in}'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$days[$n].'}'.'\newline'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$lang[$punj[$n]].'}'."\n");
        fwrite($file,'\end{minipage}\hfill'."\n");
        fwrite($file,'\begin{minipage}{1.8in}'."\n");
	fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$dates[$n].'}'."\n");
        fwrite($file,'\end{minipage}}'."\n");
}

function headsun()		// header for sun and saturday
{
 global $file;
 global $n;
 global $dates;
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
	fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$dates[$n].'}'."\n");
        fwrite($file,'\end{minipage}}'."\n");
}

?>
