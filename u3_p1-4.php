<?php
// Handle form submissions and cookie actions before any HTML output
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create Cookie and Redirect using Header
    if (isset($_POST['action']) && $_POST['action'] == 'create') {
        $username = htmlspecialchars($_POST['username']);
        $preference = htmlspecialchars($_POST['preference']);

        // Set cookies (expire in 1 hour)
        setcookie("user", $username, time() + 3600, "/");
        setcookie("theme", $preference, time() + 3600, "/");

        // Use cookie with header redirection
        header("Location: " . $_SERVER['PHP_SELF'] . "?status=created");
        exit();
    }

    // Delete Cookie
    if (isset($_POST['action']) && $_POST['action'] == 'delete') {
        // Set expiration time to the past to delete them
        setcookie("user", "", time() - 3600, "/");
        setcookie("theme", "", time() - 3600, "/");

        header("Location: " . $_SERVER['PHP_SELF'] . "?status=deleted");
        exit();
    }
}

// Check status messages from redirects
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'created') {
        $message = "Cookies created successfully and page redirected via header!";
    } elseif ($_GET['status'] == 'deleted') {
        $message = "Cookies deleted successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Combined PHP Cookie Operations</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .section { margin-bottom: 25px; padding: 15px; border: 1px solid #ccc; border-radius: 5px; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>

    <h2>PHP Cookie Operations Manager</h2>

    <?php if (!empty($message)): ?>
        <p class="success"><?php echo $message; ?></p>
    <?php endif; ?>

    <!-- Read Cookie Section -->
    <div class="section">
        <h3>Read Cookie Status</h3>
        <p>
            <?php
if (isset($_COOKIE['user']) || isset($_COOKIE['theme'])) {
    echo "<strong>Active Cookies Found:</strong><br>";
    if (isset($_COOKIE['user'])) {
        echo "- Username: " . htmlspecialchars($_COOKIE['user']) . "<br>";
    }
    if (isset($_COOKIE['theme'])) {
        echo "- Theme Preference: " . htmlspecialchars($_COOKIE['theme']) . "<br>";
    }
} else {
    echo "No active cookies found.";
}
?>
        </p>
    </div>

    <!-- Create Cookie & Header Form -->
    <div class="section">
        <h3>Create Cookie (with Header Redirection)</h3>
        <form method="POST" action="">
            <input type="hidden" name="action" value="create">

            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="preference">Theme Preference:</label><br>
            <select name="preference" id="preference">
                <option value="Dark Mode">Dark Mode</option>
                <option value="Light Mode">Light Mode</option>
            </select><br><br>

            <button type="submit">Create Cookie & Redirect</button>
        </form>
    </div>

    <!-- Delete Cookie Section -->
    <div class="section">
        <h3>Delete Cookie</h3>
        <form method="POST" action="">
            <input type="hidden" name="action" value="delete">
            <button type="submit" style="color: red;">Delete All Cookies</button>
        </form>
    </div>

</body>
</html>