<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera0c3d = null;
    private $initializer2ff1a = null;
    private static $publicProperties9fbc8 = [
        
    ];
    public function getConnection()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getConnection', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getMetadataFactory', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getExpressionBuilder', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'beginTransaction', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getCache', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getCache();
    }
    public function transactional($func)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'transactional', array('func' => $func), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'commit', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->commit();
    }
    public function rollback()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'rollback', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getClassMetadata', array('className' => $className), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'createQuery', array('dql' => $dql), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'createNamedQuery', array('name' => $name), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'createQueryBuilder', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'flush', array('entity' => $entity), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'clear', array('entityName' => $entityName), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->clear($entityName);
    }
    public function close()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'close', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->close();
    }
    public function persist($entity)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'persist', array('entity' => $entity), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'remove', array('entity' => $entity), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'refresh', array('entity' => $entity), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'detach', array('entity' => $entity), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'merge', array('entity' => $entity), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'contains', array('entity' => $entity), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getEventManager', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getConfiguration', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'isOpen', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getUnitOfWork', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getProxyFactory', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'initializeObject', array('obj' => $obj), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'getFilters', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'isFiltersStateClean', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'hasFilters', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return $this->valueHoldera0c3d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer2ff1a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera0c3d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera0c3d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera0c3d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, '__get', ['name' => $name], $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        if (isset(self::$publicProperties9fbc8[$name])) {
            return $this->valueHoldera0c3d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0c3d;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera0c3d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0c3d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera0c3d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, '__isset', array('name' => $name), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0c3d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera0c3d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, '__unset', array('name' => $name), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0c3d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera0c3d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, '__clone', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        $this->valueHoldera0c3d = clone $this->valueHoldera0c3d;
    }
    public function __sleep()
    {
        $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, '__sleep', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
        return array('valueHoldera0c3d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2ff1a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2ff1a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer2ff1a && ($this->initializer2ff1a->__invoke($valueHoldera0c3d, $this, 'initializeProxy', array(), $this->initializer2ff1a) || 1) && $this->valueHoldera0c3d = $valueHoldera0c3d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera0c3d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera0c3d;
    }
}
