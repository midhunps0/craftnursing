<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <h2>Contact Form Submission</h2>
    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Address:</strong> {{ $formData['address'] }}</p>
    <p><strong>Highest qualification:</strong> {{ $formData['qualification'] }}</p>
    <p><strong>Subject:</strong> {{ $formData['subject'] }}</p>
    <p><strong>Mark(Percentage):</strong> {{ $formData['mark'] }}%</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Contact No:</strong> {{ $formData['contact'] }}</p>
</div>
</body>
</html>