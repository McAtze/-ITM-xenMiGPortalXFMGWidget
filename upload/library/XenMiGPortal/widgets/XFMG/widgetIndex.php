<?php

/**
 * Project: xenMiG Portal
 * www.xenmig.com
 * info[at]xenmig.com
 *
 * Support at www.xendach.de
 *
 * Copyright © 2015 Monkey Palm Media UG (haftungsbeschränkt)
 *
 * @description Portal System for xenForo
 * @author Tim Stollberg <tim.stollberg[at]xenmig.com> and Anton Tonchev <a.tonchev[at]xenmig.com>
 * @version 1.0
 */
class XenMiGPortal_widgets_XFMG_widgetIndex
{

  public function widgetIndex($configuration)
  {

   $XenMiGHelper = new XenMiGPortal_PortalHelper_XenMiGHelper();
  
   $params = array(
   	  'configuration' => (array)$configuration
   	  
     // 'xfmg_title' => $configuration->xfmg_title,
     // 'xfmg_type' => $configuration->xfmg_type,
     // 'items' => $configuration->items,
     // 'limit' => $configuration->limit,
     // 'slideWidth' => $configuration->slideWidth,
     // 'categories' => $configuration->categories,
     // 'albums' => $configuration->albums,
     // 'sidebarBlock' => $configuration->sidebarBlock,
     // 'captions' => $configuration->captions,
     // 'responsive' => $configuration->responsive
    );

    return $XenMiGHelper->renderXenforoTemplate('xenmig_portal_widget_xfmg', $params);

  }

  public function getWidgetName()
  {
    return "Xenforo Media Gallery Widget";
  }

  public function getWidgetVersion()
  {
    return "1.0";
  }

  public function getWidgetProperties()
  {
    $widgetProperties = array(
      array(
        "name" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_title"),
        "key" => "xfmg_title",
        "type" => "text",
        "description" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_title_desc")
      ),
      array(
        "name" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_type"),
        "key" => "xfmg_type",
        "type" => "select",
        "defaultValue" => "new",
        "description" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_type_desc"),
        "options" => array(
          array(
            "label" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_type_new"),
            "value" => "new"
          ),
          array(
            "label" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_type_random"),
            "value" => "rand"
          )
        )
      ),
      array(
        "name" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_items"),
        "key" => "items",
        "type" => "text",
        "description" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_items_desc"),
        "required" => true,
        "validationRegExp" => "[1-9]+" // Regular expression for Property validation
      ),
      array(
        "name" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_limit"),
        "key" => "limit",
        "type" => "text",
        "description" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_limit_desc"),
        "required" => true,
        "validationRegExp" => "[1-9]+" // Regular expression for Property validation
      ),
      array(
        "name" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_slideWidth"),
        "key" => "slideWidth",
        "type" => "text",
        "description" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_slideWidth_desc"),
        "required" => true,
        "validationRegExp" => "[1-9]+" // Regular expression for Property validation
      ),
      array(
        "name" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_categories"),
        "key" => "categories",
        "type" => "text",
        "defaultValue" => "all",
        "description" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_categories_desc")
      ),
      array(
        "name" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_albums"),
        "key" => "albums",
        "type" => "select",
        "defaultValue" => "1",
        "description" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_albums_desc"),
        "options" => array(
          array(
            "label" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_includeAlbums"),
            "value" => "1"
          ),
          array(
            "label" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_excludeAlbums"),
            "value" => "0"
          )
        )
      ),
      array(
        "name" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_sidebarBlock"),
        "key" => "sidebarBlock",
        "type" => "select",
        "defaultValue" => "1",
        "description" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_sidebarBlock_desc"),
        "options" => array(
          array(
            "label" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_isSidebarBlock"),
            "value" => "1"
          ),
          array(
            "label" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_noSidebarBlock"),
            "value" => "0"
          )
        )
      ),
      array(
        "name" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_captions"),
        "key" => "captions",
        "type" => "select",
        "defaultValue" => "1",
        "description" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_captions_desc"),
        "options" => array(
          array(
            "label" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_hoverCaptions"),
            "value" => "1"
          ),
          array(
            "label" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_hideCaptions"),
            "value" => "0"
          )
        )
      ),
      array(
        "name" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_responsive"),
        "key" => "responsive",
        "type" => "select",
        "defaultValue" => "0",
        "description" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_responsive_desc"),
        "options" => array(
          array(
            "label" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_noResponsive"),
            "value" => "1"
          ),
          array(
            "label" => $this->_getPortalHelper()->translatePhrase("xenmig_portal_widget_xfmg_responsive"),
            "value" => "0"
          )
        )
    	)
    );

    return $widgetProperties;
  }
  
  public function uninstallWidget()
  {

  }

  private function _getPortalHelper()
  {
    $XenMiGHelper = new XenMiGPortal_PortalHelper_XenMiGHelper();
    return $XenMiGHelper;
  }
}