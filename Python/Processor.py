class Processor:

    def __init__(self, nama, price):
        self.nama = nama
        self.price = price

    def setNama(self, nama):
        self.nama = nama
    def getNama(self):
        return self.nama

    def setPrice(self, price):
        self.price = price
    def getPrice(self):
        return self.price

    def printDetProcee(self):
        print("----------------------")
        print("Processor Name : ", self.nama)
        print("Price          : ", self.price)

