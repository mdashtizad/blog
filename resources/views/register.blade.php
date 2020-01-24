<html>

<head>
    <title>register user</title>
</head>
<body>
    <form action="register" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name">

        <label for="email">Email:</label>
        <input type="text" name="email">

        <label for="password">Password:</label>
        <input type="text" name="password">

        <input type="submit">
    </form>
</body>

</html>