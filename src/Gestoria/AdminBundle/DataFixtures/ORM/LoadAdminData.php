<?php

namespace Gestoria\AdminBundle\Datafixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Gestoria\AdminBundle\Entity\User;

class LoadAdminData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {


        $admin = new User();
        $admin->setName('Administrador');
        $admin->setLastName('del Sistema');
        $admin->setEmail('naarnet10@gmail.com');
        $admin->setPassword('ronaldinho');
        $admin->addRole($this->getReference('ROLE_SUPER_ADMIN'));
        $admin->setVerified(true);

        $this->addReference('admin', $admin);

        $manager->persist($admin);

        $manager->flush();


    }

    public function getOrder() {
        return 2;
        
    }

//put your code here
}
