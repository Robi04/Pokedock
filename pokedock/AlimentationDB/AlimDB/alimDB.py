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

def getTypes():
    with open('./../types.json', 'r') as file:
        return json.load(file)
    
def getFamilies():
    with open('./fam.json', 'r') as file:
        return json.load(file)

def getRegions():
    with open('./../regions.json', 'r') as file:
        return json.load(file)

def getTiers():
    return [(1,"Weak",""),(2,"Strong",""),(3,"Legendary","")]

def getPokemons():
    with open('./../pokemons_full_details_updated_fam_chained.json', 'r') as file:
        return json.load(file)


def addUser(cursor,user):
    add_user_query = ("INSERT INTO users "
                    "(username_user,password_user,credit_user, fidelity_point_user) "
                    "VALUES (%s, %s, %s, %s)")
    cursor.execute(add_user_query, user)
    connection.commit()

def addType(cursor,type):
    add_type = ("INSERT INTO types "
                    "(id_type,label_type,path_img_type) "
                    "VALUES (%s, %s, %s)")
    cursor.execute(add_type, type,'')
    connection.commit()

def addFamily(cursor,family):
    add_family = ("INSERT INTO families "
                    "(id_family,label_family,nb_candy_family,path_img_family) "
                    "VALUES (%s, %s,%s,%s)")
    cursor.execute(add_family, family)
    connection.commit()

def addRegion(cursor,region):
    add_region = ("INSERT INTO regions "
                    "(id_region,label_region,path_img_region) "
                    "VALUES (%s, %s,%s)")
    cursor.execute(add_region, region)
    connection.commit()

def addTier(cursor,tier):
    add_tier = ("INSERT INTO tiers "
                    "(id_tier,label_tier,path_img_tier) "
                    "VALUES (%s, %s,%s)")
    cursor.execute(add_tier, tier)
    connection.commit()

def addRarity(cursor,tier):
    add_tier = ("INSERT INTO rarities "
                    "(id_rarity,label_rarity,path_img_rarity) "
                    "VALUES (%s, %s,%s)")
    cursor.execute(add_tier, tier)
    connection.commit()


def addPokemon1(cursor,pokemon):
    add_pokemon = ("INSERT INTO pokemons"
                    "(id_pokemon,name_pokemon,id_user,id_type,id_family,catched ,id_tier,id_region,path_img_pokemon,created_at,updated_at)"
                    "VALUES(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)")
    cursor.execute(add_pokemon, (pokemon['id'],pokemon['name'],1,pokemon['type_id'][0],pokemon['family_id'],False,pokemon['tier'],pokemon['region_id'],"",datetime.now(),datetime.now()))

    connection.commit()

def updatePokemonEvolution(cursor, pokemon):
    if pokemon['evolve_from'] == "" and pokemon['evolve_to'] == "":
        update_query = ("UPDATE pokemons SET id_evolve_from = %s, id_evolve_to = %s WHERE id_pokemon = %s")
        cursor.execute(update_query, (None, None, pokemon['id']))
    elif pokemon['evolve_from'] != "" and pokemon['evolve_to'] == "":
        update_query = ("UPDATE pokemons SET id_evolve_from = %s, id_evolve_to = %s WHERE id_pokemon = %s")
        cursor.execute(update_query, (pokemon['evolve_from'], None, pokemon['id']))
    elif pokemon['evolve_from'] == "" and pokemon['evolve_to'] != "":
        update_query = ("UPDATE pokemons SET id_evolve_from = %s, id_evolve_to = %s WHERE id_pokemon = %s")
        cursor.execute(update_query, (None, pokemon['evolve_to'], pokemon['id']))
    else:
        update_query = ("UPDATE pokemons SET id_evolve_from = %s, id_evolve_to = %s WHERE id_pokemon = %s")
        cursor.execute(update_query, (pokemon['evolve_from'], pokemon['evolve_to'], pokemon['id']))
    connection.commit()

if __name__=='__main__':
    connection = connectDB()
    cursor = connection.cursor()


    # Info families
    final_families = []
    families = getFamilies()
    for family in families:  
        final_families.append((family['id'],family['family'],0,''))

    # Converting to JSON format with 'id' and 'name' properties, removing the last value
    json_data = [{'id': pokemon[0], 'name': pokemon[1]} for pokemon in final_families]

    print(json_data)


    # for family in final_families:
    #     addFamily(cursor,family)


    # # Info Types
    # final_types = []
    # types = getTypes()
    # for type in types:  
    #     final_types.append((type['id'],type['name'],''))
    # for type in final_types:
    #     addType(cursor,type)


    # # Info users
    # users = [('Robin', 'root', 10, 0),('Servan', 'root', 10, 0),('Fabien', 'root', 10, 0)]
    # for user in users:
    #     addUser(cursor,user)


    # # Info Regions
    # final_regions = []
    # regions = getRegions()
    # for region in regions:
    #     final_regions.append((region['id'],region['name'],''))
    # for region in final_regions:
    #     addRegion(cursor,region)

    # ## Info Tiers
    # tiers = getTiers()
    # for tier in tiers:
    #     addTier(cursor,tier)

    # # Info Pokemons
    # pokemons = getPokemons()
    # for pokemon in pokemons:
    #     addPokemon1(cursor,pokemon)
    
    # for pokemon in pokemons:
    #     updatePokemonEvolution(cursor,pokemon)

    # # Close the connection
    cursor.close()
    connection.close()