<?

header('Content-Type: text/html; charset=utf-8');

$data = json_decode($_POST['data'], true);	
		
$postdata = array (
	"first_name" => $data["name"],
	"email" => $data["email"],
	"custom_salesform_azonosito" => $data["trid"],
	"custom_salesform_statusz" => 0,
	"custom_salesform_date" => date('Y-m-d H:i:s'),
	"custom_salesform_termek" => $data["product"][0]["product"],
	"custom_szamlazasi_cim" => $data["invoice_zipcode"]. " " .$data["invoice_city"]. " " .$data["invoice_street"] ,
	"custom_telefonszam" => $data["telephone"],
	"campaign_token" => "69tNy"
);

if ($data["status"]=="true") {
	$postdata["custom_salesform_statusz"] = 1
};
	
$url = 'https://app.getresponse.com/add_subscriber.html';

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postdata));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$response=curl_exec ($ch); 
curl_close ($ch);

echo $response;
		
?>