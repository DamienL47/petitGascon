<?php

namespace ContainerFcPIxvR;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9768e = null;
    private $initializerb8f32 = null;
    private static $publicPropertiesfd9d3 = [
        
    ];
    public function getConnection()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getConnection', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getMetadataFactory', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getExpressionBuilder', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'beginTransaction', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getCache', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'transactional', array('func' => $func), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'commit', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->commit();
    }
    public function rollback()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'rollback', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getClassMetadata', array('className' => $className), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'createQuery', array('dql' => $dql), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'createNamedQuery', array('name' => $name), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'createQueryBuilder', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'flush', array('entity' => $entity), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'clear', array('entityName' => $entityName), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->clear($entityName);
    }
    public function close()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'close', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->close();
    }
    public function persist($entity)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'persist', array('entity' => $entity), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'remove', array('entity' => $entity), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'refresh', array('entity' => $entity), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'detach', array('entity' => $entity), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'merge', array('entity' => $entity), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'contains', array('entity' => $entity), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getEventManager', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getConfiguration', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'isOpen', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getUnitOfWork', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getProxyFactory', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'initializeObject', array('obj' => $obj), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'getFilters', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'isFiltersStateClean', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'hasFilters', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return $this->valueHolder9768e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb8f32 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolder9768e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9768e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9768e->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, '__get', ['name' => $name], $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        if (isset(self::$publicPropertiesfd9d3[$name])) {
            return $this->valueHolder9768e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9768e;
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
        $targetObject = $this->valueHolder9768e;
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
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9768e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9768e;
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
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, '__isset', array('name' => $name), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9768e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder9768e;
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
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, '__unset', array('name' => $name), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9768e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9768e;
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
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, '__clone', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        $this->valueHolder9768e = clone $this->valueHolder9768e;
    }
    public function __sleep()
    {
        $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, '__sleep', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
        return array('valueHolder9768e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb8f32 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb8f32;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb8f32 && ($this->initializerb8f32->__invoke($valueHolder9768e, $this, 'initializeProxy', array(), $this->initializerb8f32) || 1) && $this->valueHolder9768e = $valueHolder9768e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9768e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9768e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
