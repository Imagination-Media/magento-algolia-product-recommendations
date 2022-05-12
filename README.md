# ImaginationMedia_AlgoliaProductRecommendations

>  Displays product recommendations from Algolia on the PDP

### Prerequisites

- Algolia module installed `algolia/algoliasearch-magento-2`
- Algolia credentials (`application id` and `search only API key`) saved in store's configuration
- Algolia enabled on storefront

### Storefront coverage

| Luma-based | Hyva-based     |
| ---------- |----------------|
| Partial support.<br/>Only the Javascript part to fetch the data is present.<br/>The products are not shown on the page | ✅ Full support |

#### Luma-based

It all starts with
```
view/frontend/layout/catalog_product_view.xml
```

#### Hyva-based

It all starts with
```
view/frontend/layout/hyva_catalog_product_view.xml
```

##  Installation

```bash
composer require imaginationmedia/algolia-product-recommendations &&

bin/magento m:e ImaginationMedia_AlgoliaProductRecommendations &&
bin/magento s:up &&
bin/magento c:f
```
