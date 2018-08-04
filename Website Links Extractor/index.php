<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web-Page Downloader and Links Extraction</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background-color: cornflowerblue">
    <h1 class="display-4"><span style="color: azure">Website Downloader and Links Extractor</span></h1>
    <p class="lead"><span style="color: azure">Download the Complete Web Page and All Links Present in it.</span></p>
    <hr class="my-4">
    <p><span style="color: azure">Enter the URL of the Web Page that you want to
            download and then the Application will download the web page and
            extract the links present in the web page and it will save the links in the separate text file.</span></p>
</div>

    <div class="container">
        <p>Enter the URL of the Page Below and Download your Web Page.</p>
        <form action="download.php" method="post">
        <div class="input-group input-group-lg">
            <input type="text" class="form-control" name="website_url" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            <div class="input-group-append">
            <input type="submit" class="btn btn-primary" name="command_download">
            </div>
        </div>
        </form>
    </div>
</body>
</html>
