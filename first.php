<?php
{
		$n=0;
		
		for($y=1;$y<=160;$y++)
		{
			fwrite($file,'\cfoot{'.$quotes[$y].'}'."\n");
			if($days[$n]=="Friday")
			{	
				
				$header=1;
				$c = $n+2;
				while($n<=$c)
				{	
					if($days[$n]=="Sunday")
						$l=6;
					else
						$l=19;
					if ($header%2!=0 )
				 	{				
				 	headfirst();
					$header++;
				 	}
				 	else 
				 	{
					headend();
				 	}
					$n++;
					lines($l);				
				}
				fwrite($file,"\\clearpage\n");
			}
			else
			{	$header=1;
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
				 {
					$l=23;
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
