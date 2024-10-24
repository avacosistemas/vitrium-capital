<?php

if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['00Nj0000008ze1B']) || empty($_POST['00Nj0000008bHZU']) || empty($_POST['00Nj000000BSaZp'])) {
	echo 'Hay campos vacíos';
	exit();
}

// $secret_key = '6LcjDJomAAAAAPLibWF0lq940Bi8YjcNyg1J68Gq';
$secret_key = 'fa7ce0fa88065ed13e4030c361f67804-7ecaf6b5-b914f2be';
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
$data = curl_exec($curl);
curl_close($curl);
$response = json_decode($data);

if (!$response->success) {
	echo 'Error de captcha';
	exit();
	//proceed with form values
}

//MAIL
$domain_name = 'mg.vitriumcapital.com';
$mailgun_key = '3e9dc382981d6cc6f70bf9213480238b-af778b4b-a4477559';

$html = 'Nombre: ' . $_POST['first_name'] . '<br>' .
	'Apellido: ' . $_POST['last_name'] . '<br>' .
	'Email: ' . $_POST['email'] . '<br>' .
	'Teléfono: ' . $_POST['phone'] . '<br>' .
	'País: ' . $_POST['00Nj0000008ze1B'] . '<br>' .
	'Interés: ' . $_POST['00Nj0000008bHZU'] . '<br>' .
	'Mensaje: ' . $_POST['00Nj000000BSaZp'];

$array_data = [
	'from' => 'Web Vitrium <no-reply@mg.vitriumcapital.com>',
	'to' => 'marketingdigital@vitriumcapital.com',
	'subject' => 'Formulario Web',
	'html' => $html,
	'o:tracking' => 'yes',
	'o:tracking-clicks' => 'yes',
	'o:tracking-opens' => 'yes',
	// 'text' => $text,
	// 'o:tag' => $tag,
	// 'h:Reply-To' => $replyto
];

$session = curl_init('https://api.mailgun.net/v3/' . $domain_name . '/messages');
curl_setopt($session, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($session, CURLOPT_USERPWD, 'api:' . $mailgun_key);
curl_setopt($session, CURLOPT_POST, true);
curl_setopt($session, CURLOPT_POSTFIELDS, $array_data);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_ENCODING, 'UTF-8');
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
curl_setopt($session, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($session);
curl_close($session);
$results = json_decode($response, true);


// SALESFORCE
$endpoint = 'https://webto.salesforce.com/servlet/servlet.WebToLead';
$params = [
	'encoding' => 'UTF-8',
	'first_name' => $_POST['first_name'],
	'email' => $_POST['email'],
	'last_name' => $_POST['last_name'],
	'phone' => $_POST['phone'],
	'mobile' => $_POST['phone'],
	//'Telefono_Particular__c' => $_POST['phone'],
	'oid' => '00Dj0000001rNSE',
	'retURL' => 'gracias.html',
	//'dialCode' => '595',
	// 'LeadSource' => 'Vitriumcapital.com',
	'lead_source' => 'sitio-web-formulario',
	'anuncio' => 'Espontaneo',
	'Validado__c' => false,
	'00Nj0000008ze1B' => $_POST['00Nj0000008ze1B'],
	'00Nj0000008bHZU' => $_POST['00Nj0000008bHZU'],
	'00Nj000000BSaZp' => $_POST['00Nj000000BSaZp'],
];
$url = $endpoint . '?' . http_build_query($params);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
$data = curl_exec($curl);
curl_close($curl);
?>

<script>
	window.location.href = 'thankyou.php'
</script>
