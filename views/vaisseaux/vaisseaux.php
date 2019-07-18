<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vaisseaux</title>
</head>
<body>
<pre>
<?php //print_r($cost_in_creditsASC); ?>
<?php //print_r($cost_in_creditsDESC); ?>
</pre>
<h1>Vaisseaux</h1>
<h2>Nombre de vaisseaux :</h2>
<p><?= $nbVaisseaux; ?></p>
<h2>Liste des vaisseaux :</h2>
<?php if($tri == 'desc') { ?>
    <a href="/vaisseaux/asc">Trier du - cher au + cher</a>
<?php } elseif($tri == 'asc') { ?>
    <a href="/vaisseaux/desc">Trier du + cher au - cher</a>
<?php } ?>
<ol>
    <?php if($tri == 'asc') { ?>
        <?php foreach($cost_in_creditsASC as $key => $value) { ?>
            <li><?= $key; ?> - <?= $value['cost']; ?> crédits
                <ul>
                    <?php foreach($value['pilots'] as $pilot) { ?>
                        <li><?= $this->vaisseauxManager->getNamePilots($pilot); ?></li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    <?php } else { ?>
        <?php foreach($cost_in_creditsDESC as $key => $value) { ?>
            <li><?= $key; ?> - <?= $value['cost']; ?> crédits
                <ul>
                    <?php foreach($value['pilots'] as $pilot) { ?>
                        <li><?= $this->vaisseauxManager->getNamePilots($pilot); ?></li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    <?php } ?>
</ol>
</body>
</html>