<?php
// multiple recipients
$to = 'billybrown00@gmail.com';
// subject
$subject = 'New Brown Family History Idea!';
// message
$message = $_POST["fmessage"];

mail($to, $subject, $message);
?> 

<head>

<title>Brown Family History</title>
	<meta name="keywords" content="nashville, brown, family history, brown family history, tennessee" />
	<meta name="description" content="Documenting the Brown Family History" />
	<base href="http://www.robobilly.com/familyhistory">
		<link href='reset.css' rel='stylesheet' type='text/css' media='all'>
		<link href='960.css' rel='stylesheet' type='text/css' media='all'>	
	<link href='familyhistory/2010.css' rel='stylesheet' type='text/css' media='all'>
	<link rel="icon" href="familyhistory/b.ico" />
	
</head>

<body>
			<div class="center">
			<a href="familyhistory/index.php"><img src="familyhistory/brownHistoryHeader.png" width="800"></a>
			
			
			<h2>Your suggestion has been sent!</h2>
			<div class="photoCaption">
			<div class="photo"><img src="familyhistory/boat.jpg" width="500"></div>
			<p class="caption">Photo of Rock Island found in Big's Photo box.</p>
			</div>
			
			<div class="bumpdown"><p>Go back to the <a href="familyhistory/index.php">main page</a>.</p></div>

			</div>

