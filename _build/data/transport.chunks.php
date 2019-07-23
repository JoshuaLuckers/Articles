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
$chunks = [];

$chunks[1]= $modx->newObject('modChunk');
$chunks[1]->fromArray([
    'id' => 1,
    'name' => 'sample.ArticlesLatestPostTpl',
    'description' => 'The tpl row for the latest post. Duplicate this to override it.',
    'snippet' => file_get_contents($sources['chunks'].'articleslatestpost.chunk.tpl'),
]);

$chunks[2]= $modx->newObject('modChunk');
$chunks[2]->fromArray([
    'id' => 2,
    'name' => 'sample.ArticleRowTpl',
    'description' => 'The tpl row for each post when listed on the main Articles Container page. Duplicate this to override it.',
    'snippet' => file_get_contents($sources['chunks'].'articlerow.chunk.tpl'),
]);

$chunks[3]= $modx->newObject('modChunk');
$chunks[3]->fromArray([
    'id' => 3,
    'name' => 'sample.ArticlesRss',
    'description' => 'The tpl for the RSS feed. Duplicate this to override it.',
    'snippet' => file_get_contents($sources['chunks'].'articlesrss.chunk.tpl'),
]);

$chunks[4]= $modx->newObject('modChunk');
$chunks[4]->fromArray([
    'id' => 4,
    'name' => 'sample.ArticlesRssItem',
    'description' => 'The tpl row for each RSS feed item. Duplicate this to override it.',
    'snippet' => file_get_contents($sources['chunks'].'articlesrssitem.chunk.tpl'),
]);

$chunks[5]= $modx->newObject('modChunk');
$chunks[5]->fromArray([
    'id' => 5,
    'name' => 'sample.ArchiveGroupByYear',
    'description' => 'The tpl wrapper for archives when grouped by year.',
    'snippet' => file_get_contents($sources['chunks'].'archivegroupbyyear.chunk.tpl'),
]);

$chunks[6]= $modx->newObject('modChunk');
$chunks[6]->fromArray([
    'id' => 6,
    'name' => 'sample.ArticlesRssCategoryNode',
    'description' => 'The tpl for each RSS category node for tagging.',
    'snippet' => file_get_contents($sources['chunks'].'articlesrsscategorynode.chunk.tpl'),
]);
return $chunks;