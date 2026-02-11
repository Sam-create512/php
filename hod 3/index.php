
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .color_b{
            background-color:black;
        }
        .color_r{
            background-color:red;
        }
        .color_be{
            background-color:blue;
        }
        .color_g{
            background-color:green;
        }        
    </style>
</head>
<body>
    <form method="post">
        <div>
            <label for="riadok">Riadkov</label>
            <input type="number" name="riadok">
        </div>
        <div>
            <label for="stlpec">Stlpcov</label>
            <input type="number" name="stlpec">
        </div>
        <div>
            <label for="farba">Farba</label>
            <select class="form-select" aria-label="Default select example" name="farba">
                <option selected>white</option>
                <option value="red">red</option>
                <option value="black">black</option>
                <option value="blue">blue</option>
                <option value="green">green</option>
            </select>
        </div>
        <button type="submit" class="send_button">Send</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $kontrola = 0;
        echo "<table border=1>";
            for($i=0;$i<$_POST["riadok"];$i++){
                echo "<tr>";
                for($a=0; $a<$_POST["stlpec"];$a++){
                    if($kontrola === 0){
                        if($_POST["farba"]=="red"){
                        echo "<td class=color_r>*</td>";  
                        }
                        elseif($_POST["farba"]=="black"){
                            echo "<td class=color_b>*</td>";  
                        }
                        elseif($_POST["farba"]=="green"){
                            echo "<td class=color_g>*</td>";  
                        }
                        elseif($_POST["farba"]=="blue"){
                            echo "<td class=color_be>*</td>";  
                        }
                        else{
                            echo "<td>*</td>";
                        }
                        $kontrola = 1;
                    }
                    else{
                        echo "<td>*</td>";
                        $kontrola = 0;
                    }
                }  
                    echo "</tr>";
            } 
        echo "</table>";
        print_r($_POST);
    }
    ?>
</body>
</html>