<?php

namespace App\Controller;


use App\Entity\Comment;
use App\Form\Ckeditorv5Type;
use App\Form\FroalaType;
use App\Form\QuillType;
use App\Form\SummernoteType;
use App\Form\TinymceType;
use App\Form\TrumbowygType;
use App\Form\CkeditorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
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
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function summernote(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $comment = new Comment();
        $form = $this->createForm(SummernoteType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $comment->setLib($comment::WISIWYG_SUMMERNOTE);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('form_summernote');
        }

        return $this->render('demo/summernote.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/quill", name="quill")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function quill(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $comment = new Comment();
        $form = $this->createForm(QuillType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $comment->setLib($comment::WISIWYG_QUILL);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('form_quill');
        }

        return $this->render('demo/quill.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/trumbowyg", name="trumbowyg")
     * @param Request $request
     * @return Response
     */
    public function trumbowyg(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $comment = new Comment();
        $form = $this->createForm(TrumbowygType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $comment->setLib($comment::WISIWYG_TRUMBOWYG);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('form_trumbowyg');
        }

        return $this->render('demo/trumbowyg.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/tinymce", name="tinymce")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function tinymce(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $comment = new Comment();
        $form = $this->createForm(TinymceType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $comment->setLib($comment::WISIWYG_TINYMCE);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('form_tinymce');
        }

        return $this->render('demo/tinymce.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/froala", name="froala")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function froala(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $comment = new Comment();
        $form = $this->createForm(FroalaType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $comment->setLib($comment::WISIWYG_FROALA);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('form_froala');
        }

        return $this->render('demo/froala.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/ckeditor", name="ckeditor")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function ckeditor(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $comment = new Comment();
        $form = $this->createForm(CkeditorType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $comment->setLib($comment::WISIWYG_CKEDITOR);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('form_ckeditor');
        }

        return $this->render('demo/ckeditor.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/ckeditorv5", name="ckeditorv5")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function ckeditorv5(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $comment = new Comment();
        $form = $this->createForm(Ckeditorv5Type::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $comment->setLib($comment::WISIWYG_CKEDITORV5);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('form_ckeditorv5');
        }

        return $this->render('demo/ckeditorv5.html.twig', [
            'form' => $form->createView()
        ]);
    }
}