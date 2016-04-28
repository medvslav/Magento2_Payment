<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Medvslav\Paym\Model;



/**
 * Pay In Store payment method model
 */
class MedvslavPaym extends \Magento\Payment\Model\Method\AbstractMethod
{

    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'medvslavpaym';

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;


  

}
