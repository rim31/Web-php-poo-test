<?php

Question_1
==========
je pense aue la faille provient du _POST

- protection :
Pour empecher que l'utilisateur injecte un "1 or 1 union ..."
il faudrait faire des requete prepare avec
pdo->prepare
pdo->execute

Question_2
==========
 je pense qu'il s'agit de la methode _POST utilise
 faille xss : possibilte d'injecter un script
 <script>alert('coucou')</script>

protection :
- utliser : htmlspecialchars($_POST['search']);

 ?>
