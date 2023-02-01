<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br><br>
    <h1 style="text-align: center;">Daily Challenge</h1>
    <div class="container">
    <table width="400px" height ="30px"; border ="2px">

        <?php
        
            for($row=1;$row<=8;$row++)
                {
                    echo "<tr>";

                    for($col=1;$col<=8;$col++)
                        {
                            $somrowcol=$row+$col;

                            if($somrowcol%2==0)
                        {
                            echo "<td height=50px width=50px bgcolor=#FFFFFF></td>";
                        }
                        else
                        {
                            echo "<td height=50px width=50px bgcolor=#000000></td>";
                        }
                        }
                    echo "</tr>";
                }
                    
        ?>
    </table>
    </div>
</body>
</html>