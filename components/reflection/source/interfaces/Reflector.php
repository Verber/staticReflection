<?php
/**
 * I provide completely working code with this framework, which will not be
 * developed any further, because there are already existing packages, which try
 * to provide similar functionallities.
 */

namespace de\buzz2ee\reflection\interfaces;

/**
 * Interface with different class, method and/op property modifiers.
 *
 * @author  Manuel Pichler <mapi@pdepend.org>
 * @license Copyright by Manuel Pichler
 * @version $Revision$
 */
interface Reflector
{
    /**
     * The available modifiers
     */
    const IS_ABSTRACT  = 1,
          IS_FINAL     = 2,
          IS_PRIVATE   = 4,
          IS_PROTECTED = 8,
          IS_PUBLIC    = 16,
          IS_STATIC    = 32;
}