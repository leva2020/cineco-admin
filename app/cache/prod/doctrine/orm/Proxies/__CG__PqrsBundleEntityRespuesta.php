<?php

namespace Proxies\__CG__\PqrsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Respuesta extends \PqrsBundle\Entity\Respuesta implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'respuesta', '' . "\0" . 'PqrsBundle\\Entity\\Respuesta' . "\0" . 'causa', '' . "\0" . 'PqrsBundle\\Entity\\Respuesta' . "\0" . 'pqrs', '' . "\0" . 'PqrsBundle\\Entity\\Respuesta' . "\0" . 'area', 'adjuntos', 'estado', 'comunicado', 'comunicacion_previa', 'fecha', 'area_res_ant', 'usuario', 'copia');
        }

        return array('__isInitialized__', 'id', 'respuesta', '' . "\0" . 'PqrsBundle\\Entity\\Respuesta' . "\0" . 'causa', '' . "\0" . 'PqrsBundle\\Entity\\Respuesta' . "\0" . 'pqrs', '' . "\0" . 'PqrsBundle\\Entity\\Respuesta' . "\0" . 'area', 'adjuntos', 'estado', 'comunicado', 'comunicacion_previa', 'fecha', 'area_res_ant', 'usuario', 'copia');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Respuesta $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRespuesta($respuesta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRespuesta', array($respuesta));

        return parent::setRespuesta($respuesta);
    }

    /**
     * {@inheritDoc}
     */
    public function getRespuesta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRespuesta', array());

        return parent::getRespuesta();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setComunicado($comunicado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComunicado', array($comunicado));

        return parent::setComunicado($comunicado);
    }

    /**
     * {@inheritDoc}
     */
    public function getComunicado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComunicado', array());

        return parent::getComunicado();
    }

    /**
     * {@inheritDoc}
     */
    public function setComunicacionPrevia($comunicacionPrevia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComunicacionPrevia', array($comunicacionPrevia));

        return parent::setComunicacionPrevia($comunicacionPrevia);
    }

    /**
     * {@inheritDoc}
     */
    public function getComunicacionPrevia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComunicacionPrevia', array());

        return parent::getComunicacionPrevia();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', array($fecha));

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', array());

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario($usuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', array($usuario));

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', array());

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function addCausa(\PqrsBundle\Entity\Causas $causa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCausa', array($causa));

        return parent::addCausa($causa);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCausa(\PqrsBundle\Entity\Causas $causa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCausa', array($causa));

        return parent::removeCausa($causa);
    }

    /**
     * {@inheritDoc}
     */
    public function getCausa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCausa', array());

        return parent::getCausa();
    }

    /**
     * {@inheritDoc}
     */
    public function setPqrs(\PqrsBundle\Entity\Pqrs $pqrs = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPqrs', array($pqrs));

        return parent::setPqrs($pqrs);
    }

    /**
     * {@inheritDoc}
     */
    public function getPqrs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPqrs', array());

        return parent::getPqrs();
    }

    /**
     * {@inheritDoc}
     */
    public function setArea(\PqrsBundle\Entity\Area $area = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArea', array($area));

        return parent::setArea($area);
    }

    /**
     * {@inheritDoc}
     */
    public function getArea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArea', array());

        return parent::getArea();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdjunto(\PqrsBundle\Entity\Adjunto $adjuntos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdjunto', array($adjuntos));

        return parent::addAdjunto($adjuntos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdjunto(\PqrsBundle\Entity\Adjunto $adjuntos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdjunto', array($adjuntos));

        return parent::removeAdjunto($adjuntos);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjuntos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjuntos', array());

        return parent::getAdjuntos();
    }

    /**
     * {@inheritDoc}
     */
    public function setAreaResAnt(\PqrsBundle\Entity\Area $areaResAnt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAreaResAnt', array($areaResAnt));

        return parent::setAreaResAnt($areaResAnt);
    }

    /**
     * {@inheritDoc}
     */
    public function getAreaResAnt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAreaResAnt', array());

        return parent::getAreaResAnt();
    }

    /**
     * {@inheritDoc}
     */
    public function addCopium(\PqrsBundle\Entity\Copias $copia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCopium', array($copia));

        return parent::addCopium($copia);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCopium(\PqrsBundle\Entity\Copias $copia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCopium', array($copia));

        return parent::removeCopium($copia);
    }

    /**
     * {@inheritDoc}
     */
    public function getCopia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCopia', array());

        return parent::getCopia();
    }

}
