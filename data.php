<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>replit</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body>
  <?php $diffwebs = $_POST["q1"]; 
$hrsstreaming = $_POST["q2"];
$hrsZoomTogether = $_POST["q3"];
$hrsZoom1to1 = $_POST["q32"];
$hrsmining = $_POST["q4"]; 
$numEmails = $_POST["q5"];
$numPhotos = $_POST["q6"];
$numSearches = $_POST["q7"];
$numTweets = $_POST["q8"];
$numTexts = $_POST["q9"];
$amtCarbonEmitted = $diffWebs*4.61 + $hrsStreaming*55 + $Zoom1to1*3.7 + $hrsZoomTogether*50 + $numEmails*13 + $numPhotos*50 + $numSearches*0.2 + $numTweets*0.02 + $numTexts*0.014; //in GRAMS
$amtCarbonEmitted = $amtCarbonEmitted/1000;
?>
</body>
</html>