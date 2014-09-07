<?php

class Asset extends AppModel {
	var $name = 'Asset';
	// var $actsAs = array(
	//     'MeioUpload' => array(
	//         'filename' => array(
	//             'dir' => 'images', //webroot/uploads
	//         )
	//     )
	// );
	
	// var $validate = array(
	//     'filename' => array(
	//         'Empty' => array('check' => false),
	//     )
	// );

var $actsAs = array(
				'Containable',
        'Upload.Upload' => array(
            'filename' => array(
            		'pathMethod' 	=> 'flat',
            		'path' 				=> '{ROOT}webroot{DS}files{DS}player_pics{DS}'
            	)
        )
    );

}
