<?php

namespace App\DataFixtures;

use App\Entity\Token;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class UserFixtures
 * @package AppBundle\DataFixtures\ORM
 */
class UserFixtures extends Fixture implements ContainerAwareInterface, OrderedFixtureInterface
{

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        foreach ($this->getUsersData() as $reference => $userData) {
            // Use Fos User manager to create user
            /** @var \App\Entity\User $user */
            $user = $userManager->createUser();

            // Set his attributes
            $user->setEmail($userData['email']);
            $user->setPlainPassword($userData['plainPassword']);
            $user->setEnabled($userData['status']);
            $user->setUsername($userData['name']);
            $user->addRole($userData['role']);

            // Aaaaand here we go !
            $userManager->updateUser($user);

        }
        $manager->flush();
    }

    /**
     * Get raw user data for user objects generation
     *
     * @return array
     */
    private function getUsersData()
    {
        $usersData = [
            // The last of us.
          'user_admin' => [
            'email' => 'martin@admin.com',
            'plainPassword' => '9Bz7ghUyPYmw5ErM',
            'status' => true,
            'name' => 'admin',
            'role' => 'ROLE_ADMIN',
          ],
        ];

        return $usersData;
    }

    /**
     * @param ContainerInterface|null $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function getOrder()
    {
        return FixturesOrder::getOrder(self::class);
    }
}
