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

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'ImaginationMedia_AlgoliaProductRecommendations',
    __DIR__
);
