<?php

namespace App\Controller;

use App\Form\LogbookFileUploadType;
use App\Processor\Logbook\FileLogbookProcessor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function index(): Response
    {
        $fileForm = $this->createForm(LogbookFileUploadType::class, null, [
            'action' => $this->generateUrl('logbook_upload')
        ]);

        return $this->render('home/index.html.twig', [
            'form' => $fileForm->createView(),
        ]);
    }

    /**
     * @Route("/logbook/upload", methods={"POST"}, name="logbook_upload")
     *
     * @param Request $request
     * @return Response
     */
    public function processUpload(Request $request, FileLogbookProcessor $processor): Response
    {
        $fileForm = $this->createForm(LogbookFileUploadType::class);
        $fileForm->handleRequest($request);

        if ($fileForm->isSubmitted() && $fileForm->isValid()) {
            $processor->processFiles($fileForm->get('files')->getData());
        }


        return new Response('<html><body></body></html>');
    }
}
