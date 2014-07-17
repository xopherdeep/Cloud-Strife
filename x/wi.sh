#!/bin/bash
# echo "Choose a Suite: Carbon, Nitrogen, Oxygen, Copper, Quartz, Golden-Goose-Egg, Emerald"
# read -p "Type to Install: " answer

# array=(Hydrogen Carbon Nitrogen Oxygen Copper Quartz Golden-Goose-Egg Emerald)
array=(Hydrogen $SUITE)

cd ../

for item in ${array[*]}
do

    printf "Cloning %s\n" $item
    git rm -rf --cached x/$item 
    rm x/$item -r
    git submodule add --force https://github.com/XenGenie/$item x/$item 
    printf "%s Clone Complete \n" $item

        
    # git pull origin master
    printf "Cloning Xtras %s\n" $item
    cd x/
    cd $item/
    ./gitsub.sh
    cd ../../

done
