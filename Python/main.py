from Pc import Pc
from Processor import Processor
from Disk import Disk
from Ram import Ram

p1 = Processor("Akua", 150)
d1 = Disk("SSD", "500 GB", 150)
r1 = Ram("16 GB", 400)

pc1 = Pc(p1, d1, r1)

pc1.printIni()
# print(pc1.getTotalPrice())