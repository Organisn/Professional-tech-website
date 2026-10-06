<?php
	/* 
	Update the mail server account credentials.
	This file is included in the SMTP server connection scripts to establish a connection to the SMTP server.
	Make sure to keep this file secure and do not expose it publicly, as it contains sensitive informations.
	*/
	$mail_account_host = ""; // 'smtp.gmail.com' as an example for Gmail SMTP server
	$mail_account_username = "";
	$mail_account_password = "";
	$mail_account_port = 465; // 465 for SSL, 587 for TLS, 995 for POP3S, 110 for POP3, 143 for IMAP, 993 for IMAPS
	// Cloudflare Turnstile keys
	// turnstile_site_key (must be manually setted into the cloudflare turnstile widget tag attribute in contacts.php)
	$turnstile_secret_key = "";
?>