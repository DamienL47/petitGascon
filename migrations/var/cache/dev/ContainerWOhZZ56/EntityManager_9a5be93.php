<?php

namespace ContainerWOhZZ56;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb585f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerda4a5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesecd7f = [
        
    ];

    public function getConnection()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getConnection', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getMetadataFactory', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getExpressionBuilder', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'beginTransaction', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getCache', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'transactional', array('func' => $func), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'commit', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->commit();
    }

    public function rollback()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'rollback', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getClassMetadata', array('className' => $className), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'createQuery', array('dql' => $dql), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'createNamedQuery', array('name' => $name), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'createQueryBuilder', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'flush', array('entity' => $entity), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'clear', array('entityName' => $entityName), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->clear($entityName);
    }

    public function close()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'close', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->close();
    }

    public function persist($entity)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'persist', array('entity' => $entity), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'remove', array('entity' => $entity), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'refresh', array('entity' => $entity), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'detach', array('entity' => $entity), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'merge', array('entity' => $entity), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'contains', array('entity' => $entity), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getEventManager', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getConfiguration', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'isOpen', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getUnitOfWork', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getProxyFactory', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'initializeObject', array('obj' => $obj), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'getFilters', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'isFiltersStateClean', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'hasFilters', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return $this->valueHolderb585f->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerda4a5 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderb585f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb585f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb585f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, '__get', ['name' => $name], $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        if (isset(self::$publicPropertiesecd7f[$name])) {
            return $this->valueHolderb585f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb585f;

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

        $targetObject = $this->valueHolderb585f;
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
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb585f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb585f;
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
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, '__isset', array('name' => $name), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb585f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb585f;
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
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, '__unset', array('name' => $name), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb585f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb585f;
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
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, '__clone', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        $this->valueHolderb585f = clone $this->valueHolderb585f;
    }

    public function __sleep()
    {
        $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, '__sleep', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;

        return array('valueHolderb585f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerda4a5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerda4a5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerda4a5 && ($this->initializerda4a5->__invoke($valueHolderb585f, $this, 'initializeProxy', array(), $this->initializerda4a5) || 1) && $this->valueHolderb585f = $valueHolderb585f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb585f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb585f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
