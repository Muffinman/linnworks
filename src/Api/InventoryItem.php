<?php

namespace Booni3\Linnworks\Api;

/**
 * Class InventoryItem
 * @package Booni3\Linnworks\Api
 */
class InventoryItem extends ApiClient {

    /**
     * @param string $inventoryItemId
     * @return array
     * @throws \Exception
     */
    public function getInventoryItemById(string $inventoryItemId)
    {
        return $this->get('Inventory/GetInventoryItemById', [
            'id' => $inventoryItemId,
        ]);
    }

    /**
     * @param string $inventoryItemId
     * @return array
     * @throws \Exception
     */
    public function getInventoryItemImages(string $inventoryItemId)
    {
        return $this->get('Inventory/GetInventoryItemImages', [
            'inventoryItemId' => $inventoryItemId,
        ]);
    }

    /**
     * @param string $inventoryItemId
     * @return array
     * @throws \Exception
     */
    public function getInventoryItemDescriptions(string $inventoryItemId)
    {
        return $this->get('Inventory/GetInventoryItemDescriptions', [
            'id' => $inventoryItemId,
        ]);
    }

    /**
     * @param string $inventoryItemId
     * @param array $propertyParams
     * @return array
     * @throws \Exception
     */
    public function getInventoryItemExtendedProperties(string $inventoryItemId, array $propertyParams)
    {
        return $this->get('Inventory/GetInventoryItemExtendedProperties', [
            'inventoryItemId' => $inventoryItemId,
            'propertyParams' => $propertyParams,
        ]);
    }
}