class Disk
{
    private:
        /* data */
        string type;
        string capacity;
        int price;

    public:
        Disk(/* args */) {
        }
        Disk(string d, string m, int y) {
            this->type = d;
            this->capacity = m;
            this->price = y;
        }

        void setType(string d) { this->type = d; }
        void setCapacity(string m) { this->capacity = m; }
        void setPrice(int y) { this->price = y; }

        string getType() { return this->type; }
        string getCapacity() { return this->capacity; }
        int getPrice() { return this->price; }

        void printDetDisk() {
            cout << "----------------------" << endl;
            cout << "Disk Type      : " << this->type << endl;
            cout << "Disk Capacity  : " << this->capacity << endl;
            cout << "Price          : " << this->price << endl;
        }

        ~Disk() {
        }
};
