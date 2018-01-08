<?php

namespace App;


class ToDo extends Model
{
    //

	public static function persist()
	{
		$instance = (new static)->build();
		$instance->save(); 
		return $instance;  
	}



	protected function build()
	{
		return $this->fill([
			'item' => request()->item, 
		]); 
	}


}
