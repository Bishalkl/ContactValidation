<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beautiful Contact Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(135deg, #74ebd5, #acb6e5);
    }

    .form-container {
      background: #ffffff;
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .form-container h2 {
      margin-bottom: 20px;
      color: #333;
      text-align: center;
    }

    .form-container .form-group {
      margin-bottom: 15px;
    }

    .form-container label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #555;
    }

    .form-container input,
    .form-container textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
      transition: border-color 0.3s;
    }

    .form-container input:focus,
    .form-container textarea:focus {
      border-color: #74ebd5;
      outline: none;
    }

    .form-container textarea {
      resize: none;
      height: 100px;
    }

    .form-container button {
      width: 100%;
      padding: 10px;
      background: linear-gradient(135deg, #74ebd5, #acb6e5);
      border: none;
      border-radius: 5px;
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .form-container button:hover {
      background: linear-gradient(135deg, #acb6e5, #74ebd5);
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Contact Us</h2>
    <form action="ValidationHandling.php" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Your Message" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>