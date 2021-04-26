<?php

namespace App\Twig;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;
use App\Repository\CategorieRepository;

class AppExtension extends AbstractExtension {
    
    private $categorieRepository;

    public function __construct(CategorieRepository $categorieRepository){

        $this->categorieRepository = $categorieRepository;
    }

    public function getFunctions(){

        return [
            new TwigFunction('categorieNavBar', [$this, 'categorie']),
        ];
    }

    public function categorie():array {
        return $this->categorieRepository->findAll();
    }
    
}