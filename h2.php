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
        fwrite($file,'\begin{minipage}{1.45in}'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$days[$n].'}'.'\newline'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$lang[$punj[$n]].'}'."\n");
        fwrite($file,'\end{minipage}'."\n");
        fwrite($file,'\begin{minipage}{3.22in}'."\n");
	fwrite($file,'\begin{center}'."\n");
	fwrite($file,'\includegraphics[scale=0.1]{logo.png}'."\n");
	fwrite($file,'\end{center}'."\n");
	fwrite($file,'\end{minipage}'."\n");
	fwrite($file,'\begin{minipage}{0.4in}'."\n");
	fwrite($file,'\color{'.$textcolor.'}'.'\Huge\bf{'.$dates[$n].'}'."\n");
	fwrite($file,'\end{minipage}'."\n");
        fwrite($file,'\begin{minipage}{0.9in}'."\n");
	fwrite($file,'\color{'.$textcolor.'}'.'\bf{'.$months[$n].'}'."".'\newline'."\n".$yr[$n]."\n");
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
        fwrite($file,'\begin{minipage}{4.76in}'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$days[$n].'}'.'\newline'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$lang[$punj[$n]].'}'."\n");
        fwrite($file,'\end{minipage}\hfill'."\n");
	fwrite($file,'\begin{minipage}{0.4in}'."\n");
	fwrite($file,'\color{'.$textcolor.'}'.'\Huge\bf{'.$dates[$n].'}'."\n");
	fwrite($file,'\end{minipage}'."\n");
        fwrite($file,'\begin{minipage}{0.9in}'."\n");
	fwrite($file,'\color{'.$textcolor.'}'.'\bf{'.$months[$n].'}'."".'\newline'."\n".$yr[$n]."\n");
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
        fwrite($file,'\begin{minipage}{1.55in}'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$days[$n].'}'.'\newline'."\n");
        fwrite($file,'\color{'.$textcolor.'}'.'\large\bf{'.$lang[$punj[$n]].'}'."\n");
        fwrite($file,'\end{minipage}'."\n");
	fwrite($file,'\begin{minipage}{0.4in}'."\n");
	fwrite($file,'\color{'.$textcolor.'}'.'\Huge\bf{'.$dates[$n].'}'."\n");
	fwrite($file,'\end{minipage}'."\n");
        fwrite($file,'\begin{minipage}{0.9in}'."\n");
	fwrite($file,'\color{'.$textcolor.'}'.'\bf{'.$months[$n].'}'."".'\newline'."\n".$yr[$n]."\n");
        fwrite($file,'\end{minipage}}'."\n");
}

?>
