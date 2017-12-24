<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php print $view->name; ?></title>
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
    </head>
    <body>
     
        <h1><?php print htmlentities ($view->name); ?></h1>
        <div>
            <span class="label">Phone:</span>
            <?php print htmlentities ($view->phone); ?>
        </div>
        <div>
            <span class="label">Email:</span>
            <?php print htmlentities ($view->email); ?>
        </div>
        <div>
            <span class="label">Address:</span>
            <?php print htmlentities ($view->address); ?>
        </div>
         
    </body>
</html>
