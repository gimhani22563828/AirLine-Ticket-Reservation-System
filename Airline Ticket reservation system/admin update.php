<?php

$con = new mysqli('localhost', 'root', '', 'airline');

if (!$con) {
    die(mysqli_error($con));
}

if (isset($_POST["update"])) {
    $firstName = isset($_POST["first_name"]) ? $_POST["first_name"] : "";
    $lastName = isset($_POST["last_name"]) ? $_POST["last_name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $phoneNumber = isset($_POST["phone_number"]) ? $_POST["phone_number"] : "";
    $company = isset($_POST["company"]) ? $_POST["company"] : "";
    $designation = isset($_POST["designation"]) ? $_POST["designation"] : "";
    $userId = isset($_POST["user_id"]) ? $_POST["user_id"] : ""; // Define and assign a value to $userId
    
    // Prepare and execute SQL query
    $stmt = $con->prepare("UPDATE users SET first_name=?, last_name=?, email=?, phone_number=?, company=?, designation=? WHERE id=?");
    $stmt->bind_param("ssssssi", $firstName, $lastName, $email, $phoneNumber, $company, $designation, $userId);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        echo "Profile updated successfully!";
    } else {
        echo "Error updating profile.";
    }

    $stmt->close();
}

// Delete profile
if (isset($_POST["delete"])) {
    $userId = isset($_POST["user_id"]) ? $_POST["user_id"] : ""; // Define and assign a value to $userId

    // Prepare and execute SQL query
    $stmt = $con->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        echo "Profile deleted successfully!";
    } else {
        echo "Error deleting profile.";
    }

    $stmt->close();
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Admin profile</title>
<link rel="stylesheet" href="style/passenger update.css">
</head>
<body>
  <section class="py-5 my-5">
    <div class="container">
      <h1 class="mb-5">Admin Profile </h1>
      <div class="d-flex">
        <div class="left-column">
          <div class="bg-white shadow rounded-lg d-block d-sm-flex justify-content-space-between">
            <div class="profile-tab-nav border-right">
              <br>
            </div>
          </div>
        </div>
        <div class="right-column">
          <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
              <h3 class="mb-4">Update Account Settings</h3>
              <form class="row" action="admin update.php" method="POST">
                <div class="col-md-12">
                  <div class="form-row">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="first_name">
                    </div>
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="last_name">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                      <label>Phone number</label>
                      <input type="text" class="form-control" name="phone_number">
                    </div>
                    <div class="form-group">
                      <label>Company</label>
                      <input type="text" class="form-control" name="company">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                      <label>Designation</label>
                      <input type="text" class="form-control" name="designation">
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <button class="btn btn-primary" name="update">Update My Profile</button>
                <button class="btn btn-danger" name="delete">Delete My Profile</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
