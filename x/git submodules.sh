#!/bin/bash
array=(Hydrogen Carbon Nitrogen Oxygen Copper Quartz Golden-Goose-Egg Emerald)

echo "Array size: ${#array[*]}"

echo "Array items:"
for item in ${array[*]}
do
    printf "Adding   %s\n" $item
    git submodule add https://github.com/XenGenie/$item $item
done