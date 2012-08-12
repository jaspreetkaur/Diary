<?php
{
		
		$n=0;
		
		for($y=1;$y<=160;$y++)
		{	
			fwrite($file,'\cfoot{'.$quotes[$y].'}'."\n");
			if($days[$n]=="Friday")
			{
				$c = $n+2;
				while($n<=$c)
				{
				 if($days[$n]=="Friday")
					{
					$l=23;
                                        headfirst();
					$n++;
					lines($l);
					fwrite($file,'\begin{multicols}{2}'."\n");
					}
                                  else //($days[$n+1]=="Saturday" or $days[$n+2]=="Sunday")
					{	
						$l=23;
						headsun();
						$n++;
				        	lines($l);
					} 
				
				}
				fwrite($file,'\end{multicols}'."\n");
				fwrite($file,"\\clearpage\n");
			}
			else
			{
				$header=1;
				$c = $n+1;
				while($n<=$c)
				{
				 if ($header%2!=0 )
				 {		
					$l=23;		
				 	headfirst();
					$header++;
				 }
				 else 
				 {	$l=23;	
					headend();
				 }
				 $n++;
				 lines($l);				
				}
				fwrite($file,"\\clearpage\n");
			}
		}
   	
		
	}
?>

