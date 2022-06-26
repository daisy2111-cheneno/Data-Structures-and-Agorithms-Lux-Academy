#!/bin/python3

import math
import os
import random
import re
import sys

#
# Complete the 'compareTriplets' function below.
#
# The function is expected to return an INTEGER_ARRAY.
# The function accepts following parameters:
#  1. INTEGER_ARRAY a
#  2. INTEGER_ARRAY b
#

def compareTriplets(a, b):
    # Write your code here
    aAward = 0
    bAward =0
    
    for i in range(0,3):
        if(a[i]>b[i]):
            aAward += 1
        if (a[i]<b[i]):
            bAward += 1
    
    return [aAward,bAward]       