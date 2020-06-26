<div>
    <form method="post">
        Email: <input type="text" name="email"><br/>
        First name: <input type="text" name="first_name"><br/>
        Last name: <input type="text" name="last_name"><br/>
        Password: <input type="password" name="password"><br/>
        Repeat password: <input type="password" name="cpassword"><br/>
        <button type="submit" > Register </button>
    </form>
</div>
<style>
    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 2em;
        width: 40%;
        margin: 3em 25em;
    }

    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button{
        background-color: darkorange;
        border-radius: 15px;
        color: white;
        padding: 1em 1em;
        text-decoration: none;
        font-size: 16px;
    }
</style>