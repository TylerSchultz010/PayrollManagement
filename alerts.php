<?php
session_start();
if (!isset($_SESSION["username"])) {

    header("location:index.php");
}
include 'header.php';
?>

<div class="container mt-4">
    <h1 class="mb-4">Website Updates</h1>

    <div class="alert alert-secondary" role="alert">
        <h4 class="alert-heading">Update - April 20, 2024</h4>
        <p>We have updated our contact form. Check the footer for more info.</p>
        <hr>
        <p class="mb-0">For any questions or concerns, please contact us at <a href="mailto:tnoudara@student.fitchburgstate.edu">tnoudara@student.fitchburgstate.edu</a>.</p>
    </div>
    
    <div class="alert alert-primary" role="alert">
        <h4 class="alert-heading">Update - April 15, 2024</h4>
        <p>We have updated our privacy policy and terms of service. Check the footer for more info.</p>
        <hr>
        <p class="mb-0">For any questions or concerns, please contact us at <a href="mailto:tnoudara@student.fitchburgstate.edu">tnoudara@student.fitchburgstate.edu</a>.</p>
    </div>

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Update - April 3, 2024</h4>
        <p>We have finished developing the time sheet form. Employee users should encounter the form once they log in.</p>
        <hr>
        <p class="mb-0">For any questions or concerns, please contact us at <a href="mailto:tnoudara@student.fitchburgstate.edu">tnoudara@student.fitchburgstate.edu</a>.</p>
    </div>

    <div class="alert alert-info" role="alert">
        <h4 class="alert-heading">Update - March 23, 2024</h4>
        <p>We have created a profile page accessible for both users. User can enter profile page to change specific information.</p>
        <hr>
        <p class="mb-0">For any questions or concerns, please contact us at <a href="mailto:tnoudara@student.fitchburgstate.edu">tnoudara@student.fitchburgstate.edu</a>.</p>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>
