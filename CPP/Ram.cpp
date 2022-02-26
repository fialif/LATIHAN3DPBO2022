class Ram
{
    private:
        /* data */
        string capacity;
        int price;

    public:
        Ram(/* args */) {
        }
        Ram(string m, int y) {
            this->capacity = m;
            this->price = y;
        }

        void setCapacity(string m) { this->capacity = m; }
        void setPrice(int y) { this->price = y; }

        string getCapacity() { return this->capacity; }
        int getPrice() { return this->price; }

        void printDetRam() {
            cout << "----------------------" << endl;
            cout << "Ram Capacity   : " << this->capacity << endl;
            cout << "Price          : " << this->price << endl;
        }

        ~Ram() {
        }
};
