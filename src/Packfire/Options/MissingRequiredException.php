<?php
/**
 * Packfire Options
 * By Sam-Mauris Yong
 * 
 * Released open source under New BSD 3-Clause License.
 * Copyright (c) 2012, Sam-Mauris Yong Shan Xian <sam@mauris.sg>
 * All rights reserved.
 */

namespace Packfire\Options;

/**
 * MissingRequiredException class
 *
 * An exception that will be thrown when an required exception that is required but not supplied.
 *
 * @author Sam-Mauris Yong / mauris@hotmail.sg
 * @copyright Copyright (c) 2010-2012, Sam-Mauris Yong
 * @license http://www.opensource.org/licenses/bsd-license New BSD License
 * @package Packfire\Options
 * @since 1.1.3
 */
class MissingRequiredException implements \RuntimeException
{

    /**
     * Create a new MissingRequiredException object
     * @param \Packfire\Options\Option $option The option that is required but not supplied.
     * @since 1.1.3
     */
    public function __construct(Option $option)
    {
        parent::__construct('The option "' . $option->formatNames() . '" is required was not supplied. ');
    }
}
