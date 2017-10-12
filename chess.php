<!DOCTYPE html>
<html>
    <head>
        <title>Chess PHP</title>
        <style>
            .black{
               background-color:black; 
                
            }
            
            .red{
               background-color:red; 
                
            }
            
               
        </style>
    </head>
    <body>

<?php
$rows = $_REQUEST['rows'];
$cols = $_REQUEST['cols'];

print('<table style="width:200px; height:200px; background-color:white; border:2px solid black;">');


$y=0;
    while($y < $rows)
        {       
        print('<tr>');
        $z = 0;
        while($z < $cols)
        {  if(($y + $z) % 2 == 0)
            { 
                print('<td class="black"; style="width:30px; height:30px; "></td>');
            }
            else
            {
                print('<td class="red"; style="width:30px; height:30px; "></td>');
            }
                $z++;
        
        }
    
        $y++;

        print('</tr>');   
    
        }
print('</table>');

?>
        
</body>
</html>        