<?php
$features = array(
    'winter' => 'Beautiful arrangements for any occasion.',
    'spring' => 'It must be spring! Delicate daffodils have arrived.',
    'summer' => "It's summer, and we're in the pink!",
    'autumn' => "Summer's over, but our flowers are still a riot of colors."
    );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Using Array Elements in Strings</title>
</head>

<body>
<h1>Using Array Elements in Double Quotes</h1>
<p><?php echo "The slogan for summer is: {$features['summer']}"; ?></p>
</body>
</html>