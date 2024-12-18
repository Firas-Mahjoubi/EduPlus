<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Ressource extends \App\Entity\Ressource implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'Type' => [parent::class, 'Type', null],
        "\0".parent::class."\0".'dateCreationRessource' => [parent::class, 'dateCreationRessource', null],
        "\0".parent::class."\0".'descriptionRessource' => [parent::class, 'descriptionRessource', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'image' => [parent::class, 'image', null],
        "\0".parent::class."\0".'montant' => [parent::class, 'montant', null],
        "\0".parent::class."\0".'nomRessource' => [parent::class, 'nomRessource', null],
        "\0".parent::class."\0".'quantite' => [parent::class, 'quantite', null],
        'Type' => [parent::class, 'Type', null],
        'dateCreationRessource' => [parent::class, 'dateCreationRessource', null],
        'descriptionRessource' => [parent::class, 'descriptionRessource', null],
        'id' => [parent::class, 'id', null],
        'image' => [parent::class, 'image', null],
        'montant' => [parent::class, 'montant', null],
        'nomRessource' => [parent::class, 'nomRessource', null],
        'quantite' => [parent::class, 'quantite', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}