$data = $_REQUEST;
$loginid = $data["id"];
$password = $data["password"];

$outputUser
$outputCandidates

//$citizen = SQL query on login id and password
//if $citizen is null then
//    $outputUser, $outputCitizens = null
//else
//    $outputCitizens = SQL table of candidates in list form

$output = array($outputUser, $outputCitizens); //put $outputUser, $outputCitizens into a 2-space array named $output
$outputJson = json_encode($output);

//output the stuff back to the client