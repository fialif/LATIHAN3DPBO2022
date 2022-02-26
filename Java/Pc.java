class Pc {

    private int totalPrice;
    Processor pObj;
    Disk dObj;
    Ram rObj;

    Pc() { }
    Pc(Processor p, Disk d, Ram r){
        this.pObj = p;
        this.dObj = d;
        this.rObj = r;
    }


    public int getTotalPrice() {
        totalPrice = this.pObj.getPrice() + this.dObj.getPrice() + this.rObj.getPrice();
        return totalPrice;
    }
    // ganti isi methodnya
    public void setTotalPrice() {
        this.totalPrice = this.pObj.getPrice() + this.dObj.getPrice() + this.rObj.getPrice();
    }

    void printDetPc(){
        System.out.println("Detail PC");
        this.pObj.printDetProcee();
        this.dObj.printDetDisk();
        this.rObj.printDetRam();
        System.out.println("----------------------");
        System.out.println("Total Price    : " + getTotalPrice());
    }

    
}
