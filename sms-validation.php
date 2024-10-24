<?php

header('Content-Type: application/json');

class MyDB extends SQLite3
{
	function __construct()
	{
		$this->open('test.db');
	}
}
$db = new MyDB();
if (!$db) {
	echo $db->lastErrorMsg();
} else {
	// echo "Opened database successfully<br>";
}


// $sql = <<<EOF
//       CREATE TABLE SMS
//       (ID INTEGER PRIMARY KEY AUTOINCREMENT,
//       PHONE           TEXT    NOT NULL,
//       CODE            INT     NOT NULL);
// EOF;

// $ret = $db->exec($sql);
// if (!$ret) {
// 	echo $db->lastErrorMsg();
// } else {
// 	echo "Table created successfully<br>";
// }


// $sql = <<<EOF
//       INSERT INTO SMS (PHONE,CODE) VALUES ('595994287512', 123123);
// EOF;

// $ret = $db->exec($sql);
// if (!$ret) {
// 	echo $db->lastErrorMsg();
// } else {
// 	echo "Records created successfully\n";
// }


$sql = <<<EOF
      SELECT * FROM SMS ORDER BY id DESC LIMIT 1;
EOF;

$ret = $db->query($sql);
$row = $ret->fetchArray(SQLITE3_ASSOC);
// var_dump($row['CODE']);
// while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
// 	echo "ID = " . $row['ID'] . "\n";
// 	echo "NAME = " . $row['NAME'] . "\n";
// 	echo "ADDRESS = " . $row['ADDRESS'] . "\n";
// 	echo "SALARY = " . $row['SALARY'] . "\n\n";
// }
// echo "Operation done successfully\n";


$db->close();

if (empty($_POST['asesor_radio']) || empty($_POST['informacion']) || empty($_POST['agente']) || empty($_POST['nombre_apellido']) || empty($_POST['ciudad']) || empty($_POST['pais']) || empty($_POST['email']) || empty($_POST['celular']) || empty($_POST['code'])) {
	echo json_encode(['success' => false, 'msg' => 'Todos los campos son requeridos']);
	exit();
}

if ($_POST['code'] != $row['CODE']) {
	echo json_encode(['success' => false, 'msg' => 'Código inválido']);
	exit();
}

// $secret_key = 'fa7ce0fa88065ed13e4030c361f67804-7ecaf6b5-b914f2be';
// $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'];
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_HEADER, false);
// $data = curl_exec($curl);
// curl_close($curl);
// $response = json_decode($data);

// if (!$response->success) {
// 	echo json_encode(['success' => true, 'msg' => 'Error de captcha']);
// 	exit();
// }

//MAIL
$domain_name = 'mg.vitriumcapital.com';
$mailgun_key = '9d9694b02b8f081803ea4792f0976a61-b7b36bc2-7cf91246';

$html = '<b>Nombre y Apellido:</b> ' . $_POST['nombre_apellido'] . '<br>' .
	'<b>Ciudad:</b> ' . $_POST['ciudad'] . '<br>' .
	'<b>País:</b> ' . $_POST['pais'] . '<br>' .
	'<b>Proyecto:</b> ' . $_POST['project'] . '<br>' .
	'<b>Email:</b> ' . $_POST['email'] . '<br>' .
	'<b>Celular:</b> ' . $_POST['celular'] . '<br>' .
	'<b>utm_source:</b> ' . $_POST['utm_source'] . '<br>' .
	'<b>utm_campaign:</b> ' . $_POST['utm_campaign'] . '<br>' .
	'<b>utm_medium:</b> ' . $_POST['utm_medium'] . '<br>' .
	'<b>utm_content:</b> ' . $_POST['utm_content'] . '<br>' .
	'<b>¿Sos Agente?:</b>  ' . ($_POST['agente'] == 1 ? 'No' : 'Si') . '<br>' .
	'<b>Asesor:</b>  ' . ($_POST['asesor_radio'] == 1 ? 'Deseo comprar para vivir' : 'Deseo comprar para invertir') . '<br>' .
	'<b>Información:</b>  ' . $_POST['informacion'] . '<br>';

$array_data = [
	'from' => 'Web Vitrium <no-reply@mg.vitriumcapital.com>',
	'to' => 'marketingdigital@vitriumcapital.com',
	'to' => 'cristhianv@vitriumcapital.com',
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
	'first_name' => $_POST['nombre_apellido'],
	'email' => $_POST['email'],
	'last_name' => $_POST['nombre_apellido'],
	'phone' => $_POST['celular'],
	'mobile' => $_POST['celular'],
	'MobilePhone' => $_POST['celular'],
	'Telefono_Particular__c' => $_POST['celular'],
	'oid' => '00Dj0000001rNSE',
	'retURL' => 'gracias.html',
	'anuncio' => 'Espontaneo',
	'Validado__c' => false,
	'Pais__c' => $_POST['pais'] . ' | ' . $_POST['ciudad'],
	'Comentario_Landing__c' => ($_POST['asesor_radio'] == 1 ? 'Deseo comprar para vivir' : 'Deseo comprar para invertir') . ' | ' . $_POST['informacion'], //Comentario landing
	'Agente_Inmobiliario__c' => ($_POST['agente'] == 1 ? false : true),

	'LeadSource' => $_POST['utm_source'] ? $_POST['utm_source'] : 'sitio-web-formularioVC', // Origen del prospecto
	'lead_source' => $_POST['utm_source'] ? $_POST['utm_source'] : 'sitio-web-formularioVC', // Origen del prospecto
	'Lead_Source' => $_POST['utm_source'] ? $_POST['utm_source'] : 'sitio-web-formularioVC', // Origen del prospecto
	'Anuncio__c' => $_POST['utm_campaign'], // Campaña
	'Anuncio_2__c' => $_POST['utm_medium'], // Anuncio
	'Plataforma__c' => $_POST['utm_content'], //Plataforma

	'Proyecto__c' => $_POST['project'], // Proyecto
	// <select id="00Nj0000008bHZU" name="00Nj0000008bHZU" data-name="00Nj0000008bHZU" required="" class="select-field background-dark w-select cleanSafari">
	// 	<option value="">Project of Interest</option>
	// 	<option value="UY - 01 Vila">UY - 01 Vila</option>
	// 	<option value="UY - 01 Vista">UY - 01 Vista</option>
	// 	<option value="UY - 01 Del Centro">UY - 01 Del Centro</option>
	// 	<option value="UY - 01 Libertador">UY - 01 Libertador</option>
	// 	<option value="UY - 01 Sync">UY - 01 Sync</option>
	// 	<option value="UY - Carmelo Golf">UY - Carmelo Golf</option>
	// 	<option value="PY - 01 Mburucuyá">PY - 01 Mburucuyá</option>
	// 	<option value="PY - 01 Sync">PY - 01 Sync</option>
	// 	<option value="PY - 01 Las Mercedes">PY - 01 Las Mercedes</option>
	// 	<option value="AR - Pueblo Caamaño">AR - Pueblo Caamaño</option>
	// 	<option value="USA - Duos">USA - Duos</option>
	//   </select>
];
$url = $endpoint . '?' . http_build_query($params);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
$data = curl_exec($curl);
curl_close($curl);

echo json_encode(['success' => true]);
exit();
