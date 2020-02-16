<?php
namespace Depa\Stdlib;

/**
 * Konvertiert das Objekt in seine JSON-Darstellung
 *
 * @param int $options            
 * @return string
 */
interface JsonableInterface
{

    public function toJson($options = 0);
}

?>