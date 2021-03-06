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
 * @package articles
 * @subpackage build
 */
$settings = [];
$settings['articles.container_ids']= $modx->newObject(modSystemSetting::class);
$settings['articles.container_ids']->fromArray([
    'key' => 'articles.container_ids',
    'value' => '',
    'xtype' => 'textfield',
    'namespace' => 'articles',
    'area' => 'furls',
],'',true,true);
$settings['articles.default_container_template']= $modx->newObject(modSystemSetting::class);
$settings['articles.default_container_template']->fromArray([
    'key' => 'articles.default_container_template',
    'value' => 0,
    'xtype' => 'modx-combo-template',
    'namespace' => 'articles',
    'area' => 'site',
],'',true,true);
$settings['articles.default_article_template']= $modx->newObject(modSystemSetting::class);
$settings['articles.default_article_template']->fromArray([
    'key' => 'articles.default_article_template',
    'value' => 0,
    'xtype' => 'modx-combo-template',
    'namespace' => 'articles',
    'area' => 'site',
],'',true,true);
$settings['articles.default_article_sort_field']= $modx->newObject(modSystemSetting::class);
$settings['articles.default_article_sort_field']->fromArray([
    'key' => 'articles.default_article_sort_field',
    'value' => 'createdon',
    'xtype' => 'textfield',
    'namespace' => 'articles',
    'area' => 'site',
],'',true,true);
$settings['articles.article_show_longtitle']= $modx->newObject(modSystemSetting::class);
$settings['articles.article_show_longtitle']->fromArray([
    'key' => 'articles.article_show_longtitle',
    'value' => false,
    'xtype' => 'combo-boolean',
    'namespace' => 'articles',
    'area' => 'site',
],'',true,true);
$settings['articles.mgr_date_format']= $modx->newObject(modSystemSetting::class);
$settings['articles.mgr_date_format']->fromArray([
    'key' => 'articles.mgr_date_format',
    'value' => '%b %d',
    'xtype' => 'textfield',
    'namespace' => 'articles',
    'area' => 'site',
],'',true,true);
$settings['articles.mgr_time_format']= $modx->newObject(modSystemSetting::class);
$settings['articles.mgr_time_format']->fromArray([
    'key' => 'articles.mgr_time_format',
    'value' => '%H:%I %p',
    'xtype' => 'textfield',
    'namespace' => 'articles',
    'area' => 'site',
],'',true,true);

return $settings;