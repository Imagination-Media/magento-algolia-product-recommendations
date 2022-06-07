<?php

/**
 * AlgoliaProductRecommendations
 *
 * Algolia product recommendations UI
 *
 * @package ImaginationMedia\AlgoliaProductRecommendations
 * @author Vasilii Burlacu <vasilii@imaginationmedia.com>
 * @copyright Copyright (c) 2022 Imagination Media (https://www.imaginationmedia.com/)
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

declare(strict_types=1);

namespace ImaginationMedia\AlgoliaProductRecommendations\ViewModel;

use Magento\Catalog\Model\Product;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class ProductRecommendationsViewModel
 */
class ProductRecommendationsViewModel implements ArgumentInterface
{
    private Registry $registry;

    /**
     * @param Registry $registry
     */
    public function __construct(
        Registry $registry
    ) {
        $this->registry = $registry;
    }

    public function getProductId(): int
    {
        return $this->getProduct()->getId();
    }

    private function getProduct(): Product
    {
        return $this->registry->registry('current_product');
    }
}
