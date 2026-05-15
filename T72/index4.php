<?php
    $tab = array(
            1=>'biały',
            2=>'czarny',
            3=>'niebieski',
            4=>'zielony',
    );
    foreach($tab as $x)
    {
        echo "$x <br>";
    }
    echo "------------------<br>";
    foreach($tab as $k1 =>$x) {
        echo "tab[$k1]=$x <br>";
    }

/*
biały
czarny
niebieski
zielony
------------------
tab[1]=biały
tab[2]=czarny
tab[3]=niebieski
tab[4]=zielony
*/
