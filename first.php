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
						$l=4;
					else
						$l=14;
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
					$l=17;
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
		}
   	
	
	}
?>
