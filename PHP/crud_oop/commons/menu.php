<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <h2 class="navbar-brand"><?php echo $username; ?>,</h2>
        <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
        <li class="nav-item"><a href="password.php" class="nav-link">Password</a></li>
        <li class="nav-item"><a href="users.php" class="nav-link">Users</a></li>
        <li class="nav-item"><a href="delete.php" class="nav-link">Delete</a></li>
        <li class="nav-item"><a href="logs.php" class="nav-link">Logs</a></li>
        <li class="nav-item"><a  data-bs-toggle="modal" data-bs-target="#myModal" class="nav-link">Logout</a></li>
    </ul>
</nav>

<!-- Logout Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Logout</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Are you sure to Logout ?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="logout.php" class="btn btn-primary">Yes</a>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
      </div>

    </div>
  </div>
</div>