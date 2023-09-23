<?php
class Signup extends Dbhandler {
  protected function setUser($username, $pwd, $email, $privilegeLevel=0, $attempt=3) {
    $sql = "INSERT INTO Members (Username, Password, Email, PrivilegeLevel, Attempt, RegisteredDate)
      VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = $this->conn()->prepare($sql);

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    // Bind parameters
    $stmt->bind_param("sssiis", $username, $hashedPwd, $email, $privilegeLevel, $attempt, $registerDate);

    // Set $registerDate
    $registerDate = date("Y-m-d");

    if (!$stmt->execute()) {
      $stmt->close();
      header("location: ../signup.php?error=stmtfailed");
      exit();
    }

    // Close the statement
    $stmt->close();

    // Get member id
    $sql = "SELECT MemberID FROM Members WHERE Username = ?";
    $stmt = $this->conn()->prepare($sql);

    if (!$stmt) {
      header("location: ../signup.php?error=stmtfailed");
      exit();
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
      $memberID = $row["MemberID"];

      // Create cart
      $sql = "INSERT INTO Orders (MemberID) VALUES (?)";
      $stmt = $this->conn()->prepare($sql);

      if (!$stmt) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
      }

      $stmt->bind_param("i", $memberID);
      $stmt->execute();
    }
  }

  protected function checkUser($username, $email) {
    $sql = "SELECT Username FROM Members WHERE Username = ? OR Email = ?";
    $stmt = $this->conn()->prepare($sql);

    if (!$stmt) {
      header("location: ../login.php?error=stmtfailed");
      exit();
    }

    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
      return $row;
    } else {
      return false;
    }
  }
}


?>