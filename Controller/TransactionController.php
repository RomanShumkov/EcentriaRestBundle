<?php
/*
 * This file is part of the ecentria group, inc. software.
 *
 * (c) 2015, ecentria group, inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ecentria\Libraries\EcentriaRestBundle\Controller;

use Ecentria\Libraries\EcentriaRestBundle\Entity\Transaction;

use FOS\RestBundle\Controller\Annotations as FOS,
    FOS\RestBundle\Controller\FOSRestController,
    FOS\RestBundle\Routing\ClassResourceInterface,
    FOS\RestBundle\View\View;

use Nelmio\ApiDocBundle\Annotation as Nelmio;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as Sensio;

/**
 * Contact Controller
 *
 * @author Sergey Chernecov <sergey.chernecov@intexsys.lv>
 */
class TransactionController extends FOSRestController implements ClassResourceInterface
{
    /**
     * Get transaction
     *
     * @param Transaction $transactionEntity Transaction entity
     *
     * @FOS\Route(
     *      pattern="transaction-service/{id}",
     *      requirements = {
     *          "id" = ".+?"
     *      }
     * )
     *
     * @Sensio\ParamConverter(
     *      "transactionEntity",
     *      class="Ecentria\Libraries\EcentriaRestBundle\Entity\Transaction",
     *      converter = "ecentria.api.converter.entity"
     * )
     *
     * @Nelmio\ApiDoc(
     *      section="Transaction",
     *      resource=true,
     *      statusCodes={
     *          200="Returned when successful",
     *          404="Returned when not found",
     *          500="Returned when system failed"
     *      }
     * )
     *
     * @return View
     */
    public function getAction(Transaction $transactionEntity)
    {
        return $this->view($transactionEntity);
    }
}
