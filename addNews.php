<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <h1 class="adminH">Create News</h1>
     <form action="add.php" method="POST">
       <div class="boxInput">
          Title:
          <input type="text" name="titleName"></input>
          Text:
          <input type="text" name="textName"></input>
          Description:
          <input type="text" name="descName"></input>
          Image:
          <input type="file" name="imgName"></input>
          Date:
          <input type="date" name="dateNews"></input>
         </div> 
         Status:
         <select name="statusNews">
               <option value="1">Visible</option>
               <option value="0">Unvisible</option>

         </select>
        <input type="submit" name="submit" value="Add"/>
     </form>
</body>
</html>