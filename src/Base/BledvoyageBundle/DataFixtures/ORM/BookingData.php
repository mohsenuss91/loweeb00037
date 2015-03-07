<?php

namespace Base\BledvoyageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Base\BledvoyageBundle\Entity\Booking;

class BookingData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $booking1 = new Booking();
        $booking1->setUser($this->getReference('user1'));
        $booking1->setSortie($this->getReference('sortie1'));
        $booking1->setDateReserver(new \DateTime('2017-01-01'));
        $booking1->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking1->setNombre(2);
        $booking1->setPromo('');
        $booking1->setConfirmer('0');
        $booking1->setNote('Téléphone fermé');
        $booking1->setCreneau('');
        $booking1->setAvis('0');
        $booking1->setParticipation('');
        $booking1->setFacture('0');
        $booking1->setAcompte('0');
        $booking1->setMandat('');
        $booking1->setVirement('');
        $booking1->setCheque('');
        $booking1->setEspece('');
        $booking1->setTicketPromo('');
        $booking1->setPromoApayer('');
        $booking1->setLieuFormation('');
        $booking1->setModeChoisi('');
        $booking1->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking1->setHeureRdv('');
        $booking1->setLieuRdv('');
        $booking1->setIp('127.0.0.1');
        $booking1->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking1);
        
        $booking2 = new Booking();
        $booking2->setUser($this->getReference('user2'));
        $booking2->setSortie($this->getReference('sortie1'));
        $booking2->setDateReserver(new \DateTime('2017-01-01'));
        $booking2->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking2->setNombre(2);
        $booking2->setPromo('');
        $booking2->setConfirmer('1');
        $booking2->setNote('Téléphone fermé');
        $booking2->setCreneau('');
        $booking2->setAvis('0');
        $booking2->setParticipation('');
        $booking2->setFacture('0');
        $booking2->setAcompte('0');
        $booking2->setMandat('');
        $booking2->setVirement('');
        $booking2->setCheque('');
        $booking2->setEspece('');
        $booking2->setTicketPromo('');
        $booking2->setPromoApayer('');
        $booking2->setLieuFormation('');
        $booking2->setModeChoisi('');
        $booking2->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking2->setHeureRdv('');
        $booking2->setLieuRdv('');
        $booking2->setIp('127.0.0.1');
        $booking2->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking2);
        
        $booking3 = new Booking();
        $booking3->setUser($this->getReference('user3'));
        $booking3->setSortie($this->getReference('sortie1'));
        $booking3->setDateReserver(new \DateTime('2017-01-01'));
        $booking3->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking3->setNombre(2);
        $booking3->setPromo('');
        $booking3->setConfirmer('1');
        $booking3->setNote('Téléphone fermé');
        $booking3->setCreneau('');
        $booking3->setAvis('0');
        $booking3->setParticipation('');
        $booking3->setFacture('0');
        $booking3->setAcompte('0');
        $booking3->setMandat('');
        $booking3->setVirement('');
        $booking3->setCheque('');
        $booking3->setEspece('');
        $booking3->setTicketPromo('');
        $booking3->setPromoApayer('');
        $booking3->setLieuFormation('');
        $booking3->setModeChoisi('');
        $booking3->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking3->setHeureRdv('');
        $booking3->setLieuRdv('');
        $booking3->setIp('127.0.0.1');
        $booking3->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking3);
        
        $booking4 = new Booking();
        $booking4->setUser($this->getReference('user4'));
        $booking4->setSortie($this->getReference('sortie1'));
        $booking4->setDateReserver(new \DateTime('2017-01-01'));
        $booking4->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking4->setNombre(2);
        $booking4->setPromo('');
        $booking4->setConfirmer('1');
        $booking4->setNote('Téléphone fermé');
        $booking4->setCreneau('');
        $booking4->setAvis('1');
        $booking4->setParticipation('');
        $booking4->setFacture('0');
        $booking4->setAcompte('1200');
        $booking4->setMandat('');
        $booking4->setVirement('');
        $booking4->setCheque('');
        $booking4->setEspece('');
        $booking4->setTicketPromo('');
        $booking4->setPromoApayer('');
        $booking4->setLieuFormation('');
        $booking4->setModeChoisi('');
        $booking4->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking4->setHeureRdv('');
        $booking4->setLieuRdv('');
        $booking4->setIp('127.0.0.1');
        $booking4->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking4);
        
        $booking5 = new Booking();
        $booking5->setUser($this->getReference('user5'));
        $booking5->setSortie($this->getReference('sortie1'));
        $booking5->setDateReserver(new \DateTime('2017-01-01'));
        $booking5->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking5->setNombre(2);
        $booking5->setPromo('');
        $booking5->setConfirmer('1');
        $booking5->setNote('Téléphone fermé');
        $booking5->setCreneau('');
        $booking5->setAvis('1');
        $booking5->setParticipation('');
        $booking5->setFacture('0');
        $booking5->setAcompte('0');
        $booking5->setMandat('');
        $booking5->setVirement('');
        $booking5->setCheque('');
        $booking5->setEspece('');
        $booking5->setTicketPromo('');
        $booking5->setPromoApayer('');
        $booking5->setLieuFormation('');
        $booking5->setModeChoisi('');
        $booking5->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking5->setHeureRdv('');
        $booking5->setLieuRdv('');
        $booking5->setIp('127.0.0.1');
        $booking5->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking5);
        
        $booking6 = new Booking();
        $booking6->setUser($this->getReference('user6'));
        $booking6->setSortie($this->getReference('sortie2'));
        $booking6->setDateReserver(new \DateTime('2017-01-01'));
        $booking6->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking6->setNombre(2);
        $booking6->setPromo('');
        $booking6->setConfirmer('0');
        $booking6->setNote('Téléphone fermé');
        $booking6->setCreneau('');
        $booking6->setAvis('0');
        $booking6->setParticipation('');
        $booking6->setFacture('0');
        $booking6->setAcompte('0');
        $booking6->setMandat('');
        $booking6->setVirement('');
        $booking6->setCheque('');
        $booking6->setEspece('');
        $booking6->setTicketPromo('');
        $booking6->setPromoApayer('');
        $booking6->setLieuFormation('');
        $booking6->setModeChoisi('');
        $booking6->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking6->setHeureRdv('');
        $booking6->setLieuRdv('');
        $booking6->setIp('127.0.0.1');
        $booking6->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking6);
        
        $booking7 = new Booking();
        $booking7->setUser($this->getReference('user7'));
        $booking7->setSortie($this->getReference('sortie2'));
        $booking7->setDateReserver(new \DateTime('2017-01-01'));
        $booking7->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking7->setNombre(2);
        $booking7->setPromo('');
        $booking7->setConfirmer('0');
        $booking7->setNote('Téléphone fermé');
        $booking7->setCreneau('');
        $booking7->setAvis('0');
        $booking7->setParticipation('');
        $booking7->setFacture('0');
        $booking7->setAcompte('0');
        $booking7->setMandat('');
        $booking7->setVirement('');
        $booking7->setCheque('');
        $booking7->setEspece('');
        $booking7->setTicketPromo('');
        $booking7->setPromoApayer('');
        $booking7->setLieuFormation('');
        $booking7->setModeChoisi('');
        $booking7->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking7->setHeureRdv('');
        $booking7->setLieuRdv('');
        $booking7->setIp('127.0.0.1');
        $booking7->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking7);
        
        $booking8 = new Booking();
        $booking8->setUser($this->getReference('user8'));
        $booking8->setSortie($this->getReference('sortie3'));
        $booking8->setDateReserver(new \DateTime('2017-01-01'));
        $booking8->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking8->setNombre(2);
        $booking8->setPromo('');
        $booking8->setConfirmer('0');
        $booking8->setNote('Téléphone fermé');
        $booking8->setCreneau('');
        $booking8->setAvis('0');
        $booking8->setParticipation('');
        $booking8->setFacture('0');
        $booking8->setAcompte('0');
        $booking8->setMandat('');
        $booking8->setVirement('');
        $booking8->setCheque('');
        $booking8->setEspece('');
        $booking8->setTicketPromo('');
        $booking8->setPromoApayer('');
        $booking8->setLieuFormation('');
        $booking8->setModeChoisi('');
        $booking8->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking8->setHeureRdv('');
        $booking8->setLieuRdv('');
        $booking8->setIp('127.0.0.1');
        $booking8->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking8);
        
        $booking9 = new Booking();
        $booking9->setUser($this->getReference('user9'));
        $booking9->setSortie($this->getReference('sortie4'));
        $booking9->setDateReserver(new \DateTime('2017-01-01'));
        $booking9->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking9->setNombre(2);
        $booking9->setPromo('');
        $booking9->setConfirmer('0');
        $booking9->setNote('Téléphone fermé');
        $booking9->setCreneau('');
        $booking9->setAvis('0');
        $booking9->setParticipation('');
        $booking9->setFacture('0');
        $booking9->setAcompte('0');
        $booking9->setMandat('');
        $booking9->setVirement('');
        $booking9->setCheque('');
        $booking9->setEspece('');
        $booking9->setTicketPromo('');
        $booking9->setPromoApayer('');
        $booking9->setLieuFormation('');
        $booking9->setModeChoisi('');
        $booking9->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking9->setHeureRdv('');
        $booking9->setLieuRdv('');
        $booking9->setIp('127.0.0.1');
        $booking9->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking9);
        
        $booking10 = new Booking();
        $booking10->setUser($this->getReference('user10'));
        $booking10->setSortie($this->getReference('sortie5'));
        $booking10->setDateReserver(new \DateTime('2017-01-01'));
        $booking10->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking10->setNombre(2);
        $booking10->setPromo('');
        $booking10->setConfirmer('0');
        $booking10->setNote('Téléphone fermé');
        $booking10->setCreneau('');
        $booking10->setAvis('0');
        $booking10->setParticipation('');
        $booking10->setFacture('0');
        $booking10->setAcompte('0');
        $booking10->setMandat('');
        $booking10->setVirement('');
        $booking10->setCheque('');
        $booking10->setEspece('');
        $booking10->setTicketPromo('');
        $booking10->setPromoApayer('');
        $booking10->setLieuFormation('');
        $booking10->setModeChoisi('');
        $booking10->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking10->setHeureRdv('');
        $booking10->setLieuRdv('');
        $booking10->setIp('127.0.0.1');
        $booking10->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking10);
        
        $booking11 = new Booking();
        $booking11->setUser($this->getReference('user11'));
        $booking11->setSortie($this->getReference('sortie5'));
        $booking11->setDateReserver(new \DateTime('2017-01-01'));
        $booking11->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking11->setNombre(2);
        $booking11->setPromo('');
        $booking11->setConfirmer('0');
        $booking11->setNote('Téléphone fermé');
        $booking11->setCreneau('');
        $booking11->setAvis('0');
        $booking11->setParticipation('');
        $booking11->setFacture('0');
        $booking11->setAcompte('0');
        $booking11->setMandat('');
        $booking11->setVirement('');
        $booking11->setCheque('');
        $booking11->setEspece('');
        $booking11->setTicketPromo('');
        $booking11->setPromoApayer('');
        $booking11->setLieuFormation('');
        $booking11->setModeChoisi('');
        $booking11->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking11->setHeureRdv('');
        $booking11->setLieuRdv('');
        $booking11->setIp('127.0.0.1');
        $booking11->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking11);
        
        $booking12 = new Booking();
        $booking12->setUser($this->getReference('user12'));
        $booking12->setSortie($this->getReference('sortie2'));
        $booking12->setDateReserver(new \DateTime('2017-01-01'));
        $booking12->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking12->setNombre(2);
        $booking12->setPromo('');
        $booking12->setConfirmer('0');
        $booking12->setNote('Téléphone fermé');
        $booking12->setCreneau('');
        $booking12->setAvis('0');
        $booking12->setParticipation('');
        $booking12->setFacture('0');
        $booking12->setAcompte('0');
        $booking12->setMandat('');
        $booking12->setVirement('');
        $booking12->setCheque('');
        $booking12->setEspece('');
        $booking12->setTicketPromo('');
        $booking12->setPromoApayer('');
        $booking12->setLieuFormation('');
        $booking12->setModeChoisi('');
        $booking12->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking12->setHeureRdv('');
        $booking12->setLieuRdv('');
        $booking12->setIp('127.0.0.1');
        $booking12->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking12);
        
        $booking13 = new Booking();
        $booking13->setUser($this->getReference('user13'));
        $booking13->setSortie($this->getReference('sortie3'));
        $booking13->setDateReserver(new \DateTime('2017-01-01'));
        $booking13->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking13->setNombre(2);
        $booking13->setPromo('');
        $booking13->setConfirmer('0');
        $booking13->setNote('Téléphone fermé');
        $booking13->setCreneau('');
        $booking13->setAvis('0');
        $booking13->setParticipation('');
        $booking13->setFacture('0');
        $booking13->setAcompte('0');
        $booking13->setMandat('');
        $booking13->setVirement('');
        $booking13->setCheque('');
        $booking13->setEspece('');
        $booking13->setTicketPromo('');
        $booking13->setPromoApayer('');
        $booking13->setLieuFormation('');
        $booking13->setModeChoisi('');
        $booking13->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking13->setHeureRdv('');
        $booking13->setLieuRdv('');
        $booking13->setIp('127.0.0.1');
        $booking13->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking13);
        
        $booking14 = new Booking();
        $booking14->setUser($this->getReference('user14'));
        $booking14->setSortie($this->getReference('sortie4'));
        $booking14->setDateReserver(new \DateTime('2017-01-01'));
        $booking14->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking14->setNombre(2);
        $booking14->setPromo('');
        $booking14->setConfirmer('0');
        $booking14->setNote('Téléphone fermé');
        $booking14->setCreneau('');
        $booking14->setAvis('0');
        $booking14->setParticipation('');
        $booking14->setFacture('0');
        $booking14->setAcompte('0');
        $booking14->setMandat('');
        $booking14->setVirement('');
        $booking14->setCheque('');
        $booking14->setEspece('');
        $booking14->setTicketPromo('');
        $booking14->setPromoApayer('');
        $booking14->setLieuFormation('');
        $booking14->setModeChoisi('');
        $booking14->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking14->setHeureRdv('');
        $booking14->setLieuRdv('');
        $booking14->setIp('127.0.0.1');
        $booking14->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking14);
        
        $booking15 = new Booking();
        $booking15->setUser($this->getReference('user15'));
        $booking15->setSortie($this->getReference('sortie5'));
        $booking15->setDateReserver(new \DateTime('2017-01-01'));
        $booking15->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking15->setNombre(2);
        $booking15->setPromo('');
        $booking15->setConfirmer('0');
        $booking15->setNote('Téléphone fermé');
        $booking15->setCreneau('');
        $booking15->setAvis('0');
        $booking15->setParticipation('');
        $booking15->setFacture('0');
        $booking15->setAcompte('0');
        $booking15->setMandat('');
        $booking15->setVirement('');
        $booking15->setCheque('');
        $booking15->setEspece('');
        $booking15->setTicketPromo('');
        $booking15->setPromoApayer('');
        $booking15->setLieuFormation('');
        $booking15->setModeChoisi('');
        $booking15->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking15->setHeureRdv('');
        $booking15->setLieuRdv('');
        $booking15->setIp('127.0.0.1');
        $booking15->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking15);
        
        $booking16 = new Booking();
        $booking16->setUser($this->getReference('user1'));
        $booking16->setSortie($this->getReference('sortie4'));
        $booking16->setDateReserver(new \DateTime('2017-01-01'));
        $booking16->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking16->setNombre(2);
        $booking16->setPromo('');
        $booking16->setConfirmer('0');
        $booking16->setNote('Téléphone fermé');
        $booking16->setCreneau('');
        $booking16->setAvis('0');
        $booking16->setParticipation('');
        $booking16->setFacture('0');
        $booking16->setAcompte('0');
        $booking16->setMandat('');
        $booking16->setVirement('');
        $booking16->setCheque('');
        $booking16->setEspece('');
        $booking16->setTicketPromo('');
        $booking16->setPromoApayer('');
        $booking16->setLieuFormation('');
        $booking16->setModeChoisi('');
        $booking16->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking16->setHeureRdv('');
        $booking16->setLieuRdv('');
        $booking16->setIp('127.0.0.1');
        $booking16->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking16);
        
        $booking17 = new Booking();
        $booking17->setUser($this->getReference('user3'));
        $booking17->setSortie($this->getReference('sortie3'));
        $booking17->setDateReserver(new \DateTime('2017-01-01'));
        $booking17->setDateConfirmer(new \DateTime('2017-01-01'));
        $booking17->setNombre(2);
        $booking17->setPromo('');
        $booking17->setConfirmer('0');
        $booking17->setNote('Téléphone fermé');
        $booking17->setCreneau('');
        $booking17->setAvis('0');
        $booking17->setParticipation('');
        $booking17->setFacture('0');
        $booking17->setAcompte('0');
        $booking17->setMandat('');
        $booking17->setVirement('');
        $booking17->setCheque('');
        $booking17->setEspece('');
        $booking17->setTicketPromo('');
        $booking17->setPromoApayer('');
        $booking17->setLieuFormation('');
        $booking17->setModeChoisi('');
        $booking17->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking17->setHeureRdv('');
        $booking17->setLieuRdv('');
        $booking17->setIp('127.0.0.1');
        $booking17->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking17);
        
        $booking18 = new Booking();
        $booking18->setUser($this->getReference('user6'));
        $booking18->setSortie($this->getReference('sortie4'));
        $booking18->setDateReserver(new \DateTime('2017-01-01 00:00:00'));
        $booking18->setDateConfirmer(new \DateTime('2017-01-01 00:00:00'));
        $booking18->setNombre(2);
        $booking18->setPromo('');
        $booking18->setConfirmer('0');
        $booking18->setNote('Téléphone fermé');
        $booking18->setCreneau('');
        $booking18->setAvis('0');
        $booking18->setParticipation('');
        $booking18->setFacture('0');
        $booking18->setAcompte('0');
        $booking18->setMandat('');
        $booking18->setVirement('');
        $booking18->setCheque('');
        $booking18->setEspece('');
        $booking18->setTicketPromo('');
        $booking18->setPromoApayer('');
        $booking18->setLieuFormation('');
        $booking18->setModeChoisi('');
        $booking18->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking18->setHeureRdv('');
        $booking18->setLieuRdv('');
        $booking18->setIp('127.0.0.1');
        $booking18->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking18);
        
        $booking19 = new Booking();
        $booking19->setUser($this->getReference('user16'));
        $booking19->setSortie($this->getReference('sortie1'));
        $booking19->setDateReserver(new \DateTime('2017-01-01 00:00:00'));
        $booking19->setDateConfirmer(new \DateTime('2017-01-01 00:00:00'));
        $booking19->setNombre(2);
        $booking19->setPromo('');
        $booking19->setConfirmer('0');
        $booking19->setNote('Téléphone fermé');
        $booking19->setCreneau('');
        $booking19->setAvis('0');
        $booking19->setParticipation('');
        $booking19->setFacture('0');
        $booking19->setAcompte('0');
        $booking19->setMandat('');
        $booking19->setVirement('');
        $booking19->setCheque('');
        $booking19->setEspece('');
        $booking19->setTicketPromo('');
        $booking19->setPromoApayer('');
        $booking19->setLieuFormation('');
        $booking19->setModeChoisi('');
        $booking19->setDateRdv(new \DateTime('0000-00-00 00:00:00'));
        $booking19->setHeureRdv('');
        $booking19->setLieuRdv('');
        $booking19->setIp('127.0.0.1');
        $booking19->setDateTime(new \DateTime('2015-01-01 00:00:00'));
        $manager->persist($booking19);
        
        $manager->flush();
        
        $this->addReference('booking1',  $booking1);
    }
    
    public function getOrder()
    {
        return 6; // l'ordre dans lequel les fichiers sont chargés
    }
}
