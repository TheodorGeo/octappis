<?php



class AboutController 
{
	public function index()
	{
		return view('about');
	}

	public function post($request)
	{
		$test = $request->post_multi(['date','id','name']);
		print_r($test);
		return view('profile');
	}

	public function pass()
	{
		$params = array([
				'id' => 2,	
				'date'=> 2,
				'num'=>3,
				'user'=>'theodor'
				
			]);
		return redirect_to('API_Home', $params);
	}
}

