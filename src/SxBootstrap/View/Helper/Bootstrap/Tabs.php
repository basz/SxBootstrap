<?php
namespace SxBootstrap\View\Helper\Bootstrap;

use Zend\View\Helper\AbstractHelper;
use Zend\View\Model\ViewModel;
use SxBootstrap\Exception;

class Tabs extends AbstractHelper
{
    protected $defaultTabIdentifier = 'tab';
    protected $tabCount = 1;
    protected $tabs;
    protected $active;

    public function __invoke()
    {
        return $this;
    }

    public function __toString()
    {
        return $this->render();
    }

    protected function render()
    {
        if (null === $this->active) {
            $this->setActive(key($this->tabs));
        }

        $tabs = new ViewModel;
        $tabs->tabs = $this->tabs;

        $tabs->setTemplate('sxbootstrap/tabs/tabs');

        return $this->getView()->render($tabs);
    }

    public function setActive($tabId = null)
    {
        $tabId = is_null($tabId) ? $this->getTabname(true) : $tabId;
        if (empty($this->tabs[$tabId])) {
            throw new Exception\InvalidArgumentException('Invalid tab id supplied.');
        }

        if (null !== $this->active) {
            $this->tabs[$this->active]['active'] = false;
        }

        $this->tabs[$tabId]['active'] = true;

        $this->active = $tabId;

        return $this;
    }

    public function add($label, $content = null, $tabId = null, $active = false)
    {
        $tabId = is_null($tabId) ? $this->getTabname() : $tabId;
        $label = is_null($label) ? $tabId : $label;

        $this->tabs[$tabId] = array (
            'label'     => $label,
            'content'   => $content,
            'active'    => $active,
        );

        return $this;
    }

    public function setContent($content = null, $tabId = null)
    {
        $tabId = is_null($tabId) ? $this->getTabname(true) : $tabId;

        if (empty($this->tabs[$tabId])) {
            throw new Exception\InvalidArgumentException('Invalid tab id supplied.');
        }

        $this->tabs[$tabId]['content'] = $content;
    }

    public function addContent($content, $tabId = null)
    {
        $tabId = is_null($tabId) ? $this->getTabname(true) : $tabId;
        if (empty($this->tabs[$tabId])) {
            throw new Exception\InvalidArgumentException('Invalid tab id supplied.');
        }

        $this->tabs[$tabId]['content'] .= $content;
    }

    protected function getTabname($current = false)
    {
        if ($current) {
            return $this->defaultTabIdentifier . ($this->tabCount - 1);
        }

        $c = $this->tabCount++;
        return $this->defaultTabIdentifier.$c;
    }
}
