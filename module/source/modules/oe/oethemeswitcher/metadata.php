<?php
/**
 * This file is part of OXID eSales theme switcher module.
 *
 * OXID eSales theme switcher module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales theme switcher module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with OXID eSales theme switcher module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2013
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'oethemeswitcher',
    'title'        => 'Mobile theme module',
    'description'  => 'Module for mobile theme',
    'thumbnail'    => 'picture.png',
    'version'      => '1.0',
    'author'       => 'OXID eSales AG',
    'url'          => 'http://www.oxid-esales.com',
    'email'        => 'info@oxid-esales.com',
    'extend'       => array(
        'oxconfig'         => 'oe/oethemeswitcher/core/oethemeswitcherconfig',
        'oxtheme'          => 'oe/oethemeswitcher/core/oethemeswitchertheme',
        'oxviewconfig'     => 'oe/oethemeswitcher/core/oethemeswitcherviewconfig',
        'manufacturerlist' => 'oe/oethemeswitcher/controllers/oethemeswitchermanufacturerlist',
        'alist'            => 'oe/oethemeswitcher/controllers/oethemeswitcheralist',
        'content'          => 'oe/oethemeswitcher/controllers/oethemeswitchercontent',
        'details'          => 'oe/oethemeswitcher/controllers/oethemeswitcherdetails',
        'review'           => 'oe/oethemeswitcher/controllers/oethemeswitcherreview',
        'rss'              => 'oe/oethemeswitcher/controllers/oethemeswitcherrss',
        'start'            => 'oe/oethemeswitcher/controllers/oethemeswitcherstart',
        'tag'              => 'oe/oethemeswitcher/controllers/oethemeswitchertag',
        'vendorlist'       => 'oe/oethemeswitcher/controllers/oethemeswitchervendorlist',
        'oxlang'           => 'oe/oethemeswitcher/core/oethemeswitcherlang',
    ),
    'files' => array(
        'oethemeswitcheruseragent' => 'oe/oethemeswitcher/core/oethemeswitcheruseragent.php'
    ),

    'blocks' => array(
        array('template' => 'layout/page.tpl', 'block'=>'layout_page_vatinclude', 'file'=>'views/azure/blocks/theme_switch_link.tpl')
    ),

    'settings' => array(
        array('group' => 'main', 'name' => 'sMobileTheme', 'type' => 'str',  'value' => 'mobile'),
    )
);