<?php

header('Content-Type: application/json');
$code = rand(1000, 9999);

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


$sql = <<<EOF
      INSERT INTO SMS (PHONE,CODE) VALUES ('595994287512', $code);
EOF;

$ret = $db->exec($sql);
if (!$ret) {
	echo $db->lastErrorMsg();
} else {
	// echo "Records created successfully\n";
}


$db->close();


$twilio_account_sid = 'ACc4d4167d13f693321a209d4c54f86b57';
$twilio_auth_token = 'e8d16351fb3dd7454e5d27c8ce7654bc';
$twilio_phone_number = "+12055338365";

$payload = [
	'From' => $twilio_phone_number,
	'To' => $_POST['full_phone'],
	'Body' => 'Tu código VITRIUM es: ' . $code
];

$url = 'https://api.twilio.com/2010-04-01/Accounts/' . $twilio_account_sid . '/Messages.json';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, $twilio_account_sid . ':' . $twilio_auth_token);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));

$response = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo json_encode(['success' => true]);
exit();
