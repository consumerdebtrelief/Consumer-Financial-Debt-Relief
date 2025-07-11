<?php
// save-lead.php
$timestamp = date('Y-m-d H:i:s');
$name = htmlspecialchars($_POST['firstName'] . ' ' . $_POST['lastName']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$debtAmount = htmlspecialchars($_POST['debtAmount']);
$monthlyIncome = htmlspecialchars($_POST['monthlyIncome']);
$creditScore = htmlspecialchars($_POST['creditScore']);

// Prepare data
$data = [
    $timestamp,
    $name,
    $email,
    $phone,
    $debtAmount,
    $monthlyIncome,
    $creditScore
];

// Save to CSV
$file = 'leads.csv';
$handle = fopen($file, 'a');
fputcsv($handle, $data);
fclose($handle);

// Redirect to thank you page
header('Location: thank-you.html');
exit;
?>