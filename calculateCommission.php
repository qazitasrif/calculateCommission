<?php

$tuition_fee = 30000;

$commission = ($tuition_fee > 20000) ? $tuition_fee * 0.25 : 
              (($tuition_fee > 10000 && $tuition_fee < 20000) ? $tuition_fee * 0.2 : 
              (($tuition_fee > 7000 && $tuition_fee < 10000) ? $tuition_fee * 0.15 : 
              (($tuition_fee < 7000) ? "Invalid data" : 0)));
              
echo $commission;
