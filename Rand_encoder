"""
тнιѕ ωαѕ cяєαтє ωιтн мяѕυвмιѕѕινє ιη 2018

уσυ cαη ωσяк ωιтн тнιѕ ιη уσυя cσ∂єѕ ƒσя єηcσ∂є αη∂ ∂єcσ∂єє ѕσмє тнιηgѕ

тιρ: тнιѕ ιѕ яαη∂σм єηcσ∂єѕ уσυя тєχтѕ

ιƒ уσυ єηנσу тнιѕ ρℓєαѕє ѕєє ωє gιт:

gιтнυв: https://github.com/MrSubmissive/
"""


import random # import random module
import re  # import re module

#Encode function
def random_encode(String):
    try: # Try for Manage Errors
       res = "" 
       x = 'AZFK13579azfk'
       x1 = 'BHLW02468bhlw'
       x3 = 'DUOPQXduopqx'
       a = []
       for i in String: #Get binery ascii all chr of String and add it in myarray (a)
           biner=format(ord(i),'08b')
           a.append(biner)
       # Encodeing
       for i in range(0,len(a)):
           Mystr = a[i]
           for j in range(0,len(Mystr)):
               if Mystr[j] == '1':
                   rand_num = random.randint(0,12)
                   res += Mystr[j].replace('1',x[rand_num])
               else:
                   rand_num = random.randint(0,12)
                   res += Mystr[j].replace('0',x1[rand_num])
           res += x3[random.randint(0,11)]
       return (res)
    except:
       return ("Error!")

""" String Split Function
This Function split all stings """
def str_split(string, split_length=1):
    return filter(None, re.split('(.{1,%d})' % split_length, string))

""" Decode function
This function decode all encode random_encode function text """
def random_decode(String):
    try: # Try for Manage Errors
        res = ""
        x = 'AZFK13579azfk'
        x1 = 'BHLW02468bhlw'
        x3 = 'DUOPQXduopqx'
        for i in x3:
            String = String.replace(i,'')
        for j in x:
            String = String.replace(j,'1')
        for k in x1:
            String = String.replace(k,'0')
        for k in str_split(String,8):
            res+=chr(int(k,2))
        return (res)
    except:
        return ("Error!")

#Examples How To Use?!!

#Encode Text
print ("Encode Your Text Is:" , random_encode("Hi"))
#Encode Text | print hi
print ("Decode Your Text Is:" , random_decode("L9wBk6wLQw5F23lB1Q")) 
