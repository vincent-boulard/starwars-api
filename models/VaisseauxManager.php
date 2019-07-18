<?php
	/**
	 * Created by PhpStorm.
	 * User: vincent
	 * Date: 15/07/19
	 * Time: 14:18
	 */

	class VaisseauxManager
	{
		public function getVaisseaux() {
			try {
				$curl = curl_init();

				curl_setopt($curl, CURLOPT_URL, "https://swapi.co/api/starships/");
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

				$result = json_decode(curl_exec($curl));

				curl_close($curl);
			} catch(\Exception $e) {
				$result = $e->getMessage();
			}

			return $result;
		}

		public function getNbVaisseaux() {
			try {
				$result = $this->getVaisseaux()->count;
			} catch(\Exception $e) {
				$result = $e->getMessage();
			}

			return $result;
		}

		public function getAllVaisseaux() {
		    $nbVaisseaux = $this->getNbVaisseaux();
		    $nbFonction = $nbVaisseaux / 10;

		    $allVaisseaux = [];

            try {
                for($i = 1; $i <= $nbFonction; $i++)
                $curl = curl_init(); {
                    curl_setopt($curl, CURLOPT_URL, "https://swapi.co/api/starships/?page=".$i);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

                    $result = json_decode(curl_exec($curl));

                    curl_close($curl);

                    array_push($allVaisseaux, $result);
                }
            } catch(\Exception $e) {
                $result = $e->getMessage();
            }

            return $allVaisseaux;
        }

		public function getNextPage() {
			try {
				$result = $this->getVaisseaux()->next;
			} catch(\Exception $e) {
				$result = $e->getMessage();
			}

			return $result;
		}
		public function getPreviousPage() {
			try {
				$result = $this->getVaisseaux()->previous;
			} catch(\Exception $e) {
				$result = $e->getMessage();
			}

			return $result;
		}

		public function getResultVaisseaux() {
			try {
				$result = $this->getVaisseaux()->results;
			} catch(\Exception $e) {
				$result = $e->getMessage();
			}

			return $result;
		}

		public function getNamePilots($url) {
			try {
				$curl = curl_init();

				curl_setopt($curl, CURLOPT_URL, $url);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

				$result = json_decode(curl_exec($curl))->name;

				curl_close($curl);
			} catch(\Exception $e) {
				$result = $e->getMessage();
			}

			return $result;
		}
	}