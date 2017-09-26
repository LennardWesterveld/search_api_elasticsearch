<?php

namespace Drupal\search_api_elasticsearch\Plugin\ElasticsearchConnector;

use Drupal\search_api_elasticsearch\ElasticsearchConnector\ElasticsearchConnectorPluginBase;

/**
 * Standard Elasticsearch connector.
 *
 * @ElasticsearchConnector(
 *   id = "standard",
 *   label = @Translation("Standard"),
 *   description = @Translation("A standard connector usable for local installations of the standard Elasticsearch distribution.")
 * )
 */
class StandardElasticsearchConnector extends ElasticsearchConnectorPluginBase {

}
