class Processor
{
    private:
        /* data */
        string name;
        int price;

    public:
        Processor(/* args */) { }
        Processor(string n, int p) { 
            this->name = n;
            this->price = p;
        }

        void setName(string n) { this->name = n; }
        void setprice(int p) { this->price = p; }

        string getName() { return this->name; }
        int getPrice() { return this->price; }

        void printDetProcessor(){
            cout << "----------------------" << endl;
            cout << "Processor Name : " << this->name << endl;
            cout << "Price          : " << this->price << endl;
        }

        ~Processor(){ }
};
