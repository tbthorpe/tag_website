<?php
class Tag extends AppModel {
	var $name = 'Tag';
	var $displayField = 'id';
	var $actsAs = array('Containable');
	var $components = array('Twilio.Twilio');
	// public function getPlayers(){
	// 	return $this->find('all');
	// }
	public function getIt(){

		$lasttag = $this->find('all',array(
				'order'=>'Tag.id DESC',
				'limit'=>1
				// 'contains' => array('Player', array('conditions'=>array('Player.id'=>'Tag.tagged_id')))
			)
		);
		return $lasttag[0]['Tag']['tagged_id'];

	}

	public function getTags($id,$tagger = 'true', $count='false'){
		if ($count){
			if ($tagger){
				return $this->find('count',array('conditions'=>array('Tag.tagger_id'=>$id)));	
			} else {
				return $this->find('count',array('conditions'=>array('Tag.tagged_id'=>$id)));
			}
		} else {
			if ($tagger){
				return $this->find('all',array('conditions'=>array('Tag.tagger_id'=>$id), 'order'=>'Tag.id DESC'));	
			} else {
				return $this->find('all',array('conditions'=>array('Tag.tagged_id'=>$id), 'order'=>'Tag.id DESC'));	
			}
		}
	}

	public function alertMe(){
		App::import('Vendor', 'twilio');	

			$ApiVersion = "2010-04-01";
			$AccountSid = "NO";
			$AuthToken = "NO";

			//$client = new TwilioRestClient($AccountSid, $AuthToken);

			//$people = array(
			//	"+15857348692" => "Tank",
			//);
			$people = array(
				"+15857348692" => "Tank",
				"+15183682399" => "Squirrel",
				"+12034447962" => "Mazur",
				"+19173304849" => "Kenny",
				"+16317484509" => "Squeege",
				"+19144007192" => "Ryan",
				"+16463001424" => "Smash",
				"+19175535736" => "Brown",
				"+18455370586" => "B-Ri",
				//"+15183301659" => "Dasky",
				"+19148048843" => "Ferri",
				"+18454175496" => "Liv",
				"+13153913276" => "Feetch",
				"+16073290295" => "Ace",
				"+15852165581" => "Slocum",
			);
 
    // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    foreach ($people as $number => $name) {
 			if ($name !== $tagged){
 				//$response = $client->request("/$ApiVersion/Accounts/$AccountSid/Messages", 
				//	"POST", array(
				//	"To" => $number,
				//	"From" => "646-630-7765",
                    "Body" => "March is tomorrow. That means Tag is tomorrow. Good luck, gentlemen. lol dasky quit.",
				//	"MediaUrl" => "http://www.markderksen.ca/wp-content/uploads/2013/06/tumblr_lglb2dJGeL1qzoxl6o1_500.jpg",
				//));

				if($response->IsError) {
					echo "{$response->ErrorMessage}";	
				} else {
					echo 'Message sent to : ' . $name . "<br/>";
				}
 			}    
		}
		
	}

	public function alertALLTheGuys($tagger,$tagged){
		App::import('Vendor', 'twilio');	

			$ApiVersion = "2010-04-01";
			$AccountSid = "NOPE";
			$AuthToken = "NOPE";

			//$client = new TwilioRestClient($AccountSid, $AuthToken);


			$people = array(
				"+15857348692" => "Tank",
				"+15183682399" => "Squirrel",
				"+12034447962" => "Mazur",
				"+19173304849" => "Kenny",
				"+16317484509" => "Squeege",
				"+19144007192" => "Ryan",
				"+16463001424" => "Smash",
				"+19175535736" => "Brown",
				"+18455370586" => "B-Ri",
				//"+15183301659" => "Dasky",
				"+19148048843" => "Ferri",
				"+18454175496" => "Liv",
				"+13153913276" => "Feetch",
				"+16073290295" => "Ace",
				//"+15852165581" => "Slocum",
			);
 
    // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    foreach ($people as $number => $name) {
 			if ($name !== $tagged){
 				//$response = $client->request("/$ApiVersion/Accounts/$AccountSid/SMS/Messages", 
				//	"POST", array(
				//	"To" => $number,
				//	"From" => "646-762-1311",
				//	"Body" => "Yo " . $name . ", " . $tagger . " just tagged " . $tagged,
				//));

				if($response->IsError) {
					echo "{$response->ErrorMessage}";	
				} else {
					echo 'Message sent to : ' . $name . "<br/>";
				}
 			}    
		}
		
	}

	// public $hasOne = array(
	// 	'Tagger'=>array(
	// 		'className' => 'Player',
	// 		'foreignKey' => 'player_id'),
	// 	);

}
