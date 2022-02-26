class Main {

    public static void main(String[] args) {
        Processor prcObj = new Processor("Sata", 150);
        Disk d1 = new Disk("SSD", "500 GB", 150);
        Ram r1 = new Ram("16 GB", 400);

        Pc pc1 = new Pc(prcObj, d1, r1);

        pc1.printDetPc();
    }
    
}

/*
Detail PC
----------------------
Processor Name :
Price          :
----------------------
Disk Name      :
Price          :
----------------------
Capacity Ram   :
Price          :
----------------------
Total Price    :
*/ 
