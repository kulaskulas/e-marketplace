<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  * {
    font-family: Arial, sans-serif;
  }

  input, button {
    font-size: 16px;
  }
  
  * {
    box-sizing: border-box; /** Ensures padding doesn’t break width */
  }
  .container {
    display: grid;
    place-items: center;
    align-content : center;
    height: 100vh;
  }

  .login-form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    width: 300px;
    margin: 0 auto;
  }

  input[type="email"], input[type="password"] {
    width: 100%; 
    height : 2rem;
    padding: 0.5rem;
    margin-top: 0.5rem;
    border-radius : 5px;
    border: 1px solid #000000;
  }

  input[type="email"]:focus,
  input[type="password"]:focus {
    outline: none;
  }

  button {
    padding: 0.5rem;
    border-radius : 5px;
    border: none;
    background-color: #007BFF;
    color: white;
    cursor: pointer;
  }
</style>  
<body>
  <main class="container">
    <h1>Login Page</h1>
    <form action="/login" method="post" class="login-form">
      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>
    </form>
    
  </main>
</body>
</html>