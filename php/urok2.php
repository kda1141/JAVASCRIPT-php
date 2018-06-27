<html>
 <head> 
   <meta charset="utf-8">
  <title>PHP</title>
 </head>
 <body>
  <p>  <?php 
	$a=3;                //1
	echo $a;
	
	$a1=10;              //2 
	$b=2;
	echo $a1+$b;
	echo $a1-$b;
	echo $a1*$b;
	echo $a1/$b;
	
	$text='Привет мир';  //6
	echo $text;
	
	$text1='привет';     //7
	$text2='мир';
	echo $text1.text2;
	
	$name='Юлия';        //8
	echo 'Привет'.$name;
	
	$text3='abcde';      //10
	echo $text3[0];
	echo $text3[2];
	echo $text3[4];
	
	$ch=13;              //14
	$min=41;
	$sek=55;
	echo $ch.':'.$min.':'.$sek;
	
	$var = 10;          //18
    $var++;
    $var++;
    $var--;
    echo $var;	
	?> 
	</p>
 </body>
</html>
