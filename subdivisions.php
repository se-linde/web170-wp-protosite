<?php
/**
 * @package Hello_Dolly
 * @version 1.6
 */
/*
Plugin Name: Subdivisions
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin; it symbolizes the ennui and alienation and the pressure of conforming to an ever-expanding set of regulations of an entire generation - summed up in one word sung most famously by Geddy Lee: Subdivisions, by the band Rush. When activated you will randomly see a lyric from <cite>Subdivisions</cite> in the upper right of your admin screen on every page. Conform or be cast out!
Author: Matt Mullenweg. Edited by Dwayne Linde.
Version: 1.0
Author URI: http://ma.tt/
*/

function hello_dolly_get_lyric() {
	/** These are the lyrics to Subdivisions, by Rush */
	$lyrics = "Sprawling on the fringes of the city
In geometric order
An insulated border
In between the bright lights
And the far unlit unknown
Growing up it all seems so one-sided
Opinions all provided
The future pre-decided
Detached and subdivided
In the mass production zone
Nowhere is the dreamer or the misfit so alone
(Subdivisions)
In the high school halls
In the shopping malls
Conform or be cast out
(Subdivisions)
In the basement bars
In the backs of cars
Be cool or be cast out
Any escape might help to smooth the unattractive truth
But the suburbs have no charms to soothe the restless dreams of youth
Drawn like moths we drift into the city
The timeless old attraction
Cruising for the action
Lit up like a firefly
Just to feel the living night
Some will sell their dreams for small desires
Or lose the race to rats
Get caught in ticking traps
And start to dream of somewhere
To relax their restless flight
Somewhere out of a memory of lighted streets on quiet nights...";

	// Here we split it into lines
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function hello_dolly() {
	$chosen = hello_dolly_get_lyric();
	echo "<p id='dolly'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_dolly' );

// We need some CSS to position the paragraph
function dolly_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#dolly {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'dolly_css' );

?>
