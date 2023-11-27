import mysql.connector

def connectDB():
    connection = mysql.connector.connect(
        host="127.0.0.1",
        user="root",
        password="root",
        database="pokedock"
    )
    return connection

def addUser(cursor,user):
    cursor.execute(add_user_query, user)
    connection.commit()


if __name__=='__main__':

    connection = connectDB()
    cursor = connection.cursor()

    add_user_query = ("INSERT INTO users "
                    "(username_user,password_user,credit_user, fidelity_point_user) "
                    "VALUES (%s, %s, %s, %s)")

    # Info users
    users = [('Robin', 'root', 10, 0),('Servan', 'root', 10, 0),('Fabien', 'root', 10, 0)]
    for user in users:
        addUser(cursor,user)

   

    # Close the connection
    cursor.close()
    connection.close()