<?php 

namespace App\EventSubscriber;

use App\Entity\Photo;
use App\Entity\Projet;
use DateTime;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;

class EasyAdminSubscriber implements EventSubscriberInterface {

    private $slugger;
    private $security;

    public function __construct(SluggerInterface $slugger, Security $security)
    {
        $this->slugger = $slugger;
        $this->security = $security;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class =>['setDateAndUser'],
        ];
    }

    public function setDateAndUser(BeforeEntityPersistedEvent $event){

        $entity = $event->getEntityInstance();

        if (($entity instanceof Projet)) {
            $now = new DateTime('now');
            $entity->setDate($now);
    
            $user = $this->security->getUser();
            $entity->setUser($user);
        }

        return;
 
    }
}