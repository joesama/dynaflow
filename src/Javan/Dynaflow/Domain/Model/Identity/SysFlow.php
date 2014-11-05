<?php namespace Javan\Dynaflow\Domain\Model\Identity;

use Javan\Dynaflow\Domain\RecordsEvents;
use Doctrine\ORM\Mapping as ORM;
use Javan\Dynaflow\Domain\AggregateRoot;
use Doctrine\Common\Collections\ArrayCollection;

use Javan\Dynaflow\Domain\Model\Groups\Group;

/**
 * @ORM\Entity
 * @ORM\Table(name="sys_flow")
 */
class SysFlow implements AggregateRoot
{
    use RecordsEvents;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $update_at;


    /**
     * Create a new User
     *
     * @param $email
     * @param $created_at
     * @param $update_at
     * @return void
     */
    private function __construct($name, $created_at, $update_at)
    {
        $this->name = $name;
        $this->created_at = $created_at;
        $this->update_at = $update_at;
    }

    /**
     * Register a new User
     *
     * @param $email
     * @param $created_at
     * @param $update_at
     * @return User
     */
    public static function register($name, $created_at, $update_at)
    {
        $user = new SysFlow($name, $created_at, $update_at);

        return $user;
    }
}
