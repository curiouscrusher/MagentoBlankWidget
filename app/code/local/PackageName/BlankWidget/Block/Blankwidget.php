<?php

class PackageName_BlankWidget_Block_BlankWidget extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{
    public function getBlankwidgetContent()
    {
        // Array for widget content here.
        $content = [
             $this->getImage(), $this->getTitle(), $this->getContent(), $this->getOption() 
        ];

        return $content;
    }
}
