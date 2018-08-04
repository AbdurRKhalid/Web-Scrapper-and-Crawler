<?php
    if (isset($_POST['command_download'])) {
        $received_URL = $_POST['website_url'];
        $file_name = substr($received_URL,12,3);
        $file_name_links = $file_name . ".txt";
        $file_name_html_page = $file_name. ".html";
    }


//initializing the curl handler.
$curl_handler = curl_init();

//setting the curl to send the request to the page.
curl_setopt($curl_handler,CURLOPT_URL,$received_URL);

//setting the curl to get the output in the variable instead of showing it in the web page.
curl_setopt($curl_handler,CURLOPT_RETURNTRANSFER,true);

//setting the header off.
curl_setopt($curl_handler,CURLOPT_HEADER,false);

//executing the curl and saving the result page in the variable.
$result_received = curl_exec($curl_handler);

//function to extract the links from the page.

$output_function = preg_match_all( '#[-a-zA-Z0-9@:%_\+.~\#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~\#?&//=]*)?#si', $result_received, $output, PREG_SET_ORDER );

//closing the curl handler.
curl_close($curl_handler);

//opening the file or creating to write the links to that fiel.
$opened_file_for_links = fopen($file_name_links,'w');

//printing the links to the Opened File.
foreach ($output as $result) {
    $to_write = $result[0];
    fwrite($opened_file_for_links,$to_write.PHP_EOL);
}

//closing the file after saving all the Links.
fclose($opened_file_for_links);

//open file for the Saving the web page.
$open_file_for_web_page = fopen($file_name_html_page,"w");

//writing the page contents to the file.
fwrite($open_file_for_web_page,$result_received);

//closing the file after writing the web page to the file.
fclose($open_file_for_web_page);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Download the Web Page and Links of the website</title>
</head>
<body>
<div class="jumbotron" style="background-color: indigo">
    <h1 class="display-4"><span style="color: azure">Web Page Downloaded Successfully</span></h1>
    <p class="lead"><span style="color: azure">The Page and Links that were available on the website has been downloaded.</span></p>
    <hr class="my-4">
    <p><span style="color: azure">Check the Directory for the Purpose of the Viewing.</span></p>
</div>
    <div class="container">
        <hr>
        <p class="text-center">Thank You!</p>
        <hr>
    </div>
</body>
</html>

