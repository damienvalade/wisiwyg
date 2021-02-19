<?php

namespace App\Controller;


use App\Entity\Comment;
use App\Form\FroalaType;
use App\Form\QuillType;
use App\Form\SummernoteType;
use App\Form\TinymceType;
use App\Form\TrumbowygType;
use App\Form\CKEditorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController
 * @package App\Controller
 * @Route("", name="form_")
 */
class TestController extends AbstractController
{
    /**
     * @Route("/summernote", name="summernote")
     */
    public function summernote(){
        $comment = new Comment();
        $form = $this->createForm(SummernoteType::class, $comment);

        return $this->render('demo/summernote.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/quill", name="quill")
     */
    public function quill(){
        $comment = new Comment();
        $form = $this->createForm(QuillType::class, $comment);

        return $this->render('demo/quill.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/trumbowyg", name="trumbowyg")
     */
    public function trumbowyg(): Response
    {
        $comment = new Comment();
        $form = $this->createForm(TrumbowygType::class, $comment);

        return $this->render('demo/trumbowyg.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/tinymce", name="tinymce")
     */
    public function tinymce(){
        $comment = new Comment();
        $form = $this->createForm(TinymceType::class, $comment);

        return $this->render('demo/tinymce.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/froala", name="froala")
     */
    public function froala(){
        $comment = new Comment();
        $form = $this->createForm(FroalaType::class, $comment);

        return $this->render('demo/froala.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/ckeditor", name="ckeditor")
     */
    public function ckeditor(){
        $comment = new Comment();
        $form = $this->createForm(CKEditorType::class, $comment);

        return $this->render('demo/ckeditor.html.twig', [
            'form' => $form->createView()
        ]);
    }
}