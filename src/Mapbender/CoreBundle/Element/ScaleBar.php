<?php

namespace Mapbender\CoreBundle\Element;

use Mapbender\CoreBundle\Component\Element;

/**
 * Map's overview element
 *
 * @author Paul Schmidt
 */
class ScaleBar extends Element
{

    /**
     * @inheritdoc
     */
    static public function getClassTitle()
    {
        return "ScaleBar";
    }

    /**
     * @inheritdoc
     */
    static public function getClassDescription()
    {
        return "ScaleBar";
    }

    /**
     * @inheritdoc
     */
    static public function getClassTags()
    {
        return array('ScaleBar', "Map's scale bar");
    }

    /**
     * @inheritdoc
     */
    public static function getDefaultConfiguration()
    {
        return array(
            'title' => 'Scale Bar',
            'tooltip' => 'Scale Bar',
            'target' => null,
            'maxWidth' => 200,
            'anchor' => 'right-bottom',
            'units' => "km",
            'position' => array('20px', '20px'));
    }

    /**
     * @inheritdoc
     */
    public function getWidgetName()
    {
        return 'mapbender.mbScalebar';
    }

    /**
     * @inheritdoc
     */
    public static function getType()
    {
        return 'Mapbender\CoreBundle\Element\Type\ScaleBarAdminType';
    }

    /**
     * @inheritdoc
     */
    public function getAssets()
    {
        return array(
            'js' => array('mapbender.element.scalebar.js'),
            //TODO: Split up
            'css' => array('mapbender.element.scalebar.css'));
    }

    /**
     * @inheritdoc
     */
    public function render()
    {
        return $this->container->get('templating')
                        ->render('MapbenderCoreBundle:Element:scalebar.html.twig',
                                 array(
                            'id' => $this->getId(),
                            "title" => $this->getTitle(),
                            'configuration' => $this->getConfiguration()));
    }

}

