<?php

namespace Drupal\developer_resume\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Career Objectives' block.
 *
 * @Block(
 *   id = "career_objectives_block",
 *   admin_label = @Translation("Career Objectives")
 * )
 */
class CareerObjectivesBlock extends BlockBase {

  public function build() {
    $output = '';
    $config = \Drupal::config('developer_resume.settings'); 
    $career_objectives = $config->get('developer_resume.career_objectives')['value'];
    $output .= $career_objectives;
  	return [
      '#type' => 'markup',
      '#markup' => $output
    ];
    return $output;
  }
}