<?php

namespace EntityManager51753b0e06031_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class EntityManager extends \Doctrine\ORM\EntityManager
{
    private $delegate;
    private $container;

    public function transactional($func)
    {
        return $this->delegate->transactional($func);
    }

    public function rollback()
    {
        return $this->delegate->rollback();
    }

    public function remove($entity)
    {
        return $this->delegate->remove($entity);
    }

    public function refresh($entity)
    {
        return $this->delegate->refresh($entity);
    }

    public function persist($entity)
    {
        return $this->delegate->persist($entity);
    }

    public function newHydrator($hydrationMode)
    {
        return $this->delegate->newHydrator($hydrationMode);
    }

    public function merge($entity)
    {
        return $this->delegate->merge($entity);
    }

    public function lock($entity, $lockMode, $lockVersion = NULL)
    {
        return $this->delegate->lock($entity, $lockMode, $lockVersion);
    }

    public function isOpen()
    {
        return $this->delegate->isOpen();
    }

    public function isFiltersStateClean()
    {
        return $this->delegate->isFiltersStateClean();
    }

    public function initializeObject($obj)
    {
        return $this->delegate->initializeObject($obj);
    }

    public function hasFilters()
    {
        return $this->delegate->hasFilters();
    }

    public function getUnitOfWork()
    {
        return $this->delegate->getUnitOfWork();
    }

    public function getRepository($className)
    {
        $repository = $this->delegate->getRepository($className);

        if ($repository instanceof \Symfony\Component\DependencyInjection\ContainerAwareInterface) {
            $repository->setContainer($this->container);

            return $repository;
        }

        if (null !== $metadata = $this->container->get("jms_di_extra.metadata.metadata_factory")->getMetadataForClass(get_class($repository))) {
            foreach ($metadata->classMetadata as $classMetadata) {
                foreach ($classMetadata->methodCalls as $call) {
                    list($method, $arguments) = $call;
                    call_user_func_array(array($repository, $method), $this->prepareArguments($arguments));
                }
            }
        }

        return $repository;
    }

    public function getReference($entityName, $id)
    {
        return $this->delegate->getReference($entityName, $id);
    }

    public function getProxyFactory()
    {
        return $this->delegate->getProxyFactory();
    }

    public function getPartialReference($entityName, $identifier)
    {
        return $this->delegate->getPartialReference($entityName, $identifier);
    }

    public function getMetadataFactory()
    {
        return $this->delegate->getMetadataFactory();
    }

    public function getHydrator($hydrationMode)
    {
        return $this->delegate->getHydrator($hydrationMode);
    }

    public function getFilters()
    {
        return $this->delegate->getFilters();
    }

    public function getExpressionBuilder()
    {
        return $this->delegate->getExpressionBuilder();
    }

    public function getEventManager()
    {
        return $this->delegate->getEventManager();
    }

    public function getConnection()
    {
        return $this->delegate->getConnection();
    }

    public function getConfiguration()
    {
        return $this->delegate->getConfiguration();
    }

    public function getClassMetadata($className)
    {
        return $this->delegate->getClassMetadata($className);
    }

    public function flush($entity = NULL)
    {
        return $this->delegate->flush($entity);
    }

    public function find($entityName, $id, $lockMode = 0, $lockVersion = NULL)
    {
        return $this->delegate->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function detach($entity)
    {
        return $this->delegate->detach($entity);
    }

    public function createQueryBuilder()
    {
        return $this->delegate->createQueryBuilder();
    }

    public function createQuery($dql = '')
    {
        return $this->delegate->createQuery($dql);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        return $this->delegate->createNativeQuery($sql, $rsm);
    }

    public function createNamedQuery($name)
    {
        return $this->delegate->createNamedQuery($name);
    }

    public function createNamedNativeQuery($name)
    {
        return $this->delegate->createNamedNativeQuery($name);
    }

    public function copy($entity, $deep = false)
    {
        return $this->delegate->copy($entity, $deep);
    }

    public function contains($entity)
    {
        return $this->delegate->contains($entity);
    }

    public function commit()
    {
        return $this->delegate->commit();
    }

    public function close()
    {
        return $this->delegate->close();
    }

    public function clear($entityName = NULL)
    {
        return $this->delegate->clear($entityName);
    }

    public function beginTransaction()
    {
        return $this->delegate->beginTransaction();
    }

    public function __construct($objectManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        $this->delegate = $objectManager;
        $this->container = $container;
    }

    private function prepareArguments(array $arguments)
    {
        $processed = array();
        foreach ($arguments as $arg) {
            if ($arg instanceof \Symfony\Component\DependencyInjection\Reference) {
                $processed[] = $this->container->get((string) $arg, $arg->getInvalidBehavior());
            } else if ($arg instanceof \Symfony\Component\DependencyInjection\Parameter) {
                $processed[] = $this->container->getParameter((string) $arg);
            } else {
                $processed[] = $arg;
            }
        }

        return $processed;
    }
}