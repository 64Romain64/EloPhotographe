<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProjetRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SitemapController extends AbstractController
{
    // _format -> Voir documentation symfony Router -> Format
    /**
     * @Route("/sitemap.xml", name="sitemap", defaults={"_format"="xml"})
     */
    public function index(Request $request, ProjetRepository $projetRepository, CategorieRepository $categorieRepository): Response
    {
        $hostname = $request->getSchemeAndHttpHost();

        // https://www.sitemaps.org/protocol.html
        $urls = [];
        $urls[] = ['loc' => $this->generateUrl('main')];
        $urls[] = ['loc' => $this->generateUrl('contact')];
        $urls[] = ['loc' => $this->generateUrl('about')];

        foreach($projetRepository->findAll() as $projet){
            $urls[] = ['loc' => $this->generateUrl('projet', ['id' => $projet->getId(), 'slug' =>$projet->getSlug()]),
                       'lastmod' => $projet->getdate()->format('Y-m-d')];
        }

        foreach($categorieRepository->findAll() as $projet){
            $urls[] = ['loc' => $this->generateUrl('professionnel', ['slug' => $projet->getSlug()])];
        }

        $response = new Response(
            $this->renderView('sitemap/index.html.twig', [
                'urls' => $urls,
                'hostname' => $hostname,
            ]), 
            200
        );

        $response->headers->set('Content-type', 'text/xml');
        
        return $response;
    }
}
