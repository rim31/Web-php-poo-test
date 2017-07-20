<?php
abstract class Animal
{
	abstract public function attack();

	protected function _whoIs()
	{
		return 'I am a ';
	}

	public function eat($food)
	{
		return 'I love '.$food;
	}

}


class Dog extends Animal
{
	public function attack()//on remet la methode attack, qui fait rien
	{
		return;
	}

	public function saySomething()
	{
		return parent::_whoIs().'dog';
	}
}

$animal = new Dog();//faire appel a la classe Dog, plutot que Animal
echo $animal->eat('bones');

$dog = new Dog();
echo $dog->saySomething(). ' and ' . $dog->eat('bones');

 ?>
