# ImaginationMedia_AlgoliaProductRecommendations

>  Displays Algolia product recommendations on Product & Shopping Cart pages

##  Installation

```bash
composer require imaginationmedia/algolia-product-recommendations &&

bin/magento m:e ImaginationMedia_AlgoliaProductRecommendations &&
bin/magento s:up &&
bin/magento c:f
```

### Prerequisites

- Algolia module installed `algolia/algoliasearch-magento-2`
- Algolia credentials (`application id` and `search only API key`) saved in store's configuration
- Algolia enabled on storefront

### Storefront coverage

| Luma-based                                                                                                             | Hyva-based     |
|------------------------------------------------------------------------------------------------------------------------|----------------|
| Partial support.<br/>Only the Javascript part to fetch the data is present.<br/>The products are not shown on the page | :white_check_mark: Full support |


### Implementation Details

For the **Product** page it's used the _Related Products_ Algolia Recommend model[^1].

For the **Shopping Cart** page it's used the _Frequently Bought Together_ Algolia Recommend model[^2].

[^1]: https://www.algolia.com/doc/guides/algolia-recommend/overview/#related-products
[^2]: https://www.algolia.com/doc/guides/algolia-recommend/overview/#frequently-bought-together
