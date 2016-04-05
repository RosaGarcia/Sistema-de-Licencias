<?php

namespace Crm\TicketBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TicketRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TicketRepository extends EntityRepository
{
	public function prioridad()
	{
		return $this->getEntityManager()->createQuery('SELECT t FROM TicketBundle:Ticket t WHERE t.prioridad >= 5')->getResult();
	}

	public function misTicket($id)
	{
		return $this->getEntityManager()->createQuery('SELECT t FROM TicketBundle:Ticket t WHERE t.propietario = :id' )->setParameter('id',$id)->getResult();
	}

	public function todos()
	{
		return $this->getEntityManager()->createQuery('SELECT t FROM TicketBundle:Ticket t' )->getResult();
	}
}
