#!/bin/bash
array=(Hydrogen Carbon Nitrogen Oxygen Copper Quartz Golden-Goose-Egg Emerald)

echo "Array size: ${#array[*]}"

echo "Array items:"

cd ../

for item in ${array[*]}
do

    printf "Adding   %s\n" $item
    git submodule add https://github.com/XenGenie/$item x/$item 
    
    printf "Init Modules   %s\n" $item
    cd x/

    cd $item/
    ./git\ submodules.sh
    git pull
    cd ../../
done