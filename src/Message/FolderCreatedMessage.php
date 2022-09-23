<?php
declare(strict_types=1);

namespace App\Message;

use Pimcore\Model\Document\Folder;

class FolderCreatedMessage
{
    private int $id;
    private ?string $name;
    private string $fullPath;

    public function __construct(Folder $folder)
    {
        $this->id = $folder->getId();
        $this->name = $folder->getKey();
        $this->fullPath = $folder->getFullPath();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getFullPath(): string
    {
        return $this->fullPath;
    }
}
