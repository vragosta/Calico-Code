<?php

  include("connection.php");

  $sql = "SELECT * FROM calicousers";

  $result = mysqli_query($link,$sql);

  echo '<center><p style="color: rgb(235, 235, 235); font-size: 1.5em;">Users Table:</p>';

  echo '<center><table border="2" style="background-color: rgb(235, 235, 235); border-radius: 5px;">
        <tr>
        <th><center>Email</center></th>
        <th><center>Username</center></th>
        <th><center>Password</center></th>
        <th><center>&nbsp;ID&nbsp;</center></th>
        <th><center>&nbsp;Admin&nbsp;</center></th>
        </tr>';

  while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><center>&nbsp;" . $row['email'] . "&nbsp;</center></td>";
    echo "<td><center>&nbsp;" . $row['username'] . "&nbsp;</center></td>";
    echo "<td><center>&nbsp;" . $row['password'] . "&nbsp;</center></td>";
    echo "<td><center>" . $row['id'] . "</center></td>";
    echo "<td><center>" . $row['admin'] . "</center></td>";
    echo "</tr>";
  }

  echo "</table></center>";

  /***********************************************/

  $sql = "SELECT * FROM userprofile";

  $result = mysqli_query($link,$sql);

  echo '<center><p style="color: rgb(235, 235, 235); font-size: 1.5em;">Profile Information Table:</p>';

  echo '<center><table border="2" style="background-color: rgb(235, 235, 235); border-radius: 5px;">
        <tr>
        <th><center>&nbsp;ID&nbsp;</center></th>
        <th><center>&nbsp;First Name&nbsp;</center></th>
        <th><center>&nbsp;Last Name&nbsp;</center></th>
        <th><center>&nbsp;Age&nbsp;</center></th>
        <th><center>&nbsp;City&nbsp;</center></th>
        <th><center>Birthday</center></th>
        </tr>';

  while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><center>&nbsp;" . $row['id'] . "&nbsp;</center></td>";
    echo "<td><center>&nbsp;" . $row['firstname'] . "&nbsp;</center></td>";
    echo "<td><center>&nbsp;" . $row['lastname'] . "&nbsp;</center></td>";
    echo "<td><center>" . $row['age'] . "</center></td>";
    echo "<td><center>" . $row['city'] . "</center></td>";
    echo "<td><center>" . $row['birthday'] . "</center></td>";
    echo "</tr>";
  }

  echo "</table></center>";

  /*********************************************/

  mysqli_close($link);

?>