#include <bits/stdc++.h>
#include <string>

using namespace std;

#include "Processor.cpp"
#include "Disk.cpp"
#include "Ram.cpp"
#include "Pc.cpp"

int main(){
    Processor proceObj("Sata", 150);
    Disk d1("SSD", "500 GB", 150);
    Ram r1("16 GB", 400);
    Pc pcO(proceObj, d1, r1);

    pcO.printPc();



    return 0;
}