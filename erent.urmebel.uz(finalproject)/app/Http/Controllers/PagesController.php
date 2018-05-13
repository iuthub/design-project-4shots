<?php
namespace App\Http\Controllers;

class PagesController extends Controller{
	
	public function getAbout(){
		$name='Malika';
		$lastname='Juraeva';
		$fullname=$name." ". $lastname;
		$subjects['major']='Internet Programming';
		$subjects['selective']='Academic English 4';

		return view('pages.about')-> with('name', $name)-> withFullname($fullname)-> with('subjects', $subjects);
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function getHome(){
		return view('pages.welcome');
	}
	
	public function getAddpost()
	{ 
	   
	    return view('pages.addpost');
	}
	

	public function getSummerHouse(){
	    	return redirect('categories/Summer Cottage');
	}
	
	

	public function getRecreationAreas(){
        	return redirect('categories/Recreation areas');
	}
	public function getSanatoriums(){
        	return redirect('categories/Sanatoriums');
	}
	
	
}