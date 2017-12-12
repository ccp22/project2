<div>
    <div id="logo-header">
        <h2 id="logo-head-id">Task-ToDos</h2>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="navbar-out-id">
        <?php
            if (isset($_SESSION['userID'])) {
                echo '
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=tasks&action=all">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=accounts&action=logout">Logout</a>
                </li>
            </ul>';
            }else {
                echo '
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=accounts&action=register">Register</a>
                </li>
            </ul>';
            }
        ?>
    </nav>
</div>