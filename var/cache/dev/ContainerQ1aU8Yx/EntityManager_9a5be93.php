<?php

namespace ContainerQ1aU8Yx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7ec22 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercd730 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4b879 = [
        
    ];

    public function getConnection()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getConnection', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getMetadataFactory', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getExpressionBuilder', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'beginTransaction', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getCache', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getCache();
    }

    public function transactional($func)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'transactional', array('func' => $func), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'wrapInTransaction', array('func' => $func), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'commit', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->commit();
    }

    public function rollback()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'rollback', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getClassMetadata', array('className' => $className), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'createQuery', array('dql' => $dql), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'createNamedQuery', array('name' => $name), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'createQueryBuilder', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'flush', array('entity' => $entity), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'clear', array('entityName' => $entityName), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->clear($entityName);
    }

    public function close()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'close', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->close();
    }

    public function persist($entity)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'persist', array('entity' => $entity), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'remove', array('entity' => $entity), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'refresh', array('entity' => $entity), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'detach', array('entity' => $entity), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'merge', array('entity' => $entity), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getRepository', array('entityName' => $entityName), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'contains', array('entity' => $entity), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getEventManager', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getConfiguration', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'isOpen', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getUnitOfWork', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getProxyFactory', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'initializeObject', array('obj' => $obj), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'getFilters', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'isFiltersStateClean', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'hasFilters', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return $this->valueHolder7ec22->hasFilters();
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

        $instance->initializercd730 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7ec22) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7ec22 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7ec22->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, '__get', ['name' => $name], $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        if (isset(self::$publicProperties4b879[$name])) {
            return $this->valueHolder7ec22->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ec22;

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

        $targetObject = $this->valueHolder7ec22;
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
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ec22;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7ec22;
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
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, '__isset', array('name' => $name), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ec22;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7ec22;
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
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, '__unset', array('name' => $name), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ec22;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7ec22;
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
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, '__clone', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        $this->valueHolder7ec22 = clone $this->valueHolder7ec22;
    }

    public function __sleep()
    {
        $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, '__sleep', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;

        return array('valueHolder7ec22');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercd730 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercd730;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercd730 && ($this->initializercd730->__invoke($valueHolder7ec22, $this, 'initializeProxy', array(), $this->initializercd730) || 1) && $this->valueHolder7ec22 = $valueHolder7ec22;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7ec22;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7ec22;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
