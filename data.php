<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Your Impact</title>
  <link rel="icon" href="/images/favicon.ico">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<body>
  <h1 class = "header">Your Results!</h1>
  <?php $diffWebs = $_POST["q1"]; 
$hrsStreaming = $_POST["q2"];
$hrsZoomTogether = $_POST["q3"];
$hrsZoom1to1 = $_POST["q32"];
$hrsmining = $_POST["q4"]; 
$numEmails = $_POST["q5"];
$numPhotos = $_POST["q6"];
$numSearches = $_POST["q7"];
$numTweets = $_POST["q8"];
$numTexts = $_POST["q9"];

$vals = array($diffWebs, $hrsStreaming, $hrsZoomTogether, $hrsZoom1to1, $hrsmining, $numEmails, $numPhotos, $numSearches, $numTweets, $numTexts);

$amtCarbonEmitted = $vals[0]*4.61 + $vals[1]*55 + $vals[3]*3.7 + $vals[2]*50 + $vals[5]*13 + $vals[6]*50 + $vals[7]*0.2 + $vals[8]*0.02 + $vals[9]*0.014 + $vals[4]*602000; //in GRAMS
$amtCarbonEmitted = $amtCarbonEmitted/1000;

$carbonGrams = array($diffWebs*4.61, $hrsStreaming*55, $hrsZoomTogether*50, $hrsZoom1to1*3.7, $hrsmining*60200, $numEmails*13, $numPhotos*50, $numSearches*0.2, $numTweets*0.02, $numTexts*0.014);
$carbonGrams2 = $carbonGrams
rsort($carbonGrams2)
$carbonGrams2 = array_slice($carbonGrams2, 0, 3);
$j = 0;
$indexes = array(-1, -1, -1);
while ($j < 3) {
  for ($i = 0; $i < sizeOf($vals); $i++) {
    if ($carbonGrams[$i] == $carbonGrams2[$j]) {
      $indexes[$j] = $i;
      $j++;
    }
  }
}
echo $indexes;
?>
<div class = "results">
  <p>Your tech use emits about <?php echo $amtCarbonEmitted ?> kilograms of carbon dioxide per day.</p>
  <p>That's about <?php echo $amtCarbonEmitted*365 ?> kilograms per year.</p>
  <p>(For context, the average American emits a total of 20000 kilograms of carbon dioxide per year.)</p>
  <p>Your highest carbon emissions were </p>
  <h3>Here are some suggestions to reduce your carbon emissions!</h3>
</div>
</body>
</html>