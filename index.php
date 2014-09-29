<!DOCTYPE HTML>
<html> 
	<head> 
	  <title>Harjutus 5</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="style/style.css">
	</head> 
	<body>
		<h2>
			Booleans
		</h2>
		<?php 
			$result1=true;
			$result2=false;
			$result3="true";
		 ?>
		 <?php
		 	echo $result1; 
		  ?><br>
		   <?php
		 	echo $result2; 
		  ?><br>
		  <p>
		  	Result 1: <?php echo $result1; ?><br>
		  	Result 2: <?php echo $result2; ?>
		  </p><br>
		  <p>
		  	Kas result1 on boolean? <?php echo is_bool($result1); ?><br>
		  	Kas result2 on boolean? <?php echo is_bool($result2); ?><br>
		  	Kas result3 on boolean? <?php echo is_bool($result3); ?>
		  </p>
		  <h2>Andmetüüpide olekud</h2>
		  <h3>Null</h3>
		  <?php 
		  		$var1=null;
		  		$var2="";
		  		$var3=0;
		  	?>
		   <p>
		  	Kas var1 on null? <?php echo is_null($var1); ?><br>
		  	Kas var2 on null? <?php echo is_null($var2); ?><br>
		  	Kas var3 on null? <?php echo is_null($var3); ?><br>
		  	Kas var4 on null? <?php echo is_null($var4); ?>
		  </p>
		  <h3>Set</h3>
		  <p>
		  	Kas var1 on väärtustatud? <?php echo isset($var1); ?><br>
		  	Kas var2 on väärtustatud? <?php echo isset($var2); ?><br>
		  	Kas var3 on väärtustatud? <?php echo isset($var3); ?><br>
		  	Kas var4 on väärtustatud? <?php echo isset($var4); ?>
		  </p>
		  <h3>Empty</h3>
		  <?php 
		  		$value1="";
		  		$value2="0";
		  		$value3= 0;
		  		$value4= 0.0;
		  		$value5= array();
		  		$value6= NULL;
		  		$value7= false;
		   ?>
		   <p>
		   		Kas value1 on tühi? <?php echo empty($value1); ?><br>
		   		Kas value2 on tühi? <?php echo empty($value2); ?><br>
		   		Kas value3 on tühi? <?php echo empty($value3); ?><br>
		   		Kas value4 on tühi? <?php echo empty($value4); ?><br>
		   		Kas value5 on tühi? <?php echo empty($value5); ?><br>
		   		Kas value6 on tühi? <?php echo empty($value6); ?><br>
		   		Kas value7 on tühi? <?php echo empty($value7); ?><br>
		   </p>
		   <h2>Andmetüübi teisandamine</h2>
		   <?php 
		   		$count = 2;
		   		echo $count;
		    ?><br>
		    <?php 
		    	echo gettype($count);
		     ?><br>
		    <?php 
		    	settype($count, "string");
		     ?>
		    <?php 
		    	echo $count;
		     ?><br>
		    <?php 
		    	echo gettype($count);
		     ?><br>
		     <?php 
		    	settype($count, "float");
		     ?>
		    <?php 
		    	echo $count;
		     ?><br>
		    <?php 
		    	echo gettype($count);
		     ?><br>
		     <?php 
		    	settype($count, "array");
		     ?>
		    <pre>
			    <?php 
			    	echo print_r($count);
			     ?>
		     </pre>     
		     <?php 
			    	echo gettype($count);
			  ?><br>
			  <?php 
		    	settype($count, "boolean");
		     ?>
		     <?php 
		    	echo $count;
		      ?><br>
		     <?php 
		    	echo gettype($count);
		      ?><br>
		      <h2>Konstandid</h2>
		      <?php 
		      		define("MAX_WIDTH", 980);
		      		echo MAX_WIDTH;
		       ?>
		       <?php 
		      		define("MAX_WIDTH", 500);
		      		echo MAX_WIDTH;
		       ?><br>
		       <?php 
		       		MAX_WIDTH + 5;
		       		echo MAX_WIDTH;
		        ?>		
		
	</body>	
</html> 