<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Users</title>
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
    </head>
    <body>
        <div><a href="index.php?action=add">Add new user</a></div>
        <table class="users" border="0" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><a href="?orderby=name">Name</a></th>
                    <th><a href="?orderby=phone">Phone</a></th>
                    <th><a href="?orderby=email">Email</a></th>
                    <th><a href="?orderby=address">Address</a></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($listUsers as $view): 
            ?>
                <tr>
                    <td><a href="index.php?action=view&id=<?php print $view->id; ?>"><?php print htmlentities($view->name); ?></a></td>
                    <td><?php print htmlentities($view->phone); ?></td>
                    <td><?php print htmlentities($view->email); ?></td>
                    <td><?php print htmlentities($view->address); ?></td>
                    <td><a href="index.php?action=delete&id=<?php print $view->id; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>

             


