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