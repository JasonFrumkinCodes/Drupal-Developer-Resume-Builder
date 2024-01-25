<?php

namespace Drupal\developer_resume\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Personal/Professional Details' block.
 *
 * @Block(
 *   id = "applicant_details_block",
 *   admin_label = @Translation("My Details Block")
 * )
 */
class PersonalDetailsBlock extends BlockBase {

  public function build() {

    $output = '';
    $config = \Drupal::config('developer_resume.settings'); 
    $applicant_full_name = $config->get('developer_resume.applicant_full_name');
    $career_path_title = $config->get('developer_resume.career_path_title');
    $applicant_email_address = $config->get('developer_resume.applicant_email_address');
    $applicant_phone_number = $config->get('developer_resume.applicant_phone_number');
    $applicant_city_state = $config->get('developer_resume.applicant_city_state');
    $applicant_linkedin_profile = $config->get('developer_resume.applicant_linkedin_profile');
    $applicant_github_url = $config->get('developer_resume.applicant_github_url');
    $output .= "<div id='personal_details_box'>";
        $output .= "<div class='applicant_full_name'>".$applicant_full_name."</div>";
        $output .= "<div class='career_path_title'>".$career_path_title."</div>";
        $output .= "<div class='applicant_email_address'><i class='fa-regular fa-envelope'></i>".$applicant_email_address."</div>";
        $output .= "<div class='applicant_phone_number'><i class='fa-solid fa-mobile-screen-button'></i>".$applicant_phone_number."</div>";
        $output .= "<div class='fa-location-dot'><i class='fa-solid fa-location-dot'></i>".$applicant_city_state."</div>";
        $output .= "<div class='applicant_linkedin_profile'><i class='fa-brands fa-linkedin'></i><div class='linkedin_profile'>".$applicant_linkedin_profile."</div></div>";
        $output .= "<div class='applicant_github_url'><i class='fa-brands fa-github'></i>".$applicant_github_url."</div>";
    $output .= "</div>";
  	return [
      '#type' => 'markup',
      '#markup' => $output
    ];
    return $output;
  }
}