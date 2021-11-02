<!-- View stored in resources/views/greeting.blade.php -->

<html>
    <body>
        <h1>Signup User</h1>
        <form action="/signup" method="POST">
            
            <label>Nom:</label>
            <input type="text" name="nom" />
            <br />
            
            <label>Prenom:</label>
            <input type="text" name="prenom" />
             <br />
            
            <label>Email:</label>
            <input type="email" name="email" />
             <br />
            
            <label>Password:</label>
            <input type="password" name="password" />
             <br />
            
            <label>Ville:</label>
            <input type="text" name="ville" />
             <br />
            
            @csrf
            <button type="submit">Register an user</button>
        </form>
    
    </body>
</html>