<?php
declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\FolderCreatedMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class FolderCreatedHandler implements MessageHandlerInterface
{
    public function __invoke(FolderCreatedMessage $message): void
    {
        print_r([
            'id' => $message->getId(),
            'pathName' => $message->getName(),
            'fullPath' => $message->getFullPath()
        ]);
    }
}
