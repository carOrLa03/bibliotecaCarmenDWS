<?php
namespace biblioteca\App\Utils;
use biblioteca\App\exceptions\AppException;
use biblioteca\Core\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class MyMail{
    private Swift_Mailer $mailer;

    /**
     * @throws AppException
     */
    public function __construct(){
        $config = App::get('config')['mail'];
        // Create the Transport
        $transport =(new Swift_SmtpTransport($config['smtp_server'], $config['smtp_port'], $config['smtp_security']))
            ->setUsername($config['email'])
            ->setPassword($config['pass']);
        $this->mailer = new Swift_Mailer($transport);
    }

    /**
     * @throws AppException
     */
    public function send($asunto, $mail, $nombre, $mensaje): void
    {
        $config = App::get('config')['mail'];
        // Create a message
        $message = (new Swift_Message($asunto))
            ->setFrom([$config['email'] => $config['username']])
            ->addTo($mail, $nombre)
            ->setBody($mensaje);
        $this->mailer->send($message);
    }
}