<?php 

declare(strict_types=1);

namespace App\Repository;

use App\Entity\User;
use App\Repository\BaseRepository;
use App\Exception\User\UserNotFoundException;



class UserRepository extends BaseRepository
{
    protected static function entityClass() :string
    {
        return User::class;
    }

    public function findOneByEmailOrFail(string $email) :User
    {
        if (null === $user = $this->objectRepository->findOneBy(['email' => $email])) {
            throw UserNotFoundException::fromEmail($email);
        }

        return $user;
    }


    public function save(User $user) :void
    {
       $this->saveEntity($user);
    }

    public function remove(User $user) :void
    {
       $this->removeEntity($user);
    }
}