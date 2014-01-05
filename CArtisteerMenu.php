<?php

/**
 * CArtisteerMenu
 * Wrapper Artisteer menu to Yii Framework
 * 
 * @author Dida Nurwanda <didanurwanda@gmail.com>
 * @link http://didanurwanda.blogspot.com
 * @license http://www.yiiframework.com/license/
 */

/**
 * Examples
 * 
 *  $this->widget('ext.CArtisteerMenu', array(
 *      'items' => array(
 *          array('label' => 'Home', 'url' => array('/site/index')),
 *          array('label' => 'Contact', 'url' => array('/site/contact')),
 *          array('label' => 'Category', 'url' => array('/site/categori'),
 *              'items' => array(
 *                  array('label' => 'Tutorial', 'url' => array('/tutorial')),
 *                  array('label' => 'Ebook', 'url' => array('/ebook')),
 *              )
 *          )
 *      )
 *  )); 
 */

Yii::import('zii.widgets.CMenu');

class CArtisteerMenu extends CMenu {

    /**
     * Initializes the menu widget.
     * This method mainly normalizes the {@link items} property.
     * If this method is overridden, make sure the parent implementation is invoked.
     */
    public function init() {
        parent::init();
        if (isset($this->htmlOptions['class'])) {
            $this->htmlOptions['class'] .= ' art-hmenu';
        } else {
            $this->htmlOptions['class'] = 'art-hmenu';
        }
    }

    /**
     * Renders the content of a menu item.
     * Note that the container and the sub-menus are not rendered here.
     * @param array $item the menu item to be rendered. Please see {@link items} on what data might be in the item.
     * @return string
     * @since 1.1.6
     */
    protected function renderMenuItem($item) {
        if ($item['active'] && $this->activeCssClass != '') {
            if (isset($item['linkOptions']['class'])) {
                $item['linkOptions']['class'] .= ' ' . $this->activeCssClass;
            } else {
                $item['linkOptions']['class'] = $this->activeCssClass;
            }
        }
        return parent::renderMenuItem($item);
    }

}