class Pc
{
private:
    /* data */
    int totalPrice;
    Processor pObj;
    Disk dObj;
    Ram rObj;
    
public:
    Pc(/* args */) {
    }
    Pc(Processor b, Disk d, Ram r) {
        this->pObj = b;
        this->dObj = d;
        this->rObj = r;
    }

    void setProce(Processor p) { this->pObj = p; }
    void setDisk(Disk d) { this->dObj = d; }
    void setRam(Ram r) { this->rObj = r; }


    int getTotalPrice(){
        this->totalPrice = this->pObj.getPrice() + this->dObj.getPrice() + this->rObj.getPrice();
        return this->totalPrice;
    }
    Processor getProce() { return this->pObj; }
    Disk getDisk() { return this->dObj; }
    Ram getRam() { return this->rObj; }

    void printPc(){
        cout << "Detail PC" << endl;
        this->pObj.printDetProcessor();
        this->dObj.printDetDisk();
        this->rObj.printDetRam();
        cout << "----------------------" << endl;
        cout << "Total Price    : " << getTotalPrice() << endl;
        
    }


    ~Pc() { }
};
