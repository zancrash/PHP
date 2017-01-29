<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>To do</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Shadows+Into+Light+Two" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="list">
      <h1 class="header">To Do.</h1>

      <ul>
        <li><span class="item">Pick up books</span></li>
        <li><span class="item">Learn PHP</span></li>
      </ul>

      <form class="item-add" action="add.php" method="post">
        <input type="text" name="name" placeholder="Type a new item here" class="input" autocomplete="off" required>
        <input type="submit" value="Add" class="submit">
      </form>
    </div>
  </body>
</html>
