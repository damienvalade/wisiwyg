<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
{
    public const WISIWYG_QUILL = 'Quill';
    public const WISIWYG_TRUMBOWYG = 'Trumbowyg';
    public const WISIWYG_SUMMERNOTE = 'Summernote';
    public const WISIWYG_TINYMCE = 'TinyMCE';
    public const WISIWYG_FROALA = 'Froala';
    public const WISIWYG_CKEDITOR = 'CKEditor';
    public const WISIWYG_CKEDITORV5 = 'CKEditor v5';

    public const PODCAST_STATUSES = [
        self::WISIWYG_QUILL,
        self::WISIWYG_TRUMBOWYG,
        self::WISIWYG_SUMMERNOTE,
        self::WISIWYG_TINYMCE,
        self::WISIWYG_FROALA,
        self::WISIWYG_CKEDITOR,
        self::WISIWYG_CKEDITORV5,
    ];


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lib;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLib(): ?string
    {
        return $this->lib;
    }

    public function setLib(string $lib): self
    {
        $this->lib = $lib;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
