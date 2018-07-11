
'''Serial comm'''
import MySQLdb
import serial
import time
obj= serial.Serial('COM5',9600)
time.sleep(2)



while(1):
	
	
	# obj.write("hello\n")
	checkvalue=0
	
	con=MySQLdb.connect("localhost","root","","tollbooth")
	cur = con.cursor()
	countcur = con.cursor()
	balancecur = con.cursor()
	checkcur = con.cursor()

	
	# while obj.isOpen():
	x=obj.readline()
	time.sleep(1)
	print x
	countcur.execute("select * from `current`")
	print countcur.rowcount
	zerocheck = countcur.rowcount

	if(zerocheck==0):
		cur.execute("insert into `current`(`rfidno`) values('%s')"%x[0:12])
		con.commit()
		flag=1
		print "rfid saved to table current"
	else:
		print "overflow"


	# balancecur.execute("select * from `balance`")	
	balancecur.execute("select balance from vehicletable where rfidno=('%s')"%x[0:12])	
	for row in balancecur.fetchall():
		print row[0]
	val=int(row[0])
	rowval=str(row[0])
	obj.write("Balance: "+rowval)	
	


	while(checkvalue==0):
		con=MySQLdb.connect("localhost","root","","tollbooth")
		checkcur = con.cursor()
		checkcur.execute("select fval from flag")	
		fval = checkcur.fetchone()
		checkvalue=fval[0]
		# print checkvalue


	time.sleep(3)
	balancecur = con.cursor()	
	balancecur.execute("select balance from vehicletable where rfidno=('%s')"%x[0:12])	
	for row in balancecur.fetchall():
		print row[0]
	# val=int(row[0])
	
	rowval=str(row[0])
	obj.write("New Balance: "+rowval)
	


		

		
	


	

cur.close()
obj.close()

		


 
