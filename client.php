<?php
$client = new GearmanClient();
$client->addServer('gearman-server');
print $client->doNormal("reverse", "Hey Mate");
print $client->doNormal("upperCase", "High background");