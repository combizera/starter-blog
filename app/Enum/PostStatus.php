<?php

namespace App\Enum;

enum PostStatus: string
{
    case PUBLISH = 'publish';
    case DRAFT = 'draft';
    case PRIVATE = 'private';

    public function getLabel(): string
    {
        return match ($this) {
            self::PUBLISH => 'Publicado',
            self::DRAFT   => 'Rascunho',
            self::PRIVATE => 'Privado',
        };
    }
}
