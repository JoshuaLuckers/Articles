<?php
/**
 * Articles
 *
 * Copyright 2011-12 by Shaun McCormick <shaun+articles@modx.com>
 *
 * Articles is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Articles is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Articles; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package articles
 */
/**
 * @var modX $modx
 * @var array $sources
 * @package articles
 * @subpackage build
 */
$tvs = [];

$tvs[1]= $modx->newObject('modTemplateVar');
$tvs[1]->fromArray([
    'id' => 1,
    'name' => 'articlestags',
    'description' => 'The default tags TV for Articles. Do not delete!',
    'caption' => 'articlestags',
    'type' => 'hidden',
]);

return $tvs;