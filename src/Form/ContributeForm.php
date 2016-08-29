<?php
/**
 * @file
 * Contains \Drupal\reservation_form\Form\ContributeForm.
 */

namespace Drupal\reservation_form\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;

/**
 * Contribute form.
 */
class ContributeForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'reservation_form_contribute_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['first_name'] = array(
      '#type' => 'textfield',
      '#title' => t('First Name'),
      '#required' => TRUE,
    );
    $form['last_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Last Name'),
      '#required' => TRUE,
    );
    $form['Email'] = array(
      '#type' => 'textfield',
      '#title' => t('Email'),
      '#required' => TRUE,
    );
    $form['contact_phone_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Contact Phone'),
      '#required' => TRUE,
    );
    $form['best_time'] = array(
      '#type' => 'fieldset',
      '#title' => t('Best Time to Contact You'),
    );
    $form['best_time']['best_hour'] = array(
      '#type' => 'select',
      '#options' => array (
        0 => t('Hour'),
        1 => t('01'),
        2 => t('02'),
        3 => t('03'),
        4 => t('04'),
        5 => t('05'),
        6 => t('06'),
        7 => t('07'),
        8 => t('08'),
        9 => t('09'),
        10 => t('10'),
        11 => t('11'),
        12 => t('12'),
      ),
    );
    $form['best_time']['best_min'] = array(
      '#type' => 'select',
      '#options' => array (
        1 => t('Minute'),
        00 => t('00'),
        30 => t('30'),
      ),
      '#default_value' => 'Minute',
    );
    $form['best_time']['best_a&p'] = array(
      '#type' => 'radios',
      '#options' => array (
        0 => t('am'),
        1 => t('pm'),
      ),
    );
    $form['bartenders'] = array(
      '#type' => 'select',
      '#title' => t('Bartenders'),
      '#options' => array (
        1 => t('1'),
        2 => t('2'),
        3 => t('3'),
        4 => t('4'),
      ),
      '#default_value' => '1',
      '#required' => TRUE,
    );
    $form['servers'] = array(
      '#type' => 'radios',
      '#title' => t('Helpers'),
      '#options' => array (
        0 => t('Bar Back'),
        1 => t('Cocktail / Food Passing'),
      ),
    );
    $form['bar_service'] = array(
      '#type' => 'radios',
      '#title' => t('Bar Service'),
      '#options' => array (
        0 => t('Full Service (Beer, Wine and Liquor)'),
        1 => t('Pour Service (Beer, Wine and Soft Beverages)'),
        2 => t('Non Alcoholic Beverage Bar (Infused waters, teas and/or juices)'),
      ),
    );
    $form['complimentary_servics'] = array(
      '#type' => 'radios',
      '#title' => t('Complimentary Services'),
      '#options' => array (
        0 => t('Turnkey Service'),
        1 => t('Bar Mixer Package'),
        2 => t('Alcohol Selection and Delivery Service'),
      ),
    );
    $form['rental_servics'] = array(
      '#type' => 'radios',
      '#title' => t('Rental Services Needed'),
      '#options' => array (
        0 => t('Yes'),
        1 => t('No'),
      ),
    );
    $form['type_celebration'] = array(
      '#type' => 'radios',
      '#title' => t('Type of Celebration'),
      '#options' => array (
        0 => t('Charity/Fundraiser'),
        1 => t('Corporate Event'),
        2 => t('Private Party'),
        3 => t('VIP/Red Carpet'),
        4 => t('Wedding Reception'),
        5 => t('Other'),
      ),
      '#required' => TRUE,
    );
    $form['event_location'] = array(
      '#type' => 'radios',
      '#title' => t('Event Location'),
      '#options' => array (
        0 => t('Indoor Venue'),
        1 => t('Residence'),
        2 => t('Public Location'),
        3 => t('Outdoor Venue'),
        4 => t('Ranch'),
      ),
      '#required' => TRUE,
    );
    $form['street_address'] = array(
      '#type' => 'textfield',
      '#title' => t('Street Address'),
      '#required' => TRUE,
    );
    $form['city'] = array(
      '#type' => 'textfield',
      '#title' => t('City'),
      '#required' => TRUE,
    );
    $form['zip_code'] = array(
      '#type' => 'textfield',
      '#title' => t('Zip Code'),
      '#required' => TRUE,
    );
    $form['event_date'] = array(
      '#type' => 'date',
      '#title' => t('Event Date'),
      '#required' => TRUE,
    );
    $form['start_time'] = array(
      '#type' => 'fieldset',
      '#title' => t('Event Start Time'),
    );
    $form['start_time']['best_hour'] = array(
      '#type' => 'select',
      '#options' => array (
        0 => t('Hour'),
        1 => t('01'),
        2 => t('02'),
        3 => t('03'),
        4 => t('04'),
        5 => t('05'),
        6 => t('06'),
        7 => t('07'),
        8 => t('08'),
        9 => t('09'),
        10 => t('10'),
        11 => t('11'),
        12 => t('12'),
      ),
    );
    $form['start_time']['best_min'] = array(
      '#type' => 'select',
      '#options' => array (
        1 => t('Minute'),
        00 => t('00'),
        30 => t('30'),
      ),
      '#default_value' => 'Minute',
    );
    $form['start_time']['best_a&p'] = array(
      '#type' => 'radios',
      '#options' => array (
        0 => t('am'),
        1 => t('pm'),
      ),
    );
    $form['end_time'] = array(
      '#type' => 'fieldset',
      '#title' => t('Event End Time'),
    );
    $form['end_time']['best_hour'] = array(
      '#type' => 'select',
      '#options' => array (
        0 => t('Hour'),
        1 => t('01'),
        2 => t('02'),
        3 => t('03'),
        4 => t('04'),
        5 => t('05'),
        6 => t('06'),
        7 => t('07'),
        8 => t('08'),
        9 => t('09'),
        10 => t('10'),
        11 => t('11'),
        12 => t('12'),
      ),
    );
    $form['end_time']['best_min'] = array(
      '#type' => 'select',
      '#options' => array (
        1 => t('Minute'),
        00 => t('00'),
        30 => t('30'),
      ),
      '#default_value' => 'Minute',
    );
    $form['end_time']['best_a&p'] = array(
      '#type' => 'radios',
      '#options' => array (
        0 => t('am'),
        1 => t('pm'),
      ),
    );
    $form['number_of_guests'] = array(
      '#type' => 'radios',
      '#title' => t('Number of Guests'),
      '#options' => array (
        0 => t('Less than 49'),
        1 => t('50-250'),
        2 => t('251-500+'),
      ),
    );
    $form['additional_details'] = array(
      '#type' => 'textarea',
      '#title' => t('Additional Details'),
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $info = null;
    foreach ($form_state->getValues() as $key => $value) {
      if ($key != 'form_build_id' && $key != 'submit' && $key != 'form_token' && $key != 'form_id' && $key != 'op') {
        $info = $info . '<p>' . $key . ': ' . $value . '</p>';
      }
    }
    $params['message']['body'] = $info;
    \Drupal::service('plugin.manager.mail')->mail('reservation_form', 'Reservation', 'info@tiltevent.com, sheffield408@gmail.com, lsmat@smatwebdesign.com', 'en', $params);
    drupal_set_message($this->t('Your form has been submitted, we will contact you soon.'));

  }

}
?>
