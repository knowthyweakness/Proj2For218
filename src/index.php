<?php
namespace knowthyweakness;
require_once '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSV Import</title>
</head>
<body>
    <form action="uploadHandle.php" method="post">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" accept=".csv">
    <!--<input type="submit" value="Upload CSV" name="submit">-->
    <input type="submit">
<?php
    use knowthyweakness\db\SQLiteConnection;
    //$obj = new bootstrap('../data/SampleData.csv');
    $pdo = (new SQLiteConnection())->connect();
    if ($pdo != null)
        echo 'Connected to the SQLite database successfully!';
    else
        echo 'Whoops, could not connect to the SQLite database!';
//phpinfo();
?>
</body>
</html>