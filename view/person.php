<?php include('controller/person.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage Person</title>
</head>
<body>

<!--- Affichage des trois instances créées dans le controller -->

    <ul>
        <li><H1><?php echo strtoupper($Person1->getName());?></H1>
        <P><?php echo $Person1->getFirstName();?></P>
        <P><?php echo $Person1->getAge();?></P>
        </li>
        <li><H1><?php echo strtoupper($Person2->getName());?></H1>
        <P><?php echo $Person2->getFirstName();?></P>
        <P><?php echo $Person2->getAge();?></P>
        </li>
        <li><H1><?php echo strtoupper($Person3->getName());?></H1>
        <P><?php echo $Person3->getFirstName();?></P>
        <P><?php echo $Person3->getAge();?></P>
        </li>
    </ul>
</body>
</html>