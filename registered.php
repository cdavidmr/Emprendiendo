<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AprendEnseñando</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/w3data.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
</head>
<body>

	<div w3-include-html="header.html"></div>
	
	<div class="ui container" id="register-form">
	<form action="php/crud/db_registred.php" method="POST" class="ui form">
  	<h2 class="ui dividing header pink">User Profile</h2>
	  	<div class="ui fields">
	  		<div class="twelve wide field">
	  			<div class="field">
	  			   	<label>e-mail</label>
	  			   	<div class="">
	  			   		<div class="sixteen wide field">
	  			       		<input type="email" required="required" name="txtEmail" placeholder="e-mail">
	  			   		</div>
	  			   	</div>
	  			</div>
	  			<div class="field">
	  			   	<label>Name</label>
	  				<div class="ui fields">
	  					<div class="eight wide field">
	  			   			<input type="text" required="required" name="txtName" placeholder="First Name">
	  					</div>
	  					<div class="eight wide field">
	  						<input type="text" required="required" name="txtLast" placeholder="Last Name">
	  			      	</div>
	  			    </div>
	  			</div>
	  		</div>
	  		<div class="four wide field">
	  			<div>
	  				<button class="ui button basic" type="file" size="25" width="40" name="usPicture">Picture</button>
	  			</div>
	  		</div>
	  	</div>
  		<div class="field">
  			<label for="password">Password</label>
  			<div>
  				<div>
  					<input type="password" required="required" name="usPassword">
  				</div>
  			</div>
  		</div>
  		<div class="field">
  			<label for="password">Confirm you password</label>
  			<div>
  				<div>
  					<input type="password" required="required" name="confirmPassword">
  				</div>
  			</div>
  		</div>
  		<div class="field">
  			<label for="languaje">Languaje</label>
  			<div>
  				<div>
  					<input type="text" required="required" name="txtLang">
  				</div>
  			</div>
  		</div>
  		<div class="two fields">
    		<div class="field">
    		<label>Country</label>
        			<select class="ui dropdown">
					   <option value="">Select Country</option>
					<?php
					include('db/open_db.php');
					$country="SELECT * FROM $tabla2";
					$rescountry=$conxn->query($country);
						while ($optcountry = $rescountry->fetch_array(MYSQLI_BOTH))
						{
							echo '<option value="'.$optcountry['country'].'">'.$optcountry['country'].'</option>';
						}
						include('db/close_db.php');
					?>
  					</select>
    		</div>
    	<div class="field">
	    	<label>State</label>
	    	<select class="ui dropdown">
	        <option value="">State</option> 
	        <option value="AM">Amazonas</option>
	        <option value="AN">Antioquia</option>
		    <option value="AR">Arauca</option>
		    <option value="AT">Atlántico</option>
		    <option value="BO">Bogotá</option>
		    <option value="BR">Bolívar</option>
		    <option value="BY">Boyacá</option>
		    <option value="CL">Caldas</option>
		    <option value="CT">Caquetá</option>
		    <option value="CS">Casanare</option>
		    <option value="CC">Cauca</option>
		    <option value="CE">Cesar</option>
		    <option value="CH">Chocó</option>
		    <option value="CO">Córdoba</option>
		    <option value="CU">Cundinamarca</option>
		    <option value="GI">Guainía</option>
		    <option value="GV">Guaviare</option>
		    <option value="HU">Huila</option>
		    <option value="LG">La Guajira</option>
		    <option value="MA">Magdalena</option>
		    <option value="ME">Meta</option>
		    <option value="NA">Nariño</option>
		    <option value="NS">Norte de Santander</option>
		    <option value="PU">Putumayo</option>
		    <option value="QU">Quindío</option>
		    <option value="RI">Risaralda</option>
		    <option value="SA">San Andrés y Providencia</option>
		    <option value="SA">Santander</option>
		    <option value="SU">Sucre</option>
		    <option value="TO">Tolima</option>
		    <option value="VC">Valle del Cauca</option>
		    <option value="VA">Vaupés</option>
		    <option value="NM">Vichada</option>
	    	</select>
    	</div>
    </div>
  		<div class="ui button inverted pink" tabindex="0" name="Registered">Register</div>
		</form>
	</div>

<script>
	w3IncludeHTML();
</script>

</body>
</html>