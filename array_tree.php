<?php
$arr= array(
    'floor1' => Array
        (
             'id' => '1',
            'parent_id' => 0
        ),
    'floor2' => Array
        (
            'id' => '2',
            'parent_id' => 1,
            'children' => Array
                (
                    'siblings1'=> Array
                        (
                            'id' => '3',
                            'parent_id' =>'2', 
                            'children1' => Array
                                (
                                    'cousions1' => Array
                                        (
                                            'id' => '3',
											'parent_id' =>'3', 
                                        )
                                )
                        ),
                   'siblings2'=> Array
                        (
                           'id' => '4',
                            'parent_id' =>'4', 
							'children2' => Array
										(
											'cousions2' => Array
												(
													'id' => '5',
													'parent_id' =>'5', 
												)
										)
                        )
                )
		),	
    'floor3' => Array
        (
			'id' => '3',
            'parent_id' =>'2', 
           'children' => Array
                    (
                         'cousions' => Array
                         (
                            'id' => '6',
							'parent_id' =>'6', 
						 ),
						 'cousions1' => Array
                         (
                             'id' => '7',
							'parent_id' =>'7',
						 ),
						'cousions2' => Array
                        (
                            'id' => '8','parent_id' =>'8',
							'names'	=>array
								(								
								 'id' => '9', 'parent_id' =>'9','name' =>'mangesh'
								),	
                        ),
						'cousions3' => 'naveen',
                     )
        ),
	'floor4' =>'pooja',
	);
	function doAgain($arr){
		foreach($arr as $key=>$value){ //main array
		  //$childArr = array();	  
			if(is_array($value)){ 
			 echo doAgain($value);		 
			}else{
			  echo $value;
			}
		}	

	}
	
	doAgain($arr);