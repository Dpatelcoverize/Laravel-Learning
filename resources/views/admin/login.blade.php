<h1>Admin</h1>
<p>Welcome to the admin login page.</p>
<form action="/admin/login" method="POST">
    @csrf
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Login</button>