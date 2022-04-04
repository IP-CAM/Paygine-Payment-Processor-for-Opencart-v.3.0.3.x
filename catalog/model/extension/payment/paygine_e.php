<?php

class ModelExtensionPaymentPayginee extends Model {

  	public function getMethod($address, $total) {
		$this->load->language('extension/payment/paygine_e');
  		$method_data = array(
    		'code'       => 'paygine_e',
    		'title'      => $this->language->get('text_title'),
    		'terms'      => '',
			'sort_order' => $this->config->get('paygine_e_sort_order')
  		);
    	return $method_data;
  	}

}