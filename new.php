
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	
	<title>hello world</title>

</head>

<body>

	<h1 style="color:red">welcome to php</h1>
	<?php

			#single line command
		echo "<br><h4>hello world<h4><br>";
		
		$my_variable=7;
		
		echo $my_variable;
		
		$var1="web";
		$var2="tech";
		
		echo "<br>".$var1." ".$var2;
		
		
		print ("<br>".$var1);
		
		$var3=(integer)$var1;
		
		define("my_const",18);
		print(my_const);
		print("<br>");
		echo gettype($var3);
		
		echo $var3;
		
		echo "<br><br>";
		
		$marks=55;
		$result="";
		
		($marks>50) ? $result="pass" : $result="fail";
		
		echo $result;
		
		
		echo "<br><br>";
		function sum($num1,$num2=10)
		{
				return $num1+$num2;
		}
		
		echo sum(20);
		
		
		echo "<br><br>";
		
		$title="MR";
		
		function name()
		{
			
			//we have not define title is global we cannot access inside the function
			global $title;
			
			$fname="raju";
			$lname="jhon";
			
			print("$title."."$fname"." "."$lname");
			print("<br>");
			
		}
		
		name();
	
	
		function sum1()
		{
			$x=10;
			static $sum=0; //static keyword is to used for store the value permanently;
			#$sum=0;
			
			$sum=$sum+$x;
			
			print($sum."<br>");
		}
		
		
		sum1();
		sum1();
		sum1();
		
		
		
		
		#evensum or odddsum
		
		print("<br>");
		
		for($i=1;$i<=30;$i++)
		{
			static $evensum=0;
			static $oddsum=0;
			
			if($i%2==0)
			{
			
				$evensum=$evensum+$i;
			}
			
			else
			{
				$oddsum=$oddsum+$i;
			}
		}
		
		print $evensum."<br>";
		print $oddsum;
		
		print("<br>");
		$result="";
		for($i=1;$i<=50;$i++)
		{
			
			if($i%3==0 and $i%5==0)
			{
				$result="FizzBuzz";
				print ($i."->".$result."<br>");
			}
			
			elseif($i%5==0)
			{
				$result="Buzz";
				print ($i."->".$result."<br>");
			}
			
			elseif($i%3==0)
			{
				$result="Fizz";
				print ($i."->".$result."<br>");
			}
		}
		
		
		
	?>
	<br>
	<button type="button" class="btn btn-primary">Primary</button>
</body>

</html>