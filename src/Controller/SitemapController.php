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
    /* -----------------------------------------------------------------------------
    le sitemap est un fichier qui vous permet de répertorier les pages de votre site 
    dans le but de fournir aux services des moteurs de recherche des informations 
    sur la structure du contenu du site. 
    https://www.sitemaps.org/protocol.html
    ------------------------------------------------------------------------------*/
    //_format -> Voir documentation symfony Router -> Format

    /**
     * @Route("/sitemap.xml", name="sitemap", defaults={"_format"="xml"})
     */
    public function index(
        Request $request, 
        ProjetRepository $projetRepository, 
        CategorieRepository $categorieRepository): Response
    {
        // Permet de récuperer l'URL
        $hostname = $request->getSchemeAndHttpHost();

        // Tableau permettant de recuperer les URL des pages main, contact, about
        $urls = [];
        $urls[] = ['loc' => $this->generateUrl('main')];
        $urls[] = ['loc' => $this->generateUrl('contact')];
        $urls[] = ['loc' => $this->generateUrl('about')];

        // Tableau permettant de récupérer les URL des pages de chaque projet en détail
        foreach($projetRepository->findAll() as $projet){
            $urls[] = ['loc' => $this->generateUrl('projet', ['id' => $projet->getId(), 'slug' =>$projet->getSlug()]),
                       'lastmod' => $projet->getdate()->format('Y-m-d')];
        }

        // Tableau permettant de récupérer les URL des catégories
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


