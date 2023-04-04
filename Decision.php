<?php
/**
Database Fundamentals,Computer Architecture,Distributed Computing Systems,Cyber Security,Networking,Software Development,Programming Skills,Project Management,Computer Forensics Fundamentals,Technical Communication,AI ML,Software Engineering,Business Analysis,Communication skills,Data Science,Troubleshooting skills,Graphics Designing
$questions=[
"Rate your Database Skills",
"Interested in Computer Architecture?",
"Do you have knowledge of Distributed Computing Systems?",
"Experience Cyber Security?",
"Do you have Networking curiosity?",
"Familiar about Software Development?",
"Rate your Programming Skills",
"Rate your Project Management Skills",
"Any Knowledge of Computer Forensics Fundamentals?",
"What about Technical Communication?",
"Any AI ML Experience?",
"Do you interested in Software Engineering",
"Rate your Business Analysis skills",
"Rate your Communication skills",
"Do you know about Data Science",
"What about your Troubleshooting skills ?",
"Rate your Graphics Designing Skills"
]
['Not Interested',
'Poor',
'Beginner',
'Average',
'Intermediate',
'Excellent',
'Professional']
*/
class CosineSimilarity
{
	public static $row_vector = [
		1,
		1,
		1,
		1,
		1,
		1,
		1,
		1,
		1,
		1,
		1,
		1,
		1,
		1,
		1,
		1,
		1
	];
	public static $options = [
		"Not Interested",
		"Poor",
		"Beginner",
		"Average",
		"Intermediate",
		"Excellent",
		"Professional"
	];
	static function get_magnitude($vector)
	{
		$magnitude = 0;
		foreach ($vector as $value) {
			$magnitude += pow($value, 2);
		}
		return sqrt($magnitude);
	}
	static function get_dot_product($vector1, $vector2)
	{
		$dot_product = 0;
		foreach ($vector1 as $i => $value) {
			$dot_product += $value * $vector2[$i];
		}
		return $dot_product;
	}
	static function get_cosine_similarity($vector1, $vector2)
	{
		$dot_product = CosineSimilarity::get_dot_product($vector1, $vector2);
		$magnitude1 = CosineSimilarity::get_magnitude($vector1);
		$magnitude2 = CosineSimilarity::get_magnitude($vector2);
		return (($magnitude1 * $magnitude2) == 0 ? 0 : ($dot_product / ($magnitude1 * $magnitude2)));
	}

	static function compareInput($input)
	{
		$cosine_similarity_values = array(
			"Database Administrator" => [],
			"Application Support Engineer" => [],
			"Cyber Security Specialist" => [],
			"Networking Engineer" => [],
			"Software Developer" => [],
			"API Specialist" => [],
			"Project Manager" => [],
			"Information Security Specialist" => [],
			"Technical Writer" => [],
			"AI ML Specialist" => [],
			"Software tester" => [],
			"Business Analyst" => [],
			"Customer Service Executive" => [],
			"Data Scientist" => [],
			"Helpdesk Engineer" => [],
			"Graphics Designer" => [],
		);
		$file = fopen('./Data.csv', 'r');

		while (($line = fgetcsv($file)) !== FALSE) {
			//$line is an array of the csv elements
			// echo var_dump($line);
			// if ($counter>3) {
				// break;
			// }
			$new_vector = [];
			for ($i = 0; $i < 17; $i++) {
				// CosineSimilarity::$row_vector[$i] = array_search($line[$i], CosineSimilarity::$options);
				if ($line[$i] == $input[$i]) {
					array_push($new_vector, 0);
				} else {
					array_push($new_vector, 1);
					// array_push($new_vector, (array_search($line[$i], CosineSimilarity::$options)-array_search($input[$i], CosineSimilarity::$options)));
				}
			}
			// echo "\n".var_dump($new_vector)."\n";
			// echo CosineSimilarity::get_cosine_similarity(CosineSimilarity::$row_vector, $new_vector);
			// echo "\n".$line[17]."\n";
			// if ((CosineSimilarity::get_cosine_similarity(CosineSimilarity::$row_vector, $new_vector)) > $cosine_similarity_values[$line[17]]) {
				array_push($cosine_similarity_values[$line[17]], (CosineSimilarity::get_cosine_similarity(CosineSimilarity::$row_vector, $new_vector)));
				// $cosine_similarity_values[$line[17]] = (CosineSimilarity::get_cosine_similarity(CosineSimilarity::$row_vector, $new_vector));
			// }
		}
		$ensembled_values=array();
		foreach ($cosine_similarity_values as $key => $value) {
			$ensembled_values[$key]=(max($value)-min($value));
		}
		fclose($file);
		arsort($ensembled_values);
		// arsort($cosine_similarity_values);
		// echo var_dump($cosine_similarity_values);
		return $ensembled_values;
		// return $cosine_similarity_values;
	}
}


// echo CosineSimilarity::get_cosine_similarity(array(1,1,1,1), array(0,1,0,0));


// print_r(CosineSimilarity::compareInput($input));


?>