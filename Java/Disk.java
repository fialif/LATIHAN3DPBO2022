class Disk {

    private String type;
    private String capacity;
    private int price;

    Disk(){ }

    Disk(String t, String c, int p){
        this.type = t;
        this.setCapacity(c);
        this.price = p;
    }

    void setType(String t){ this.type = t; }
    String getType(){ return this.type; }
    
    public String getCapacity() {
        return capacity;
    }
    public void setCapacity(String capacity) {
        this.capacity = capacity;
    }

    public int getPrice() {
        return price;
    }

    public void setPrice(int price) {
        this.price = price;
    }
    void printDetDisk(){
        System.out.println("----------------------");
        System.out.println("Disk Type      : " + this.type);
        System.out.println("Disk Capacity  : " + this.capacity);
        System.out.println("Price          : " + this.price);
    }
}
