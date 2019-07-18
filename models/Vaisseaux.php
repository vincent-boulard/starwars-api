<?php
	/**
	 * Created by PhpStorm.
	 * User: vincent
	 * Date: 15/07/19
	 * Time: 15:01
	 */

	class Vaisseaux
	{
		private $name;

		private $price;

		private $pilots = [];

		public function __construct($name, $price)
		{
			$this->name = $name;
			$this->price = $price;
		}

		/**
		 * @return mixed
		 */
		public function getName()
		{
			return $this->name;
		}

		/**
		 * @param mixed $name
		 */
		public function setName($name)
		{
			$this->name = $name;
		}

		/**
		 * @return mixed
		 */
		public function getPrice()
		{
			return $this->price;
		}

		/**
		 * @param mixed $price
		 */
		public function setPrice($price)
		{
			$this->price = $price;
		}

		/**
		 * @return array
		 */
		public function getPilots()
		{
			return $this->pilots;
		}

		/**
		 * @param array $pilots
		 */
		public function setPilots($pilots)
		{
			$this->pilots = $pilots;
		}
	}