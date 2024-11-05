<?php
$basePath = dirname(__DIR__);
$areas = ['北區', '安平區', '中西區', '安南區', '東區', '南區', '新營區', '鹽水區', '柳營區', '白河區', '後壁區', '東山區', '麻豆區', '下營區', '六甲區', '官田區', '大內區', '佳里區', '西港區', '七股區', '將軍區', '北門區', '學甲區', '新化區', '善化區', '新市區', '安定區', '山上區', '左鎮區', '仁德區', '歸仁區', '關廟區', '龍崎區', '玉井區', '楠西區', '南化區', '永康區'];
foreach ($areas as $area) {
  $url = urlencode($area);
  $result = exec("curl -k 'https://landmap.tainan.gov.tw/landwa/api/OraData2RPA_Alls/search4?RPTOWN1={$url}&xmax=4000000&xmin=20000&ymax=40000000&ymin=200000&RPBUILD5=%E4%BD%8F%E5%AE%85%E5%A4%A7%E6%A8%93%E5%95%86%E6%A5%AD%E5%A4%A7%E6%A8%93%E8%8F%AF%E5%BB%88%E9%80%8F%E5%A4%A9%E5%8E%9D%E5%85%AC%E5%AF%93on&RPTYPE2=%E5%BB%BA%2B%E5%9C%B0%2C%E5%9C%B0%2B%E5%BB%BA%2B%E8%BB%8A&YMS=10811&YME=11311&CA1=0&CA2=100000&FA1=0&FA2=100000&MPS=0&MPE=90000000&TPS=0&TPE=99900000000&FAGEmin=0&FAGEmax=100&RPLEVEL=%E5%B1%A4&RPSECT=&RPROAD=&RPUSE=&RPZONE=&SPCASE=&SPNOTE=&BUILD1=&BUILD2=&BUILD3=&BUILD4=%E9%9A%94%E9%96%93' \
  -H 'accept: application/json, text/javascript, */*; q=0.01' \
  -H 'accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7' \
  -H 'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJJZCI6IndlbGx3aW5kIn0.QGJ5WdI06Q43uGKtgdwt1oHmcnUg2U4FL6gDd0cogV4' \
  -H 'cache-control: no-cache' \
  -H 'pragma: no-cache' \
  -H 'priority: u=1, i' \
  -H 'referer: https://landmap.tainan.gov.tw/gis/' \
  -H 'sec-ch-ua: \"Chromium\";v=\"130\", \"Google Chrome\";v=\"130\", \"Not?A_Brand\";v=\"99\"' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'sec-ch-ua-platform: \"Linux\"' \
  -H 'sec-fetch-dest: empty' \
  -H 'sec-fetch-mode: cors' \
  -H 'sec-fetch-site: same-origin' \
  -H 'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36' \
  -H 'x-requested-with: XMLHttpRequest'");
  $json = json_decode($result);
  file_put_contents("{$basePath}/raw/OraData2RPA_Alls/{$area}.json", json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
  $result = exec("curl -k 'https://landmap.tainan.gov.tw/landwa/api/RPB_Alls/search4?RPTOWN1={$url}&xmax=4000000&xmin=20000&ymax=40000000&ymin=200000&RPBUILD5=%E4%BD%8F%E5%AE%85%E5%A4%A7%E6%A8%93%E5%95%86%E6%A5%AD%E5%A4%A7%E6%A8%93%E8%8F%AF%E5%BB%88%E9%80%8F%E5%A4%A9%E5%8E%9D%E5%85%AC%E5%AF%93on&RPTYPE2=%E5%BB%BA%2B%E5%9C%B0%2C%E5%9C%B0%2B%E5%BB%BA%2B%E8%BB%8A&YMS=10811&YME=11311&CA1=0&CA2=100000&FA1=0&FA2=100000&MPS=0&MPE=90000000&TPS=0&TPE=99900000000&FAGEmin=0&FAGEmax=100&RPLEVEL=%E5%B1%A4&RPSECT=&RPROAD=&RPUSE=&RPZONE=&SPCASE=&SPNOTE=&BUILD1=&BUILD2=&BUILD3=&BUILD4=%E9%9A%94%E9%96%93&P1MA_TYPEB_2=' \
  -H 'accept: application/json, text/javascript, */*; q=0.01' \
  -H 'accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7' \
  -H 'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJJZCI6IndlbGx3aW5kIn0.QGJ5WdI06Q43uGKtgdwt1oHmcnUg2U4FL6gDd0cogV4' \
  -H 'cache-control: no-cache' \
  -H 'pragma: no-cache' \
  -H 'priority: u=1, i' \
  -H 'referer: https://landmap.tainan.gov.tw/gis/' \
  -H 'sec-ch-ua: \"Chromium\";v=\"130\", \"Google Chrome\";v=\"130\", \"Not?A_Brand\";v=\"99\"' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'sec-ch-ua-platform: \"Linux\"' \
  -H 'sec-fetch-dest: empty' \
  -H 'sec-fetch-mode: cors' \
  -H 'sec-fetch-site: same-origin' \
  -H 'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36' \
  -H 'x-requested-with: XMLHttpRequest'");
  $json = json_decode($result);
  file_put_contents("{$basePath}/raw/RPB_Alls/{$area}.json", json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
  $result = exec("curl -k 'https://landmap.tainan.gov.tw/landwa/api/RPG_All/search?RPTOWN1={$url}&BName=&Builder=&addr=&landno=&LCnum=&LCYear=&YMS=&YME=&xmax=4000000&xmin=20000&ymax=40000000&ymin=200000' \
  -H 'accept: application/json, text/javascript, */*; q=0.01' \
  -H 'accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7' \
  -H 'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJJZCI6IndlbGx3aW5kIn0.QGJ5WdI06Q43uGKtgdwt1oHmcnUg2U4FL6gDd0cogV4' \
  -H 'cache-control: no-cache' \
  -H 'pragma: no-cache' \
  -H 'priority: u=1, i' \
  -H 'referer: https://landmap.tainan.gov.tw/gis/' \
  -H 'sec-ch-ua: \"Chromium\";v=\"130\", \"Google Chrome\";v=\"130\", \"Not?A_Brand\";v=\"99\"' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'sec-ch-ua-platform: \"Linux\"' \
  -H 'sec-fetch-dest: empty' \
  -H 'sec-fetch-mode: cors' \
  -H 'sec-fetch-site: same-origin' \
  -H 'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36' \
  -H 'x-requested-with: XMLHttpRequest'");
  $json = json_decode($result);
  file_put_contents("{$basePath}/raw/RPG_All/{$area}.json", json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}
