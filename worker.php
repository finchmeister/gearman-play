<?php
// Reverse Worker Code
$worker = new GearmanWorker();
$worker->addServer('gearman-server');
$worker->addFunction("reverse", function (GearmanJob $job) {
    return strrev($job->workload());
});
$worker->addFunction('upperCase', function (GearmanJob $job) {
    return strtoupper($job->workload());
});
while ($worker->work());