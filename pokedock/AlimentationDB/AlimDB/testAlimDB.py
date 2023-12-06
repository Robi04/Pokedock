import mysql.connector
import json
from datetime import datetime


def connectDB():
    connection = mysql.connector.connect(
        host="127.0.0.1",
        user="root",
        password="root",
        database="pokedock"
    )
    return connection

def getPokemons():
    with open('./../pokemons_full_details_updated_fam_chained.json', 'r') as file:
        return json.load(file)


def addPokemon(cursor,pokemon):
    add_pokemon = ("INSERT INTO pokemons"
                    "(id_pokemon,name_pokemon,id_user,id_type,id_family,catched ,id_tier,id_region,path_img_pokemon,created_at,updated_at)"
                    "VALUES(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)")
    cursor.execute(add_pokemon, (pokemon['id'],pokemon['name'],1,pokemon['type_id'][0],pokemon['family_id'],False,pokemon['tier'],pokemon['region_id'],"",datetime.now(),datetime.now()))

    connection.commit()
    

if __name__=='__main__':
    connection = connectDB()
    cursor = connection.cursor()

    fam = []
    # Info Pokemons
    pokemons = getPokemons()
    for pokemon in pokemons:
        addPokemon(cursor,pokemon)



  # Close the connection
    cursor.close()
    connection.close()