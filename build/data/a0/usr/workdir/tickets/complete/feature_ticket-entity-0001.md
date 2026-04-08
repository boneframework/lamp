# Ticket: Implement Ticket Entity

**Type:** Feature

**Branch:** `feature/ticket-entity-0001`

**Assigned Agent:** Developer


## Description
Implement a new Doctrine ORM `Ticket` entity for the project. `delboy1978uk/bone-doctrine` is now installed, so we need to introduce the database model for tickets.

Following the `bone-doctrine` skill standards, the entity structure MUST exactly match this format:

```php
<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Bone\Doctrine\Traits\HasIdTrait;

#[ORM\Entity]
#[ORM\Table(name: 'tickets')]
class Ticket
{
    use HasIdTrait;

    #[ORM\Column(type: 'string', length: 255)]
    private string $title;

    #[ORM\Column(type: 'text')]
    private string $content;

    #[ORM\Column(type: 'string', length: 255)]
    private string $filename;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): void
    {
        $this->filename = $filename;
    }
}
```


## Acceptance Criteria
- [x] `src/Entity/Ticket.php` is created.
- [x] The class strictly follows the `bone-doctrine` entity structure (PHP 8 attributes, `HasIdTrait`).
- [x] Properties `$title`, `$content`, and `$filename` are properly mapped.
- [x] Getter and setter methods are fully implemented and strongly typed.


## Developer Instructions
⚠️ **MANDATORY:** You must check out the branch `feature/ticket-entity-0001` before starting work. All commits must be pushed to this branch.
