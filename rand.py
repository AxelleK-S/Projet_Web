import  random

name=["wifried","michelle","akawi","axelle","victoire","yoan","etienne","random"]
sub_list=[]
random.shuffle(name)
print(name)
i=0
for i in range(len(name)):
    sub_list.append(name[i])
    if i % 2 !=0 :
        print(sub_list)
        sub_list=[]