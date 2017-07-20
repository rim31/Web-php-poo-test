<?php
abstract class Animal //class abstraite
{
	abstract public function attack();//methode abstraite

	private function _whoIs()
	{
		return 'I am a ';
	}

	private function eat($food)
	{
		return 'I love '.$food;
	}

}

class Dog extends Animal
{
	public function saySomething()
	{
		return parent::_whoIs().'dog';
	}
}

$animal = new Animal();//on peut pas instancier une classe abstaite
echo $animal->eat('bones');

$dog = new Dog();
echo $dog->saySomething(). ' and ' . $dog->eat('bones');

 ?>
