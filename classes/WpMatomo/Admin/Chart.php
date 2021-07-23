<?php

namespace WpMatomo\Admin;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // if accessed directly
}

class Chart {

	public function register_hooks() {
		add_action( 'load_chartjs' , array ( $this, 'load_chartjs' ) );
	}

	public function load_chartjs() {
		wp_enqueue_script('matomo_chart.js', plugins_url( 'node_modules/chart.js/dist/chart.js') );
	}
}