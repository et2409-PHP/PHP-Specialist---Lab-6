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
        {   
            print('<td style="width:30px; height:30px; background-color:black;"></td>');
            //print('<td style="width:30px; height:30px; background-color:red;"></td>');
            $z++;
            
        }
    
        $y++;

        print('</tr>');   
print('</table>');
    
        }

?>