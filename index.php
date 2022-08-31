<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once('./database/db_connection.php');
    if(isset($_POST['btnSubmit'])){
        $name=$_POST['name'];
        if($_POST['name']=="" || $_POST['name']=null || empty($_POST['name']) ){
            echo "fill the task.";
        }else{
            $sql="INSERT INTO `todolist`( `name`) VALUES ('$name')";
            $query=mysqli_query($connection,$sql);
            if($query){
                echo "Data insert scuucessful....";
            }else{
                echo "Something wrong ....". mysqli_error();
            }
        }
    }
    
    ?>
    <fieldset>
        <legend>To do list</legend>
        <form method="POST">
            <div class="div">
               <input type="text" placeholder="daily task" name="name">
               <button name="btnSubmit">Submit</button>
            </div>
        </form>
    </fieldset>

    <fieldset>
        <legend>To do list data</legend>
        <table border="1">
            <thead><td>ID</td>
            <td>Task</td></thead>
            <tbody>
                <?php
                    $list="SELECT * FROM `todolist`";
                    $query=mysqli_query($connection,$list);
                    $totalrow=mysqli_fetch_row($query);
                    while($row=mysqli_fetch_assoc($query)){
                        echo "<tr>
                                <td>{$row['ID']}</td>
                                <td>{$row['name']}</td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>

    </fieldset>
</body>
</html>