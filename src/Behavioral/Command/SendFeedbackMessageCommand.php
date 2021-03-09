<?php

namespace Fey\Patterns\Behavioral\Command;

class SendFeedbackMessageCommand implements CommandInterface
{
    private MailClient $mailClient;

    public function __construct(MailClient $mailClient)
    {
        $this->mailClient = $mailClient;
    }

    public function execute(): void
    {
        $message = new Message();
        $message->title = 'Feedback';
        $message->body = 'Message body';

        $this->mailClient->send($message);
    }
}