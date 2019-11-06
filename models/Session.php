<?php


class Session
{

    public function __construct()
    {
        session_start();
    }

    public function setFlash(string $message, $type = 'danger')
    {
        $_SESSION['flash']  =   array(
            'message' => $message,
            'type'    => $type
            
        );
    }

    public function flash()
    {
        if(isset($_SESSION['flash']))
        { ?>
            <div class="alert alert-<?php echo $_SESSION['flash']['type']; ?>" role="alert">
            <?php echo $_SESSION['flash']['message']; ?>
            </div>
            <?php
            //Supprimer le message on l'affiche qu'une fois apres l'action
            unset($_SESSION['flash']);
        }
    }

}
$classSession = new Session();
