<?php // vim:ts=4:sw=4:et:fdm=marker
/*
 * Undocumented
 *
 * @link http://agiletoolkit.org/
*//*
==ATK4===================================================
   This file is part of Agile Toolkit 4
    http://agiletoolkit.org/

   (c) 2008-2012 Romans Malinovskis <romans@agiletoolkit.org>
   Distributed under Affero General Public License v3 and
   commercial license.

   See LICENSE or LICENSE_COM for more information
 =====================================================ATK4=*/
/** Implementation of soft delete */
class Field_Deleted extends Field {
    function init(){
        parent::init();
        $this->defaultValue(false);
        $this->type('boolean');
        $this->owner->addCondition($this->short_name,false);
    }
}
