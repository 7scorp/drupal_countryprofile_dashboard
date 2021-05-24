<?php
/**
 * @file
 * Contains \Drupal\countryprofile\Controller\CountryProfileController.
 */

namespace Drupal\mod_countryprofile\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase{
    public function content(){
        return array(
            '#type' => 'markup',
            '#markup' => t('This page displays the aggregated WDPA info for the Caribbean as a bloc'),
        );
    }
}
