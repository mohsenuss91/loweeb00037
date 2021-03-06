<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\Picture;

class PictureData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $picture1 = new Picture();
        $picture1->setAlt('quad.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture1);
        
        $picture2 = new Picture();
        $picture2->setAlt('quad.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture2);
        
        $picture3 = new Picture();
        $picture3->setAlt('quad_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture3);
        
        $picture4 = new Picture();
        $picture4->setAlt('quad_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture4);
        
        $picture5 = new Picture();
        $picture5->setAlt('cerf_volant.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture5);
        
        $picture6 = new Picture();
        $picture6->setAlt('cerf_volant.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture6);
        
        $picture7 = new Picture();
        $picture7->setAlt('cerf_volant_cover.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture7);
        
        $picture8 = new Picture();
        $picture8->setAlt('cerf_volant_cover.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture8);
        
        $picture9 = new Picture();
        $picture9->setAlt('cover_balade_sous.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture9);
        
        $picture10 = new Picture();
        $picture10->setAlt('sortie_aventure_sous.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture10);
        
        $picture11 = new Picture();
        $picture11->setAlt('sortie_aventure_sous.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture11);
        
        $picture12 = new Picture();
        $picture12->setAlt('sortie_sousmarine_balade_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture12);
        
        $picture13 = new Picture();
        $picture13->setAlt('decolage.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture13);
        
        $picture14 = new Picture();
        $picture14->setAlt('decolage_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture14);
        
        $picture15 = new Picture();
        $picture15->setAlt('decolage.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture15);
        
        $picture16 = new Picture();
        $picture16->setAlt('decolage_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture16);
        
        $picture17 = new Picture();
        $picture17->setAlt('ico_vtt.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture17);
        
        $picture18 = new Picture();
        $picture18->setAlt('randonnee_vtt.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture18);
        
        $picture19 = new Picture();
        $picture19->setAlt('randonee_vtt_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture19);
        
        $picture20 = new Picture();
        $picture20->setAlt('randonee_vtt_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture20);
        
        $picture21 = new Picture();
        $picture21->setAlt('forma_1.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture21);
        
        $picture22 = new Picture();
        $picture22->setAlt('forma_1.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture22);
        
        $picture23 = new Picture();
        $picture23->setAlt('forma_2.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture23);
        
        $picture24 = new Picture();
        $picture24->setAlt('forma_2.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture24);
        
        $picture25 = new Picture();
        $picture25->setAlt('quad.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture25);
        
        $picture26 = new Picture();
        $picture26->setAlt('quad.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture26);
        
        $picture27 = new Picture();
        $picture27->setAlt('quad_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture27);
        
        $picture28 = new Picture();
        $picture28->setAlt('quad_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture28);
        
        $picture29 = new Picture();
        $picture29->setAlt('cerf_volant.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture29);
        
        $picture30 = new Picture();
        $picture30->setAlt('cerf_volant.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture30);
        
        $picture31 = new Picture();
        $picture31->setAlt('cerf_volant_cover.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture31);
        
        $picture32 = new Picture();
        $picture32->setAlt('cerf_volant_cover.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture32);
        
        $picture33 = new Picture();
        $picture33->setAlt('cover_balade_sous.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture33);
        
        $picture34 = new Picture();
        $picture34->setAlt('sortie_aventure_sous.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture34);
        
        $picture35 = new Picture();
        $picture35->setAlt('sortie_aventure_sous.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture35);
        
        $picture36 = new Picture();
        $picture36->setAlt('sortie_aventure_sous.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture36);
        
        $picture37 = new Picture();
        $picture37->setAlt('sortie_sousmarine_balade_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture37);
        
        $picture38 = new Picture();
        $picture38->setAlt('decolage.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture38);
        
        $picture39 = new Picture();
        $picture39->setAlt('decolage_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture39);
        
        $picture40 = new Picture();
        $picture40->setAlt('decolage.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture40);
        
        $picture41 = new Picture();
        $picture41->setAlt('decolage_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture41);
        
        $picture42 = new Picture();
        $picture42->setAlt('ico_vtt.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture42);
        
        $picture43 = new Picture();
        $picture43->setAlt('randonnee_vtt.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture43);
        
        $picture44 = new Picture();
        $picture44->setAlt('randonee_vtt_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture44);
        
        $picture45 = new Picture();
        $picture45->setAlt('randonee_vtt_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture45);
        
        $picture46 = new Picture();
        $picture46->setAlt('forma_1.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture46);
        
        $picture47 = new Picture();
        $picture47->setAlt('forma_1.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture47);
        
        $picture48 = new Picture();
        $picture48->setAlt('forma_2.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture48);
        
        $picture49 = new Picture();
        $picture49->setAlt('forma_2.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture49);
        
        $picture50 = new Picture();
        $picture50->setAlt('quad.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture50);
        
        $picture51 = new Picture();
        $picture51->setAlt('quad.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture51);
        
        $picture52 = new Picture();
        $picture52->setAlt('quad_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture52);
        
        $picture53 = new Picture();
        $picture53->setAlt('quad_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture53);
        
        $picture54 = new Picture();
        $picture54->setAlt('cerf_volant.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture54);
        
        $picture55 = new Picture();
        $picture55->setAlt('cerf_volant.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture55);
        
        $picture56 = new Picture();
        $picture56->setAlt('cerf_volant_cover.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture56);
        
        $picture57 = new Picture();
        $picture57->setAlt('cerf_volant_cover.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture57);
        
        $picture58 = new Picture();
        $picture58->setAlt('cover_balade_sous.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture58);
        
        $picture59 = new Picture();
        $picture59->setAlt('sortie_aventure_sous.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture59);
        
        $picture60 = new Picture();
        $picture60->setAlt('sortie_aventure_sous.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture60);
        
        $picture61 = new Picture();
        $picture61->setAlt('quad.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture61);
        
        $picture62 = new Picture();
        $picture62->setAlt('quad_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture62);
        
        $picture63 = new Picture();
        $picture63->setAlt('quad_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture63);
        
        $picture64 = new Picture();
        $picture64->setAlt('cerf_volant.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture64);
        
        $picture65 = new Picture();
        $picture65->setAlt('cerf_volant.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture65);
        
        $picture66 = new Picture();
        $picture66->setAlt('cerf_volant_cover.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture66);
        
        $picture67 = new Picture();
        $picture67->setAlt('cerf_volant_cover.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture67);
        
        $picture68 = new Picture();
        $picture68->setAlt('cover_balade_sous.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture68);
        
        $picture69 = new Picture();
        $picture69->setAlt('sortie_aventure_sous.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture69);
        
        $picture70 = new Picture();
        $picture70->setAlt('sortie_aventure_sous.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture70);
        
        $picture71 = new Picture();
        $picture71->setAlt('quand_sensation.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture71);
        
        $picture72 = new Picture();
        $picture72->setAlt('quad_sensation_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture72);
        
        $picture73 = new Picture();
        $picture73->setAlt('quand_sensation.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture73);
        
        $picture74 = new Picture();
        $picture74->setAlt('quad_sensation_couv.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture74);
        
        $picture75 = new Picture();
        $picture75->setAlt('quand_sensation.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture75);
        
        $picture76 = new Picture();
        $picture76->setAlt('quad_sensation_couv.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture76);
        
        $picture77 = new Picture();
        $picture77->setAlt('quand_sensation.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture77);
        
        $picture78 = new Picture();
        $picture78->setAlt('quad_sensation_couv.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture78);
        
        $picture79 = new Picture();
        $picture79->setAlt('jetski_discovery.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture79);
        
        $picture80 = new Picture();
        $picture80->setAlt('jetski_discovery_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture80);
        
        $picture81 = new Picture();
        $picture81->setAlt('jetski_discovery.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture81);
        
        $picture82 = new Picture();
        $picture82->setAlt('jetski_discovery_cover.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture82);
        
        $picture83 = new Picture();
        $picture83->setAlt('jetski_ride.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture83);
        
        $picture84 = new Picture();
        $picture84->setAlt('jetski_ride_couv.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture84);
        
        $picture85 = new Picture();
        $picture85->setAlt('jetski_ride.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture85);
        
        $picture86 = new Picture();
        $picture86->setAlt('jetski_ride_couv.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture86);
        
        $picture87 = new Picture();
        $picture87->setAlt('jetski_sensation.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture87);
        
        $picture88 = new Picture();
        $picture88->setAlt('jetski_sensation_couv.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture88);
        
        $picture89 = new Picture();
        $picture89->setAlt('jetski_sensation.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture89);
        
        $picture90 = new Picture();
        $picture90->setAlt('jetski_sensation_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture90);
        
        $picture91 = new Picture();
        $picture91->setAlt('jetski_trip.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture91);
        
        $picture92 = new Picture();
        $picture92->setAlt('jetski_trip_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture92);
        
        $picture93 = new Picture();
        $picture93->setAlt('jetski_trip.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture93);
        
        $picture94 = new Picture();
        $picture94->setAlt('jetski_trip_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture94);
        
        $picture95 = new Picture();
        $picture95->setAlt('jetski_evasion.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture95);
        
        $picture96 = new Picture();
        $picture96->setAlt('jetski_evasion_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture96);
        
        $picture97 = new Picture();
        $picture97->setAlt('jetski_evasion.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture97);
        
        $picture98 = new Picture();
        $picture98->setAlt('jetski_evasion_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture98);
        
        $picture99 = new Picture();
        $picture99->setAlt('bouee_sensation_vit.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture99);
        
        $picture100 = new Picture();
        $picture100->setAlt('bouee_aout.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture100);
        
        $picture101 = new Picture();
        $picture101->setAlt('bouee_tentation.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture101);
        
        $picture102 = new Picture();
        $picture102->setAlt('bouee_sensation_vit.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture102);
        
        $picture103 = new Picture();
        $picture103->setAlt('quad_trip.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture103);
        
        $picture104 = new Picture();
        $picture104->setAlt('quad_trip_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture104);
        
        $picture105 = new Picture();
        $picture105->setAlt('quad_trip.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture105);
        
        $picture106 = new Picture();
        $picture106->setAlt('quad_trip_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture106);
        
        $picture107 = new Picture();
        $picture107->setAlt('quad_trip_afterwork.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture107);
        
        $picture108 = new Picture();
        $picture108->setAlt('sortie_afterwork_couv.jpg')
                 ->setUrl('jpg');
        $manager->persist($picture108);
        
        $picture109 = new Picture();
        $picture109->setAlt('quad_trip_afterwork.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture109);
        
        $picture110 = new Picture();
        $picture110->setAlt('sortie_afterwork_couv.jpg')
                  ->setUrl('jpg');
        $manager->persist($picture110);
        
        $manager->flush();
        
        $this->addReference('picture1',   $picture1);
        $this->addReference('picture2',   $picture2);
        $this->addReference('picture3',   $picture3);
        $this->addReference('picture4',   $picture4);
        $this->addReference('picture5',   $picture5);
        $this->addReference('picture6',   $picture6);
        $this->addReference('picture7',   $picture7);
        $this->addReference('picture8',   $picture8);
        $this->addReference('picture9',   $picture9);
        $this->addReference('picture10',  $picture10);
        $this->addReference('picture11',  $picture11);
        $this->addReference('picture12',  $picture12);
        $this->addReference('picture13',  $picture13);
        $this->addReference('picture14',  $picture14);
        $this->addReference('picture15',  $picture15);
        $this->addReference('picture16',  $picture16);
        $this->addReference('picture17',  $picture17);
        $this->addReference('picture18',  $picture18);
        $this->addReference('picture19',  $picture19);
        $this->addReference('picture20',  $picture20);
        $this->addReference('picture21',  $picture21);
        $this->addReference('picture22',  $picture22);
        $this->addReference('picture23',  $picture23);
        $this->addReference('picture24',  $picture24);
        $this->addReference('picture25',  $picture25);
        $this->addReference('picture26',  $picture26);
        $this->addReference('picture27',  $picture27);
        $this->addReference('picture28',  $picture28);
        $this->addReference('picture29',  $picture29);
        $this->addReference('picture30',  $picture30);
        $this->addReference('picture31',  $picture31);
        $this->addReference('picture32',  $picture32);
        $this->addReference('picture33',  $picture33);
        $this->addReference('picture34',  $picture34);
        $this->addReference('picture35',  $picture35);
        $this->addReference('picture36',  $picture36);
        $this->addReference('picture37',  $picture37);
        $this->addReference('picture38',  $picture38);
        $this->addReference('picture39',  $picture39);
        $this->addReference('picture40',  $picture40);
        $this->addReference('picture41',  $picture41);
        $this->addReference('picture42',  $picture42);
        $this->addReference('picture43',  $picture43);
        $this->addReference('picture44',  $picture44);
        $this->addReference('picture45',  $picture45);
        $this->addReference('picture46',  $picture46);
        $this->addReference('picture47',  $picture47);
        $this->addReference('picture48',  $picture48);
        $this->addReference('picture49',  $picture49);
        $this->addReference('picture50',  $picture50);
        $this->addReference('picture51',  $picture51);
        $this->addReference('picture52',  $picture52);
        $this->addReference('picture53',  $picture53);
        $this->addReference('picture54',  $picture54);
        $this->addReference('picture55',  $picture55);
        $this->addReference('picture56',  $picture56);
        $this->addReference('picture57',  $picture57);
        $this->addReference('picture58',  $picture58);
        $this->addReference('picture59',  $picture59);
        $this->addReference('picture60',  $picture60);
        $this->addReference('picture61',  $picture61);
        $this->addReference('picture62',  $picture62);
        $this->addReference('picture63',  $picture63);
        $this->addReference('picture64',  $picture64);
        $this->addReference('picture65',  $picture65);
        $this->addReference('picture66',  $picture66);
        $this->addReference('picture67',  $picture67);
        $this->addReference('picture68',  $picture68);
        $this->addReference('picture69',  $picture69);
        $this->addReference('picture70',  $picture70);
        $this->addReference('picture71',  $picture71);
        $this->addReference('picture72',  $picture72);
        $this->addReference('picture73',  $picture73);
        $this->addReference('picture74',  $picture74);
        $this->addReference('picture75',  $picture75);
        $this->addReference('picture76',  $picture76);
        $this->addReference('picture77',  $picture77);
        $this->addReference('picture78',  $picture78);
        $this->addReference('picture79',  $picture39);
        $this->addReference('picture80',  $picture80);
        $this->addReference('picture81',  $picture81);
        $this->addReference('picture82',  $picture82);
        $this->addReference('picture83',  $picture83);
        $this->addReference('picture84',  $picture84);
        $this->addReference('picture85',  $picture85);
        $this->addReference('picture86',  $picture86);
        $this->addReference('picture87',  $picture87);
        $this->addReference('picture88',  $picture88);
        $this->addReference('picture89',  $picture89);
        $this->addReference('picture90',  $picture90);
        $this->addReference('picture91',  $picture91);
        $this->addReference('picture92',  $picture92);
        $this->addReference('picture93',  $picture93);
        $this->addReference('picture94',  $picture94);
        $this->addReference('picture95',  $picture95);
        $this->addReference('picture96',  $picture96);
        $this->addReference('picture97',  $picture97);
        $this->addReference('picture98',  $picture98);
        $this->addReference('picture99',  $picture99);
        $this->addReference('picture100', $picture100);
        $this->addReference('picture101', $picture101);
        $this->addReference('picture102', $picture102);
        $this->addReference('picture103', $picture103);
        $this->addReference('picture104', $picture104);
        $this->addReference('picture105', $picture105);
        $this->addReference('picture106', $picture106);
        $this->addReference('picture107', $picture107);
        $this->addReference('picture108', $picture108);
        $this->addReference('picture109', $picture109);
        $this->addReference('picture110', $picture110);
    }
    
    public function getOrder()
    {
        return 1; // l'ordre dans lequel les fichiers sont chargés
    }
}
