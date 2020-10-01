<?php

declare(strict_types=1);

namespace Eadesigndev\Eacore\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\ActionInterface;

abstract class Eacore extends Action implements ActionInterface
{
    public const ADMIN_RESOURCE_VIEW = 'Eadesigndev_Eacore::index';

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Init page
     *
     * @param \Magento\Backend\Model\View\Result\Page $resultPage
     * @return \Magento\Backend\Model\View\Result\Page
     */
    protected function initPage($resultPage)
    {
        $resultPage->setActiveMenu('Eadesigndev_Eacore::index')
            ->addBreadcrumb(__('EaDesign'), __('EaDesign'));

        return $resultPage;
    }

    /**
     * Check the permission to run it
     *
     * @return boolean
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed(self::ADMIN_RESOURCE_VIEW);
    }
}
