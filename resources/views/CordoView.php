<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Weka Tsk</title>
</head>
<body>
    <div class="w-full h-screen relative flex flex-row">
        <div class="w-1/6 fixed">
            <?php require_once 'sidebarCoordo.php';?>
        </div>
        <div class="w-5/6 absolute right-0">
            <?php require_once 'MainCordoView.php';?>
        </div>
    </div>
</body>
</html>