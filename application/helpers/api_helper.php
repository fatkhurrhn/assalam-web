<?php

	function api_generate($response = FALSE, $msg = NULL, $res = NULL)
	{
		return json_encode(array(
						'status'=>($response == TRUE)?'success':'error',
						'date_request'=>date('Y-m-d'),
						'time_request'=>date('H:i:s'),
						'resources'=>$res,
						'success'=>array(
								'title'=>($response == TRUE)?'Success':NULL,
								'message'=>($response == TRUE)?$msg:NULL
							),
						'error'=>array(
								'title'=>($response == FALSE)?'Error Data!':NULL,
								'message'=>($response == FALSE)?$msg:NULL	
							)
					));
	}

	function clean($data = NULL)
	{
		return strip_tags($data);
	}

	function dump($data = NULL)
	{
		print_r('<pre>');
		print_r($data);
		print_r('</pre>');
	}