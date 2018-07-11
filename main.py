import MySQLdb

con=MySQLdb.connect("localhost","root","","tollbooth")

cur = con.cursor()

# cur.execute("insert into details(rollno,name) values(2,\"preveen\")")

cur.execute("select * from vehicletable")

for row in cur.fetchone():
    print row 

""" for row in cur.fetchall():   #Retreives all the data
    print row """

cur.close()


""" 
select * from details
insert into details(Name,RollNo) values("Jose","27")
update details set Name ="Gokul" where Rollno = 27

select Name from details where ROllno =27
     """

