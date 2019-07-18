<?php
	/**
	 * Created by PhpStorm.
	 * User: vincent
	 * Date: 15/07/19
	 * Time: 11:47
	 */

	class VaisseauxController
	{
		private $vaisseauxManager;
		private $view;

		public function __construct($url)
		{
			if(isset($url) && count($url) > 2) {
				throw new \Exception('Page introuvable');
			} else {
				$this->vaisseaux($url[1]);
			}
		}

		private function vaisseaux($tri) {

		    if($tri == 'asc' || $tri == 'desc') {

                $this->vaisseauxManager = new VaisseauxManager();

                $next = $this->vaisseauxManager->getNextPage();
                $previous = $this->vaisseauxManager->getPreviousPage();
                $nbVaisseaux = $this->vaisseauxManager->getNbVaisseaux();
                $vaisseaux = $this->vaisseauxManager->getResultVaisseaux();

                $cost_in_creditsASC = [];
                $cost_in_creditsDESC = [];

                foreach($vaisseaux as $vaisseau) {
                    $cost_in_creditsASC[$vaisseau->name]['cost'] = $vaisseau->cost_in_credits;
                    $cost_in_creditsASC[$vaisseau->name]['pilots'] = $vaisseau->pilots;
                }

                uasort($cost_in_creditsASC, function ($a, $b)
                                                {
                                                    if ($a == $b) {
                                                        return 0;
                                                    }
                                                    return ($a < $b) ? -1 : 1;
                                                });

                foreach($vaisseaux as $vaisseau) {
                    $cost_in_creditsDESC[$vaisseau->name]['cost'] = $vaisseau->cost_in_credits;
                    $cost_in_creditsDESC[$vaisseau->name]['pilots'] = $vaisseau->pilots;
                }

                uasort($cost_in_creditsDESC, function ($a, $b)
                                                {
                                                    if ($a == $b) {
                                                        return 0;
                                                    }
                                                    return ($a > $b) ? -1 : 1;
                                                });

                require_once "views/vaisseaux/vaisseaux.php";

            } else {
                throw new \Exception('Page introuvable');
            }
		}
	}