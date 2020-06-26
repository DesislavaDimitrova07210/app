<div class="form">
    <div class = "title">Book attributes:</div>
    <form method="post">
    Name: <input type="text" name="name"><br/>
    Description: <input type="text" name="description"><br/>
    ISBN: <input type="text" name="isbn"><br/>
    Image:<input type="file" id="file" name="file"><br><br>
    <button type="submit" > Create book </button>
    </form>
</div>

<style>
    .form{
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 2em;
        width: 40%;
        margin: 3em 25em;
    }
    .title{
        border-radius: 5px;
        background-color: orangered;
        padding: 1em;
        width: 20%;
        margin: 0 0 1em 0;
    }
    input[type=text] {
        width: 100%;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
    }
    input[type=file]{
        margin-top: 1em;
    }

    button{
        background-color: darkgreen;
        border-radius: 15px;
        color: white;
        padding: 1em 1em;
        text-decoration: none;
        font-size: 16px;
    }
</style>