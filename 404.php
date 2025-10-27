<?php
// Optional: set HTTP response header
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Page Not Found</title>
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", Arial, sans-serif;
      background: #f4f6f8;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
    }
    h1 {
      font-size: 100px;
      margin: 0;
      color: #007bff;
    }
    h2 {
      font-size: 28px;
      margin-top: 10px;
      color: #444;
    }
    p {
      font-size: 16px;
      color: #666;
      margin: 15px 0 25px;
    }
    a {
      display: inline-block;
      text-decoration: none;
      color: #fff;
      background: #007bff;
      padding: 10px 25px;
      border-radius: 6px;
      transition: 0.3s;
    }
    a:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <h1>404</h1>
  <h2>Page Not Found</h2>
  <p>Oops! The page you're looking for doesn’t exist or may have been moved.</p>
  <a href="/">Return to Homepage</a>
</body>
</html>
