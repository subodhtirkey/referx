<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Test</title>

	

	
</head>
<body>

<div id="container">
	<h1>Settings</h1>
	

<div id="body">
		
		<ul id="provider-list">
		<?php
			// Output the enabled services and change link/button if the user is authenticated.
			$this->load->helper('url');
			foreach($providers as $provider => $data) {
				if ($data['connected']) {
					echo "<li>".anchor('hauth/logout/'.$provider,'Logout of '.$provider, array('class' => 'connected'))."</li>";
				} else {
					echo "<li>".anchor('hauth/login/'.$provider,$provider, array('class' => 'login'))."</li>";
				}
			}
		?>
		</ul>
		<br style="clear: both;"/>

	</div>
	
</div>

	
	
</div>
</body>
</html>

