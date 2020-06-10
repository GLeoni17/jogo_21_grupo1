<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style>
            body{
                text-align:center;
            }
            table{
                margin:30px;
                font-size:16px;
                font-weight:bold;
                font-family:arial;
            }
            td{
                padding:20px;
                text-align:center;
                color:white;
            }
            .cartas{
                float:left;
                height:200px;
                display:none;
            }
        </style>
        
        <script>
            placar(){

            }
        </script>

    </head>
    <body>
    <?php
        for($i=1; $i<=13; $i++){
            for($j=1; $j<=4; $j++){
                $baralho[$i][$j]=$i.$j;
            }
        }
            echo "<div id='cartas'>";
            for($i=1; $i<=52; $i++){
                do{
                    $r1=rand(1, 13);
                    $r2=rand(1, 4);
                    if($baralho[$r1][$r2]!=0){
                        echo "<div id=p".$i." class='cartas'> <img width=150px height=200px src='img/".$r1.$r2.".png' /> </div>";
                        $baralho[$r1][$r2]=0;
                        break;
                    }
                }while(true);
                
            }
            echo "</div>";
            
    ?>
    </body>
</html>