class Ram {

    private String capacity;
    private int price;

    Ram(){ }

    Ram(String c, int p){
        this.capacity = c;
        this.price = p;
    }
    
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

    void printDetRam(){
        System.out.println("----------------------");
        System.out.println("Ram Capacity   : " + this.capacity);
        System.out.println("Price          : " + this.price);
    }
}
