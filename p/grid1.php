<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JS Axios Demo</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><a href="http://codingthesmartway.com/courses/complete-javascript/" target="_blank">[ONLINE COURSE] - The Complete JavaScript Course: Build a Real-World Project</a></strong> +++ Master JavaScript with the most complete JavaScript course on the market! Includes projects, challenges, final exam, ES6 +++ You will gain a deep and true understanding of how JavaScript works behind the scenes. +++
      </div>
      <h1>JS Axios Demo <small>by CodingTheSmartWay.com</small></h1>
      <div class="jumbotron">
        <h1>Welcome To Axios</h1>
        <h4>This applications uses Axios. Axios is a Promise-based HTTP client for JavaScript which can be used in your front-end application and in your Node.js backend. </h4>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">GET Request</div>
        <div class="panel-body">
          <button class="btn btn-primary" onclick="performGetRequest1()">Get Todos</button>
          <button class="btn btn-warning" onclick="clearOutput()">Clear</button>
          <div class="panel-body" id="getResult1"></div>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">GET Request with Paramaters</div>
        <div class="panel-body">
          <input type="text" class="form-control" id="todoId" placeholder="Todo ID ..."/><br/>
          <button class="btn btn-primary" onclick="performGetRequest2()">Get Todos</button>
          <button class="btn btn-warning" onclick="clearOutput()">Clear</button>
          <div class="panel-body" id="getResult2"></div>
        </div>
      </div>
       <div class="panel panel-primary">
        <div class="panel-heading">POST Request</div>
        <div class="panel-body">
          <form class="form-inline" id="todoInputForm">
            <div class="form-group">
              <input type="text" class="form-control" id="todoTitle" placeholder="Todo Title ...">
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
          </form><br/>
          <button class="btn btn-warning" onclick="clearOutput()">Clear</button>
          <div class="panel-body" id="postResult"></div>
        </div>
      </div>
      <div class="footer">
        <p>&copy <a href="http://codingthesmartway.com" target="_blank">CodingTheSmartWay.com</a> | <a href="http://codingthesmartway.com/imprint" target="_blank">Imprint</a></p>
      </div>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>
