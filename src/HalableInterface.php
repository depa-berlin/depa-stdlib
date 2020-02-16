<?php
namespace Depa\Stdlib;

/**
 * Konvertiert das Objekt in seine HAL-Darstellung
 *
 * @param int $options            
 * @return string
 */
interface HalableInterface
{

    public function toHal(\Laminas\Diactoros\Uri $requestUri);
}

?>