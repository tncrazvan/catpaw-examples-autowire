#!/bin/bash
let count=0
while [ 1 ]
do
#asd
php ./scripts/start.php dev 100 $count
((count++))
done
