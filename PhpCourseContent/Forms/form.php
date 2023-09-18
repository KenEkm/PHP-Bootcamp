<html>
  <head>
    <meta charset="utf-8" />
  </head>

  <body>
    <!-- use method Get oder Post -->
    <form method="POST" action="submit.php">
      <strong>Vorname:</strong>
      <input type="text" name="firstname" />
      <br />
      <strong>Nachname:</strong>
      <input type="text" name="surname" />
      <br />

      <strong>Tags - Elektronik:</strong>
      <input type="checkbox" name="tags[elektronik]" value="Elektronik" />
      <br />
      <strong>Tags - Obst:</strong>
      <input type="checkbox" name="tags[obst]" value="Obst" />
      <br />
      <strong>Tags - Programmierung:</strong>
      <input type="checkbox" name="tags[programmierung]" value="Programmierung" />
      <br />

      <input type="submit" />
    </form>
  </body>
</html>