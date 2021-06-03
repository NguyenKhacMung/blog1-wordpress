<?php

// use ShapedPlugin\Weather\Admin\framework\classes\SPLW;
if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access directly.

		SPLW::createSection(
			'sp_location_weather_generator',
			array(
				'title'  => __( 'Display Options', 'location-weather' ),
				'icon'   => '<span><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="14px" width="14px" viewBox="0 0 174.239 174.239" style="enable-background:new 0 0 174.239 174.239;"xml:space="preserve"><g><g><path d="M174.239,174.239H96.945V96.945h77.294V174.239z M111.88,159.305h47.425V111.88H111.88V159.305z"/></g><g><path d="M77.294,174.239H0V96.945h77.294V174.239z M14.935,159.305H62.36V111.88H14.935V159.305z"/></g><g><path d="M174.239,77.294H96.945V0h77.294V77.294z M111.88,62.36h47.425V14.935H111.88V62.36z"/></g><g><path d="M77.294,77.294H0V0h77.294V77.294z M14.935,62.36H62.36V14.935H14.935V62.36z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>',
				'fields' => array(
					array(
						'id'    => 'lw-display-heading',
						'class' => 'splw-display-heading',
						'type'  => 'subheading',
						'title' => __( 'Display Options', 'location-weather' ),
					),
					array(
						'id'         => 'lw-title',
						'type'       => 'switcher',
						'title'      => __( 'Weather Title', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'              => 'lw_title_margin',
						'type'            => 'spacing',
						'title'           => __( 'Weather Title Margin', 'location-weather' ),
						'all_icon'        => '<i class="fa fa-long-arrow-down"></i>',
						'units'           => array(
							'px',
						),
						'all_placeholder' => 'margin',
						'default'         => array(
							'top'    => '0',
							'right'  => '0',
							'bottom' => '20',
							'left'   => '0',
						),
						'dependency'      => array(
							'lw-title',
							'==',
							'true',
							true,
						),
						'help'            => 'Set margin for the weather title.Default value is 20px for bottom margin.',
					),
					array(
						'id'         => 'lw-date',
						'type'       => 'switcher',
						'title'      => __( 'Date', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-time-format',
						'class'      => 'splw_custom_button_fields',
						'type'       => 'button_set',
						'title'      => __( 'Time Format', 'location-weather' ),
						'options'    => array(
							'12' => __( '12', 'location-weather' ),
							'24' => __( '24', 'location-weather' ),
						),
						'default'    => '12',
						'dependency' => array(
							'lw-date',
							'==',
							'true',
							true,
						),
					),
					array(
						'id'      => 'lw-forecast-day',
						'class'   => 'splw_forecast_days',
						'type'    => 'select',
						'title'   => 'Forecast Days',
						'desc'    => __( 'To unlock the forecasting weather settings, <a href="https://shapedplugin.com/plugin/location-weather-pro/" target="_blank"><b>Upgrade To Pro!</b></a>', 'location-weather' ),
						'options' => array(
							'' => __( 'Up to 16 days (Pro) ', 'location-weather' ),
						),
						'default' => ' ',
					),
					array(
						'id'    => 'lw-temperature-heading',
						'type'  => 'subheading',
						'title' => __( 'TEMPERATURE', 'location-weather' ),
					),
					array(
						'id'         => 'lw-icon',
						'type'       => 'switcher',
						'title'      => __( 'Weather Condition Icon', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-temperature',
						'type'       => 'switcher',
						'title'      => __( 'Temperature', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-display-temp-scale',
						'type'       => 'switcher',
						'title'      => __( 'Display Temperature Scale', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
						'dependency' => array( 'lw-temperature', '==', 'true' ),

					),
					array(
						'id'         => 'lw-high-temperature',
						'class'      => 'splw_show_hide',
						'type'       => 'switcher',
						'title'      => __( 'Highest Temperature', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-low-temperature',
						'class'      => 'splw_show_hide',
						'type'       => 'switcher',
						'title'      => __( ' Lowest Temperature', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-real-feel',
						'class'      => 'splw_show_hide',
						'type'       => 'switcher',
						'title'      => __( 'Real Feel', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-short-description',
						'type'       => 'switcher',
						'title'      => __( 'Weather Description', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'    => 'lw-climate-heading',
						'type'  => 'subheading',
						'title' => __( 'WEATHER UNITS', 'location-weather' ),
					),
					array(
						'id'         => 'lw-pressure',
						'type'       => 'switcher',
						'title'      => __( 'Pressure', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-humidity',
						'class'      => 'splw_show_hide',
						'type'       => 'switcher',
						'title'      => __( 'Humidity', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-wind',
						'type'       => 'switcher',
						'title'      => __( 'Wind', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-icon-color',
						'class'      => 'splw_icon_color',
						'type'       => 'color',
						'title'      => __( 'Weather Icon Color', 'location-weather' ),
						'default'    => '#dfe6e9',
						'dependency' => array( 'lw-humidity', '==', 'true' ),
					),
					array(
						'id'         => 'lw-precipitation',
						'class'      => 'splw_show_hide',
						'type'       => 'switcher',
						'title'      => __( 'Precipitation', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-wind-gusts',
						'class'      => 'splw_show_hide',
						'type'       => 'switcher',
						'title'      => __( 'Wind Gusts', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-uv-index',
						'class'      => 'splw_show_hide',
						'type'       => 'switcher',
						'title'      => __( 'UV Index', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'    => 'lw-misc-heading',
						'type'  => 'subheading',
						'title' => __( 'MISCELLANEOUS', 'location-weather' ),
					),
					array(
						'id'         => 'lw-visibility',
						'type'       => 'switcher',
						'title'      => __( 'Visibility', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-sunrise',
						'type'       => 'switcher',
						'title'      => __( 'Sunrise', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-sunset',
						'type'       => 'switcher',
						'title'      => __( 'Sunset', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
					array(
						'id'         => 'lw-attribution',
						'type'       => 'switcher',
						'title'      => __( 'Weather Attribution', 'location-weather' ),
						'default'    => true,
						'text_on'    => __( 'Show', 'location-weather' ),
						'text_off'   => __( 'Hide', 'location-weather' ),
						'text_width' => 75,
					),
				),
			)
		);
