<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.order.command_handler.issue_return_product_handler' shared service.

return $this->services['prestashop.adapter.order.command_handler.issue_return_product_handler'] = new \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\IssueReturnProductHandler(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.order.refund.order_refund_calculator']) ? $this->services['prestashop.adapter.order.refund.order_refund_calculator'] : ($this->services['prestashop.adapter.order.refund.order_refund_calculator'] = new \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundCalculator())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.order.refund.order_slip_creator']) ? $this->services['prestashop.adapter.order.refund.order_slip_creator'] : $this->load('getPrestashop_Adapter_Order_Refund_OrderSlipCreatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.order.refund.voucher_generator']) ? $this->services['prestashop.adapter.order.refund.voucher_generator'] : $this->load('getPrestashop_Adapter_Order_Refund_VoucherGeneratorService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.order.refund.updater']) ? $this->services['prestashop.adapter.order.refund.updater'] : ($this->services['prestashop.adapter.order.refund.updater'] = new \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundUpdater())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.context_state_manager']) ? $this->services['prestashop.adapter.context_state_manager'] : $this->load('getPrestashop_Adapter_ContextStateManagerService.php')) && false ?: '_'});
