<<<<<<< HEAD
<?php
/**
 * Created by PhpStorm.
 * User: thiago.pereira
 * Date: 15/09/2016
 * Time: 16:03
 */

try
 {
   //open the database
   $db = new PDO('sqlite:bd_web.sqlite');

   //create the database
   $db->exec("CREATE TABLE Dogs (Id INTEGER PRIMARY KEY, Breed TEXT, Name TEXT, Age INTEGER)");

   //insert some data...
   $db->exec("INSERT INTO Dogs (Breed, Name, Age) VALUES ('Labrador', 'Tank', 2);".
              "INSERT INTO Dogs (Breed, Name, Age) VALUES ('Husky', 'Glacier', 7); " .
              "INSERT INTO Dogs (Breed, Name, Age) VALUES ('Golden-Doodle', 'Ellie', 4);");

   //now output the data to a simple html table...
   print "<table border=1>";
   print "<tr><td>Id</td><td>Breed</td><td>Name</td><td>Age</td></tr>";
   $result = $db->query('SELECT * FROM Dogs');
   foreach($result as $row)
   {
     print "<tr><td>".$row['Id']."</td>";
     print "<td>".$row['Breed']."</td>";
     print "<td>".$row['Name']."</td>";
     print "<td>".$row['Age']."</td></tr>";
   }
   print "</table>";

   // close the database connection
   $db = NULL;
 }
 catch(PDOException $e)
 {
   print 'Exception : '.$e->getMessage();
 }
=======
<?php
/**
 * Created by PhpStorm.
 * User: thiago.pereira
 * Date: 15/09/2016
 * Time: 16:03
 */

try
 {
   //open the database
   $db = new PDO('sqlite:bd_web.sqlite');

   //create the database
   $db->exec("CREATE TABLE Dogs (Id INTEGER PRIMARY KEY, Breed TEXT, Name TEXT, Age INTEGER)");

   //insert some data...
   $db->exec("INSERT INTO Dogs (Breed, Name, Age) VALUES ('Labrador', 'Tank', 2);".
              "INSERT INTO Dogs (Breed, Name, Age) VALUES ('Husky', 'Glacier', 7); " .
              "INSERT INTO Dogs (Breed, Name, Age) VALUES ('Golden-Doodle', 'Ellie', 4);");

   //now output the data to a simple html table...
   print "<table border=1>";
   print "<tr><td>Id</td><td>Breed</td><td>Name</td><td>Age</td></tr>";
   $result = $db->query('SELECT * FROM Dogs');
   foreach($result as $row)
   {
     print "<tr><td>".$row['Id']."</td>";
     print "<td>".$row['Breed']."</td>";
     print "<td>".$row['Name']."</td>";
     print "<td>".$row['Age']."</td></tr>";
   }
   print "</table>";

   // close the database connection
   $db = NULL;
 }
 catch(PDOException $e)
 {
   print 'Exception : '.$e->getMessage();
 }
>>>>>>> bf37c02dc3ce0ea063ed6b696a00ea85a7f1ba22
