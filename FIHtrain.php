<!doctype html>
<html>
<body>


<h1>Train: </h1>

<p><strong>To Find Time : </strong>A train 'd'  km or mts long, running with a speed of  's' m/s or km/hr will pass an electric pole in :</p>
<p><strong>To Find Speed : </strong>A train 'd' km or mts long passes a standing man in 't' hr or min or sec. The speed of the train is :</p>
<p><strong>To Find Distance : </strong>A train running at the speed of 's' kmph or mps took 't' hr or min or sec in passing a certain point. Then the length of the train must be: </p>




<form method="post" action="<?php echo $SERVER['php_self'];?>">
<fieldset>
<legend><b>Train:</b></legend><br>
<label for="distance">Distance:</label><br>
<input type="text" id="distance" name="distance==<label for="units">Units:</label>
<input list="dist_units" name="dist_units">
<datalist id="dist_units">
  <option value="km">
  <option value="m">
</datalist><br>

<label for="time">Time:</label><br>
<input type="text" id="time" name="time">
<label for="units">Units:</label>
<input list="time_units" name="time_units">
<datalist id="time_units">
  <option value="hr">
  <option value="min">
  <option value="sec">
</datalist><br>

<label for="speed">Speed:</label><br>
<input type="text" id="speed" name="speed">
<label for="units">Units:</label>
<input list="speed_units" name="speed_units">
<datalist id="speed_units">
  <option value="kmphr">
  <option value="mps">
</datalist><br><br>

<label for="tofind">To find:</label>
<input list="tofind" name="tofind" autocomplete="off">
<datalist id="tofind">
  <option value="Time">
  <option value="Speed">
  <option value="Distance">
</datalist><br>

<input type="submit" value="Enter" name="submit">
</fieldset>
</form>

</body>
</html>

<br>
<br>
<br>



<?php 
if($_POST)
{
$speed_units=$_POST['speed_units'];
$speed=$_POST['speed'];

$dist_units=$_POST['dist_units'];
$distance=$_POST['distance'];

$time_units=$_POST['time_units'];
$time=$_POST['time'];

$operation=$_POST['tofind'];
// var_dump($_POST);die;
}

echo '<hr>';

// speed()
// {
// if($speed_units=='m'ps)
// {
// 	$speed= ($speed*5)/18;
// 	echo 'Speed in m/s :'.$speed."<br>";
// }
// elseif ($speed_units=='kmphr') {
// 	$speed=($speed*18)/5;
// 	echo 'Speed in km/hr :'.$speed."<br>";
// }
// }

// distance()
// {
// if ($dist_units=='m') {
// 	$distance=$distance/1000;
// }
// elseif ($dist_units=='km') {
// 	$distance=$distance*1000;
// }
// }

switch ($operation) {
	case "Distance":
    
    if ($speed_units=='kmphr' AND $time_units=='hr' ) {
    			$distance=$speed*$time;
    			echo '<strong>Distance : </strong>'.$distance."<br>";
    		}		
    elseif ($speed_units=='kmphr' AND $time_units=='min') {
    	    $time=$time/60;
            $distance=$speed*$time;
    			echo '<strong>Distance : </strong>'.$distance."<br>";	    
    }
    elseif ($speed_units=='kmphr' AND $time_units=='sec') {
    	    $time=$time/3600;
            $distance=$speed*$time;
    			echo '<strong>Distance : </strong>'.$distance."<br>";	    
    }
    elseif ($speed_units=='mps' AND $time_units=='hr') {
    	    $speed=$speed*(18/5);
            $distance=$speed*$time;
    			echo '<strong>Distance : </strong>'.$distance."<br>";	    
    
    }
    elseif ($speed_units=='mps' AND $time_units=='min') {
    	    $time=$time/60;
    	    $speed=$speed*(18/5);
            $distance=$speed*$time;
    			echo '<strong>Distance : </strong>'.$distance."<br>";	    
    
    }
    elseif ($speed_units=='mps' AND $time_units=='sec') {
    	    $time=$time/3600;
    	    $speed=$speed*(18/5);
            $distance=$speed*$time;
    			echo '<strong>Distance : </strong>'.$distance."<br>";	    
    
    }
    break;


    case "Time":
    if ($dist_units=='km' AND $speed_units=='kmphr') {
    			$time=$distance/$speed;
    			echo '<strong>Time : </strong>'.$time."<br>";
    		}		
    if ($dist_units=='km' AND $speed_units=='mps') {
    			$speed=$speed*(18/5);
    			$time=$distance/$speed;
    			echo '<strong>Time : </strong>'.$time."<br>";
    		}		
    if ($dist_units=='m' AND $speed_units=='kmphr') {
    			$distance=$distance/1000;
    			$time=$distance/$speed;
    			echo '<strong>Time : </strong>'.$time."<br>";
    		}		
    if ($dist_units=='m' AND $speed_units=='mps') {
    			$distance=$distance/1000;
    			$speed=$speed*(18/5);
    			$time=$distance/$speed;
    			echo '<strong>Time : </strong>'.$time."<br>";
    		}
    break;

    case "Speed":
    // var_dump('case speed');die;
    // var_dump($_POST);
    // var_dump($dist_units, $time_units);die;
	if ($dist_units=='km' AND $time_units=='hr' ) {
    			$speed=$distance/$time;
                var_dump($speed, $time, $distance);die;
    			echo '<strong>Speed : </strong>'.$speed."<br>";
    		}		
    elseif ($dist_units=='km' AND $time_units=='min') {
    	    $time=$time/60;
            $speed=$distance/$time;
    			echo '<strong>Speed : </strong>'.$speed."<br>";	    
    }
    elseif ($dist_units=='km' AND $time_units=='sec') {
    	    $time=$time/3600;
            $speed=$distance/$time;
    			echo '<strong>Speed : </strong>'.$speed."<br>";	    
    }
    elseif ($dist_units=='m' AND $time_units=='hr') {
    	    $distance=$distance/10;
            $speed=$distance/$time;
    			echo '<strong>Speed : </strong>'.$speed."<br>";	    
    
    }
    elseif ($dist_units=='m' AND $time_units=='min') {
    	    $time=$time/60;
    	    $distance=$distance/1000;
            $speed=$distance/$time;
    			echo '<strong>Speed : </strong>'.$speed."<br>";	    
    
    }
    elseif ($dist_units=='m' AND $time_units=='sec') {
    	    $time=$time/3600;
    	    $distance=$distance/1000;
            $speed=$distance/$time;
    			echo '<strong>Speed : </strong>'.$speed."<br>";	    
    
    }	

    break;
}

?>

<hr>