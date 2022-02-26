class Pc:

    def __init__(self, p, d, r):
        self.objProcee = p
        self.objDisk = d
        self.objRam = r
        self.totalPrice = self.objProcee.getPrice() + d.getPrice() + r.getPrice()

    def getTotalPrice(self):
        return self.totalPrice

    def printIni(self):
        print("----------------------")
        print("Detail PC")
        self.objProcee.printDetProcee()
        self.objDisk.printDetDisk()
        self.objRam.printDetRam()
        print("----------------------")
        print("Total Price    : ", self.totalPrice)
