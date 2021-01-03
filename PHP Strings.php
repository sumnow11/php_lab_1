<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
</head>
<body>
    <h2>strlen()</h2>
    <?php
echo strlen("Hello world!"); 
?>
<h2>***************</h2>
<h2>str_word_count()</h2>
<?php
echo str_word_count("Hello world!");
?>
<h2>***************</h2>
<h2>strrev()</h2>
<?php
echo strrev("Hello world!");
?>
<h2>***************</h2>
<h2>strpos()</h2>
<?php
echo strpos("Hello world!", "world"); 
?>
<h2>***************</h2>
<h2>str_replace()</h2>
<?php
echo str_replace("world", "Dolly", "Hello world!"); 
?>
<h2>***************</h2>

</body>
</html>