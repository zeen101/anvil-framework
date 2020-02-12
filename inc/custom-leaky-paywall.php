<?php

// don't allow users to access WordPress admin
add_action('admin_init', 'endo_hide_dashboard');
function endo_hide_dashboard() {
 if ( ! current_user_can( 'delete_others_pages' ) && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {
  	wp_redirect(home_url()); exit;
  }
}

// remove admin bar from non admin users
add_action('after_setup_theme', 'endo_remove_admin_bar');
function endo_remove_admin_bar() {
	if (!current_user_can('delete_others_pages') && !is_admin()) {
		show_admin_bar(false);
	}
}


function zeen101_get_states() {

	$states = array(
		0 => 'Alabama',
		1 => 'Alaska',
		2 => 'Arizona',
		3 => 'Arkansas',
		4 => 'California',
		5 => 'Colorado',
		6 => 'Connecticut',
		7 => 'Delaware',
		8 => 'Florida',
		9 => 'Georgia',
		10 => 'Hawaii',
		11 => 'Idaho',
		12 => 'Illinois',
		13 => 'Indiana',
		14 => 'Iowa',
		15 => 'Kansas',
		16 => 'Kentucky',
		17 => 'Louisiana',
		18 => 'Maine',
		19 => 'Maryland',
		20 => 'Massachusetts',
		21 => 'Michigan',
		22 => 'Minnesota',
		23 => 'Mississippi',
		24 => 'Missouri',
		25 => 'Montana',
		26 => 'Nebraska',
		27 => 'Nevada',
		28 => 'New Hampshire',
		29 => 'New Jersey',
		30 => 'New Mexico',
		31 => 'New York',
		32 => 'North Carolina',
		33 => 'North Dakota',
		34 => 'Ohio',
		35 => 'Oklahoma',
		36 => 'Oregon',
		37 => 'Pennsylvania',
		38 => 'Rhode Island',
		39 => 'South Carolina',
		40 => 'South Dakota',
		41 => 'Tennessee',
		42 => 'Texas',
		43 => 'Utah',
		44 => 'Vermont',
		45 => 'Virginia',
		46 => 'Washington',
		47 => 'West Virginia',
		48 => 'Wisconsin',
		49 => 'Wyoming'
	);

	return $states;
}


function zeen101_get_countries() {

	$countries = array("United States", "Canada", "Afghanistan", "Aland Islands", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Barbuda", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Trty.", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Caicos Islands", "Cambodia", "Cameroon", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Territories", "Futuna Islands", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard", "Herzegovina", "Holy See", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Jan Mayen Islands", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea", "Korea (Democratic)", "Kuwait", "Kyrgyzstan", "Lao", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "McDonald Islands", "Mexico", "Micronesia", "Miquelon", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "Nevis", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Palestinian Territory, Occupied", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Principe", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Barthelemy", "Saint Helena", "Saint Kitts", "Saint Lucia", "Saint Martin (French part)", "Saint Pierre", "Saint Vincent", "Samoa", "San Marino", "Sao Tome", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia", "South Sandwich Islands", "Spain", "Sri Lanka", "Sudan", "Suriname", "Svalbard", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "The Grenadines", "Timor-Leste", "Tobago", "Togo", "Tokelau", "Tonga", "Trinidad", "Tunisia", "Turkey", "Turkmenistan", "Turks Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "US Minor Outlying Islands", "Uzbekistan", "Vanuatu", "Vatican City State", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (US)", "Wallis", "Western Sahara", "Yemen", "Zambia", "Zimbabwe");

	return $countries;
}


// add_filter( 'leaky_paywall_filter_is_restricted', 'zeen101_allow_access_for_category', 10, 3 );

function zeen101_allow_access_for_category( $is_restricted, $restriction_settings, $post_id ) {

	if ( !is_single( $post_id ) ) {
		return $is_restricted;
	}

	$allowed_category_name = 'Free';
	$categories = get_the_category( $post_id );

	foreach( $categories as $category ) {

		if ( $category->name == $allowed_category_name ) {
			return false; // do not restrict this post
		}
	}

	return $is_restricted;

}