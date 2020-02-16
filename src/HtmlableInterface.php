<?php
namespace Depa\Stdlib;

interface HtmlableInterface
{

    /**
     * Get content as a string of HTML.
     *
     * @return string
     */
    public function toHtml();
}
