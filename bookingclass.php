<?php
require_once("app_db.php");

class booking extends database
{
    public function bookapp($fname,$lname,$dr,$day,$hour)
    {
      $sql = "INSERT INTO patients_appointments ($fname,$lname,$dr,$day,$hour) VALUES (?,?,?,?,?)";
      $stmt = mysqli_prepare($this->conn, $sql);
      mysqli_stmt_bind_param($stmt, "sssii", $fname,$lname,$dr,$day,$hour);
      if (mysqli_stmt_execute($stmt))
      {
          echo "Record updated successfully";
          return 1;
      }
      else 
      {
          echo "Error Adding record: " . $this->conn->error; 
          return 0;
      } 
    }

}
