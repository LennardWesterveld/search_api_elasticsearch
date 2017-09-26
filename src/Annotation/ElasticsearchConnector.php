<?php

namespace Drupal\search_api_elasticsearch\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a connector plugin annotation object.
 *
 * Condition plugins provide generalized conditions for use in other
 * operations, such as conditional block placement.
 *
 * Plugin Namespace: Plugin\ElasticsearchConnector
 *
 * @see \Drupal\search_api_elasticsearch\ElasticsearchConnector\ElasticsearchConnectorManager
 * @see \Drupal\search_api_elasticsearch\ElasticsearchConnector\ElasticsearchConnectorInterface
 * @see \Drupal\search_api_elasticsearch\ElasticsearchConnector\ElasticsearchConnectorPluginBase
 *
 * @ingroup plugin_api
 *
 * @Annotation
 */
class ElasticsearchConnector extends Plugin {

  /**
   * The Elasticsearch connector plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the Elasticsearch connector.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $label;

  /**
   * The backend description.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $description;

}
