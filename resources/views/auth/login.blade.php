<!DOCTYPE html>
<html lang="en">
<head>
  <title>Belajar Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    html, body {
      height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      width: 100%;
      display: table;
      font-weight: 100;
      font-family: 'Lato';
    }

    .container {
      text-align: center;
      display: table-cell;
      vertical-align: middle;
    }

    .content {
      text-align: center;
      display: inline-block;
    }

    .title {
      font-size: 96px;
    }
  </style>

</head>
<body>
  <div class="container">
    <div class="content">
      <div class="title">Belajar Laravel</div>
    </div>

    <h2>Login</h2>

    <form class="form-inline">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
      <br>
      <br>
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
      <button type="submit" class="btn btn-primary glyphicon glyphicon-log-in"> Submit</button>
    </form>
  </div>



</body>
</html>
