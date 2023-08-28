<?php

namespace App\Helpers;

class Slug {

	public static $delimiter_objs = '--';
	// public static $delimiter_fields = ',';

	public static function generate($url) {

		$slugs = collect([]);

		$full_parts = collect(explode('/', $url));

		foreach ($full_parts as $full_part) {

			if (!empty($full_part)) {

				$object_part = explode(self::$delimiter_objs, $full_part);

				$title = $object_part[0];
				// $fields = collect(explode(self::$delimiter_fields, $object_part[1]));
				$fields = $object_part[1];
				$slugs->put($title, $fields);
			}
		}

		return $slugs;
	}
}