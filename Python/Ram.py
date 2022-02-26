class Ram:

    def __init__(self, capacity, price):
        self.capacity = capacity
        self.price = price

    def setCapacity(self, capacity):
        self.capacity = capacity
    def getCapacity(self):
        return self.capacity

    def setPrice(self, price):
        self.price = price
    def getPrice(self):
        return self.price

    def printDetRam(self):
        print("----------------------")
        print("Ram Capacity   : ", self.capacity)
        print("Price          : ", self.price)