<?php 
 $a= 1;
 $a += 2;
 echo $a;

 echo'<hR>';
 $a= 4;
 $a *= 2;
 echo $a;

 echo'<hR>';
 $a= 4;
 $a /= 2;
 echo $a;


 echo'<hR>';
 $a= 32;
 $a -= 18    ;
 echo $a;

 // Exercício
 /* Crie uma variável que vai receber o valor 32
 e subtrair o valor 18. Escreva o resultado */


?>
 24 changes: 24 additions & 0 deletions24  
1_variaveis/4_operadores_relacionais.php
@@ -0,0 +1,24 @@
<?php
 echo ('oi' == 'oi'); //igual
 echo ' igual == <hr> ';
 echo ('1' == 1); //igual
 echo ' igual == <hr>';
 echo ('100' === 100 ); //identico tipo de variavel
 echo ' identico === <hr>';

 echo (5 <> 4);
 echo ' diferente <> ou != <hr>';

 echo (5 < 4);
 echo ' menor que < <hr>';

 echo (5 > 4);
 echo ' maior que < <hr>';

 echo (5 <= 4);
 echo ' menor ou igual <= <hr>';

 echo (5 > 4);
 echo ' maior ou igual >= <hr>';

?>