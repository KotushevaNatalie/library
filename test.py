import mysql.connector
from mysql.connector import Error
import requests
from bs4 import BeautifulSoup as BS

def create_connection(host_name, user_name, user_password, db_name):
    connection = None
    try:
        connection = mysql.connector.connect(
            host=host_name,
            user=user_name,
            passwd=user_password,
            database=db_name
        )
        print("Connection to MySQL DB successful")

        def main():
            r = requests.get("https://znanium.com/catalog/books/theme/07")
            html = BS(r.content, 'html.parser')
            for i in range(int(html.find_all("a", "pagination__link")[-2].string)):
                r = requests.get("https://znanium.com/catalog/books/theme/07/publications?page=2&per-page={}".format(i))
                html = BS(r.content, 'html.parser')
                name = html.find('span', 'books-list__name').text
                year = html.find('div', 'creation-info__year').text
                description = html.find('span', 'books-list__descr').text
                author = html.find('ul', 'creation-info__authors').text
                type_b = html.find('div', 'books-list__edition').text

                cursor = connection.cursor
                insert_movies_query = "INSERT INTO literature( name, year,description, author, type ) VALUES (%s,%s,%s,%s,%s)"
                data_insert = ( name, year, description, author, type_b)
                with connection.cursor() as cursor:
                    cursor.execute(insert_movies_query, data_insert)
                    connection.commit()
                    print("done")


        if __name__ == '__main__':
            main()

    except Error as e:
        print(f"The error '{e}' occurred")

    return connection

connection = create_connection("std-mysql.ist.mospolytech.ru", "std_1987_strukt_proekt", "12345678", "std_1987_strukt_proekt")




