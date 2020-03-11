<?php //code
	// var_dump($_POST);

	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$msg = $_POST['Message'];

	$outgoing = wordwrap($msg,70) . "\n\nCLIENT NAME: " . $name . "\nCLIENT EMAIL: " . $email;

	// send email
	mail("hello@reeftonhideaway.com","WEB ENQUIRY",$outgoing);

	echo '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>South Island Resort | Reefton\'s Hideaway, 20 Crampton Road, Reefton, Buller, South Island, New Zealand</title>
	<link rel="icon" type="w3images/kali.png" href="../w3images/kali.png">

<meta name="description" content="“Reefton&#39;s" hideaway,="" 20="" crampton="" road,="" reefton,="" buller,="" south="" island,="" new="" zealand.="" ideally="" located="" amidst="" lush="" beech="" forests="" of="" the="" lewis="" pass="" nature="" reserve="" and="" sparkling="" waters="" inangahua="" river,="" our="" hideaway="" resort="" caters="" to="" no-stress="" living="" at="" reasonable="" cost.="" "="">
<meta name="keywords" content="“accommodation," hideaway,="" cottages,="" cabins,="" retreats,="" campers,="" caravans,="" backpackers,="" long-term="" private="" stay,="" traditional="" tantra="" yoga,="" kaula,="" shaiva-shakta,="" ashram,="" vegetarian="" meals,="" urban="" food="" forest,="" permaculture,="" wifi="" access,="" 20="" crampton="" road,="" reefton,="" buller,="" south="" island,="" new="" zealand"="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../reffton.site_files//w3.css">
<link rel="stylesheet" href="../reffton.site_files/css">
<link rel="stylesheet" href="../reffton.site_files/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif;}
</style>
<style>A {text-decoration: none;} </style>
</head><body class="w3-light-grey">
	
<h2 style="text-align:center;">Message Confirmation</h2>

<p style="text-align:center;">Thank you, your message has been sent successfully to Reefton\'s Hideaway.</p>
</body></html>';
?>
