<?php
#session_start();
$counter_name = "counter.txt";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counter = ( int ) fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counter++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counter);
  fclose($f); 
}
echo $counter;
/*$arr=array();
	$num=$counter;
	if($counter<10)
			$con=0;
		else if($counter<100)
			$con=1;
		else if($counter<1000)
			$con=2;
			else if($counter<10000)
				$con=3;
				else if($counter<100000)
					$con=4;
					else if($counter<1000000)
						$con=5;
						else if($counter<10000000)
							$con=6;
							else if($counter<100000000)
								$con=7;
								else if($counter<1000000000)
									$con=8;
									else if($counter<10000000000)
									$con=9;
							
					
						
	while($num>0){
		//or($i=0;$i<count($arr);$i++)
		//{
		$arr[]=$num%10;
		$num = $num/10;
	}
	for($i=$con;$i>=0;$i--)
	{
	switch($arr[$i])
{ 
case 0:
echo "<img src=images/number/0.png width=30 height=30>";
break;
case 1:
echo "<img src=images/number/1.png width=30 height=30>";
break;
case 2:
echo "<img src=images/number/2.png width=30 height=30>";
break;
case 3:
echo "<img src=images/number/3.png width=30 height=30>";
break;
case 4:
echo "<img src=images/number/4.png width=30 height=30>";
break;
case 5:
echo "<img src=images/number/5.png width=30 height=30>";
break;
case 6:
echo "<img src=images/number/6.png width=30 height=30>";
break;
case 7:
echo "<img src=images/number/7.png width=30 height=30>";
break;
case 8:
echo "<img src=images/number/8.png width=30 height=30>";
break;
case 9:
echo "<img src=images/number/9.png width=30 height=30>";
break;
}
}*/
//echo $count;
?>
