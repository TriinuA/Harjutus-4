<!DOCTYPE HTML>
<html> 
	<head> 
	  <title>Harjutus 4</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="style/style.css">
	</head> 
	<body>
		<h2>
			Arvutamine murd- ja täisarvudega
		</h2>
		<?php
		 	echo $float = 3.14; 
		?><br>
		<?php 
		 	$integer = 3;
		?>

		<?php
			echo $float +7;
		?><br>

		<?php
			echo 4/3;
		?><br>
		<h2>
			Murdarvude ümardamine
		</h2>

		<?php 
			echo round($float, 1);
		 ?><br>
		 <?php
		 	echo ceil($float);
		 ?>
		 <br>
		 <?php 
		 	echo floor($float)
		 ?>

		 <h2>
		 	Andmetüübi funktsioonid
		 </h2>
		 
		 <?php 
		  	echo "Kas {$integer} on integer? " . is_int($integer); 
		  ?><br>
		  <?php 
		  	echo "Kas {$float} on integer? " . is_int($float); 
		  ?><br>
		  <?php 
		  	echo "Kas {$integer} on float? " . is_float($integer); 
		  ?><br>
		  <?php 
		  	echo "Kas {$float} on float? " . is_float($float); 
		  ?><br>
		  <?php 
		  	echo "Kas {$integer} on number? " . is_numeric($integer); 
		  ?><br>
		  <?php 
		  	echo "Kas {$float} on number? " . is_float($float); 
		  ?><br>
		  <h2>Jadad (array)</h2>
		  <?php 
		  	$number=array(4 , 8 , 15 , 16 , 23 , 42);
		  	echo $number[1];		  	
		   ?><br><br>
		   <?php 
		  	echo $number[0];		  	
		   ?><br>
		   <?php 
		  	echo $number[1];		  	
		   ?><br>
		   <?php 
		  	echo $number[2];		  	
		   ?><br>
		   <?php 
		  	echo $number[3];		  	
		   ?><br>
		   <?php 
		  	echo $number[4];		  	
		   ?><br>
		   <?php 
		  	echo $number[5];		  	
		   ?><br>
		   <?php 
		   	$mixes = $arrayName = array(6 , "rebene", "koer", 5.5 , array("x","y","z") );
		   	echo $mixes[2];
		    ?>
		    <br>
		    <?php 
		    	echo $mixes[4][2];
		    ?>
		    <br>

		   <?php 
		   		$mixes[2]="kass";
		   		echo $mixes[2];
		    ?><br><br>
		    <pre>
			    <?php 
			    	$mixes[5]="hiir";
			    	$mixes[]="hobune";
			    	echo print_r($mixes) ;
			     ?>
		     </pre>
		     <h2>Associative arrays</h2>
		     <?php 
		     	$assoc = array("first_name" => "Triinu" , "last_name" => "Ausmees" );
		     	echo $assoc["first_name"];
		     	echo " ";
		     	echo $assoc["last_name"];
		     ?><br>
		     <?php
		     	$assoc["first_name"] = "Uniirt";
		     	$assoc["e_mail"] = "triinu.ausmees@khk.ee"
		      ?>
		      <p>
		      	Minu nimi on <?php echo $assoc["first_name"];  ?> <?php echo $assoc["last_name"];  ?>. Minu e-post on <?php echo $assoc["e_mail"];  ?>.
		      </p>
		      <br>
		      <h2>
		      	Array functions
		      </h2>
		      <?php 
		      	$numbers_2 = array(8,23,15,42,16,4);
		       ?>
		       <?php 
		       		echo count($numbers_2);
		       ?><br>
		       <?php 
		       		echo max($numbers_2);
		       ?><br>
		       <?php 
		       		echo min($numbers_2);
		       ?><br>
		       <?php
    				sort($numbers_2);
    				print_r($numbers_2);
				?><br>
				<?php
    				rsort($numbers_2);
    				print_r($numbers_2);
				?><br>
				<?php
    				$num_string = implode(" ja " , $numbers_2);
    				echo $num_string;
    			?><br>
    			<?php
    				print_r(explode(" ja ", $num_string));
    			?>










		
		
	</body>	
</html> 