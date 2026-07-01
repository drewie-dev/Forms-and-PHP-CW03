<?php
echo '<h1>Form input values</h1>';
echo '<p>Your Name: ' . htmlspecialchars($_POST['visitor_name'] ?? '') . '</p>';

$options = $_POST['options'] ?? [];
if (!is_array($options)) {
    // Defensive fallback in case the form still sends a single value
    $options = [$options];
}

echo '<p>Options: ' . htmlspecialchars(implode(', ', $options)) . '</p>';

echo '<h2>All Form Data</h2>';
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>