#!C:/Users/Ages/AppData/Local/Programs/Python/Python39/python
import cgi
import sys
import mysql.connector

print("Content-Type: text/html")
print()
conn = mysql.connector.connect(user='root', password='', host='localhost', database='travelday')
curr = conn.cursor()

form =  cgi.FieldStorage()

email = form.getvalue('email')
password = form.getvalue('password')

curr.execute("SELECT COUNT(*) FROM registrasi_user WHERE Email = %s AND Pass = %s", (email, password))
count = curr.fetchone()[0]

if count > 0:
    print("<meta http-equiv='refresh' content='1;url=http://localhost/projects/TravelDay/TravelDay/src/home.php'>")
    print()
else:
    print("<meta http-equiv='refresh' content='1;url=http://localhost/projects/TravelDay/TravelDay/index.php'>")
    print()

sys.exit()

curr.close()
conn.close()


