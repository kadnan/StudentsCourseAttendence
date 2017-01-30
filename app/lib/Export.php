<?php

namespace App\lib;

/**
 * To export data into downloadable file formats like CSV
 * Class Export
 * @package App\lib
 */
class Export {

	public function toCSV( Array $data, String $fileName = 'export.csv' ) {
		$f = fopen( 'php://memory', 'w' );
		foreach ( $data as $value ) {
			fputcsv( $f, $value, ',' );
		}
		fseek( $f, 0 );
		header( 'Content-Type: application/csv' );
		header( 'Content-Disposition: attachment; filename="' . $fileName . '";' );
		fpassthru( $f );
		exit;
	}
}