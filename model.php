<?php
   
   /**
   * 
   */
   class Database
   {
   	
   public	$server;
   public   $userName;
   public   $pass;
   public   $db;
   public   $connection;
   	function __construct($server,$userName,$pass,$db)
   	{
   		 $this->server=$server;
   		 $this->userName=$userName;
   		 $this->pass=$pass;
   		 $this->db=$db;
         $this->connection=mysqli_connect($this->server,$this->userName,$this->pass,$this->db);

         if($this->connection)
         {
         	echo "Connected";
         }else
         {
         	echo "Disconnect";
         }

   	}

      function insert($getTitle,$getText,$getDesc,$getFile,$getDate,$getStatus)
   {
      $sql="INSERT INTO news(news_title,news_text,news_desc,news_img,news_date,news_status) VALUES('$getTitle','$getText','$getDesc','$getFile','$getDate','$getStatus')";
      $query=mysqli_query($this->connection,$sql);
      if($query)
      { 

         header('Location:admin.php');
      }else
      {
         echo "data uninserted";
      }
   } 

      function delete($getId)
      {
         $sqlDelete="DELETE FROM news WHERE id='$getId'";
         $queryDelete=mysqli_query($this->connection,$sqlDelete);
         if($queryDelete)
         {
            header('Location:admin.php');
         } else
         {
            echo "undeleted";
         }
      }


   }
?>