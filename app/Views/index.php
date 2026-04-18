<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
  }

  .layout {
    display: flex;
    height: 100vh;
  }

  /* Sidebar */
  .sidebar {
    width: 220px;
    background: #2c3e50;
    color: white;
    padding: 20px;
  }

  .sidebar h2 {
    margin-bottom: 20px;
  }

  .sidebar a {
    display: block;
    color: white;
    text-decoration: none;
    padding: 10px;
    margin-bottom: 5px;
    border-radius: 5px;
  }

  .sidebar a:hover {
    background: #34495e;
  }

  .logout-form button {
    width: 100%;
    padding: 10px;
    background: transparent;
    color: white;
    border: none;
    text-align: left;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
  }

  .logout-form button:hover {
    background: #e74c3c;
  }

  /* Main content */
  .main {
    flex: 1;
    padding: 20px;
    background: #f4f4f4;
  }
</style>

<div class="layout">
  <aside class="sidebar">
    <h2>My App</h2>
    <a href="#">Dashboard</a>
    <a href="#">Users</a>
    <a href="#">Settings</a>
    <form action="/logout" method="post" class="logout-form">
      <button type="submit">Logout</button>
    </form>
  </aside>

  <main class="main">
    <h1>Dashboard</h1>
    <p>Main content goes here...</p>
  </main>
</div>