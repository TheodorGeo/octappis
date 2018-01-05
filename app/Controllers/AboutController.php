<?php



class AboutController 
{
	public function index()
	{
		return view('about');
	}

	public function post()
	{
		echo "post here";
	}

	public function pass()
	{
		return redirect_to('API_home');
	}
}

