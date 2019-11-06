<?php


require("../../models/Session.php");

$classSession->setFlash('Valider','success');


header('Location:index.php');