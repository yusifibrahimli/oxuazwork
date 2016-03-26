 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

          <table class="highlight">
          <h1 class="adminH">Admin Page</h1>
           <a class="btn-floating btn-large waves-effect waves-light red" href="addNews.php"><i class="material-icons">add</i></a>
             <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>IMAGE</th>
                <th>DESCRIPTION</th>
                <th>TEXT</th>
                <th>STATUS</th>
                <th>DATE</th>
                <th>DELETE</th>
                <th>UPDATE</th>
                <th>SEND</th>
             </tr>

             <?php
                include "model.php";
                $dataAdmin=new Database("localhost","root","","lesson15");
                $sqlSelect="SELECT * FROM news";
                $querySelect=mysqli_query($dataAdmin->connection,$sqlSelect);
                while($row=mysqli_fetch_assoc($querySelect))
                {
                  echo "<tr>";
                     foreach ($row as  $value) {
                          echo "<td>".$value."</td>";
                     }
                     echo "<td><a href='delete.php?id=".$row['id']."'>delete</a></td>";
                     echo "<td><a href='#'>update</a></td>";
                     echo "<td>
                               <form>
                                  <input type='radio' name='newsSend' value='radio1'>visible<br>
                                  <input type='radio' name='newsSend' value='radio2'>unvisible<br>
                                  <input type='submit' name='submit' value='Send'/>

                              </form>
                           </td>";
                  echo "</tr>";
                }
             ?>
          </table>  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>