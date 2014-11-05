<?php namespace Javan\Dynaflow\Infrastructure\Repositories;

use Doctrine\ORM\EntityManager;
use Javan\Dynaflow\Domain\Model\Identity\SysFlow;
use Javan\Dynaflow\Domain\Model\Identity\Email;
use Javan\Dynaflow\Domain\Model\Identity\UserId;
use Javan\Dynaflow\Domain\Model\Identity\Username;
use Javan\Dynaflow\Domain\Model\Identity\SysFlowRepository;

class SysFlowDoctrineORMRRepository implements SysFlowRepository
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var string
     */
    private $class;

    /**
     * Create a new UserDoctrineORMRepository
     *
     * @param EntityManager $em
     * @return void
     */
    public function __construct(EntityManager $em)
    {
        $this->em    = $em;
        $this->class = 'Javan\Dynaflow\Domain\Model\Identity\SysFlow';
    }

    /**
     * Add a new SysFlow
     *
     * @param SysFlow $SysFlow
     * @return void
     */
    public function add(SysFlow $SysFlow)
    {
        $this->em->persist($SysFlow);
        $this->em->flush();
    }

    /**
     * Update an existing SysFlow
     *
     * @param SysFlow $SysFlow
     * @return void
     */
    public function update(SysFlow $SysFlow)
    {
        $this->em->persist($SysFlow);
        $this->em->flush();
    }
}
