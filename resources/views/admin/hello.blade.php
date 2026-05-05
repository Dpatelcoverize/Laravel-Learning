<div>
    <h1>About Us</h1>
    <p>This is the about page of our Laravel application.</p>
    <form action="/about" method="GET">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <button type="submit">Submit</button>
</div>
