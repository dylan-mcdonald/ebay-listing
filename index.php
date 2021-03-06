<!DOCTYPE html>
<html Lang="en">
		<head>
			<link rel="stylesheet" type="text/css" href="mystyle.css">
			<meta charset="UTF-8">
			<title> Ebay Listing Use Cases </title>
		</head>
	<body>
		<div>
		<h1> <span class="headtext"> Data Design Project: Ebay Sale</span> </h1>
		</div>
		<h2> Typical User Persona </h2>
			<p> An Adult searching a large buyer market for an item who seeks
			ease of use and convenience with minimal time commitment to sell an item. A
			busy professional who spends minimal time online that isn't work related.
			Appreciates a streamlined ability to list, describe and sell in a timely manner. </p>
		<h2> User Frustrations </h2>
			<ul>
				<li> Time consuming process of user registration. </li>
				<li> The time and detail needed to input in order to list an item for sale.</li>
				<li>Deciding on a proper category and price.</li>
				</ul>
		<h2> Steps to Sell an Item on Ebay</h2>
			<p>
				 Login/Register for an eBay user account by providing email address, name, and creating a username.
				In order to sell an item you will pick a category your item will go in.
				You will then title your item, give it a description, price and add picture(s).
				</p>
		<img class="pad-40" src="images/datauseEbay.svg" alt="Entity Relationship Diagram - Ebay" />

		<article>

		CREATE TABLE profile (<br />
		profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,<br />
		email VARCHAR(128) NOT NULL,<br />
		phone VARCHAR(32),<br />
		atHandle VARCHAR(32),<br />
		UNIQUE(atHandle),<br />
		UNIQUE(email),<br />
		PRIMARY KEY(profileId)<br />
		); <br />


		CREATE TABLE category (<br />
		profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,<br />
		email VARCHAR(128) NOT NULL,<br />
		phone VARCHAR(32),<br />
		atHandle VARCHAR(32),<br />
		UNIQUE(userName),<br />
		UNIQUE(email),<br />
		PRIMARY KEY(profileId)<br />
			); <br />


			CREATE TABLE description (<br />
			profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,<br />
			email VARCHAR(128) NOT NULL,<br />
			phone VARCHAR(32),<br />
			atHandle VARCHAR(32),<br />
			UNIQUE(userName),<br />
			UNIQUE(email),<br />
			PRIMARY KEY(profileId)<br />
			); <br />

		</article>

	</body>
</html>





