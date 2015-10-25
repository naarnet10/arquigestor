<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadRoleData
 *
 * @author root
 */

namespace Gestoria\AdminBundle\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Gestoria\AdminBundle\Entity\Role;
use Doctrine\Common\Persistence\ObjectManager;

class LoadRoleData extends AbstractFixture implements OrderedFixtureInterface{
    public function getOrder() {
        return 1;
    }

    public function load(ObjectManager $manager) {
        
        //Administrador general de arquigestor
        $role = new Role();
        $role->setName('ROLE_SUPER_ADMIN');
        $role->setDescription('Administrador general de Arquigestor');
        $manager->persist($role);

        $this->addReference('ROLE_SUPER_ADMIN',$role);
        $manager->flush();
        
    }

//put your code here
}
