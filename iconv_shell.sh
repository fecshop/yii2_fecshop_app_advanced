#!/bin/bash

for file in `find ./ -name '*.php'`; do
  
  echo "$file"
  
 # iconv -f gb2312 -t utf8 -o $file $file
  enca -L zh_CN -x UTF-8 $file  
done
