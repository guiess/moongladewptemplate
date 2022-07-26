<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Payment')
  ->set_icon('dashicons-money-alt')
  ->add_tab('Setup STRIPE access', [
    Field::make('text', 'stripe_publishable_key_test', 'Publishable key TEST')
      ->set_width(50),
    Field::make('text', 'stripe_secret_key_test', 'Secret key TEST')
      ->set_width(50),
    Field::make('text', 'stripe_publishable_key_live', 'Publishable key LIVE')
      ->set_width(50),
    Field::make('text', 'stripe_secret_key_live', 'Secret key LIVE')
      ->set_width(50),
    // Field::make('text', 'contact_email', 'Contact email')
    //   ->set_width(50),
    // Field::make('text', 'facebook_domain_verification', 'Facebook domain verification')
    Field::make('radio', 'settings_payment_mode', 'Select Mode')
      ->add_options(array(
        'test' => 'Test',
        'live' => 'Live',
      ))
  ])

  ->add_tab('Setup PAYPAL access', [
    Field::make('text', 'paypal_client_id_sandbox', 'Sandbox API Client ID')
      ->set_width(50),
    Field::make('text', 'paypal_secret_sandbox', 'Sandbox API SECRET')
      ->set_width(50),
    Field::make('text', 'paypal_client_id_live', 'Live API Client ID')
      ->set_width(50),
    Field::make('text', 'paypal_secret_live', 'Live API SECRET')
      ->set_width(50),
    // Field::make('text', 'contact_email', 'Contact email')
    //   ->set_width(50),
    // Field::make('text', 'facebook_domain_verification', 'Facebook domain verification')
    Field::make('radio', 'settings_paypal_mode', 'Select Mode')
      ->add_options(array(
        'sandbox' => 'Sandbox',
        'live' => 'Live',
      ))
  ]);
