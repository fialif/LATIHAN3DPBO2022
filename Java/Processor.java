class Processor {
    
    private String name;
    private int price;

    Processor(){ }
    Processor(String name, int price){
        this.name = name;
        this.price = price;
    }

    void setNama(String name){
        this.name = name;
    }
    String getNama(){
        return this.name;
    }

    void setPrice(int price){
        this.price = price;
    }
    int getPrice(){
        return this.price;
    }

    void printDetProcee(){
        System.out.println("----------------------");
        System.out.println("Processor Name : " + this.name);
        System.out.println("Price          : " + this.price);
    }
}
