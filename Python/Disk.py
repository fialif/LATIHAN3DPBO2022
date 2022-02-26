class Disk:

    def __init__(self, tipe, capacity, price):
        self.type = tipe
        self.capacity = capacity
        self.price = price

    def setType(self, tipe):
        self.type = tipe
    def getType(self):
        return self.type

    def setCapacity(self, capacity):
        self.capacity = capacity
    def getCapacity(self):
        return self.capacity

    def setPrice(self, price):
        self.price = price
    def getPrice(self):
        return self.price

    def printDetDisk(self):
        print("----------------------")
        print("Disk Type      : ", self.type)
        print("Disk Name      : ", self.capacity)
        print("Price          : ", self.price)
