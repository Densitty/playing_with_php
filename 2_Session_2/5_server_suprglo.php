<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Superglobal Variable</title>
</head>

<body>
  <h1>$_SERVER </h1>
  <div class="info">
    <p>The $_SERVER is used to get the information pertaining to the server of our application.</p>
    <pre>
      <?php
        echo "Server details are given below; <br/>";
        
        echo "Server Name ==> " . $_SERVER['SERVER_NAME'] . '<br/>';
        echo "Server Address ==> " . $_SERVER['SERVER_ADDR'] . '<br/>';
        echo "Server Port ==> " . $_SERVER['SERVER_PORT'] . '<br/>';
        echo "DOCUMENT Root ==> " . $_SERVER['DOCUMENT_ROOT'] . '<br/>';
      ?>
    </pre>
    <p>It can also be used used to get information about the document on the server.</p>
    <code>
    <?php
      echo "Page/Document details are given as below; <br/>";
      echo "PHP_SELF ==> " . $_SERVER['PHP_SELF'] . '<br/>'; 
      echo "SCRIPT_FILENAME ==> " . $_SERVER['SCRIPT_FILENAME'] . '<br/>'; 
      echo '<br/>'
      ?>
    </code>
    <p>It is also used to get information about the user, accessing our application from a remote location.</p>
    <pre>
      <?php
        echo "Remote details are given as below; <br/>";
        echo "REMOTE_ADDR ==> " . $_SERVER['REMOTE_ADDR'] . '<br/>';
        echo "REMOTE_PORT ==> " . $_SERVER['REMOTE_PORT'] . '<br/>';
        echo "REQUEST_URI ==> " . $_SERVER['REQUEST_URI'] . '<br/>';
        echo "QUERY_STRING ==> " . $_SERVER['QUERY_STRING'] . '<br/>';
        echo "REQUEST_METHOD ==> " . $_SERVER['REQUEST_METHOD'] . '<br/>';
        echo "REQUEST_TIME (in seconds)==> " . $_SERVER['REQUEST_TIME'] . '<br/>';
        echo "HTTP_REFERER ==> " . $_SERVER['HTTP_REFERER'] . '<br/>';
        echo "HTTP_USER_AGENT ==> " . $_SERVER['HTTP_USER_AGENT'] . '<br/>';
        echo '<br/>'
      ?>
    </pre>

  </div>
  <div class="server">
    <p>$_SERVER is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server. There is no guarantee that every web server will provide any of these; servers may omit some, or provide others not listed here.</p>

  </div>
</body>
</html>