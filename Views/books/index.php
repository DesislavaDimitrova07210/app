<div class = "button_management">

<a href="add.php"><img border="0" alt="del" src="images\add.png" width="20em" height="20em"></a>
<a href="logout.php"><img border="0" alt="del" src="images\logout.png" width="20em" height="20em"></a>
</div>
<table>
    <thead>
        <tr>
            <td>Name</td>
            <td>ISBN</td>
            <td>Description</td>
            <td>Image</td>
            <td>Manage</td>
        </tr>
    </thead>
    <tbody>
    <?php


    /**
     * @var \Book[] $data
     */

            foreach($data as $book){
             ?>   <tr>
                    <td><?=$book->getName() ?></td>
                    <td><?=$book->getIsbn() ?></td>
                    <td><?=$book->getDescription() ?></td>
                    <td><?=$book->getImage() ?></td>
                    <td><a href="delete.php?id=<?=$book->getId() ?>"><img border="0" alt="del" src="images\delete.png" width="20em" height="20em"></a>
                        <a href="favorite.php?id=<?=$book->getId() ?>"><img border="0" alt="add" src="images\favorite.png" width="20em" height="20em"></a></td>
                </tr>

       <?php
            }

    ?>

    </tbody>
</table>




<style>
    body {
        background-color: lightyellow;
        padding: 3em;
    }
    table{
        border: 2px solid black;
        background-color: #EEEEEE;
        text-align: center;
        margin: 2em 6em;
        width: 80%;
        border-radius: 5px;
    }
    td{
        font-size: 19px;
        color: black;
    }
    tr:nth-child(even) {
        background-color: lightgray;
    }
    thead{
        font-size: 21px;
        font-weight: bold;
        background: grey;
        border-top: 1px solid #444444;
    }

    .button_management {
        margin-left: 5em;
    }

    .button_management>a{
        background-color: darkorange;
        border-radius: 15px;
        color: white;
        padding: 1em 1em;
        margin:  1em;
        text-decoration: none;
        font-size: 16px;
    }
</style>
