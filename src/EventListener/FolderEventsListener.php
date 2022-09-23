<?php
declare(strict_types=1);

namespace App\EventListener;

use App\Message\FolderCreatedMessage;
use Pimcore\Event\Model\DocumentEvent;
use Pimcore\Model\Document\Folder;
use Symfony\Component\Messenger\MessageBusInterface;

class FolderEventsListener
{
    private MessageBusInterface $messageBus;

    public function __construct(MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    public function onFolderCreated(DocumentEvent $documentEvent): void
    {
        if ($documentEvent->getDocument()->getType() === 'folder') {
            /** @var Folder $folder */
            $folder = $documentEvent->getDocument();
            $this->messageBus->dispatch(new FolderCreatedMessage($folder));
        }
    }
}
