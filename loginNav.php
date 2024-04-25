<?php
  if (isset($_SESSION['username']))
  {
    echo
    "
    <li><a href='queries.php'><b>Queries</b></a></li>
      <li><a href='gallary1.php'><b>Manage Gallary</b></a></li>
      <li><a href='editalbum.php'><b>Edit Album & <br>Videography</b></a></li>
      <li><a href='index.php' onclick='logout_account()'><b> Logout </b></a></li>
      <li><a href='#' data-toggle='modal' data-target='#reservationModal'><b> Accept Reservations </b></a></li>
      <li><a href='#' data-toggle='modal' data-target='#reservedModal'><b> Reserved </b></a></li>
    ";
  }
  else
  {
    echo
    "
      <li><a href='viewres.php'><b>View Reservation </b></a></li>
      <li><a href='contact.php' data-toggle='modal' data-target='#registerModal'><b> Contact Us </b></a></li>
      <li><a href='#' data-toggle='modal' data-target='#loginModal'><b> Admin Login </b></a></li>
    ";
  }

?>
