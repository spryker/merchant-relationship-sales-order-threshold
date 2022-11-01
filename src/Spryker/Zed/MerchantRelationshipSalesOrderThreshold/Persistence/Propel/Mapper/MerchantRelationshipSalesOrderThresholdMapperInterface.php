<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCollectionTransfer;
use Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdTransfer;
use Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold;

interface MerchantRelationshipSalesOrderThresholdMapperInterface
{
    /**
     * @param \Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold $salesOrderThresholdEntity
     * @param \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdTransfer $merchantRelationshipSalesOrderThresholdTransfer
     *
     * @return \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdTransfer
     */
    public function mapMerchantRelationshipSalesOrderThresholdEntityToTransfer(
        SpyMerchantRelationshipSalesOrderThreshold $salesOrderThresholdEntity,
        MerchantRelationshipSalesOrderThresholdTransfer $merchantRelationshipSalesOrderThresholdTransfer
    ): MerchantRelationshipSalesOrderThresholdTransfer;

    /**
     * @param array<\Orm\Zed\MerchantRelationshipSalesOrderThreshold\Persistence\SpyMerchantRelationshipSalesOrderThreshold> $merchantRelationshipSalesOrderThresholdEntities
     * @param \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCollectionTransfer $merchantRelationshipSalesOrderThresholdCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCollectionTransfer
     */
    public function mapMerchantRelationshipSalesOrderThresholdEntitiesToMerchantRelationshipSalesOrderThresholdCollectionTransfer(
        array $merchantRelationshipSalesOrderThresholdEntities,
        MerchantRelationshipSalesOrderThresholdCollectionTransfer $merchantRelationshipSalesOrderThresholdCollectionTransfer
    ): MerchantRelationshipSalesOrderThresholdCollectionTransfer;
}
