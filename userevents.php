<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Calendar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Add Event</h2>
    <form action="add_event.php" method="post">
        <label for="title">Event Title:</label>
        <input type="text" name="title" required>

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" required>

        <button type="submit">Add Event</button>
    </form>
</div>

<script src="scripts.js"></script>
</body>
</html>
