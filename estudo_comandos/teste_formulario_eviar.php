<html>
 
   <head>
      <title>Index</title>
      <style type="text/css">
         div {
            width: 400px;
            margin: 30px auto;
            border: 1px solid #999;
            padding: 25px;
            border-radius: 7px;
            box-shadow: 2px 2px 3px 1px #999;
         }
      </style>
   </head>
 
   <?php
   function teste() {
   ?>
      <div>
         <p>
            <?php echo "Foi digitado \"" . $_POST['texto'] . "\""; ?>
         </p>
      </div>
   <?php   
   }
   ?>   
 
   <body>
      <div>
         <form action="" method="POST">
            <input type="text" name="texto" />
            <br />   
            <input type="submit" value="Enviar..." />
         </form>
      </div>
      <?php
      if ( isset( $_GET['a'] ) && $_GET['a'] == 'ok' && $_POST['texto'] != '' ) {
         teste();
      }
      ?>
   </body>
 
</html>